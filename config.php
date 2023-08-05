<?php

$conn = mysqli_connect("localhost", "root", "", "mycrud");
if(!$conn){
  die("Connection Failed: " . mysqli_connect_error()); 
}