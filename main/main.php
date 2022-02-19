<?php include 'deletePostLogic.php' ?>

<div class="container masthead"> 
    <header class="text-black text-center">  
            <div class="d-flex align-items-center flex-column">
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Posts</h1>
                <!-- Icon Divider-->
                <div class="divider-custom ">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <a href="?addPost" class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm mt-2">   
                <i class="fas fa-plus fa-sm text-white-50"></i> Add post</a>
            </div>
    </header>
</div>
</div>

<?php  
   $link = sql_connect();
   $sql = "SELECT * FROM Posts ORDER BY 'Time' ASC";
   $result = mysqli_query($link, $sql);
?>

<?php if($result && mysqli_num_rows($result) > 0): ?>
      <ul>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="card mt-5 mb-3">
             <h3 class="card-header"><?= $row['Title']?></h3>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p><?= $row['Article']?></p>
                <footer class="blockquote-footer">Last updated <?= date('d/m/y H:i', $row['Time'])?></footer>
                </blockquote>
                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['User_id']) : ?>  
                        <a href="./blog?editPost=<?=$row['PostId'] ?>" class="mr-1" style=" cursor: pointer; "><i class="fas fa-edit"></i></a>
                        <a href="./blog?deletePost=<?=$row['PostId'] ?>" class="ml-2" style=" cursor: pointer; color:red;"><i class="fas fa-trash-alt "></i></a>
                        </div>
                 <?php endif ; ?>        
                </div>
            </div>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?> 

  