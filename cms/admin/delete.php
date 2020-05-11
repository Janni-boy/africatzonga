<?php

session_start();


include_once('../includes/connection.php');
include_once('../includes/article.php');

$article = new Article;

if (isset($_SESSION['logged_in'])){


    ?>
    <html>
    <head>
        <title>CMS TEemplate</title>
        <link rel="stylesheet" href="cms/style.css">>
    </head>
    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a> 
         <br/>

         <form action="delete.php" method="get">
             <select onchange="this.form.submit();">
             <?php foreach ($articles as $article) { ?>
            <option value="<?php echo $article['article_id'];?>"><?php echo $article['article_title'];?></option>}
            <?php} ?>
             </selct>
             </form>
        </div>
    </body>
    </html>

    <?php
 else {
    header('Location: index.php');
}
?>