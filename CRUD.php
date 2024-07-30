<?php
    session_start();
    include 'connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars($_POST['message']);

        $sql = "insert into practice (name, email, message) values ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['success_message'] = "Created Successfully";

        } else {
            $_SESSION['error_message'] = "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);

        header("Location: index.php?status=$status&message=" . urlencode($msg));
        exit();
        

    } else {
        
    }
    
?>