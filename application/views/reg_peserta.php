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
    <title>Registrasi Peserta</title>
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
        <img class="preloader" src="images/loader.gif" alt="">
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

        <header class="header" style="background-color: #333333">

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

        <section class="section db p120" style="background-image: url('<?php echo base_url("assets/images/bg2.jpg") ?>'); background-repeat: no-repeat; background-position: center top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Registrasi Peserta</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title text-center">
                                <h3>Formulir Registrasi</h3>
                                <p>Harap mengisi formulir berikut dengan sebenar-benarnya.</p>
                            </div><!-- end title -->

                            <?php echo validation_errors(); ?>
                            <?php echo $error; ?>
                            <?php echo form_open_multipart('registrasi/regis_peserta', 'class="big-contact-form"') ?>
                                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap">
                                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                                <input type="number" name="nik" class="form-control" placeholder="NIK">
                                <select name="ptk" class="form-control">
                                    <option disabled selected>Asal PTK</option>
                                    <option>AAL</option>
                                    <option>AKMIL</option>
                                    <option>AAU</option>
                                    <option>AKPOL</option>
                                    <option>ATKP</option>
                                    <option>IPDN</option>
                                    <option>POLTEKIP</option>
                                    <option>POLTEKIM</option>
                                    <option>POLBANGTAN</option>
                                    <option>POLTEK AKA</option>
                                    <option>POLTEK ATK</option>
                                    <option>POLTEKPEL</option>
                                    <option>STIP</option>
                                    <option>PIP</option>
                                    <option>PPI</option>
                                    <option>STTD</option>
                                    <option>PKTJ</option>
                                    <option>POLTEKBANG</option>
                                    <option>POLTRANS SDP</option>
                                    <option>POLTEK KP</option>
                                    <option>STP</option>
                                    <option>PEM Akamigas</option>
                                    <option>AKMET</option>
                                    <option>POLTEKSOS</option>
                                    <option>POLTEK APP</option>
                                    <option>STPN</option>
                                    <option>POLTEK STMI</option>
                                    <option>POLTEK STAT STIS</option>
                                    <option>POLTEK STTT</option>
                                    <option>STSN</option>
                                    <option>PKN STAN</option>
                                    <option>STTN BATAN</option>
                                    <option>STMKG</option>
                                    <option>POLTEKKES</option>
                                </select>
                                <input type="text" name="nim" class="form-control" placeholder="NIM/NPM/NRP/NIT">
                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                                <input type="number" name="telp" class="form-control" placeholder="Nomor telepon">
                                <select name="agama" class="form-control">
                                    <option disabled selected>Agama</option>
                                    <option>Islam</option>
                                    <option>Katolik</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                                Upload foto dan dokumen (dalam bentuk *.zip atau *.rar)
                                <input type="file" name="dokumen">
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
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
    <script src="<?php echo base_url('assets/js/animate.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
    <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>