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
            
            
            <a href="home.php" class="menuButton"><img src="home.png" width="30" height="30"><i class="fas fa-home"></i>Home </a>
            <br>
            <br>
            <a href="newuser.php" class="menuButton"><img src="Data User.png" width="30" height="30"><i class="fas fa-user-plus"></i>Add User </a>
            <br>
            <br>
            <a href="newissue.php" class="menuButton"><img src="new issue.png" width="30" height="30"><i class="fas fa-plus-circle"></i> New Issue </a>
            <br>
            <br>
            <a href="logout.php" class="menuButton"><img src="Log Out.png" width="30" height="30"><i class="fas fa-sign-out-alt"></i> Logout </a>
            
        </div>         
    </aside>
    <main>
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

            
        </main>


    <footer>
        <footer><div id="box3" class="grid-item"> </div></footer>

    <p>Copyright &copy; 2020, Donald Berry, Tahj Gordon, Tyreke McLean, Noel Powell</p>
    </footer>
    
        
    
    </main>
    
</body>
</html> 