<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["eu-cdbr-west-02.cleardb.net"];
$cleardb_username = $cleardb_url["bbfd1f46bd72c5"];
$cleardb_password = $cleardb_url["92f4f87b"];
$cleardb_db = substr($cleardb_url["blog"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>




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
    <body id="page-top">
<?php include './includes/navbar.php' ?>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Welcome to my blog</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">This blog is about nothing</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Interesting title</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                <div class="col-lg-4 ms-auto me-auto text-start"  style="width:40%; "> 
                   <p class="fw-bold">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.<br>
                     <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Dolor sed viverra 
                    ipsum nunc aliquet bibendum. Donec ultrices tincidunt arcu non sodales neque sodales ut. Risus in
                    hendrerit gravida rutrum quisque non. Faucibus interdum posuere lorem ipsum dolor sit amet. Odio euismod
                    lacinia at quis risus sed vulputate odio. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu
                    vitae elementum. Nisl tincidunt eget nullam non nisi est sit amet. Imperdiet dui accumsan sit amet. 
                    Tortor at risus viverra adipiscing at. At lectus urna duis convallis convallis.
                   </p>

                </div>
                
                   <div id="carouselExampleIndicators" class="carousel slide col-md-6 col-lg-4 mb-3 float-end ms-auto me-auto mb-5" style="width:40%; height:300px; " data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/img/portfolio/cabin.png" class="d-block w-100" alt="cabin">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/img/portfolio/circus.png" class="d-block w-100" alt="circus">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/img/portfolio/cake.png" class="d-block w-100" alt="cake">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    </div>           
        </section>


        <?php include './includes/logoutModal.php' ?>
        <?php include './includes/footer.php' ?>
       
        
    </body>


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
