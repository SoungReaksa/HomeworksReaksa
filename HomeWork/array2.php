<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffffff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        input[type="text"], input[type="submit"], input[type="reset"], button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"] {
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="reset"]:hover {
            background-color: #d32f2f;
        }

        button.clear-results {
            background-color: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
        }

        button.clear-results:hover {
            background-color: #1976D2;
        }

        h2, h3 {
            color: #333;
        }

        .results {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>String Manipulation Tool</h2>
        <form method="post">
            <label>Enter a string:</label><br>
            <input type="text" name="input_string"><br>
            <label>Word to replace (optional):</label><br>
            <input type="text" name="search_word"><br>
            <label>Replace with (optional):</label><br>
            <input type="text" name="replace_word"><br>
            <input type="submit" value="Process">
            <input type="reset" value="Clear Form">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["input_string"];
            $search = $_POST["search_word"];
            $replace = $_POST["replace_word"];

            echo "<div class='results' id='results'>";
            echo "<h3>Results:</h3>";
            echo "Length: " . strlen($input) . "<br>";
            echo "Uppercase: " . strtoupper($input) . "<br>";
            echo "Lowercase: " . strtolower($input) . "<br>";
            echo "First 5 characters: " . substr($input, 0, 5) . "<br>";

            if (!empty($search) && !empty($replace)) {
                echo "After replacement: " . str_replace($search, $replace, $input) . "<br>";
            }

            $pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
            if (preg_match_all($pattern, $input, $matches)) {
                echo "Email(s) found: " . implode(", ", $matches[0]) . "<br>";
            } else {
                echo "No email found.<br>";
            }

            // ប៊ូតុង Clear Results
            echo "<button class='clear-results' onclick='clearResults()'>Clear Results</button>";
            echo "</div>";
        }
        ?>
    </div>

    <script>
        function clearResults() {
            const resultDiv = document.getElementById('results');
            if (resultDiv) {
                resultDiv.remove(); // លុប div.results ចោល
            }
        }
    </script>
</body>
</html>
