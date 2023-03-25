<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_project_crud";


  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully";
  } catch (PDOException $th) {
    echo "Connection failed: " . $th->getMessage();
  }
?>