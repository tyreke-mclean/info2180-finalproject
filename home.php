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
        <div class="menu">
            
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
            
        </div>         
    </aside>
    <main>
    <div id="dashBoard"></div>
            
        </main>


    <footer>
        <footer><div id="box3" class="grid-item"> </div></footer>

    <p>Copyright &copy; 2020, Donald Berry, Tahj Gordon, Tyreke McLean, Noel Powell</p>
    </footer>
    
        
    
    </main>
    
</body>
</html> 