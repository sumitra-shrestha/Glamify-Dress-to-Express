<?php
session_start();
include_once '../includes/connection.php';

if (isset($_POST["loginBtn"])) {
    $email = $_POST["email"];
    $pwd = md5($_POST["pwd"]);

    try {
        $_SESSION['error'] = '';
        $sql = "SELECT * from user WHERE email='$email' AND password='$pwd' ";
        $result = $con->query($sql);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $_SESSION['user_id'] = $row['user_id'];              
                    header("location: ../index.php");
                
            }

        } else {
            $_SESSION['error'] = '*Invalid username or password!';
            header("location: ../login.php");
        }
    } catch (PDOException $e) {
        die("Error: Could not run the query. " . $e->getMessage());
    }
}
