<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Tester Club</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon shortcut" href="<?php echo base_url().'assets/img/favicon.ico'?>" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/slick.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/slick-theme.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/all.css'?>"> 
    </head>
    <body class='body-sc'>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper">
            <div class="header-items container-fluid">
                <div class="header-logo">
                    <a href="<?php echo site_url().'/UserController/Homepage';?>"><img src="<?php echo base_url().'assets/img/htc_logo2.png'?>" alt="Header Logo"></a>
                </div>
                <nav id="navbar-wrapper">   
                    <ul>
                        <li><a href="<?php echo site_url().'/UserController/Produk';?>">Review & Komentar</a></li>
                        <li><a href="#">Teruji di Rumah</a></li>
                        <li><a href="#">Terbaik</a></li>
                        <li><a href="#">Tanya Jawab</a></li>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="<?php echo site_url().'/UserController/Login';?>">Masuk</a></li>
                    </ul>
                    <a href="<?php echo site_url().'/UserController/Register';?>" class="btn-white btn-regis">Gabung Sekarang</a>
                </nav>
            </div>
        </header>
        <section>
            <div class="container-fluid">
                <div class="container-inner col-12 pt-3 mt-5">
                    <div class="welcomeHead row m-0 mb-4">
                        <div class="col-12">
                            <h1 class="text-center txt-white">Selamat datang kembali</h1>
                        </div>
                    </div>
                    <div class="row m-0 mb-4">
                        <div class="col-12 text-center">
                            <div class="col-6 m-auto">
                                <button class="btn-white mb-4"><i class="fab fa-facebook-square text-size-20 pr-2"></i>Masuk via Facebook</button>
                            </div>
                            <div class="col-6 m-auto">
                                <button class="btn-white" id="btnEmailLogin">Masuk via Email</button>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="input-login col-8 m-auto d-none">
                            <form action="<?php echo site_url().'/UserController/Login';?>" method="POST" id="frmLogin">
                                <div class="row pb-3">
                                    <div class="input-outer col-12 mb-2">
                                        <div class="input-wrapper">
                                            <input type="text" id="email" name="email" required>
                                            <label for="email">Alamat email</label>
                                        </div>
                                        <div class="input-error">
                                            <span>
                                                <?= form_error('email') ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               <div class="row pb-4">
                                    <div class="input-outer col-12 mb-2">
                                        <div class="input-wrapper">
                                            <input type="password" id="password" name="password" required>
                                            <label for="password">Kata sandi</label>
                                        </div>
                                        <div class="input-error">
                                            <span>
                                                <?= form_error('password') ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="input-login input-outer col-12 text-center mb-4 d-none">
                            <button class="btn-white" type="submit" form="frmLogin">Masuk Via Email</button>
                        </div>
                        <div class="input-outer col-12 text-center text-uppercase">
                            <a href="<?php echo site_url().'/UserController/Register';?>" class='href-link'>Pengguna Baru? Daftar Sekarang</a>
                        </div>
                        <div class="input-outer col-12 text-center text-uppercase">
                            <a href="<?php echo site_url('UserController/ForgotPassword')?>" class='href-link'>Lupa Kata Sandi?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer-wrapper" class="container-fluid">
            <div class="footer-items">
                <div class="col-2 footer-logo">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url().'assets/img/bg-logo2_negative.png'?>" alt="Footer Logo">
                    </a>
                </div>
                <div class="col-4 footer-text">
                    © 2019 Buchanan Group. All Rights Reserved.
                </div>
                <div class="col-6 footer-sitemap footer-text">
                    <ul>
                        <li><a href="">Ganti Negara</a></li>
                        <li><a href="">Tanya Jawab</a></li>
                        <li><a href="">Bantuan</a></li>
                        <li><a href="">Syarat</a></li>
                        <li><a href="">Privasi</a></li>
                        <li><a href="">Pemberitahuan</a></li>
                        <li><a href="">Hak Cipta DMCA</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script> 
        <script type="text/javascript" src="<?php echo base_url().'assets/js/slick.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/app.js'?>"></script>
    </body>
</html>