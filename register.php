<?php
/*  MONGODB CONNECTION  */
require_once 'db_config.php';

/*FUNCTION WITH LOCAL VARIABLES */
function registerUser($usersCollection) {

  /* static variable */
  static $count = 0;
  $count++;

  /* Datatypes */
  $username = (string) $_POST['username']; // string
  $email    = (string) $_POST['email'];    // string
  $password = (string) $_POST['password']; // string
  $success  = false;                       // boolean

  try {
    // Check if email already exists
    $existingUser = $usersCollection->findOne(['email' => $email]);
    
    if ($existingUser !== null) {
      print "Registration Failed (Email already exists)";
      return $success;
    }

    // Insert new user into MongoDB
    $result = $usersCollection->insertOne([
      'username' => $username,
      'email' => $email,
      'password' => $password,
      'created_at' => new \MongoDB\BSON\UTCDateTime(time() * 1000)
    ]);

    if ($result->getInsertedId()) {
      echo "Registration Successful<br>";
      echo "User ID: " . $result->getInsertedId() . "<br>";
      echo "Registrations in this session: $count";
      
      // Redirect to login after 2 seconds
      header("refresh:2;url=login.html");
    } else {
      print "Registration Failed";
    }
  } catch (\Exception $e) {
    die("Registration Error: " . $e->getMessage());
  }

  return $success;
}

session_start();
registerUser($usersCollection);
?>
