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
    <title>Registrasi</title>
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
        <img class="preloader" src="<?php echo base_url('images/loader.gif')?>" alt="">
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

        <header class="header" style="background-color: #222222">

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
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section class="parallax event-section" style="padding: 10rem 0">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Registrasi</h3>
                    <p>Silakan pilih pendaftaran Anda</p>
                </div><!-- end title -->

                <div class="row text-center" style="padding-left: 25%">
                    <div class="col-md-4 col-sm-6">
                        <div class="teammembers">
                            <div class="entry">
                                <img src="<?php echo base_url('assets/upload/delegasi.png')?>" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="visible-buttons1 teambuttons">
                                        <p>Daftarkan diri Anda sebagai perwakilan dari masing-masing PTK</p>
                                    </div>
                                </div>
                            </div><!-- end box -->
                            <div class="teamdesc">
                                <!-- <h4>Delegasi</h4> -->
                                <div class="btn-wrapper">
                                    <div class="text-center">
                                        <a href="<?php echo base_url('registrasi/delegasi') ?>" class="btn btn-primary">Delegasi</a> 
                                    </div>
                                </div>
                            </div><!-- end teamdesc -->
                        </div><!-- end teammembers -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="teammembers">
                            <div class="entry">
                                <img src="<?php echo base_url('assets/upload/pengurus.png')?>" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="visible-buttons1 teambuttons">
                                        <p>Daftarkan diri Anda sebagai perwakilan pengurus FMKI dari masing-masing PTK</p>
                                    </div>
                                </div>
                            </div><!-- end box -->
                            <div class="teamdesc">
                                <!-- <h4>Pengurus</h4> -->
                                <div class="btn-wrapper">
                                    <div class="text-center">
                                        <a href="<?php echo base_url('registrasi/pengurus') ?>" class="btn btn-primary">Pengurus</a> 
                                    </div>
                                </div>
                            </div><!-- end teamdesc -->
                        </div><!-- end teammembers -->
                    </div><!-- end col -->
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
    <script src="<?php echo base_url('assets/js/parallax.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/animate.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="<?php echo base_url('assets/js/videobg.js')?>"></script>

</body>
</html>