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
 
        
     <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0 mt-5" >
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"> Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Dolor sed viverra 
                    ipsum nunc aliquet bibendum. Donec ultrices tincidunt arcu non sodales neque sodales ut. Risus in
                    hendrerit gravida rutrum quisque non. Faucibus interdum posuere lorem ipsum dolor sit amet.</p></div>
                </div>
                <div class="row mt-5">

                <div class="col-md-6 col-lg-4 mb-3">
                      <img class="img-fluid" src="assets/img/portfolio/game.png" alt="game" />
                  </div>

              <div class="col-md-6 col-lg-4 mb-3">
                      <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="safe" />
                  </div>

              <div class="col-md-6 col-lg-4 mb-3">
                      <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="submarine" />
              </div>

            </div>
        </section>


<?php include './includes/logoutModal.php' ?>
<?php include './includes/footer.php' ?>


<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
              <!-- Core theme JS-->
              <script src="js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


 </html>
 
