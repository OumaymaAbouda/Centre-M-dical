<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Centre Médical STEG </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      #btnConf {
        color: white;
      }
      .col1 {
        color: red;
      }
      .col2 {
        color: green;
      }
      .bord1 {
        border-color: red;
      }
      .bord2 {
        border-color: green;
      }
    </style>
    
    
</head>
<body>
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
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
 <!-- ================ contact section start ================= -->



 <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                  
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contactez-nous</h2>
                    </div>
                    <div class="col-lg-8">
                      <form class="form-contact contact_form" id="contactForm" name="formulaire" onsubmit="return false">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
            <label for="message" class="form-label" id="labelMessage">Message</label>
                <textarea class="form-control w-100" name="message" cols="30" rows="9" placeholder="Message" id="message" required></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label for="name" class="form-label" id="labelName">Name</label>
                <input class="form-control valid" name="name" type="text" id="name" placeholder="Enter your name" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label for="email" class="form-label" id="labelEmail">Email</label>
                <input class="form-control valid" id="email" name="email" type="email" placeholder="Email" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label for="phoneNumber" class="form-label" id="labelTel"
                        >Phone</label
                      >
                      <input
                        type="tel"
                        class="form-control"
                        id="tel"
                        placeholder="Enter your phone number"
                        required
                      />
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label for="subject" class="form-label" id="labelSubject">Subject</label>
                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
            </div>
        </div>
        
       
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="contact" class="button button-contactForm boxed-btn" value="Send" onclick="verif()">
    </div>
</form>

                    </div>




                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>S.T.E.G District Bab Jdid Sousse Ville</h3>
                                <p>15 Rue du 18 Janvier 1952, Sousse 4003</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>73223105/73229941</h3>
                                <p>Monday to Friday 8am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>ankerkeni@steg.com.tn</h3>
                                <p>Envoyez-nous votre requête à tout moment !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
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
  
   
<script>
     function verif() {
        var j = 0;
        var name = document.getElementById("name").value;
        var message = document.getElementById("message").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var tel = document.getElementById("tel").value;
        
        var phoneFormat = /^\d{8}$/;
        var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
        if (!name) {
          document.getElementById("labelName").classList.add("col1");
          document.getElementById("labelName").classList.remove("col2");
          document.getElementById("name").classList.add("bord1"); 
          document.getElementById("name").classList.remove("bord2");
          j++;
        } else {
          document.getElementById("labelName").classList.add("col2");
          document.getElementById("labelName").classList.remove("col1");
          document.getElementById("name").classList.add("bord2");
          document.getElementById("name").classList.remove("bord1");
        }
        if (!message) {
          document.getElementById("labelMessage").classList.add("col1");
          document.getElementById("labelMessage").classList.remove("col2");
          document.getElementById("message").classList.add("bord1");
          document.getElementById("message").classList.remove("bord2");
          j++;
        } else {
          document.getElementById("labelMessage").classList.add("col2");
          document.getElementById("labelMessage").classList.remove("col1");
          document.getElementById("message").classList.add("bord2");
          document.getElementById("message").classList.remove("bord1");
        }
        if (!email.match(mailFormat)) {
          document.getElementById("labelEmail").classList.add("col1");
          document.getElementById("labelEmail").classList.remove("col2");
          document.getElementById("email").classList.add("bord1");
          document.getElementById("email").classList.remove("bord2");
          j++;
        } else {
          document.getElementById("labelEmail").classList.add("col2");
          document.getElementById("labelEmail").classList.remove("col1");
          document.getElementById("email").classList.add("bord2");
          document.getElementById("email").classList.remove("bord1");
        }
        if (!subject) {
          document.getElementById("labelSubject").classList.add("col1");
          document.getElementById("labelSubject").classList.remove("col2");
          document.getElementById("subject").classList.add("bord1");
          document.getElementById("subject").classList.remove("bord2");
          j++;
        } else {
          document.getElementById("labelSubject").classList.add("col2");
          document.getElementById("labelSubject").classList.remove("col1");
          document.getElementById("subject").classList.add("bord2");
          document.getElementById("subject").classList.remove("bord1");
        }

        if (!tel.match(phoneFormat)) {
          document.getElementById("labelTel").classList.add("col1");
          document.getElementById("labelTel").classList.remove("col2");
          document.getElementById("tel").classList.add("bord1");
          document.getElementById("tel").classList.remove("bord2");
          j++;
        } else {
          document.getElementById("labelTel").classList.add("col2");
          document.getElementById("labelTel").classList.remove("col1");
          document.getElementById("tel").classList.add("bord2");
          document.getElementById("tel").classList.remove("bord1");
        }

        if (j == 0) {
          
          document.getElementById("contactForm").submit();
          alert("done!");
          
        }
      }
</script>

</body>
</html>