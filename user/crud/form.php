<?php
require "Function.php";

?>

<!DOCTYPE html>
<html lang="en">
      <head>
      </head>
      <body>
<div class="Form">
        <H1>Feedback Form</H1>
        <FORM action="" method="post">
            <input type="text" name="Product">
            <input type="number" name="Angka">
            <input type="number" name="Total">
            <button type="submit"name="kirim">
                  Silakan Kirim
            </button>
        </FORM>
        <?php 
        if (isset($_POST['kirim'])){
            Create($_POST['Product'], $_POST['Angka'], $_POST['Total']);
            
        }
        ?>
    </div>
    <div class="upload">
      <?php 
      
      foreach (read()as $data){
            echo $data['nama'];
            
      }
?>

    </div>
    </body>