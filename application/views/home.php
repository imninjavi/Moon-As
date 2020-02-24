<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Musyawarah Nasional FMKI 2020</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png')?>">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- <link rel="stylesheet" href=" <?php //echo base_url('assets/css/font-awesome.min.css')?>"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="<?php echo base_url('assets/images/loader.gif')?>" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/logo3.png')?>" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="<?php echo base_url('registrasi') ?>">Registrasi</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>MUSYAWARAH NASIONAL FMKI 2020</p>
                    
                    <div class="countdown countdown-container container ">
                        <div class="clock row">
                            <div class="clock-item clock-days countdown-time-value col-sm-2 col-md-2">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-days" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">0</p>
                                            <p class="type-days type-time">DAYS</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-hours countdown-time-value col-sm-2 col-md-2">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-hours" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">0</p>
                                            <p class="type-hours type-time">HOURS</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-minutes countdown-time-value col-sm-2 col-md-2">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-minutes" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">0</p>
                                            <p class="type-minutes type-time">MINUTES</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-seconds countdown-time-value col-sm-2 col-md-2">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-seconds" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">0</p>
                                            <p class="type-seconds type-time">SECONDS</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->
                        </div><!-- /.clock -->
                    </div><!-- /.countdown-wrapper -->

                    <small>Pendaftaran akan dibuka 2 minggu sebelum pelaksanaan acara.</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="<?php echo base_url('download') ?>" class="btn btn-primary wow slideInLeft">Download  <b class="fa fa-download"></b></a> &nbsp;&nbsp;&nbsp;<a href="registrasi.php" class="btn btn-default wow slideInRight">Registrasi</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="<?php echo base_url('assets/upload/device_01.png')?>" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>Musyawarah Nasional FMKI 2020 akan diselenggarakan di Kampus Bumi Sanapati Politeknik Siber dan Sandi Negara</h2>

                            <p>Musyawarah nasional yang diselenggarakan oleh Forum Mahasiswa Kedinasan Indonesia berlokasi di Bogor tepatnya di Kampus Bumi Sanapati, Politeknik Siber dan Sandi Negara. Acara ini akan diikuti oleh beberapa Perguruan Tinggi Kedinasan yaitu: </p>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>STSN</li>
                                        <li>STPI</li>
                                        <li>PKN STAN</li>
                                        <li>API Madiun</li>
                                        <li>STTD</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Polbangtan</li>
                                        <li>STMKG</li>
                                        <li>STIS</li>
                                        <li>AKA Migas</li>
                                        <li>PPI Curug</li>
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
                                        <li>Poltekim</li>
                                        <li>Poltekip</li>
                                        <li>Bebas1</li>
                                        <li>Bebas 2</li>
                                        <li>haha hihi</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-primary">Learn More About us</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>


        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="<?php echo base_url('assets/images/payments.png')?>" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Became a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-widget">   
                                <ul class="list-inline">
                                    <li><a href="#">course</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">language</a></li>
                                    <li><a href="#">teacher</a></li>
                                    <li><a href="#">speaking</a></li>
                                    <li><a href="#">material</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">learning</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">Pricing & Plans</a></li>
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="<?php echo base_url('assets/images/logo2.png')?>" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>Design : <a href="https://html.design">HTML.Design</a></li>
                                <li>Distributed by : <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/carousel.js')?>"></script>
    <script src="<?php echo base_url('assets/js/animate.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="<?php echo base_url('assets/js/videobg.js')?>"></script>
    <!-- Countdown Timer -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/kinetic.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.final-countdown.js')?>"></script>
    
    <script type="text/javascript">  
    $('document').ready(function() {
        'use strict';

        var start = Date.parse('Wed Feb 20 00:00:00 +0700 2020')/1000;
        var end = Date.parse('Wed Mar 27 00:00:00 +0700 2020')/1000;
        var now = new Date().getTime() / 1000;
        
    	$('.countdown').final_countdown({
            'start': start,
            'end': end,
            'now': now        
        });
    });
    </script>
    
</body>
</html>