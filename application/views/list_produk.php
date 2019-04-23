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
        <link rel="icon shortcut" href="https://d2vtntcxpdw15n.cloudfront.net/img3/favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/all.css'?>"> 
    </head>
    <body>
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
        <section class="container-filter">
            <div class="container-fluid">
                <div class="container-inner col-12 pl-0 pr-0 pt-4">
                    <div class="row mb-3    ">
                        <div class="col-6 mt-2 pl-0">
                            <ul class="breadcrumbs p-0 m-0 list-unstyled body-font text-size-18">
                                <li>Halaman Utama</li>
                                <li>Review & Komentar</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-7">
                                    <form action="/" class="input-wrapper">
                                        <input type="text" id="search-product" class="form-control" name="search-product" required>
                                        <label for="search-product">Cari produk</label>
                                        <span><i class="fas fa-search"></i></span>
                                    </form>
                                </div>
                                <div class="col-5 text-right">
                                    <div class="dropdown dd-review dd-sort float-right">
                                        <a class="dropdown-toggle text-size-18 txt-black body-font" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Urutkan <i class="fas fa-sort"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <div class="input-wrapper col-12 mt-4">
                                                    <input type="radio" id="sort1" name="sort1">
                                                    <label for="sort1">Terkini</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-wrapper col-12 mt-3">
                                                    <input type="radio" id="sort2" name="sort2">
                                                    <label for="sort2">Paling banyak direview</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-wrapper col-12 mt-3">
                                                    <input type="radio" id="sort3" name="sort3">
                                                    <label for="sort3">Peringkat tertinggi</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-wrapper col-12 mt-3">
                                                    <input type="radio" id="sort4" name="sort4">
                                                    <label for="sort4">Sedang tren</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown dd-review dd-filter float-right position-relative mr-4" id="dd">
                                        <a class="dropdown-toggle text-size-18 txt-black body-font" data-boundary="dd" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter <i class="fas fa-filter"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <div class="input-wrapper col-12 mt-4">
                                                    <input type="checkbox" id="flt1" name="flt1">
                                                    <label for="flt1">Perempuan</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-wrapper col-12 mt-3">
                                                    <input type="checkbox" id="flt2" name="flt2">
                                                    <label for="flt2">Yang diutamakan</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-wrapper col-12 mt-3">
                                                    <input type="checkbox" id="flt3" name="flt3">
                                                    <label for="flt3">Teruji di rumah</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container-inner col-12 pl-0 pr-0 pt-5 pb-5 mb-5">
                    <div class="row">
                        <div class="cat-wrapper col-3 pl-0">
                            <div class="cat-inner">
                                <div class="cat-head text-size-28 head-font mb-4">Kategori</div>
                                <div class="cat-item text-size-18 body-font mb-1">Dapur Makanan</div>
                                <div class="cat-item text-size-18 body-font mb-1">Kesehatan & Kebersihan</div>
                                <div class="cat-item text-size-18 body-font mb-1">Minuman Ringan</div>
                                <div class="cat-item text-size-18 body-font mb-1">Rambut & Kecantikan</div>
                                <div class="cat-item text-size-18 body-font mb-1">Bayi & balita</div>
                                <div class="cat-item text-size-18 body-font mb-1">Pembersih</div>
                                <div class="cat-item text-size-18 body-font mb-1">Makanan Dingin / Beku</div>
                                <div class="cat-item text-size-18 body-font mb-1">Rumah Tangga</div>
                                <div class="cat-item text-size-18 body-font mb-1">Binatang Peliharaan</div>
                            </div>
                        </div>
                        <div class="row revlist-wrapper col-9">
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/newpotabee.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/lifebuoymatcha.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/nissinvegetable.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/calpicosoda.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/rinsogentle.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
                            <div class="col-4 mb-4">
                                <div class="revlist-item">
                                    <div class="revlist-img">
                                        <a href="#"><div style="background-image:url('assets/img/products/nestleisocal.jpg')"></div></a>
                                    </div>
                                    <div class='revlist-head'>
                                        <a hre="#">
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
            <div class="container-fluid">
                <div class="row pb-4">
                    <div class="marketing-logo col-10">
                        <img src="assets/img/footer-logo_black.png" alt="Footer Logo">
                    </div>
                    <div class="col-2 text-right">
                        <a href="" class="text-dark"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="" class="text-dark ml-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="" class="text-dark ml-4"><i class="fas fa-chevron-up fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer-wrapper" class="container-fluid negative">
            <div class="footer-items">
                <div class="col-2 footer-logo">
                    <a href="#" target="_blank">
                        <img src="assets/img/bg-logo2.png" alt="Footer Logo">
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
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.min.js"></script> 
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>