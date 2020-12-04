<?php
session_start();

require 'dbh.php';

if (isset($_POST['add-user'])){
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['emailAddress'];
    $password = $_POST['password'];

    $stmt = $conn->query("INSERT INTO engine.users (firstname,lastname,password,email) 
    VALUES('$f_name','$l_name','$password','$email')");
    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['email'] = $email;

    header("Location:index.php?user=loginsuccessful");
}