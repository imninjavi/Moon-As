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
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/logo2.png')?>">

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
                            <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo3.png')?>" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                            <li><a href="<?php echo base_url('registrasi') ?>">Registrasi</a></li>
                            <!-- <li><a href="page-contact.html">Contact</a></li> -->
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
                    
                    <div class="countdown countdown-container container hidden-xs">
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

                    <small>28 - 29 Maret 2020, Bumi Sanapati Politeknik Siber dan Sandi Negara</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="<?php echo base_url('download') ?>" class="btn btn-primary wow slideInLeft">Download  <b class="fa fa-download"></b></a> &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('registrasi') ?>" class="btn btn-default wow slideInRight">Registrasi</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>More<i class="fa fa-angle-down"></i></span>
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
                            <h2 class="wow slideInDown" style="margin-top: 5px">Musyawarah Nasional (MUNAS) FMKI 2020</h2>

                            <p class="wow slideInRight" align="justify">Menjadi program tahunan FMKI, kali ini MUNAS hadir dengan nuansa yang berbeda. Terinspirasi dari warna-warni keberagaman dan keunikan mahasiswa kedinasan yang tersebar dari Sabang hingga Merauke, Pelangi Khatulistiwa lahir dan tercipta, membawa misi sinergitas nusantara dengan menjunjung tinggi nasionalisme dan solidaritas. Pelangi Khatulistiwa merupakan tema kegiatan nasional pertama Politeknik Siber dan Sandi Negara (Poltek SSN), tuan rumah MUNAS 2020. Transformasi Poltek SSN ini akan membawa semangat, inovasi, dan kreativitas baru yang akan dituangkan pada rangkaian kegiatan MUNAS 2020.</p>
                            
                            <p class="wow slideInRight">Pelangi Khatulistiwa akan semakin bersinar dengan warna-warni PTK, yakni: </p>

                            <hr style="margin: 15px 0; border: 0">

                            <div class="row wow slideInUp">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first">
                                    <ul class="check">
                                        <li>AAL</li>
                                        <li>AKMIL</li>
                                        <li>AAU</li>
                                        <li>AKPOL</li>
                                        <li>ATKP</li>
                                        <li>IPDN</li>
                                        <li>POLTEKIP</li>
                                        <li>POLTEKIM</li>
                                        <li>POLBANGTAN</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <ul class="check">
                                        <li>POLTEK AKA</li>
                                        <li>POLTEK ATK</li>
                                        <li>POLTEKPEL</li>
                                        <li>STIP</li>
                                        <li>PIP</li>
                                        <li>PPI</li>
                                        <li>STTD</li>
                                        <li>PKTJ</li>
                                        <li>POLTEKBANG</li>
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last">
                                    <ul class="check">
                                        <li>POLTRANS SDP</li>
                                        <li>POLTEK KP</li>
                                        <li>STP</li>
                                        <li>PEM Akamigas</li>
                                        <li>AKMET</li>
                                        <li>POLTEKSOS</li>
                                        <li>POLTEK APP</li>
                                        <li>STPN</li>
                                        <li>POLTEK STMI</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <ul class="check">
                                        <li>POLTEK STAT STIS</li>
                                        <li>POLTEK STTT</li>
                                        <li>STSN</li>
                                        <li>PKN STAN</li>
                                        <li>STTN BATAN</li>
                                        <li>STMKG</li>
                                        <li>POLTEKKES</li>
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            <hr class="invis">

                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="<?php echo base_url('assets/upload/mekanisme.jpeg')?>" alt="" class="img-responsive wow slideInUp">
                        </div><!-- end module -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>


        

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="text-center">
                        <div class="cop-logo">
                            <ul class="list-inline">
                                <li>Forum Mahasiswa Kedinasan Indonesia</li>
                                <a href="#"><img src="<?php echo base_url('assets/images/logo2.png')?>" alt=""></a>
                                <li>Politeknik Siber dan Sandi Negara</li>
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

        var start = Date.parse('Wed Feb 25 00:00:00 +0700 2020')/1000;
        var end = Date.parse('Wed Mar 28 00:00:00 +0700 2020')/1000;
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