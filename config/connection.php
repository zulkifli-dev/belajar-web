<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_project_crud";
  $conn = mysqli_connect($servername, $username, $password);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }else{
    // create db
    $sql = "CREATE DATABASE IF NOT EXISTS db_project_crud";
    if ($conn->query($sql) === FALSE) {
      echo "Database created failed";
    }
  }

  //connect to db
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //create table
  $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    alamat VARCHAR(255) NOT NULL
  )";
  if ($conn->query($sql) === FALSE) {
    echo "Table users created failed";
  }
 
?>