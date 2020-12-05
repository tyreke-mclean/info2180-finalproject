<?php
session_start();

require 'dbh.php';

if (isset($_POST['add-user'])){
    $f_name = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
    $l_name = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $regex = "^(?=.*?[A-Z])(?=.*?[0-9]).{8,}$^";

    if (!empty($f_name) && !empty($l_name) && !empty($password) && !empty($email)) {
        if (preg_match($regex,$password)) {
            
          
        $stmt1 = $conn->query("INSERT INTO engine.users (firstname,lastname,password,email) 
        VALUES('$f_name','$l_name','$password','$email')");
        //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $_SESSION['email'] = $email;

        header("Location:home.php?user=addsuccessful");
            

    } else {
        echo "Password must be 8 characters long, one uppercase, atleast one letter, one number";
    }
} else {
    echo "Fields cannot be empty";
}
}