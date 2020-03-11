<!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login JSDP Portal</title>
    <meta name="description" content="Sistem Informasi yang menampilkan JSDP mahasiswa Universitas Pembangunan Jaya" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="<?php echo base_url() ?>assett/favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assett/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand align-items-center" href="#">
                    <img class="brand-img d-inline-block mr-5" src="<?php echo base_url() ?>assett/dist/img/logo4.png" alt="brand" /><span class="text-white font-23"></span>
                </a>
                <!-- <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div> -->
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?php echo base_url() ?>assett/dist/img/bg7_2.jpg);">
                                <!-- <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Understand and look deep into nature.</h1>
                                        <p class="text-white">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. Again during the 90s as desktop publishers bundled the text with their software.</p>
                                    </div>
                                </div> -->
                                <!-- <div class="bg-overlay bg-trans-dark-50"></div> -->
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?php echo base_url() ?>assett/dist/img/bg5.jpg);">
                                <!-- <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Experience matters for good applications.</h1>
                                        <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                    </div>
                                </div> -->
								<!-- <div class="bg-overlay bg-trans-dark-50"></div> -->
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?php echo base_url() ?>assett/dist/img/bg6.jpg);">
                                <!-- <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Experience matters for good applications.</h1>
                                        <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                    </div>
                                </div> -->
								<!-- <div class="bg-overlay bg-trans-dark-50"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                        <div style="border: 1px dotted black;padding:50px; background-color:white; margin:auto;">
                            <div class="auth-form w-xxl-100 w-xl-100 w-sm-100 w-xs-100 mx-1">
                                    <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                                        <h1 class="display-4 mb-20 text-center">Login Form</h1>
                                        <img src="<?php echo base_url() ?>assett/dist/img/logo6.png" class="text-center mb-20">
                                        <div class="form-group">
                                            <input class="form-control" name="username" placeholder="Email / NIM / NIP" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" name="password" placeholder="Password" type="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="custom-control custom-checkbox mb-25">
                                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                            <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                        </div> -->
                                        <button class="btn btn-warning btn-block" type="submit">Login</button>
                                        <!-- <p class="font-14 text-center mt-15">Having trouble logging in?</p> -->
                                        <!-- <div class="option-sep">or</div> -->
                                        <!-- <div class="form-row">
                                            <div class="col-sm-6 mb-20">
                                                <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                            </div>
                                            <div class="col-sm-6 mb-20">
                                                <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                            </div>
                                        </div>
                                        <p class="text-center">Do have an account yet? <a href="#">Sign Up</a></p> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assett/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo base_url() ?>assett/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/init.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/login-data.js"></script>
</body>

</html>