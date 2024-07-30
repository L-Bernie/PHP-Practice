<?php
session_start();
include 'connection.php';    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Pratice</title>
</head>
<body>
        <div class="status">
            <div class="status-form">
                <h1>Check Connection</h1>
            </div>
        </div>

        <div class="response">
            <h5><?php 
               echo $success . "<br>"; 

               if (isset($_SESSION['success_message'])) {
                echo $_SESSION['success_message'] ;
                unset($_SESSION['success_message']);
                
               } elseif (isset($_SESSION['error_message'])) {
                echo $_SESSION['error_message'] ;
                unset($_SESSION['error_message']);
               } 
            ?></h5>
        </div>

        <form id="contact-form" action="CRUD.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
        </form>
</body>
</html>