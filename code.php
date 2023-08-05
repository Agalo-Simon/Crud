<?php
session_start();
include "config.php";

// code to delete the records================================================================
if (isset($_POST['delete'])) {
  $users_id = mysqli_real_escape_string($conn, $_POST['delete']);
  
  $query = "DELETE FROM users WHERE id='$users_id'";

  $query_run = mysqli_query($conn, $query);
  if($query_run) {
    $_SESSION['message']= "Record Delete successfully!";
    header("Location: index.php");
    exit(0);
  }
  else {
    $_SESSION['message']= "Record Not Delete!";
    header("Location: index.php");
    exit(0);

  }
}



// code to update the records================================================================
if (isset($_POST['update'])) {
  $users_id = mysqli_real_escape_string($conn, $_POST['users_id']);
  $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $gendar = mysqli_real_escape_string($conn, $_POST['gendar']);

  $query = "UPDATE users SET fname='$firstname',lname = '$lastname', email= '$email', gendar ='$gendar' WHERE id='$users_id'";

  $query_run = mysqli_query($conn, $query);
  if($query_run) {
    $_SESSION['message']= "Record updated successfully!";
    header("Location: index.php");
    exit(0);
  }
  else {
    $_SESSION['message']= "Record Not Updated!";
    header("Location: index.php");
    exit(0);

  }
}


// code to insert the records============================================================
if (isset($_POST['submit'])) {
  $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $hash = password_hash('password',PASSWORD_DEFAULT );
  $gendar = mysqli_real_escape_string($conn, $_POST['gendar']);

  $query = "INSERT INTO users (fname,lname, email, password, gendar) VALUES ('$firstname', '$lastname','$email', '$hash', '$gendar')";

  $query_run = mysqli_query($conn, $query);
  if($query_run) {
    $_SESSION['message']= "New record created successfully!";
    header("Location: create.php");
    exit(0);
  }
  else {
    $_SESSION['message']= "New record Not created!";
    header("Location: create.php");
    exit(0);

  }
}
