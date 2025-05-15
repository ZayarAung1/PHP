<?php


?>
  <!DOCTYPE html>
     <html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Form lesson</title>
     </head>
     <body>
          <h1 align = "center"> Student Registration</h1>
     <form action="form.php" method="get" align ="center">
        
          <label for="name">Name</label>
          <input type="text" name="name">
           <br><br>
          <label for="email">Email</label>
          <input type="email" name="email">
          <br><br>
          <label for="phone">Phone</label>
          <input type="number" name="phone">
          <br><br>
     
           
          <button type="submit">Submit</button>

          
          
     </form>
     </body>
     </html>

     <?php
     if (isset($_GET['name'])){
          $name = $_GET['name'];
          $name = $_GET['email'];
          echo "name; $name";
          echo "email; $email";
          echo "<br>";
     }
     ?>

     <?php 
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_POST["name"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];
          echo "Name: $name<br>";
          echo "Emiai: $email<br>";
          echo "Phone: $phone<br>";

     }else{
          echo "No data submitted.";
     }

     ?>
