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
    <title>JSDP 404</title>
    <meta name="description" content="Halaman tidak ditemukan. Universitas Pembangunan Jaya. Jaya SoftSkill Development Point" />

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
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-25 w-sm-50 w-100">
                                <a class="d-flex auth-brand align-items-center justify-content-center mb-45" href="#">
									<img class="brand-img d-inline-block mr-5" src="<?php echo base_url() ?>assett/dist/img/logo2.png" alt="brand" /><span class="text-dark font-23">JSDP</span>
								</a>
                                <form class="text-center">
                                    <h2 class="display-6 mb-10 text-center">404. Halaman / berkas Tidak ditemukan</h2>
                                    <p class="mb-30 text-center">Maaf halaman yang Anda cari tidak ditemukan.Silakan hubungi <a href="#"><u>Administrator</u></a>.</p>
                                    <button type="button" onclick="window.history.back()" class="btn btn-info btn-sm mb-10"><i class="fa fa-arrow-left"></i> Kembali ke Halaman Sebelumnya</button><br>
                                    <a type="button" href="<?php echo site_url() ?>dashboard" class="btn btn-info btn-sm"><i class="fa fa-home"></i> Kembali ke Dashboard</a>
                                </form>
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

    <!-- FeatherIcons JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/init.js"></script>
</body>

</html>