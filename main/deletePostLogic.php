<?php  
        $link = sql_connect();
        if(isset($_GET['deletePost'])){
        $postId = $_GET['deletePost'];
        $sql = "DELETE FROM Posts WHERE PostId=$postId;";
        $result = mysqli_query($link, $sql);
        }
?>