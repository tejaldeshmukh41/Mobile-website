<?php
$pdo = new pdo("mysql:host=localhost;dbname=feedback;","root","");
session_start();
$full_name = $_POST['full-name'];
$email = $_POST['email'];
$message = $_POST['message'];
$insert = $pdo->prepare("insert into mobile(name,email,message) values (:name,:email,:message)");
$insert->bindParam(name,$full_name);
$insert->bindParam(email,$email);
$insert->bindParam(message,$message);
$insert->execute();
header('location:index.html');
?>
