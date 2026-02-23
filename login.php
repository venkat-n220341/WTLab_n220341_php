<?php
/*  MONGODB CONNECTION  */
require_once 'db_config.php';

/*  LOGIN VALIDATION FUNCTION  */
function validateLogin($usersCollection) {

  /* Local variables */
  $email    = (string) $_POST['email'];
  $password = (string) $_POST['password'];
  $valid    = false; // boolean

  try {
    // Query MongoDB for user with matching email and password
    $user = $usersCollection->findOne([
      'email' => $email,
      'password' => $password
    ]);

    if ($user !== null) {
      // Login successful
      $_SESSION['user_id'] = (string) $user['_id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      
      header("Location: index.html");
      exit();
    } else {
      print "Invalid Email or Password";
    }
  } catch (\Exception $e) {
    die("Login Error: " . $e->getMessage());
  }

  return $valid;
}

/* EXECUTION  */
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  validateLogin($usersCollection);
}
?>
