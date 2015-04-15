<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="" >
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homepage - Del Event Application </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>




        <header id="ccr-header">
            <section id="ccr-nav-top" class="fullwidth">
                <div class="">
                    <div class="container">
                        <nav class="top-menu">
                            <!--<ul class="left-top-menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                            </ul><!-- /.left-top-menu -->

                            <ul class="right-top-menu pull-right">
                                <?php
//                                array('label' => 'ALL BOOKS', 'url' => array('book/index')),
//                                array('label' => 'ALL COPIES', 'url' => array('copies/index')),
//                                ),
                                ?>
                                <li><a href="login.html">Login</a>&nbsp;</li>
                                <li><a href="login.html">Register</a>&nbsp;</li>
                                <li>
                                    <form class="form-inline" role="form" action="#">
                                        <input type="search" placeholder="Search here..." required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul> <!--  /.right-top-menu -->
                        </nav> <!-- /.top-menu -->
                    </div>
                </div>	
            </section> <!--  /#ccr-nav-top  -->



            <section id="ccr-site-title">
                <div class="container">
                    <div class="site-logo">
                        <a href="index.html" class="navbar-brand">
                            <img src="img/header4.png" alt="Side Logo" />
                        </a>
                    </div> <!-- / .navbar-header -->

                    <!--<div class="add-space">
                            <img src="img/Capture.PNG" alt="Side Logo" />
                    </div> <!-- / .adspace -->

                </div>	<!-- /.container -->
            </section> <!-- / #ccr-site-title -->



            <section id="ccr-nav-main">
                <nav class="main-menu">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-main">
                                <i class="fa fa-bars"></i>
                            </button> <!-- /.navbar-toggle -->
                        </div> <!-- / .navbar-header -->

                        <div class="collapse navbar-collapse ccr-nav-main">
                            <ul class="nav navbar-nav">
                                <li><a class="active" href="index.html">Home</a></li>
                                <li><a class="active" href="event.html">Event</a></li>
                                <li class="dropdown">
                                    <a href="#">Request<i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Incoming Request</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="allRequest.html">All Request</a></li>
                                                <li><a href="Accepted.html">Accepted</a></li>
                                                <li><a href="Rejected.html">Rejected</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="outComing.html">Outcoming Request</a></li>
                                        <li><a href="createRequest.html">Create Request</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li><!-- /.dropdown -->
                                <li class="dropdown"><a href="#">Profile <i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="changePassword.html">Change Password</a></li>
                                        <li><a href="viewProfil.html">View Profile</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="404.html">404</a></li>-->
                            </ul> <!-- /  .nav -->
                        </div><!-- /  .collapse .navbar-collapse  -->

                        <!--<div id="currentTime" class="pull-right current-time">
                                <i class="fa fa-clock-o"></i> 12:10 pm


                        </div><!-- / #currentTime -->

                    </div>	<!-- /.container -->
                </nav> <!-- /.main-menu -->
            </section> <!-- / #ccr-nav-main -->



            <section id="ccr-nav-below-main">
                <nav class="second-menu">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-below-main">
                                <i class="fa fa-bars"></i>
                            </button> <!-- /.navbar-toggle -->
                        </div> <!-- / .navbar-header -->

                        <div class="collapse navbar-collapse ccr-nav-below-main">
                            <ul class="nav navbar-nav">
                            </ul> <!-- /.nav /.navbar-nav -->
                        </div>

                        <!--<div class="ccr-language">
                                <ul> 
                                        <li>Language:</li>
                                        <li><a href="#"><img src="img/uk.png" alt="UK">English</a></li>
                                        <li><a href="#"><img src="img/france.png" alt="France">France</a></li><li>
                                        <a href="#"><img src="img/garman.png" alt="Garman">Garman</a></li>
                                </ul>
                        </div> <!-- /.ccr-language -->
                    </div><!-- /.container -->
                </nav><!-- /.second-menu -->
            </section><!-- / #ccr-nav-below-main -->

        </header> <!-- /#ccr-header -->



        <section id="ccr-main-section">
            <!--content -->
            <?php echo($content); ?>
        </section><!-- / #ccr-main-section -->

        <!--<aside id="ccr-footer-sidebar">
                <div class="container">
        
                        <ul>
                                <li class="col-md-3">
                                        <h5>About Us</h5>
                                        <div class="about-us">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias Ab veniam atque eius...
                                        </div>
                                        <div class="site-logo">
                                                <a href="index.html"><img src="img/logo.png" alt="Side Logo" /><h1>Daily <span>News</span></h1><h3>The Daily News Source</h3></a>
                                        </div>  / .navbar-header 
                                        
                                </li>
                                <li class="col-md-3">
                                        <h5>Popular Post</h5>
                                        <ul>
                                                <li>
                                                        <img src="img/thumbnail-small-1.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/sports-thumb-4.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/thumbnail-small-3.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/thumbnail-small-5.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
                                                </li>
                                        </ul>
                                        
                                </li>
                                <li class="col-md-3">
                                        <h5>Recent Post</h5>
                                        <ul>
                                                <li>
                                                        <img src="img/thumbnail-small-8.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/sports-thumb-6.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/thumbnail-small-7.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
                                                </li>
                                                <li>
                                                        <img src="img/thumbnail-small-6.jpg" alt="Avatar">
                                                        <a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
                                                </li>
                                        </ul>
                                        
                                </li>
                                <li class="col-md-3">
                                        <h5>Tags</h5>
                                        <div class="tagcloud">
                                                <a href="#">Football</a>
                                                <a href="#">Games</a>
                                                <a href="#">World News</a>
                                                <a href="#">USA</a>
                                                <a href="#">Salman</a>
                                                <a href="#">Masrafi</a>
                                                <a href="#">Afgan</a>
                                                <a href="#">Obama</a>
                                                <a href="#">t20</a>
                                                <a href="#">Business</a>
                                                <a href="#">Education</a>
                                                <a href="#">Lorem</a>
                                                <a href="#">Dhaka</a>
                                                <a href="#">BBC</a>
                                                <a href="#">Poland</a>
                                                <a href="#">Technology</a>
                                        </div>
                                        
                                </li>
                        </ul>
                </div>
                
        </aside>  /#ccr-footer-sidebar -->


        <footer id="ccr-footer">
            <div class="container">
                <div class="copyright">
                    &copy; 2014, Copyrights SYP 06
                </div> <!-- /.copyright -->

                <!--	 	<div class="footer-social-icons">
                                        <ul>
                                                <li>
                                                        <a href="#"  class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li >
                                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li >
                                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li >
                                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                        </ul>
                                        
                                </div>  /.cocial-icons -->

            </div> <!-- /.container -->
        </footer>  <!-- /#ccr-footer -->


        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>