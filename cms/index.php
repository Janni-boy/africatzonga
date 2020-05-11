<?php
    require('config/connection.php');
    require('config/fetch_data.php');

?>
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
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back</p>
        </div>
		<div class="list-container">
		<?php foreach($posts as $post) : ?>
            <h2><?php echo $post['article_title']; ?></h2>
            <h3><?php echo $post['Subjects'];?></h3>
            <h4><small><?php echo $post['Grade'];?></small></h4>
            <a href="posts.php?id=<?php echo $post['article_id']; ?>">Read More</a>
        <?php endforeach; ?>	
        </div>

    </main>
	</body>
</html>