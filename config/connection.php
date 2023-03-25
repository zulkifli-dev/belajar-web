<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  try {
    $conn = new PDO("mysql:host=$servername;dbname=db_project_crud", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully";
  } catch (PDOException $th) {
    echo "Connection failed: " . $th->getMessage();
  }
?>