<?php 

session_start();

require "dbh.php";

if (isset($_POST['login-user'])){
    
    $email = filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $regex = "^(?=.*?[A-Z])(?=.*?[0-9]).{8,}$^";
    
    if (!empty($email) && !empty($password)) {
        if ($email == 'admin@project2.com') {
            $stmt = $conn->query("SELECT * FROM engine.users WHERE email='admin@project2.com' AND password='password123'");
            // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $_SESSION['admin'] = $email;

            header("Location:home.php?usertype=adminsuccessful");

        } else if (preg_match($regex,$password)) {
            $stmt1 = $conn->query("SELECT * FROM engine.users WHERE email=$email AND password=$password");
        // $results1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['user'] = $email;
            
            header("Location:home.php?usertype=usersuccessful");

        
        } else {
        echo "password must be 8 characters long, one uppercase, atleast one letter, one number";
         }
}
}