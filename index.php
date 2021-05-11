<!DOCTYPE html>
<html lang="en">

<?php

if(!empty($_POST))
{
 
  $email = $_POST['email'];
  
}

// connection a la base de donées
$bdd = new PDO('mysql:host=localhost;dbname=smart;charset=utf8', "root", "");

$req= $bdd->prepare('INSERT INTO newsletter SET email=?');
$req->execute([$email]);


?>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Smart Vision Congo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">  

    <script>
      window.callbellSettings = {
          token: "e7YrvuGrNbxBRtz8cjiJjmfi"
      };
  </script>
 <script>
  window.callbellSettings = {
    token: "bMa6LqqrytVwo8sHeGeMbvyj"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;
  if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}
  else{var d=document;var i=function(){i.c(arguments)};
  i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;
  var l=function(){var s=d.createElement('script');
  s.type='text/javascript';
  s.async=true;
  s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
  



<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->

  </head>

<body>

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
              <li class="scroll-to-section"><a href="index.html" class="active">Accueil</a></li>
              <li class="scroll-to-section"><a href="about.html">L'agence</a></li>
               <li class="scroll-to-section"><a href="service.html">Services</a></li> 
              <li class="scroll-to-section"><a href="shop/index.html">Boutique</a></li>
              <li class="scroll-to-section"><a href="index6.html">Actualités</a></li> 
              <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
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
  

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner" style="margin-top: 100px;">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/images/Slider_SV_2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/Slider_SV_3.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/Slider_SV_4.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      
    </a>
  </div>
 
 
  <div id="portfolio" class="our-portfolio section" >
    <h2 class="h2t" style="text-align: center;margin-top: -18px;">Nos valeurs</h2>
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <a href="">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Ecoute</h4>
                <p>Parler, c'est bien communiquer c'est encore mieux. Chez smart vision CONGO,
                   nous faisons de l'écoute une de nos valeurs fonadamentales pour apporter des solutions innovantes</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/picto_ecoute.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Créativité</h4>
                <p>La particularité de nos produits determine la qualité de nos services,
                   nous mettons à votre dispoition une équipe dynamique,
                   expérimentée pour vous accompagner efficacement dans vos projets</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/picto_crea.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Réactivité</h4>
                <p>Notre équipe passe rapidement à l'action, c'est certainement notre plus grande force. 
                  Nous repondons à vos besoins tout en respectant les delais prescrits</p>
              </div>
              <div class="showed-content" >
                <img src="assets/images/picto_reac.png" alt="">
              </div>
            </div>
          </a>
        </div>
       
      </div>
    </div>
  </div><br><br><br>

  <div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="assets/images/4.jpg" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2 class="h2t">Qui sommes-nous?</h2>
                <p>Nous sommes une agence de conseil en communication,
                   qui propose son sens de l'innovation, 
                   sa créativité et son expertise en communication de marques et d'entreprises.
                    Basée au 93 avenue Gallieni à Brazzaville en République du Congo, 
                    notre agence répond à un principe : 
                    concilier les exigences du client à la rigueur professionnelle et les réalités locales aux avantages technologiques.

                </p>
                <!-- <p>
                    <small>Nunc sodales lobortis arcu, sit amet venenatis erat placerat a. Donec lacinia magna nulla,
                        cursus impediet augue egestas id. Suspendisse dolor lectus, pellentesque quis tincidunt ac,
                        dictum id neque.
                    </small>
                </p> -->
                <a href="about.html">Savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>



  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6 style="font-size: 45px; color: white;font-weight: 800;margin-top: 27px;">Pourquoi nous choisir?</h6>
        
            <!-- <img src="assets/images/about-left-image.png" alt="person graphic"> -->
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/images/service-icon-01.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    
                    <p style="text-align: center;" >nous faisons notre travail en respectant toutes les normes  qu’exige notre profession.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/images/service-icon-02.png" alt="">
                  </div>
                  
                  <div class="right-text">
                   
                    <p >Nous sommes sensibles à vos désirs d’efficacité et de performance.
                    </p>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2> Nos services</h2>
                <img src="assets/images/1.jpg" alt="" style="border-radius: 30px 30px 30px 30px;">
                </div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(0,172,23)" stop-opacity="0.6"/>
                            <stop offset="100%" stop-color="rgb(69,235,91)" stop-opacity="0.5"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval" style="background-color: #e74011;"><img class="card-img-top" src="assets/images/photo.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Production Audiovisuelle</h3>
                                <p class="card-text">-Developpement<br> -Pré-production<br> -Production<br> -Post <br> -production <br> -Diffusion</p><br>
                                <!-- <p class="card-text">-Pré-production</p> -->
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval" style="background-color: #3aaa35;"><img class="card-img-top" src="assets/images/graphic.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Conception graphique</h3>
                                <p class="card-text">-Creation des supports visuels <br>  -design</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval" style="background-color: #000000;"><img class="card-img-top" src="assets/images/mobile-solid 1.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Développement web & mobile</h3>
                                <p class="card-text">-Développement de site web <br> -Développement application mobile
                                    </p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval" style="background-color: #f39200;"><img class="card-img-top" src="assets/images/Picto_SV_OK-06.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Community management</h3>
                                <p class="card-text">-Ameliorer votre visibilité <br> -Assurer la veille <br> optimiser votre image</p>
                            </div>
                        </div>
                        <a href="service.html">Tous les services <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   <!-- Page Content -->
   <div class="container page-top">

    <h2 class="h2t" style="text-align: center;margin-top: -18px;">Nos Réalisations</h2><br><br>

    <div class="row">


        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href=assets/images/portfolio-1.jpg class="fancybox" rel="ligthbox">
                <img  src=assets/images/portfolio-1.jpg class="zoom img-fluid "  alt="">
               
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/portfolio-2.jpg"  class="fancybox" rel="ligthbox">
                <img  src="assets/images/portfolio-2.jpg" class="zoom img-fluid"  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/portfolio-3.jpg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/portfolio-3.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/IMG_0351.jpg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/IMG_0351.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/portfolio-6.jpg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/portfolio-6.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/WhatsApp Image 2021-05-07 at 14.49.04.jpeg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/WhatsApp Image 2021-05-07 at 14.49.04.jpeg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/J2LAFEMME_DIGITALE_Plan de travail 1.jpg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/J2LAFEMME_DIGITALE_Plan de travail 1.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="assets/images/Post_RS_Journée de l'innovation.jpg" class="fancybox" rel="ligthbox">
                <img  src="assets/images/Post_RS_Journée de l'innovation.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        
       
       
   </div>

 
  

</div>

<style>
  #demo {
  height:100%;
  position:relative;
  overflow:hidden;
  
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

</style>
<script>
  $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>


<!-- <div class="container-fluid gtco-logo-area" >
  <div class="container">
      <div class="row">
          <div class="col"><img src="assets/images/logo1.png" class="img-fluid" alt=""></div>
          <div class="col"><img src="assets/images/logo2.png" class="img-fluid" alt=""></div>
          <div class="col"><img src="assets/images/logo3.png" class="img-fluid" alt=""></div>
          <div class="col"><img src="assets/images/logo4.png" class="img-fluid" alt=""></div>
          <div class="col"><img src="assets/images/logo5.png" class="img-fluid" alt=""></div>
      </div>
  </div>
</div> -->


<div class="container-fluid gtco-news" id="news" style="background-color: #000000;">
  <div class="container">
      <h2 style="color: #fff;">Ils nous font confiance</h2>
      <div class="owl-carousel owl-carousel2 owl-theme">
          <div>
              <div class="card text-center"><img class="card-img-top1" src="assets/images/logos partenaires/Ens._Logo_Partenaires-02.png" alt="">
                
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top1" src="assets/images/logos partenaires/Ens._Logo_Partenaires-03.png">
                 
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top1" src="assets/images/logos partenaires/Ens._Logo_Partenaires-04.png" alt="">
                 
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top1" src="assets/images/logos partenaires/Ens._Logo_Partenaires-05.png" alt="">
                
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top1" src="assets/images/logos partenaires/Ens._Logo_Partenaires_Plan de travail 1.png" alt="">
                 
              </div>
          </div>
         
      </div>
  </div>
</div>




<div class="container-fluid gtco-news" id="news">
  <div class="container">
      <h2>Derniers articles</h2>
      <div class="owl-carousel owl-carousel2 owl-theme">
          <div>
              <div class="card text-center"><img class="card-img-top" src="assets/images/news1.jpg" alt="">
                  <div class="card-body text-left pr-0 pl-0">
                      <h5>2 RAISONS ULTIMES POUR FAIRE APPEL A UNE AGENCE COMMUNICATION  </h5>
                      <p class="card-text">La communication est partout, quel que soit le domaine il est primordial de communiquer, 
                        le monde d'aujourd'hui est un monde d'images où l'impression produite est immédiate. 
                          </p>
                      <a href="detail_news1.html">Lire l'article <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top" src="assets/images/news2.jpg" alt="">
                  <div class="card-body text-left pr-0 pl-0">
                      <h5> L’IMPORTANCE DE COMMUNIQUER SUR LES RESEAUX SOCIAUX POUR UNE ENTREPRISE </h5>
                      <p class="card-text">Aujourd’hui, nous sommes nombreux dans le monde à utiliser Internet, l’arrivée des réseaux sociaux a bouleversé l’usage de la communication des entreprises </p>
                      <a href="detail_news2.html">Lire l'article <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
              </div>
          </div>
          <div>
              <div class="card text-center"><img class="card-img-top" src="assets/images/news3.jpg" alt="">
                  <div class="card-body text-left pr-0 pl-0">
                      <h5> POURQUOI EST-CE IMPORTANT DE LIRE ? </h5>
                      <p>  Une étude a été faite pour savoir combien de personnes sont fans de l ecture, sur 100 %, on
a noté 20 % de oui et 80 % de non. La l ecture n’est plus d’actualité, l es gens ne l isent plus,
lire devient difficile à cause du brouhaha du quotidien.</p>
                      <a href="detail_news3.html">Lire l'article <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
              </div>
          </div>
         
          <div>
              <div class="card text-center"><img class="card-img-top" src="assets/images/news3.jpg" alt="">
                  <div class="card-body text-left pr-0 pl-0">
                      <h5>Morbi faucibus odio sollicitudin
                          risus scelerisque dignissim. </h5>
                      <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                          et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                          . . . </p>
                      <a href="#">Lire l'article <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- 
  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                  <li><i class="fa fa-users"></i> TemplateMo</li>
                  <li><i class="fa fa-folder"></i> Branding</li>
                </ul>
                <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                <div class="main-blue-button">
                  <a href="#">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                  <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                  <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <section class="home-newsletter">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
      <div class="single">
        <h2>Abonnez-vous a notre newsletter</h2>
        <form action="" method="post">
      <div class="input-group">
             <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
             <span class="input-group-btn">
             <button class="btn btn-theme" type="submit">S'abonner</button>
             </span>
              </div>
            </form>
      </div>
    </div>
    </div>
    </div>
    </section>
  
    <style>
      .home-newsletter {
  padding: 80px 0;
  background: #000000;
  }
  
  .home-newsletter .single {
  max-width: 650px;
  margin: 0 auto;
  text-align: center;
  position: relative;
  z-index: 2; }
  .home-newsletter .single h2 {
  font-size: 22px;
  color: white;
  text-transform: uppercase;
  margin-bottom: 40px; }
  .home-newsletter .single .form-control {
  height: 50px;
  background: rgba(255, 255, 255, 0.6);
  border-color: transparent;
  border-radius: 20px 0 0 20px; }
  .home-newsletter .single .form-control:focus {
  box-shadow: none;
  border-color: #e70202; }
  .home-newsletter .single .btn {
  min-height: 50px; 
  border-radius: 0 20px 20px 0;
  background: #00ac17;
  color: #fff;
  }
    </style>



<?php

if(!empty($_POST))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $message = $_POST['message'];
}

// connection a la base de donées
$bdd = new PDO('mysql:host=localhost;dbname=smart;charset=utf8', "root", "");

$req= $bdd->prepare('INSERT INTO contact SET nom=?,prenom=?,email=?,message=?');
$req->execute([$nom,$prenom,$email,$message]);


?>
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Let's stay in touch</h2>
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
                  <input type="surname" name="prenom" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
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

  <style>
    /* footer social icons */
  ul.social-network {
    list-style: none;
    display: inline;
    margin-left:0 !important;
    padding: 0;
  }
  ul.social-network li {
    display: inline;
    margin: 0 5px;
  }
  
  
  /* footer social icons */
  .social-network a.icoRss:hover {
    background-color: #F56505;
  }
  .social-network a.icoFacebook:hover {
    background-color:#3B5998;
  }
  .social-network a.icoTwitter:hover {
    background-color:#33ccff;
  }
  .social-network a.icoGoogle:hover {
    background-color:#BD3518;
  }
  .social-network a.icoVimeo:hover {
    background-color:#0590B8;
  }
  .social-network a.icoLinkedin:hover {
    background-color:#007bb7;
  }
  .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
  .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
    color:#fff;
  }
  a.socialIcon:hover, .socialHoverClass {
    color:#44BCDD;
  }
  
  .social-circle li a {
    display:inline-block;
    position:relative;
    margin:0 auto 0 auto;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    text-align:center;
    width: 50px;
    height: 50px;
    font-size:20px;
  }
  .social-circle li i {
    margin:0;
    line-height:50px;
    text-align: center;
  }
  
  .social-circle li a:hover i, .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
  }
  .social-circle i {
    color: #fff;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
  }
  
   
  </style>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
       
    

          <div class="col-md-12" style="margin-left: 450px; margin-top: -20px;">
            <ul class="social-network social-circle" >
               
                <li><a href="https://www.facebook.com/smartvisioncongo" class="icoFacebook" title="Facebook" style="background-color: #3B5998;"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/smartvisioncg/" class="icoTwitter" title="Twitter" style="background-color: #33ccff;"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/smart_vision_cg/" class="icoInstagram" title="Google +" style="background-color: #BD3518;"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin" style="background-color: #007bb7;"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin" style="background-color: #fc2c11;"><i class="fa fa-youtube"></i></a></li>
            </ul>				
          </div>
       
        
        </div>
      </div>
    </div>
    <p>© Copyright Smart vision.</p> 
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