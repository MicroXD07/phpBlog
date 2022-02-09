<?php include './loginLogic/checkIfLogin.php' ?>
<?php require 'uploadFiles/uploadAvatar.php' ?>
<?php require 'main/addPostLogic.php' ?>
<?php 
if (isset($_GET['addPost']) || isset($_GET['editPost'])) {
    if (!isset($_SESSION['user_id'])){
        session_destroy();
        header('location: ./login');
    }
}
?>


<?php include './includes/header.php' ?> 
<?php include './includes/navbar.php' ?> 
 
<?php require './main/switcher.php' ?>
 
<?php include './includes/logoutModal.php' ?>
<?php include './includes/footer.php' ?>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
