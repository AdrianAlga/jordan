<?php
function koneksi()
{
      $servername = "localhost";
      $databasename = "dbsepatu";
      $username = "root";
      $password = "";
      
      // Create connection
      $conn = new mysqli($servername,  $username, $password, $databasename);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
      return $conn;
}