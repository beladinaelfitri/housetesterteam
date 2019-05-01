<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js head-tp><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Tester Club</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css')?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/all.css')?>"> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper">
            <div class="header-items container-fluid bg-transparent">
                <div class="header-logo">
                    <a href="<?php echo site_url('UserController/index')?>"><img src="<?php echo base_url('assets/img/htc_logo2.png')?>" alt="Header Logo"></a>
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
                    <a href="<?php echo site_url('UserController/join')?>" class="btn-white btn-regis">Gabung Sekarang</a>
                </nav>
            </div>
        </header>
        <section>
            <div class="carousel fade-carousel" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <div class="carousel-inner">
                    <div class="slide-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/ID_homeHero.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">                            
                                    <span class="member-counter">1.843.227</span> member saling membantu untuk berbelanja lebih baik
                                </h1>
                                <h2>Hanya antara Kamu dan jutaan pembeli lainnya, berbagi pengetahuan dan menyampaikan pendapat dengan apa adanya.</h2>
                            </hgroup>
                            <div class="slide-btns text-center">
                                <div><a href="<?php echo site_url('UserController/join')?>" class="btn-white">Gabung Sekarang</a></div> 
                                <div class="mt-4"><a href="#" class="btn-white">Tonton Videonya</a></div>
                            </div>
                        </div>
                        <div class="slide-down-arrow">
                            <span class="fa fa-angle-down fa-3x white-color" onclick="scrollTo('.homeQuotes', 500);"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeQuotes row m-0">
                    <div class="primary col-6">
                        <h1 class="text-left txt-purple">Tempatnya pembeli membantu pembeli lainnya</h1>
                        <p class="body-font text-size-18 mt-4 mb-4">Bergabunglah dengan komunitas pembeli terbesar di dunia, dimana kamu bisa mendapatkan informasi untuk dapat berbelanja lebih baik dan berbagi semua yang kamu ketahui untuk membantu pembeli lainnya dalam berbelanja. Pengalaman produk dan percakapan yang apa adanya.</p>
                        <a href="#" class="btn-orange mt-2">Gabung sekarang</a>
                    </div>
                    <div class="secondary col-6 p-0" style="background-image:url('<?php echo base_url('assets/img/ID_homeQuote.jpg')?>');">
                        <p>Hanya dengan berbagi pendapat dan pengetahuan, kita sudah membantu orang lain.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeAdv row pt-3 pb-5 m-0">
                    <div class="col-3 text-center">
                        <div class="Adv-icon">
                            <img src="<?php echo base_url('assets/img/icons/box.png')?>" alt="adv-icon">
                        </div>
                        <div class="Adv-text mt-4">
                            <span class="head-font text-size-26">Lihat Produk Unggulan</span>
                            <p class="body-font text-size-20 pt-2 pb-0">dan yang bukan unggulan</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-icon">
                            <img src="<?php echo base_url('assets/img/icons/star.png')?>" alt="adv-icon">
                        </div>
                        <div class="Adv-text mt-4">
                            <span class="head-font text-size-26">Menangkan kompetisi</span>
                            <p class="body-font text-size-20 pt-2 pb-0">dan hadiah bulanan</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-icon">
                            <img src="<?php echo base_url('assets/img/icons/trophy.png')?>" alt="adv-icon">
                        </div>
                        <div class="Adv-text mt-4">
                            <span class="head-font text-size-26">Dapatkan hadiah</span>
                            <p class="body-font text-size-20 pt-2 pb-0">dengan menyampaikan pendapatmu</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-icon">
                            <img src="<?php echo base_url('assets/img/icons/plane.png')?>" alt="adv-icon">
                        </div>
                        <div class="Adv-text mt-4">
                            <span class="head-font text-size-26">Bagikan pendapatmu</span>
                            <p class="body-font text-size-20 pt-2 pb-0">dan bantu konsumen lain membeli lebih baik</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeTestHead row m-0">
                    <div class="primary col-12">
                        <h1 class="text-left">Daftar untuk uji produk gratis di rumah</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="homeTest row m-0">
                    <div class="col-6">
                        <div class="Test-wrapper">
                            <div class="Test-bg" style="background-image:url(<?php echo base_url('assets/img/backgrounds/cookingbg.jpg')?>)">
                                <a href="#"><span class="link-spanner"> </span></a>
                            </div>
                            <div class="Test-content">
                                <div class="Test-head">
                                    <h2 class="text-white head-font text-size-32">Produk Gratis</h2>
                                </div>
                                <div class="Test-title mt-5">
                                    <h2 class="text-white text-uppercase">Bango Bumbu Kuliner Nusantara</h2>
                                </div>
                                <div class="Test-link mt-4">
                                    <a href="#" class="href-link2 text-uppercase text-size-18 text-white">Daftar ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="Test-wrapper">
                            <div class="Test-bg" style="background-image:url(<?php echo base_url('assets/img/backgrounds/drugsbg.jpg')?>)">
                                <a href="#"><span class="link-spanner"> </span></a>
                            </div>
                            <div class="Test-content">
                                <div class="Test-head">
                                    <h2 class="text-white head-font text-size-32">Produk Gratis</h2>
                                </div>
                                <div class="Test-title mt-5">
                                    <h2 class="text-white text-uppercase">Fitbes Force</h2>
                                </div>
                                <div class="Test-link mt-4">
                                    <a href="#" class="href-link2 text-uppercase text-size-18 text-white">Daftar ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homePromo row m-0">
                    <div class="primary col-6 p-0" style="background-image:url('<?php echo base_url('assets/img/backgrounds/ID_homePromo.jpg')?>');"></div>
                    <div class="secondary col-6">
                        <h1 class="text-left txt-purple">Survey & Surprise!</h1>
                        <p class="body-font text-size-18 mt-4 mb-4">Uji di rumah produk gratis hanya satu dari sekian banyak hal keren yang akan kamu temukan di Home Tester Club. Ada hadiah survei, lencana berhadiah dan aktivitas baru dan seru lain tiap bulannya. Di Home Tester Club, semakin kamu aktif, semakin banyak keuntungan yang kamu bisa dapatkan.</p>
                        <a href="#" class="btn-white mt-2">Mulai</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeProductHead row m-0">
                    <div class="col-9 pl-0">
                        <h1>Review produk terkini</h1>
                        <p class="text-white body-font text-size-18 pt-2">Inilah yang dibicarakan para penguji.</p>
                    </div>
                    <div class="col-3 pr-0 text-right">
                        <a href="#" class="btn-white mt-2">Lihat Semua</a>
                    </div>
                </div>
                <div class="homeProduct row m-0">
                    <div class="container">
                        <div class="slick-slider responsive-slider">
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/newpotabee.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Potabee Potato Chips Rasa Ayam Bakar</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        4,8 dari <a href="#" class="txt-black text-decoration-none"><span>184 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/lifebuoymatcha.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Lifebuoy Matcha</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        4,7 dari <a href="#" class="txt-black text-decoration-none"><span>56 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/nissinvegetable.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Nissin Vegetable Crackers</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        4,7 dari <a href="#" class="txt-black text-decoration-none"><span>57 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/calpicosoda.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Calpico Soda Orange</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        5,0 dari <a href="#" class="txt-black text-decoration-none"><span>15 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/rinsogentle.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Rinso Anti Noda Gentle</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        4,9 dari <a href="#" class="txt-black text-decoration-none"><span>42 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('<?php echo base_url('assets/img/products/nestleisocal.jpg')?>')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a href="#" class="txt-black text-decoration-none">
                                            <h5 class="text-center">Nestle Isocal</h5>
                                        </a>
                                    </div>
                                    <div class="revlist-star text-center text-size-32 pt-3">
                                        <span class="revlist-star-wrap">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                    </div>
                                    <div class="revlist-count text-center body-font text-size-18 pt-3">
                                        <a href="#" class="txt-black text-decoration-none"><span>11 Review & Komentar</span></a>
                                    </div>
                                    <div class="revlist-join text-center head-font text-size-18 mt-1">
                                        <span class="mr-3">Pernah mencoba?</span><span><a href="#" class="text-uppercase txt-black text-decoration-none">Berikan peringkat</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeJoin row m-0">
                    <div class="col-9 pl-0">
                        <h1 class="txt-purple">Ayo coba produk GRATIS!</h1>
                    </div>
                    <div class="col-3 pr-0 text-left">
                        <a href="<?php echo site_url('UserController/join')?>" class="btn-white mt-2">Gabung Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
		<section>
            <div class="container-fluid">
                <div class="marketing-wrapper row pb-4 mt-5">
                    <div class="marketing-logo col-10">
                        <img src="<?php echo base_url('assets/img/etc/footer-logo_black.png')?>" alt="Footer Logo">
                    </div>
                    <div class="col-2 text-right">
                        <a href="" class="text-dark"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="" class="text-dark ml-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="" class="text-dark ml-4"><i class="fas fa-chevron-up fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer-wrapper" class="container-fluid <?php if(isset($marketingfooter)){echo 'mt-5 pt-5';}?>">
            <div class="footer-items">
                <div class="col-2 footer-logo">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url('assets/img/etc/bg-logo2.png')?>" alt="Footer Logo">
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
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/slick.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/app.js')?>"></script>
    </body>
</html>