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
            
            <button type="reset" class="menuButton"><i class="fas fa-home"></i>Home </button>
            <br>
            <br>
            <button type="reset" class="menuButton"><i class="fas fa-user-plus"></i>Add User </button>
            <br>
            <br>
            <button type="reset" class="menuButton"><i class="fas fa-plus-circle"></i> New Issue </button>
            <br>
            <br>
            <a href="logout.php" class="menuButton"><i class="fas fa-sign-out-alt"></i> Logout </a>
            
        </div>         
    </aside>
    <main>
            <div id="newUserForm">
                <h1>New User</h1>
                <?php
                    //  if (isset($_GET['success'])) {
                    //      if (isset($_GET['success']) == 'signup'){
                    //     echo "<h1>You're logged in</h1>";
                    //     echo $_SESSION['email'];
                    //      }
                    // }
                    if (isset($_SESSION['email'])){
                    echo $_SESSION['email'];
                    }
                ?>
                <form class="form-group" action="adduser.php" method="post">
                    Firstname <br>
                    <input id="firstN" type="text" name="firstname">
                    <br>
                    Lastname <br>
                    <input id="lastN" type="text" name="lastname">
                    <br>
                    Password <br>
                    <input id="passWord" type="password" name="password">
                    <br>
                    Email <br>
                    <input id="email" type="email" name="emailAddress">
                    <button type="submit" name="add-user" class="button">Submit</button>
                   
                </form>
            </div>

            <div id="createIssue">
                <h1>Create Issue</h1>
                <div class="issue-form-group">
                    Title<br>
                    <input id="issueTitle" type="text" name="issue-title">
                    <br>
                    Description <br>
                    <input id="issueDescrption" type="text" name="issueDescrption">
                    <br>
                    Assigned To<br>
                    <select name="issueAssignedTo" id="assigned">

                    </select>
                    <br>
                    Type <br>
                    <select name="issueType" id="issueType">
                        <option value="Bug">Bug</option>
                        <option value="Task">Task</option>
                        <option value="Proposal">Proposal</option>
                    </select>
                    <br>
                    Priority <br>
                    <select name="priorityType" id="priority">
                        <option value="Minor">Minor</option>
                        <option value="Major">Major</option>
                        <option value="Critical">Critical</option>
                    </select>
                </div>
                <button type="submit" class="button">Submit</button>
            </div>

            <div id="dashBoard"></div>
            <div id="logout"></div>
        </main>


    <footer>
        <footer><div id="box3" class="grid-item"> </div></footer>

    <p>Copyright &copy; 2020, Donald Berry, Tahj Gordon, Tyreke McLean, Noel Powell</p>
    </footer>
    
        
    
    </main>
    
</body>
</html> 