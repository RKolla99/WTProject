<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$usernameerror = "";
$emailerror = "";
$passwordmatcherror = "";
$passwordemailerror = "";
$passwordmatcherror1 = "";

// connect to the database
$db = mysqli_connect('localhost', 'username', 'password', 'wtproject');

// REGISTER USER
if (isset($_POST['sub'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['psw'];
  $password_2 = $_POST['psw-repeat'];


  // form validation: ensure that the form is correctly filled ...
  if ($password_1 != $password_2) {
	$passwordmatcherror = "The two passwords do not match";
  }

  

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
        $usernameerror = "Username already exists!";
    }

    if ($user['email'] === $email) {
        $emailerror = "An account already exists with this email!";
    }
  }

  // Finally, register user if there are no errors in the form
  if ((!$usernameerror) && (!$emailerror) && (!$passwordmatcherror)) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email, password)VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

//LOGIN User
if(isset($_POST['login'])) {
  $username = $_POST['unamel'];
  $password = $_POST['pswl'];

  $password = md5($password);
  $query = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: home.php');
  } else {
    $passwordemailerror = "Password does not match with the email";
  }
}
