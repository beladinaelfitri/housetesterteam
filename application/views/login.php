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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/all.css'?>">
    </head>
    <body class='body-secondary'>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper">
            <div class="header-items container-fluid">
                <div class="header-logo">
                    <a href="#"><img src="assets/img/htc_logo2.png" alt="Header Logo"></a>
                </div>
                <nav id="navbar-wrapper">   
                    <ul>
                        <li><a href="#">Review & Komentar</a></li>
                        <li><a href="#">Teruji di Rumah</a></li>
                        <li><a href="#">Terbaik</a></li>
                        <li><a href="#">Tanya Jawab</a></li>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Masuk</a></li>
                    </ul>
                    <a href="#" class="btn-white btn-regis">Gabung Sekarang</a>
                </nav>
            </div>
        </header>
        <section>
            <div class="container-fluid">
                <div class="section-container signin-section">
                    <div class="col-12 section-hd">
                        <h1 class='text-white'>Selamat datang kembali</h1>
                    </div>
                    <div class="col-12 section-fm text-center">
                        <div class="col-6 btn-join-wrapper">
                            <div class="col-12">
                                <button id="joinFacebook" class="btn-white"><i class="fab fa-facebook-square"></i>Masuk via Facebook</button>
                            </div>
                            <div class="col-12">
                                <button id="joinEmail" class="btn-white">Masuk via Email</button>
                            </div>
                        </div>
                        <div class="col-8 form-join-wrapper">
                            <form action="/" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-wrapper">
                                            <input type="text" id="email" name="email">
                                            <label for="email">Alamat email</label>
                                        </div>
                                        <div class="input-error">
                                            <span><!-- Error --></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-wrapper">
                                            <input type="password" id="password" name="password">
                                            <label for="password">Kata sandi</label>
                                        </div>
                                        <div class="input-error">
                                            <span><!-- Error --></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class='remember-wrapper'>
                                            <input type="checkbox">
                                            <label for="password">
                                                <span>Ingat saya</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btnApply btn-white" type="submit">Masuk Via Email</button>
                                        <div class='btnJoin'><a href="#" class='href-link'>Pengguna Baru? Daftar Sekarang</a></div>
                                        <div class='btnMember'><a href="#" class='href-link'>Lupa Kata Sandi?</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer-wrapper" class="container-fluid">
            <div class="footer-items">
                <div class="col-2 footer-logo">
                    <a href="#" target="_blank">
                        <img src="assets/img/bg-logo2_negative.png" alt="Footer Logo">
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
    </body>
</html>