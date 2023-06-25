<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database123";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the provided credentials are valid
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
  // Login successful
  echo "Login successful!";
} else {
  // Login failed
  echo "Invalid username or password.";
}

// Close the database connection
mysqli_close($conn);
?>
