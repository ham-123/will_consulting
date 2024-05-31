<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ Route('accueil') }}" />
    <meta name="description"
        content="Will Consulting est une entreprise de conseil en comptabilité dédiée à fournir des solutions financières innovantes. Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins spécifiques et proposer des stratégies efficaces pour améliorer leur santé financière.      " />
    <meta name="keywords" content="WILL CONSULTING">
    <meta property="og:title" content="Bienvenus">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="">
    <meta property="og:url" content="{{ Route('accueil') }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <link href="images/fav-icon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/fav-icon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/fav-icon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/fav-icon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">




    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="vendor/html5shiv.js"></script>
    <script src="vendor/respond.js"></script>


</head>

<body>
    <div class="main-page-wrapper">
        <header>
            <div class="top-header">
                <div class="container">
                    <div class="logo float-left"><a href="{{ Route('accueil') }}"><img src="images/logo/logo.png"
                                alt="Logo"></a></div>
                    <ul class="float-right">
                        <li><i class="flaticon-mail"></i> willconsulting_info@gmail.com</li>
                        <li><i class="flaticon-phone"></i> +229 62246524</li>
                        <li><a href="#" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="theme-main-menu">
                <div class="container">
                    <nav id="mega-menu-holder" class="clearfix s-bg-color">
                        <ul class="clearfix">
                            <li class="{{ request()->is('/') ? 'activee' : '' }}">
                                <a href="{{ route('accueil') }}">Accueil</a>
                            </li>
                            <li class="{{ request()->is('a-propos') ? 'activee' : '' }}">
                                <a href="{{ route('a_propos') }}">A-Propos</a>
                            </li>
                            <li class="{{ request()->is('services') ? 'activee' : '' }}">
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="{{ request()->is('formations') ? 'activee' : '' }}">
                                <a href="{{Route ('formations')}}">Formation</a>
                            </li>
                            <li class="{{ request()->is('recrutement') ? 'activee' : '' }}">
                                <a href="#">Recrutement</a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'activee' : '' }}">
                                <a href="contact.html">Contact</a>
                            </li>
                            <li class="quote float-right p-bg-color hvr-icon-wobble-horizontal">
                                <a href="#">Contacter nous
                                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <style>
                .activee>a {
                    color: #35b8f8 !important;
                    font-weight: bold;
                }
            </style>

        </header>

        @yield('content')


        <footer>
            <div class="container">
                <div class="top-footer row">
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-logo">
                        <a href="#"><img src="images/logo/logo2.png" alt="Logo"></a>
                        <p>Nous sommes spécialisés dans le conseil en comptabilité et offrons des services aux
                            entreprises, aux professionnels de la finance, ainsi qu'aux cabinets d'experts-comptables.
                            Consultez notre travail le plus récent dans notre profil. . . .</p>
                        <h6>Suivez-nous</h6>
                        <ul>
                            <li><a href="#" class="tran3s"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" class="tran3s"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-dribbble"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-12 footer-list">
                        <h6>À propos</h6>
                        <ul>
                            <li><a href="index.html" class="tran3s">Accueil</a></li>
                            <li><a href="#" class="tran3s">Partenaires commerciaux</a></li>
                            <li><a href="#" class="tran3s">Services</a></li>
                            <li><a href="faq.html" class="tran3s">FAQ</a></li>
                            <li><a href="about-us.html" class="tran3s">À propos de nous</a></li>
                            <li><a href="blog-grid.html" class="tran3s">Blog</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-12 footer-list">
                        <h6>Liens courts</h6>
                        <ul>
                            <li><a href="service-v1.html" class="tran3s">Services</a></li>
                            <li><a href="#" class="tran3s">Croissance commerciale</a></li>
                            <li><a href="project-v3.html" class="tran3s">Projets</a></li>
                            <li><a href="#" class="tran3s">Études de cas</a></li>
                            <li><a href="#" class="tran3s">Confidentialité</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-xs-12 Subscribe">
                        <h6>Abonnez-vous</h6>
                        <p>Inscrivez-vous à notre liste de diffusion pour recevoir les dernières mises à jour et offres.
                        </p>
                        <form action="#">
                            <input type="email">
                            <button class="tran3 p-bg-color hvr-bounce-to-right">S'abonner</button>
                        </form>
                        <p>Horaires de travail : du lundi au samedi<br> Fermé : le dimanche</p>
                    </div> <!-- /.Subscribe -->
                </div> <!-- /.top-footer -->
            </div> <!-- /.container -->

            <div class="bottom-footer">
                <div class="container">
                    <p>Droit d'auteur &copy; 2017 <a href="#" class="tran3s p-color">Snappy</a> Template par <a
                            href="http://themeforest.net/user/themazine/portfolio" class="tran3s p-color"
                            target="_blank">Themazine</a></p>
                </div> <!-- /.container -->
            </div> <!-- /.bottom-footer -->
        </footer>

        <button class="scroll-top tran3s">
            <img src="images/fav-icon/icon.png" alt="icon">
        </button>
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
        <!-- Bootstrap Select JS -->
        <script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

        <!-- Vendor js _________ -->
        <!-- revolution -->
        <script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
        <!-- menu  -->
        <script type="text/javascript" src="vendor/menu/src/js/jquery.slimmenu.js"></script>
        <script type="text/javascript" src="vendor/jquery.easing.1.3.js"></script>
        <!-- fancy box -->
        <script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
        <!-- js count to -->
        <script type="text/javascript" src="vendor/jquery.appear.js"></script>
        <script type="text/javascript" src="vendor/jquery.countTo.js"></script>
        <!-- Theme js -->
        <script type="text/javascript" src="js/theme.js"></script>
        


    </div> <!-- /.main-page-wrapper -->
</body>

<!-- Mirrored from themazine.com/html/snappy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 May 2024 17:42:11 GMT -->

</html>
