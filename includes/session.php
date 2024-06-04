<?php
if (session_id() === "")
    session_start();
$user_id = $_SESSION['user_id'];


if (!$user_id) {
    header("location: login.php");
}
