<?php include '../include/header.php' ?>
<body>
<header class="main bg-dark-img home-1">
    <div class="container">
        <nav class="navbar" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img id="logo" src="../../../resource/front-end/img/logo.png" alt="eLearn" /></a>
            </div>
            <div class="collapse navbar-collapse" color="blue">
                <dr class="navbar-right menu-main">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="index.php"><span>Home</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Academic</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="../video/video-bn.php?class=1">Class 1</a></li>
                                <li><a href="../video/video-bn.php?class=2">Class 2</a></li>
                                <li><a href="../video/video-bn.php?class=3">Class 3</a></li>
                                <li><a href="../video/video-bn.php?class=4">Class 4</a></li>
                                <li><a href="../video/video-bn.php?class=5">Class 5</a></li>
                                <li><a href="../video/video-bn.php?class=6">Class 6</a></li>
                                <li><a href="../video/video-bn.php?class=7">Class 7</a></li>
                                <li><a href="../video/video-bn.php?class=jsc">JSC</a></li>
                                <li><a href="../video/video-bn.php?class=ssc">SSC</a></li>
                                <li><a href="../video/video-bn.php?class=hsc">HSC</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Explore</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="../video/video-bn.php?class=language">Language Skill</a></li>
                                <li><a href="../video/video-bn.php?class=software">Software Skills</a></li>
                                <li><a href="../video/video-bn.php?class=skill">Skills Development</a></li>
                                <li><a href="../video/video-bn.php?class=computer">Computer Science</a></li>
                                <li><a href="../video/video-bn.php?class=arts">Arts & Humanities</a></li>
                                <li><a href="../video/video-bn.php?class=others">others</a></li>
                            </ul>
                        </li>
                        <li><a href="../aboutus/about_us.php"><span>About us</span></a></li>
                           <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Login</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                    <li><a  href="../login/user_login.php">Sign in as student</a></li>
                                    <li><a href="../login/t_login.php">Teacher Login</a></li>
                                      <li><a href="../../admin-panel/admin/login.php">Admin login</a></li>
                               
                            </ul>
                        </li>
                        <li><a class="dropdown active" href="../forum/index.php"> Forum </a></li>
                    </ul>
                </div>

        </nav>


        <p class="header text-center text-white"><strong>Learning</strong> made easy via the <strong>internet</strong> <a href="../studnetreg/register.php" class="btn btn-theme btn-orange">Start today</a></p>

        <!-- Screens -->
        <div class="screens animation-domready">
            <p>
                <img src="../../../resource/front-end/img/slider_s1b.jpg" data-animation-delay="0.5s" data-animation="fadeInUp" class="img-responsive animated" alt="" />
                <img src="../../../resource/front-end/img/slider_s2b.jpg" data-animation-delay="1.5s" data-animation="fadeInUp" class="img-responsive animated" alt="" />
                <img src="../../../resource/front-end/img/blog_img_1.jpg" data-animation-delay="2.5s" data-animation="fadeInUp" class="img-responsive animated" alt="" />
            </p>
        </div>

    </div>
        </header>



<div class="container content content-light">
    <section class="row animation-scroll">
        <figure class="col-md-6 animated" data-animation="bounceInLeft"><img src="../../../resource/front-end/img/home1_img1.png" alt="" /></figure>
        <article class="col-md-6 animated" data-animation="bounceInRight">
            <h3><strong>Learn</strong> from your <strong>home or office</strong></h3>
            <p>We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business.</p>
            <a href="#" class="link-more">Check out the library <i class="fa fa-arrow-right "></i></a>
        </article>
    </section>
    <section class="content content-light">
        <div class="container">
            <p class="text-center"><a href="" class="btn btn-theme btn-gray"> Academic </a></p>
            <!-- Category boxes with icon & name -->
            <div class="row category-box-row">
                <hr class="invisible" />

                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=1" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 1</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=2" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 2</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=3" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 3</h2>
                    </a>
                </div>
                <!-- Category boxes with icon & name -->

                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=4" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 4</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=5" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 5</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=6" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 6</h2>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=7" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Class 7</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=jsc" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>JSC</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=ssc" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>SSC</h2>
                    </a>
                </div>
                <!-- Category boxes with icon & name -->

                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=hsc" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>HSC</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=software" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Software</h2>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="../video/video-bn.php?class=language" class="category-box-item">
                        <i class="fa fa-book fa-5x"></i>
                        <h2>Language</h2>
                    </a>
                </div>
            </div>

    </section>
</div>

<section class="content content-dark testimonial">
    <div class="container">
        <p class="header text-center text-white">We are <strong>50</strong> creative teachers so far</p>
        <div class="face">
            <a href="#tab-nicole-kidman" data-toggle="tab"><img src="../../../resource/front-end/img/face/15.png" alt="Nicole Kidman" /></a>
            <a href="#tab-leland-orser" data-toggle="tab"><img src="../../../resource/front-end/img/face/20.png" alt="Leland Orser" /></a>
            <a href="#tab-henry-cavill" data-toggle="tab"><img src="../../../resource/front-end/img/face/2.png" alt="Henry Cavill" /></a>
            <a href="#tab-andres-gertrudix" data-toggle="tab"><img src="../../../resource/front-end/img/face/22.png" alt="Andres Gertrudix" /></a>
            <a href="#tab-justin-biber" data-toggle="tab"><img src="../../../resource/front-end/img/face/10.png" alt="Justin Biber" /></a>
        </div>

        <a href="../studnetreg/register.php" class="btn btn-theme btn-green">Start teaching</a>
    </div>
</section>

<section class="content content-light">
    <div class="container">
        <p class="header text-center"><strong>Demo</strong> online base  <strong>tutorials</strong></p>
        <p class="text-center"></p>

        <hr class="invisible" />

        <div class="row">
            <div class="col-md-6">                
                <a class="video-prev video-play-here" href="http://www.youtube.com/v/9QscURRuF0g&amp;autoplay=1" style="height:255px; background-image:url('../../../resource/front-end/i1.ytimg.com/vi/9QscURRuF0g/maxresdefault.jpg');"></a>
            </div>
            <div class="col-md-6">
                
                <a class="video-prev video-play-here" href="http://www.youtube.com/v/9QscURRuF0g&amp;autoplay=1" style="height:255px; background-image:url('../../../resource/front-end/i1.ytimg.com/vi/9QscURRuF0g/maxresdefault.jpg');"></a>
            </div>
        </div>
    </div>
</section>

<?php include '../include/footer.php' ?>