<?php
// Accessing GET data
if (isset($_GET['query'])) {
  $query = $_GET['query'];
  echo "Search query: " . htmlspecialchars($query);
}

// Accessing POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
   $phone = $_POST['phone'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  echo "Username: " . htmlspecialchars($username);
  echo "Email: " . htmlspecialchars($email);
  echo "Phone: " . htmlspecialchars($phone);
  echo "Password: " . htmlspecialchars($password);
  echo "Gender: " . htmlspecialchars($gender);
  
}
?>