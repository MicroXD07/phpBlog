        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">    
                <a class="navbar-brand" href="#page-top">PHP & MySQL Blog</a>  
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./index">Home</a></li> 
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./blog">Blog</a></li> 
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./about">About</a></li>
                    </ul>


                    <?php if (isset($_SESSION['user_id'])) : ?> 
                       
                            <!-- Nav Item - User Information -->                     
                            <div class="nav-item dropdown no-arrow border border-primary">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['user']['Email']?> </span>
                                    <?php 
                                        $avatarUrl = 'img/undraw_profile.svg';
                                        if (isset($_SESSION['user_id']) && ($_SESSION['user']['Avatar'] !=NULL) &&
                                        file_exists("uploads/".$_SESSION['user_id']."/".$_SESSION['user']['Avatar'])) {
                                            $avatarUrl = "uploads/".$_SESSION['user_id']."/".$_SESSION['user']['Avatar'];
                                        }
                                     ?>
                                    <img class="img-profile rounded" style="width:20px; height:20px;" src="<?php echo $avatarUrl ?>"> 
                                </a>
                                 
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
       
                                    <a class="dropdown-item" href="#">
                                        <label for="file-input-avatar">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            <form style="display: none;" action="" method="POST" enctype="multipart/form-data">
                                                <input name="image" id="file-input-avatar" type="file" accept="image/*" 
                                                onchange="document.getElementById('uploadAvatar').click()" />
                                                <input type="submit" style="display: none;" name="submitAvatar" id="uploadAvatar">
                                            </form>
                                        Upload Avatar
                                        </label>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                                    


                    <?php endif ; ?>
                    <?php if (!isset($_SESSION['user_id'])) : ?>
                        <ul class="navbar-nav ml-auto"> 
                       
                                    <a class=" dropdown-toggle" href="./login" id="alertsDropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-sign-in-alt mr-1"></i>
                                        <!-- Counter - Alerts -->
                                        Login
                                    </a>
                                    </li>
                        </ul>
                    <?php endif ; ?>
                </div>
            </div>
        </nav>
        