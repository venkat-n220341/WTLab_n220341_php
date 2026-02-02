<?php
/*  GLOBAL DB CONNECTION */
$conn = mysqli_connect("localhost", "root", "", "usedb");

if (!$conn) {
  die("Database connection failed");
}

/*  LOGIN VALIDATION FUNCTION  */
function validateLogin($conn) {

  /* Local variables */
  $email    = (string) $_POST['email'];
  $password = (string) $_POST['password'];
  $valid    = false; // boolean

  $query = "SELECT * FROM php_verification
            WHERE email='$email' AND password='$password'";

  $result = mysqli_query($conn, $query);

  /* die() if query fails */
  if (!$result) {
    die("Query execution failed");
  }

  if (mysqli_num_rows($result) == 1) {
    header("Location: index.html");
  } else {
    print "Invalid Email or Password";
  }

  return $valid;
}

/* EXECUTION  */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  validateLogin($conn);
}

mysqli_close($conn);
?>
