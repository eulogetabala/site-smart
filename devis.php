<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Space Dynamic - SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">  
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>
 <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo golo">
             <img src="assets/images/logo.png" alt="" srcset="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Accueil</a></li>
              <li class="scroll-to-section"><a href="about.html">L'agence</a></li>
              <li class="scroll-to-section"><a href="service.html">Services</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio"></a></li> -->
              <li class="scroll-to-section"><a href="blog.html">Actualités</a></li> 
              <li class="scroll-to-section"><a href="blog.html">Boutique</a></li> 
              <li class="scroll-to-section"><a href="contact.html">Contact</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Demander un devis</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- ***** Header Area End ***** -->

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

<br><br><br><br><br><br>
        <!-- START MAIN CONTENT -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php

if(!empty($_POST))
 {
   $nom = $_POST['nom'];
   $entreprise = $_POST['entreprise'];
   $email = $_POST['email'];
   $numero = $_POST['numero'];
   $sujet = $_POST['sujet'];
   $budget = $_POST['budget'];
   $message = $_POST['message'];
 }

 $bdd = new PDO('mysql:host=localhost;dbname=nasacdka_smart;charset=utf8', "nasacdka_smart", "ttuM1oqMV9P.");

 $req= $bdd->prepare('INSERT INTO devis SET nom=?,entreprise=?,email=?,numero=?,sujet=?,budget=?,message=?');
 $req->execute([$nom,$entreprise,$email,$numero,$sujet,$budget,$message]);


?> 
 <div id="contact" class="contact-us section" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Remplissez ce formulaire ou envoyez-nous un email avec votre demande.</h2>
            <div class="phone-info">
              <h4> <span><i class="fa fa-home"></i> <a href="#" style="font-size: 25px;">93 Avenue Gallieni, Mpila</a></span></h4>
            </div>
            <div class="phone-info">
              <h4> <span><i class="fa fa-phone"></i> <a href="#" style="font-size: 25px;">+242 06 710 15 15</a></span></h4>
            </div>
            <div class="phone-info">
              <h4><span><i class="fa fa-envelope"></i> <a href="#" style="font-size: 25px;">contact.smartvision.cg</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="nom" id="name" placeholder="Nom()" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="entreprise" id="surname" placeholder="Entreprise" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder=" Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="number" name="numero" id="numero"  placeholder="Numero" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="sujet" id="sujet"  placeholder=" Sujet" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="number" name="budget" id="budget"  placeholder="Budget" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Description du projet" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="main-button ">Envoyer</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
        <p>© Copyright Smart vision. 
        
      
      </div>
    </div>
  </div>
</footer>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/templatemo-custom.js"></script>

<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="assets/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>