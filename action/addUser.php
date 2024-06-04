<?php
session_start();
include_once '../includes/connection.php';


if (isset($_POST["signupBtn"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = md5($_POST["pwd"]);
    $apiError = '';
    try {
        $sql = "SELECT * from user WHERE email='$email'";
        $result = $con->query($sql);

        if ($result->rowCount() > 0) {
            $apiError = 'User with this email already exists.';
            $_SESSION['apiError'] = $apiError;
            header("Location: ../register.php");
            exit;
        } else {
            $sql = "INSERT INTO user (password, first_name, last_name, email, phone) VALUES(:password,:first_name,:last_name,:email,:phone)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':password', $pwd);
            $stmt->bindParam(':first_name', $fname);
            $stmt->bindParam(':last_name', $lname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone); 
            $stmt->execute();

            $sql = "SELECT * from user WHERE email='$email' AND password='$pwd' ";
            $result = $con->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch()) {
                    $_SESSION['userId'] = $row['user_id'];
                    header("location: ../loggedIndex.php");
                }
            }
        }
    } catch (PDOException $e) {
        die("Error: Could not run the query. " . $e->getMessage());
    }
}
