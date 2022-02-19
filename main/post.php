<?php if (isset($_GET['editPost'])) {
    $postId = $_GET['editPost'];
    $link = sql_connect();
    $header = 'Edit Post';
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM Posts where PostId='$postId' AND User_id='$userId' ";
    $result = mysqli_query($link, $sql);
    if(!$result || mysqli_num_rows($result) == 0) {
        $data['errorMessage'] = "Post not found or you don't have permissions to edit you can create a new one";
        $_SESSION['dontUpdateCreate'] = true;
    }
    else {
        $postToEdit = mysqli_fetch_assoc($result);
        
    }
}
?>  

<?php if (isset($_GET['addPost'])) {
  $header = 'Add Post';
}
?>

<div class="container masthead">
    <header class="text-black text-center">  
       <div class="d-flex align-items-center flex-column">
         <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0"> <?php echo $header ?> </h1>
       </div>
       
       <a href="./blog" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-4 ">
       <i class="fas fa-arrow-left fa-sm text-white-50"></i>Back</a>

        <form action="" method="POST"> 
           <div class="form-group mt-3 mb-3">
               <h2 class="fw-bold form-label mt-3 text-left" for="exampleFormControlInput1">Title</h2>
               <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder=""
               value="<?= isset($postToEdit['Title']) ? $postToEdit['Title'] : ''?>">
           </div>
           <div class="form-group mt-3 mb-3"> 
               <h2 class="fw-bold form-label"  for="exampleFormControlTextarea1">Article</h2>
               <textarea class="form-control" name="article" id="exampleFormControlTextarea1" rows="5">
               <?= isset($postToEdit['Article']) ? $postToEdit['Article'] : ''?></textarea>
           </div>
           <div class="invalid-feedback" style="display:<?php echo (isset($data['errorMessage'])) ? 'block':'none';?>"><?php echo $data['errorMessage'] ?></div>
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                   <a href="./blog" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i
                      class="fas fa-eject fa-sm text-white-50 mt-2"></i> Cancel</a>
                      <button type="submit" name="add_post" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                      class="fas fa-save fa-sm text-white-50 mt-2"></i> Save</button>
               </div>

        </form>
   </header>
</div>