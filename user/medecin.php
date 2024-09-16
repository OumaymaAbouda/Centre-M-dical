<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Centre Médical STEG </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                <img src="img/logo1.jpg"
                                    width="200" 
                                     height="60" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="specialite.php">Spécialités</a></li>
                                                <li><a href="medecin.php">Médecins</a></li>
                                        
                                                <li><a href="contact.php">Contact</a></li>
                                                
                                                <li><a href="logout.php">Déconnexion</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="book_room">
                                        <div class="book_btn">
                                            <a class="popup-with-form" href="#test-form">Rendez-vous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Médecins</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center" >
                        <h3>Doctors</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
          
            <?php
            include("config.php");
            $result = $connexion->prepare("SELECT * FROM medecin ");
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
               echo"
            <div class='row justify-content-center'>
                <div class='col-lg-4 col-md-6'>
                    <div class='single_expert'>
                        <div class='expert_thumb'>
                            <img src='{$row['image']}'>
                        </div>
                        <div class='experts_name text-center'>
                            <h3>{$row['nom']} {$row['prenom']}</h3>
                            <span>{$row['specialite']}</span>
                            <p>{$row['description']}</p>
                            <div class='social_links'>
                                <ul>
                                    <li>
                                        <a href='#'> <i class='fa fa-facebook'></i> </a>
                                    </li>
                                    <li>
                                        <a href='#'> <i class='fa fa-linkedin'></i> </a>
                                    </li>
                                    <li>
                                        <a href='#'> <i class='fa fa-twitter'></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>";}
            ?>
         
        </div>
    </div>
    <!-- expert_doctors_area_end -->
  
    

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img src="img/logo1.jpg"
                                    width="200" 
                                     height="60" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Nos spécialités
                            </h3>
                            <ul class="links">
                                <li><a href="#">Ophtalmogie</a></li>
                                <li><a href="#">Pulmonaire</a></li>
                                <li><a href="#">Cardiologie</a></li>
                                <li><a href="#">Neurologie</a></li>
                                <li><a href="#">Traumatologie</a></li>
                                <li><a href="#">Dentisterie</a></li>
                                <li><a href="#">Nucléaire</a></li>
                                <li><a href="#">Nerphologie</a></li>
                                <li><a href="#">Gynécologie</a></li>
                                <li><a href="#">Pédiatrie</a></li>
                                <li><a href="#">X-ray</a></li>
                                <li><a href="#">Prostheses</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Nous sommes disponible
                            </h3>
                            <ul class="meting_time">
                                <li class="d-flex justify-content-between "><span>Lundi - Vendredi</span> <span>8.00 - 18.00</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" method="post" action="rdv.php" class="white-popup-block mfp-hide">
    <div class="popup_box">
        <div class="popup_inner">
            <h3>Formulaire de prise de <span>Rendez-Vous</span></h3>
            <div class="row">
                <?php
                include("config.php");
                $result = $connexion->prepare("SELECT * FROM medecin ");
                $result->execute();
                ?>
                <div class="col-xl-12">
                    <select class='form-select wide' id='default-select' name="médecin">
                        <option data-display='Please select doctor to visit'>Please select doctor to visit</option>
                        <?php
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row['nom'] . "&nbsp". $row['prenom'] . "'>" . $row['nom'] . "&nbsp" . $row['prenom'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xl-9">
                    <input type="text" placeholder="Your name" name="name"required>
                </div>
                <div class="col-xl-3">
                    <input type="text" placeholder="Your age" name="age"required>
                </div>
                <div class="col-xl-6">
                    <input type="text" placeholder="Phone number" name="phone"required>
                </div>
                <div class="col-xl-6">
                    <input type="email" placeholder="Email Address" name="email"required>
                </div>
                <div class="col-xl-6">
                    <input type="date" placeholder="Appointment Date" name="date"required>
                </div>
                <div class="col-xl-6">
                    <input class="timepicker" placeholder="Suitable time" name="time"required>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="boxed-btn3" name="rdv"> Rendez-Vous</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- form itself end -->
    
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <!--<script src="js/ajax-form.js"></script>-->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
       <!-- <script src="js/contact.js"></script>-->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>