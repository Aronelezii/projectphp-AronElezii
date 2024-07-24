<?php
session_start();
include_once('config.php'); // Ensure this file establishes the $conn variable

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $Cpassword = $_POST['Cpassword'];
    
    if(empty($name) || empty($email) || empty($password) || empty($Cpassword) || empty($username)){
        echo "Please go back and fill out all the required fields";
    } else {
        // Insert the user into the database
        $sql = "INSERT INTO quiz (name, username, email, password, is_admin) VALUES (:name, :username, :email, :password, '')";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);
        
        if ($insertSql->execute()) {
            header('Location: index.php');
        } else {
            echo "Error inserting user.";
        }
    }
}


?>
