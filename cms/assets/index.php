<?php

include_once('cms/includes/connection.php');
include_once('cms/includes/article.php');

$article = new Article;
$articles = $article->fetch_all();



?>

<html>
    <head>
        <title>CMS TEemplate</title>
        <link rel="stylesheet" href="cms/style.css">
    </head>
    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a>

            <ol>
				<?php foreach ($articles as $article) { ?>
                <li><a href="article.php?id=1<?php echo $article['article_id'];?>"><?php echo $article['article_title'];?></a> - 
                <small> Posted<?php echo date('l js', $article['article_timestamp'])?>
                </small></li><?php }?>
                <small><a href="admin"></a></small>
            </ol>
        </div>
    </body>
</html>
