<?php
    require('../config/config.php');
    require('../config/connection.php');

    if(isset($_POST['submit'])){
        //Get Data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['article_title']);
        $grade = mysqli_real_escape_string($conn, $_POST['Grade']);
        $subject = mysqli_real_escape_string($conn, $_POST['Subjects']);
        $body = mysqli_real_escape_string($conn, $_POST['article_content']);

        $query = "UPDATE articles SET
                    article_title = '$title',
                    'Grade = $grade',
                    Subjects = '$subject',
                    article_title = '$body'
    WHERE id = {$update_id}";
               if(mysqli_query($conn, $query)){
            echo "submited";
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'Error: '.mysqli_error($conn);
        }  
    
        // Get id
        $id = mysqli_real_escape_string($conn, $_GET['id']);
    
        //Create Query
        $query = 'SELECT * FROM articles WHERE article_id = '.$id;
        //var_dump($query);
        //Get Result
        $result = mysqli_query($conn, $query);
        var_dump()
        //Fetch Data
        $post = mysqli_fetch_assoc($result);

        //Free Result
        mysqli_free_result($result);

        //Close Connection
        mysqli_close($conn);
    

    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>edit Post</title>
    </head>
    <body>
        <h1>Edit Post</h1>
        
        <form method="POST" action=<?php $_SERVER['PHP_SELF']; ?>>
        <div>
        <label>Title</label>
        <input type="text" name="article_title" value="<?php echo $post['article_title']?>">
        </div>
        <div>
        <label>Grade</label>
        <input type="text" name="Grade" value ="<?php echo $post['Grade'];?>">
        </div>
        <div>
        <label>Subject</label>
        <input type="text" name="Subjects" value="<?php echo $post['Subjects'];?>">
        </div>
        <div>
        <label>Content</label>
        <textarea name="article_content"><?php echo $post['article_content'];?></textarea>
        <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
        <input type="submit" name="submit" value="submit">
        </div>
        </form>
    </body>
</html>