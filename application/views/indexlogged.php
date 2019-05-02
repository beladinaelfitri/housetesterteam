<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js head-tp">
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
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper" class='container-fluid'>
            <div class="header-items container-fluid bg-transparent">
                <div class="header-logo">
                    <a href="<?php echo site_url().'UserController/index'?>"><img src="<?php echo base_url().'assets/img/etc/htc_logo2.png'?>" alt="Header Logo"></a>
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
                    <a href="<?php echo site_url().'/UserController/Register'?>" class="btn-white btn-regis">Gabung Sekarang</a>
                </nav>
            </div>
        </header>
                <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/cosmeticbg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">VEET Hair Removal Cream, tampil lebih percaya diri dengan kulit mulus tanpa bulu!</h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/childbg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">Confidence Adult Pads, Pad dewasa yang ekstra lembut dengan penyerapan maksimal dan anti bakteri</h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/cookingbg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">Bango Bumbu Kuliner Nusantara terbuat dari rempah alami berkualitas tanpa pengawet dan pewarna sintesis</h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/drugsbg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">Fitbes Force, suplemen dengan kombinasi bahan alami untuk membantu memelihara daya tahan tubuh!</h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/babybg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">Buktikan Lembutnya Rangkaian Produk Perawatan Kulit Bayi dari Johnson's® </h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide-image" style="background-image: url(<?php echo base_url('assets/img/backgrounds/teethbg.jpg')?>)"></div>
                        <div class="slide-info">
                            <hgroup>
                                <h1 class="text-center">Buktikan Lembutnya Rangkaian Produk Perawatan Kulit Bayi dari Johnson's® </h1>
                                <h2>Daftar sekarang!</h2>
                            </hgroup>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeAdv row pt-3 pb-5 m-0">
                    <div class="col-3 text-center">
                        <div class="Adv-text">
                            <span class="head-font text-size-64">1,9m</span>
                            <p class="body-font text-size-24 pt-2 pb-0">Penguji di Rumah</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-text">
                            <span class="head-font text-size-64">2,1m</span>
                            <p class="body-font text-size-24 pt-2 pb-0">Review produk</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-text">
                            <span class="head-font text-size-64">5,6k</span>
                            <p class="body-font text-size-24 pt-2 pb-0">Produk yang teruji</p>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="Adv-text">
                            <span class="head-font text-size-64">34,2k</span>
                            <p class="body-font text-size-24 pt-2 pb-0">Foto dan Video Upload</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeBadgesHead row m-0">
                    <div class="primary col-12">
                        <h3 class="text-left txt-purple text-size-28">Hai <!-- -->, lihat lencana kamu</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="homeBadges row m-0">
                    <div class="col-12">
                        <h2 class="txt-yellow head-font">Terakhir didapat</h2>
                    </div>
                    <div class="col-3 pt-4">
                        <h2 class="text-white text-size-26">Belum ada lencana didapatkan</h2>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="homeBadgesHead row m-0">
                    <div class="primary col-12">
                        <h3 class="text-left txt-purple text-size-28">Daftar ke uji produk di rumah</h3>
                        <p class="body-font text-size-18 mt-4">Harap diingat bahwa kamu harus melengkapi pertanyaan seleksi dan jika kamu lolos, kami akan menghubungi kamu untuk berpartisipasi dalam uji coba produk.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="homeTest row m-0">
                    <div class="col-6">
                        <div class="Test-wrapper">
                            <div class="Test-bg" style="background-image:url(<?php echo base_url('assets/img/backgrounds/cosmeticbg.jpg')?>)">
                                <a href="#"><span class="link-spanner"> </span></a>
                            </div>
                            <div class="Test-content">
                                <div class="Test-head">
                                    <h2 class="text-white head-font text-size-32">Produk Gratis</h2>
                                </div>
                                <div class="Test-title mt-5">
                                    <h2 class="text-white text-uppercase">VEET Hair Removal Cream</h2>
                                </div>
                                <div class="Test-link mt-4">
                                    <a href="#" class="href-link2 text-uppercase text-size-18 text-white">Saya Tertarik ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="Test-wrapper">
                            <div class="Test-bg" style="background-image:url(<?php echo base_url('assets/img/backgrounds/childbg.jpg')?>)">
                                <a href="#"><span class="link-spanner"> </span></a>
                            </div>
                            <div class="Test-content">
                                <div class="Test-head">
                                    <h2 class="text-white head-font text-size-32">Produk Gratis</h2>
                                </div>
                                <div class="Test-title mt-5">
                                    <h2 class="text-white text-uppercase">CONFIDENCE ADULT PADS</h2>
                                </div>
                                <div class="Test-link mt-4">
                                    <a href="#" class="href-link2 text-uppercase text-size-18 text-white">Saya Tertarik ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="homeBadgesHead row m-0">
                    <div class="primary col-12 text-center">
                        <a href="#" class="btn-white">Lihat Semua</a>
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
                <div class="homeBadgesHead row m-0 pb-0 ">
                    <div class="primary col-12">
                        <h3 class="text-left txt-purple text-size-28">Review produk terkini</h3>
                        <p class="body-font text-size-18 mt-4">Inilah yang dibicarakan para penguji.</p>
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
                <div class="homeBadgesHead row m-0 pt-0">
                    <div class="primary col-12 text-center">
                        <a href="<?php echo site_url('UserController/review')?>" class="btn-white">Lihat Selanjutnya</a>
                    </div>
                </div>
            </div>
        </section>
		<section>
            <div class="container-fluid">
                <div class="marketing-wrapper row pb-4 mt-5">
                    <div class="marketing-logo col-10">
                        <img src="<?php echo base_url().'assets/img/etc/footer-logo_black.png'?>" alt="Footer Logo">
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
                        <img src="<?php echo base_url().'assets/img/etc/bg-logo2.png'?>" alt="Footer Logo">
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