
<?php
include("config.php");
$error = null ;


if (isset($_POST['register'])) {
    if ($_POST['password']== $_POST['confirm_password']){
    $stmt = $connexion->prepare("SELECT * FROM users where email=:em");
    $stmt->bindParam(':em', $_POST['email']); 
    $stmt->execute();
    $userExist= $stmt->fetchobject();
    if(!$userExist){
    $name=$_POST["user_name"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
    $confirm_password=$_POST["confirm_password"];
    $created_at = date("y-m-d h:i:s");
    $stmt = $connexion->prepare(("INSERT INTO users(name,password,email,created_at)values(:nm,:pwd,:em,:cr)"));
    $stmt->bindParam(':nm', $name);
    $stmt->bindParam(':pwd', $password);
    $stmt->bindParam(':em', $email);
    $stmt->bindParam(':cr', $created_at);
    $stmt->execute();
    if ($stmt->rowCount() != 0){
        $success="Your account has been created successfully";
    }else{
        $error ="failed to create account !!";
    }
    }else{
        $error ="email already used";
    }
    }else{
    $error = "Confirm password does not match !!";
    }
}
?>

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
    <style>
        /* Style pour le formulaire d'inscription */
.error-message, .success-message {
    display: block;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.error-message {
    background-color: #f8d7da;
    color: #721c24;
}

.success-message {
    background-color: #d4edda;
    color: #155724;
}

.login-card {
    max-width: 500px;
    margin: 0 auto;
    margin-top:20px;
    margin-bottom:20px;
    padding: 30px;
    border-radius: 50px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.login-card h2 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
    
}

.login-card input[type="text"],
.login-card input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 15px;
    box-sizing: border-box;
}

.login-card button {
    width: 100%;
    padding: 12px 20px;
    border: none;
    border-radius: 15px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

.login-card button:hover {
    background-color: #0056b3;
}

.login-card a {
    color: #007bff;
    text-decoration: none;
}

.login-card a:hover {
    text-decoration: underline;
}

    </style>
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
                                                <li><a href="#">accueil</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Spécialités</a></li>
                                                <li><a href="#">Médecins</a></li>
                                        
                                                <li><a href="#">Contact</a></li>
                                                
                                                <li><a href="login.php">Connexion</a></li>
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


<div>
    <br><br><br><br><br>
   <!--<body class="color-theme-blue">-->

       
            <div class="row">
                
                <div class="col-xl-12 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
                    <div class="card shadow-none border-0 ms-auto me-auto login-card" >
                        <div class="card-body rounded-0 text-left">
                            <h2 class="fw-700 display1-size display2-md-size mb-2">Sign Up</h2>
                            <form method="POST">
                                
                            <?php
                        if ($error != null) {
                            echo "<span class='badge badge-danger'>$error</span>";
                        }
                        if (isset($success) ) {
                            echo "<span class='badge badge-success '>$success</span>";
                        }
                        ?>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                   placeholder="Nom et prénom" name="user_name" required>
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pe-0"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                   placeholder="Addresse Email" name="email" required>
                        </div>
                      
                        <div class="form-group icon-input mb-3">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                   placeholder="Mot de passe" name="password" required>
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                        </div>
                        <div class="form-group icon-input mb-1">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                   placeholder="Confirmer Mot de passe" name="confirm_password" required>
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                        </div>
                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1">
                                <button type="submit"
                                        class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0"
                                        name="register">Register
                                </button>
                            </div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Have an  account?  <a
                                        href="login.php" class="fw-700 ms-1">Login</a></h6>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
       
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
</body>
</html>