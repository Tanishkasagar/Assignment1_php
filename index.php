<!DOCTYPE html>
<html>
<head>
    <title>PHP | Assingment 1</title>
    <meta name="description" content="Assingmentt_Create && Read">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    
</head>
<body>
    <header class="header">
        <nav>
            <div class="navbar-brand">PHP | Assignment 1</div>
            <div id="navbarNav">
                <ul class="nav-item">
                        <a href="index.php">Home</a>
                        <a href="view.php">View</a> 
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <h2><u>Add Content</u> :</h2>
        <form  id= "Form" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>ID:</label>
                <input id="ID" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input id="Age" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="Gender">Gender:</label>
                <select id="Gender" name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="N/A">N/A</option>
                </select>
            </div>       
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="form-group submit-message">
            <?php
                          require_once('database.php');
                         
                         if(!empty($_POST)){
                             $name = $_POST['name'];
                             $id = $_POST['id'];
                             $age = $_POST['age'];
                             $gender = $_POST['gender'];
                             $res   = $database->create($name, $id, $age, $gender);
                             if($res){
                                 echo "<p>Successfully inserted data</p>";
                             }else{
                                 echo "<p>Failed to insert data</p>";
                             }
                         }
                      ?>
         </div>
    </main>
    <footer class="footer">
        Copyright © 2023 || PHP || Assignment by Tanishka &#9829;
    </footer>
</body>
</html>