<?php
/*  GLOBAL VARIABLE  */
$conn = mysqli_connect("localhost", "root", "", "usedb");

/* die() → stop execution if DB fails */
if (!$conn) {
  die("Database connection failed");
}

/*FUNCTION WITH LOCAL VARIABLES */
function registerUser($conn) {

  /* static variable */
  static $count = 0;
  $count++;

  /* Datatypes */
  $username = (string) $_POST['username']; // string
  $email    = (string) $_POST['email'];    // string
  $password = (string) $_POST['password']; // string
  $success  = false;                       // boolean
  echo $username;

  $query = "INSERT INTO php_verification (username, email, password)
            VALUES ('$username', '$email', '$password')";

  if (mysqli_query($conn, $query)) {
    // $success = true;
    // print "Registration Successful<br>";
    // print "Registrations in this request: $count";
    header("Location: login.html");
  } else {
    print "Registration Failed (Email may already exist)";
  }
}
registerUser($conn);
mysqli_close($conn);
?>
