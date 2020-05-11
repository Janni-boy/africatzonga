<?php
    require('config/connection.php');
    require('config/config.php');
    //require('config/fetch_data.php');


    // Get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //Create Query
    $query = 'SELECT * FROM articles WHERE article_id = '.$id;
    //var_dump($query);
    //Get Result
    $result = mysqli_query($conn, $query);

    //Fetch Data
    $post = mysqli_fetch_assoc($result);
    //var_dump($post);


?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DashBoard Home</title>
        <link href="Menu.css" rel="stylesheet" type="text/css">
        <link href="styles/style.css" rel="stylesheet" type="text/css">
        <link href="sample.css" rel="stylesheet" type="text/css">
		
	</head>
	<body class="loggedin">
		<header>
			<div class="menu2" >
                <nav>
                <span class = "logo"><a href = "Home.html"><img src="Styles/NameLogo.png" alt ="logo" width ="200"> </a></span>
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
        <h3><?php echo $post['article_title']; ?></h3>
        <h4><?php echo $post['Subjects'];?></h4>
            <h4><small><?php echo $post['Grade'];?></small></h4>
            <p><?php echo $post['article_content']; ?></p>

    </main>
	</body>
</html>