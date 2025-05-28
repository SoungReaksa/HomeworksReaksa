<?php
// Array to hold inventory items (stored in session for demo purposes)
session_start();
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [];
}

if (isset($_POST['reset'])) {
    $_SESSION['inventory'] = [];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$inventory = &$_SESSION['inventory'];

// Function to add a new item
function addItem(&$inventory, $name, $price, $quantity) {
    foreach ($inventory as &$item) {
        if ($item['name'] === $name) {
            // If item exists, update quantity
            $item['quantity'] += $quantity;
            return;
        }
    }
    // If new item
    $inventory[] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    ];
}

// Function to update quantity
function updateStock(&$inventory, $name, $newQty) {
    foreach ($inventory as &$item) {
        if ($item['name'] === $name) {
            $item['quantity'] = $newQty;
            return;
        }
    }
}

// Function to calculate total stock value
function calculateTotalValue($inventory) {
    $total = 0;
    foreach ($inventory as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Function to get low stock items (<5)
function getLowStockItems($inventory) {
    $low = [];
    foreach ($inventory as $item) {
        if ($item['quantity'] < 5) {
            $low[] = $item;
        }
    }
    return $low;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $price = floatval($_POST['price']);
    $quantity = intval($_POST['quantity']);

    if ($name && $price > 0 && $quantity >= 0) {
        addItem($inventory, $name, $price, $quantity);
    }
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>កម្មវិធីគ្រប់គ្រងសារពើភណ្ឌទំនិញ</title>
    <style>
        body {
            font-family: "Khmer OS Battambang", Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-bottom: 20px;
            justify-self: center;


        }
        input, button {
            padding: 5px;
            margin-right: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #999;
            text-align: left;
        }
        .low-stock {
            background-color: #ffdddd;

        }
        .normal-stock {
            background-color: #ddffdd;
            justify-self: center;

        }
                .total {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            width: 100%;
            display: block;
            margin
        }


        h2{
            justify-self: center;
        }
    </style>
</head>
<body>

<h2>បញ្ចូលព័ត៌មានទំនិញ</h2>
<form method="POST">
    <label>ឈ្មោះទំនិញ : </label> 
    <input type="text" name="name" required><br><br>
    <label>តម្លៃទំនិញ :</label> 
    <input type="number" step="0.01" name="price" required> <br><br>
    <label>ចំនួនទំនិញ :</label> 
    <input type="number" name="quantity" required>
    <button type="submit">គិតលុយ</button>
</form>

<h2>តារាងទំនិញ</h2>
<?php if (!empty($inventory)): ?> <br>
<table>
    <tr>
        <th>ឈ្មោះទំនិញ</th> 
        <th>តម្លៃ ($)</th>
        <th>ចំនួនក្នុងស្តុក</th>
        <th>តម្លៃសរុប</th>
    </tr>
    <?php foreach ($inventory as $item): 
        $rowClass = $item['quantity'] < 5 ? 'low-stock' : 'normal-stock';
        $itemTotal = $item['price'] * $item['quantity'];
    ?>
    <tr class="<?= $rowClass ?>">
        <td><?= htmlspecialchars($item['name']) ?></td>
        <td><?= number_format($item['price'], 2) ?></td>
        <td><?= $item['quantity'] ?></td>
        <td><?= number_format($itemTotal, 2) ?></td>
    </tr>
    <?php endforeach; ?> 
</table>
<div class="total">
    <marquee behavior="scroll" direction="left">
        ✅ តម្លៃសរុបនៃទំនិញទាំងអស់: <strong>$<?= number_format(calculateTotalValue($inventory), 2) ?></strong>
    </marquee>
</div>
<div class="total">
    <marquee behavior="scroll" direction="right">
        ✅ តម្លៃសរុបនៃទំនិញទាំងអស់: <strong>$<?= number_format(calculateTotalValue($inventory), 2) ?></strong>
    </marquee>
</div>
<div class="total">
    ✅ តម្លៃសរុបនៃទំនិញទាំងអស់: <strong>$<?= number_format(calculateTotalValue($inventory), 2) ?></strong>
</div>
<?php else: ?>
<p>មិនទាន់មានទំនិញណាមួយនៅក្នុងសារពើភណ្ឌទេ។</p>
<?php endif; ?> <br><br>
<form method="POST" style="margin-top: 10px;">
    <button type="submit" name="reset" onclick="return confirm('តើអ្នកប្រាកដជាចង់លុបទាំងអស់មែនទេ?');">🗑️ លុបទំនិញទាំងអស់</button>
    <button type="button" onclick="history.back();">⬅️ ត្រឡប់ក្រោយ</button>
</form>



</body>
</html>
