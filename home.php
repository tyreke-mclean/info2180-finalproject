<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>INFO2180 Project 2</title>
 <link rel="stylesheet" href="styles.css">
 <script src="script.js"></script>
 <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    
    <div class="container">
        <img src="Antivirus.png" alt="Icon of a computer bug" width="50" height="50" />
        <h1><div id="box1" class="flex-item">BugMe Issue Tracker</div></h1>
    
    </div>
    </header>
    
    <aside>
        <?php
        if (isset($_SESSION['admin'])) {

       echo  '<div class="menu">
            
            <a href="home.php" class="menuButton"><i class="fas fa-home"></i>Home </a>
            <br>
            <br>
            <a href="newuser.php" class="menuButton"><i class="fas fa-user-plus"></i>Add User </a>
            <br>
            <br>
            <a href="newissue.php" class="menuButton"><i class="fas fa-plus-circle"></i> New Issue </a>
            <br>
            <br>
            <a href="logout.php" class="menuButton"><i class="fas fa-sign-out-alt"></i> Logout </a>
            
        </div>'; 
        } else if (isset($_SESSION['user'])) {
            echo  '<div class="menu">
            
            <a href="home.php" class="menuButton"><i class="fas fa-home"></i>Home </a>
            <br>
            <br>
            <a href="newissue.php" class="menuButton"><i class="fas fa-plus-circle"></i> New Issue </a>
            <br>
            <br>
            <a href="logout.php" class="menuButton"><i class="fas fa-sign-out-alt"></i> Logout </a>
            
        </div>'; 
        } else {
            echo  '<div class="menu">
            
            <a href="home.php" class="menuButton"><i class="fas fa-home"></i>Home </a>
            <br>
            <br>
            <a href="home.php" class="menuButton"><i class="fas fa-plus-circle"></i> New Issue </a>
            <br>';
        }
        
        ?>
    </aside>
    <main>
    <div id="dashBoard"></div>
    <?php
    
    echo ""; 
    if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
        echo '<div class="newI">
        <h1>Issues</h1>
        <a href="newissue.php">Create New Issue </a>
        </div>';   
    
        echo '<div class="filter-group">
        Filter by: 
        <button type="radio" name="filter" class="button">ALL</button>
        <button type="radio" name="filter" class="button">OPEN</button>
        <button type="radio" name="filter" class="button">MY TICKETS</button>
        </div>';
            } else {
                echo '<form class="form-group" action="loginuser.php" method="post">
        
                Password <br>
                <input id="passWord" type="password" name="password">
                <br>
                Email <br>
                
                <input id="email" type="email" name="emailAddress">
                <br>
                <br>
                <button type="submit" name="login-user" class="button">Submit</button>
            
            </form>';
            }
            ?>
            <?php
                if (isset($_SESSION['admin'])) {
                    echo "<h1>add is:" . $_SESSION['admin'] . "</h1>";
                } else if (isset($_SESSION['user'])) {
                    echo "<h1>add is:" . $_SESSION['user'] . "</h1>";
                } 
            ?>
        </main>
        
    <footer>
        <footer><div id="box3" class="grid-item"> </div></footer>

    <p>Copyright &copy; 2020, Donald Berry, Tahj Gordon, Tyreke McLean, Noel Powell</p>
    </footer>
    
        
    
    </main>
    
</body>
</html> 