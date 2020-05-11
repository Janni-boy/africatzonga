<?php
    require('../config/config.php');
    require('../config/connection.php');

    if(isset($_POST['submit'])){
        //Get Data
        echo "submitted";
        $title = mysqli_real_escape_string($conn, $_POST['article_title']);
        $grade = mysqli_real_escape_string($conn, $_POST['Grade']);
        $subject = mysqli_real_escape_string($conn, $_POST['Subjects']);
        $body = mysqli_real_escape_string($conn, $_POST['article_content']);

        $query = "INSERT INTO articles(article_title, Grade, Subjects) VALUES ('$title','$grade', '$subject, $body')";

        if(mysqli_query($conn, $query)){
            echo "submited";
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'Error: '.mysqli_error($conn);
        }
    }
?>
<!DOCTYPE HTML>
    <html>
        <head>
        <meta charset="utf-8">
		<title>Add Posts</title>
        <link href="../Menu.css" rel="stylesheet" type="text/css">
        <link href="../styles/style.css" rel="stylesheet" type="text/css">
        <link href="../sample.css" rel="stylesheet" type="text/css">
        <link href="../assets/form.css" rel="stylesheet" type="text/css">
            <title>Add Post</title>
        </head>
        <body>
        <header>
			<div class="menu2" >
                <nav>
                <span class = "logo"><a href = "index.php"><img src="../Styles/NameLogo.png" alt ="logo" width ="200"> </a></span>
                <input class = "menu-btn" type="checkbox" id= "menu-btn"/>
                <label class= "menu-icon" for="menu-btn"><span class = "nav-icon"></span></label>
                <ul class= "menu">	
                    <li><a href = "admin/addpost.php">Add Posts</a> </li>
                    <li> <a href = "Contact-form.php">Admin</a> </li>
                    <li> <a href = "Logout.php">Sign Out</a> </li>
                    
                </ul>
                </nav>
                </div>
</header>
            <main>
            <form method="POST" action=<?php $_SERVER['PHP_SELF']; ?> class="form">
            <div class="form__title">Add Post</div>
            <div>
            <label>Title</label>
            <input type="text" name="article_title">
            </div>
            <div class="form__item">
            <label>Grade</label>
            <input type="text" name="Grade">
            </div>
            <div class="form__item">
            <label>Subject</label>
            <input type="text" name="Subjects">
            </div>
            <div class="form__item">
            <label>Content</label>
            <textarea name="article_content" class="form__input"></textarea>
            <input type="submit" name="submit" value="submit">
            </div>
            </form>
</main>
        </body>
    </html>