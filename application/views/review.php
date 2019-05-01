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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/all.css'?>"> 
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper" style="background: #06A9B5">
            <div class="header-items container-fluid" style="background: #06A9B5">
                <div class="header-logo">
                    <a href="#"><img src="<?php echo base_url().'assets/img/htc_logo2.png'?>" alt="Header Logo"></a>
                </div>
                <nav id="navbar-wrapper">
                    <ul>
                        <li><a href="<?php echo site_url().'/UserController/Produk';?>">Review & Komentar</a></li>
                        <li><a href="#">Teruji di Rumah</a></li>
                        <li><a href="#">Terbaik</a></li>
                        <li>
                            <a href="<?php echo site_url().'/UserController/Profile';?>" class="username"><span>Hai, <?= $datau->firstname;?> </span>
                                <div class="head-profile">
                                    <img src="<?php echo base_url().'assets/img/profile/1.gif'?>">
                                </div>
                            </a>
                        </li>
                        <li><a href="<?php echo site_url().'/UserController/Logout';?>">Keluar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container-filter">
            <div class="container-fluid">
                <div class="container-inner col-12 pl-0 pr-0 pt-4">
                    <div class="row mb-3    ">
                        <div class="col-12 mt-2 pl-0">
                            <ul class="breadcrumbs p-0 m-0 list-unstyled body-font text-size-18">
                                <li><a href="<?php echo site_url().'/UserController/Produk';?>">Review & Komentar</a></li>
                                <li><?= $datai->nama_kategori?></li>
                                <li><?= $datai->nama_produk?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid p-0">
                <div class="container-inner col-12 pt-5 pb-5 mb-5">
                    <div class="row mb-4">
                        <div class="col-4">
                            <div class="rev-img">
                                <img src="<?php echo base_url().'assets/img/products/'?><?= $datai->gambar?>" alt="Potabee Potato Chips Rasa Ayam Bakar">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-7">
                                        <h2 class="rev-title head-font text-size-35"><?= $datai->nama_produk;?></h2>
                                        <div class="rev-desc body-font text-size-16 mt-3 mb-1">
                                            <p class="mb-0"><?= $datai->deskripsi;?></p>
                                        </div>
                                        <div class="rev-star text-size-32 mb-2">
                                            <span class="rev-star-wrap">
                                                <span class="fas fa-star mr-1"></span>
                                                <span class="fas fa-star mr-1"></span>
                                                <span class="fas fa-star mr-1"></span>
                                                <span class="fas fa-star mr-1"></span>
                                                <span class="fas fa-star"></span>
                                            </span>
                                        </div>
                                        <div class="rev-count body-font text-size-18">
                                            <span><?= $datai->jum_star;?> dari <span></span><?= $datai->banyak_review;?> Review Komentar</span>
                                        </div>
                                </div>
                                <div class="col-5 text-right">
                                    <div class="rev-review mb-4">
                                        <a href="#" class="btn-white" data-toggle="modal" data-target="#review"><i class="fas fa-camera"></i>Bagikan Review</a>
                                    </div>
                                    <div class="rev-ask">
                                        <a href="#" class="btn-white" data-toggle="modal" data-target="#ask">Tanya Jawab</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 rev-tabs">
                            <ul class="list-unstyled body-font p-0 mb-0">
                                <li><a>Review & Komentar</a></li>
                                <li><a>Galeri Penguji</a></li>
                                <li><a>Tanya Jawab</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 rev-filter">
                            <div class="row">
                                <div class="col-6">
                                    <button>
                                        Filter Review
                                        <span>
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-3">
                                    <button>
                                        Urutkan
                                        <span>
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-3">
                                    <button>
                                        Lihat
                                        <span>
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 rev-list">
                            <div class="row mb-5">
                                <h3 class="col-12 head-font">
                                    Review & Komentar
                                </h3>
                            </div>
                            <!-- REVIEW LOOP START -->
                            <?php foreach ($datar as $r ) {?>
                                <div class="row mb-4">
                                    <div class="col-12 rev-item">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="ri-pp">
                                                    <a href="#">
                                                        <div style="background-image:url('<?php echo base_url().'assets/img/profile/1.gif'?>')"></div>
                                                    </a>
                                                </div>
                                                <div class="ri-info">
                                                    <p class="mt-3 mb-2"><b><?= $r->firstname;?></b> (<?= $r->kab;?>)</p>
                                                    <ul class="list-unstyled body-font text-size-14">
                                                        <li>8 Review & Komentar</li>
                                                        <li>2 Upload</li>
                                                        <li>3 Vote Bermanfaat</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="ri-userstar col-3 mb-3">
                                                        <span class="rev-userstar-wrap">
                                                            <span class="fas fa-star mr-2"></span>
                                                            <span class="fas fa-star mr-2"></span>
                                                            <span class="fas fa-star mr-2"></span>
                                                            <span class="fas fa-star mr-2"></span>
                                                            <span class="fas fa-star"></span>
                                                        </span>
                                                    </div>
                                                    <div class="rev-userdate body-font text-size-14 col-2">
                                                        <?= $r->rev_time;?>
                                                    </div>
                                                    <div class="rev-usertitle head-font text-size-18 col-12 mb-2">
                                                        <?= $r->judul;?>
                                                    </div>
                                                    <div class="rev-usercomment body-font text-size-18 col-12 mb-4">
                                                        <?= $r->comment;?>
                                                    </div>
                                                    <div class="rev-usermedia col-6">
                                                        <ul class="list-unstyled m-0 p-0">
                                                            <li>
                                                                <a href="#"><img src="<?php echo base_url().'assets/img/review/'?><?= $r->foto;?>"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rev-userbtn text-right col-6">
                                                        <div class="rev-userreport">
                                                            <a href="#">
                                                                <i class="far fa-flag"></i>
                                                            </a>
                                                        </div>
                                                        <div class="rev-userlike mr-5">
                                                            <a>
                                                                <i id="likes" class="fas fa-heart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- REVIEW LOOP END -->
                            <div class="row">
                                <div class="col-12 rev-pager">
                                    <div class="rev-pagernext float-right">
                                        <a href="#" class="btn-white">Berikutnya</a>
                                    </div>
                                    <div class="rev-pagernum float-right">
                                        <ul class="list-unstyled body-font text-size-14">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 mb-5">
                        <!-- <div class="galeri-list col-12">
                            <div class="row mb-5">
                                <h3 class="col-12 head-font">
                                    Galeri Penguji
                                </h3>
                            </div>
                            <div class="row mb-5">
                                
                                <?php foreach ($datar as $d ) {?>
                                    <div class="galeri-item col-4">
                                        <a href="#">
                                            <div class="galeri-img" style="background-image:url('<?php echo base_url().'assets/img/review/1.jpeg'?><?= $d->foto?>')"></div>
                                            <div class="galeri-user body-font text-center text-size-18 txt-black mt-3">
                                                <p class=""><?= $datau->firstname?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                                
                            </div>
                            <div class="row">
                                <div class="text-center col-12">
                                    <a href="#" class="btn-white">Lihat selanjutnya</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 ask-list">
                            <div class="row mb-5">
                                <h3 class="col-12 head-font">
                                    Tanya Jawab
                                </h3>
                            </div>
                            <!-- REVIEW LOOP START -->
                            <div class="row">
                                <div class="col-12 ask-wrapper">
                                    <div class="ask-item pb-4">
                                        <div class="ask-userreport float-right">
                                            <a href="#">
                                                <i class="far fa-flag"></i>
                                            </a>
                                        </div>
                                        <a class="text-size-18" role="button">                         
                                            <i class="fas fa-chevron-down"></i> 
                                            <span class="ask-usertitle head-font">penasaran dengan produk ini</span> 
                                            <span class="ask-usercontent body-font">Mau banget coba produk ini, ditunggu kiriman samplenya yaa.... Thanks..</span> 
                                        </a>
                                        <ul class="ask-userinfo body-font text-size-16 p-0 m-0 list-unstyled">
                                            <li>Oleh: <a href="#">Hanifah</a></li>
                                            <li>Terakhir dimodifikasi: 21/04/2019</li>
                                            <li><span class="ask-count">0 jawab</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- REVIEW LOOP END -->
                            <!-- REVIEW LOOP START -->
                            <div class="row">
                                <div class="col-12 ask-wrapper">
                                    <div class="ask-item pb-4">
                                        <div class="ask-userreport float-right">
                                            <a href="#">
                                                <i class="far fa-flag"></i>
                                            </a>
                                        </div>
                                        <a class="text-size-18" role="button">                         
                                            <i class="fas fa-chevron-down"></i> 
                                            <span class="ask-usertitle head-font">penasaran dengan produk ini</span> 
                                            <span class="ask-usercontent body-font">Mau banget coba produk ini, ditunggu kiriman samplenya yaa.... Thanks..</span> 
                                        </a>
                                        <ul class="ask-userinfo body-font text-size-16 p-0 m-0 list-unstyled">
                                            <li>Oleh: <a href="#">Hanifah</a></li>
                                            <li>Terakhir dimodifikasi: 21/04/2019</li>
                                            <li><span class="ask-count">0 jawab</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- REVIEW LOOP END -->
                            <div class="row mt-4">
                                <div class="text-center col-12">
                                    <a href="#" class="btn-white">Sampaikan Pertanyaan</a>
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
                        <img src="<?php echo base_url().'assets/img/footer-logo_black.png'?>" alt="Footer Logo">
                    </div>
                    <div class="col-2 text-right">
                        <a href="" class="text-dark"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="" class="text-dark ml-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="" class="text-dark ml-4"><i class="fas fa-chevron-up fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- MODAL REVIEW -->
        <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title head-font text-size-28 txt-purple" id="exampleModalLabel">Bagikan Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <script>
                            $(document).ready(function(){
                                $(".haveTried").hide();
                                $(".haveNotTried").hide();
                                $("#yconfbtn").click(function(){
                                    $(".haveTried").show();
                                    $(".haveNotTried").hide();
                                });
                                $("#nconfbtn").click(function(){
                                    $(".haveNotTried").show();
                                    $(".haveTried").hide();
                                });
                            });
                        </script>
                        <div class="rev-des mb-3">
                            <p>Apakah kamu pernah mencoba produk ini?</p>
                            <div class="col-12 p-0">
                                <button id="yconfbtn" class="btn-white" value="y">Ya</button>
                                <button id="nconfbtn" class="btn-white" value="n">Tidak</button>
                            </div>
                        </div>
                        <form action="/">
                            <div class="haveNotTried">
                                <div class="row mb-4">
                                    <div class="rev-iptcontent col-12">
                                        <div class="input-wrapper">
                                            <textarea id="rev-content" name="rev-content" required></textarea>
                                            <label for="rev-content">Review kamu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-white m-auto">Kirimkan</button>
                                </div>
                            </div>
                        </form>
                        <form action="<?php echo site_url().'/UserController/AddReviewY/';?><?= $datai->id_produk?>" method="POST" enctype="multipart/form-data">
                            <div class="haveTried">
                                <div class="row">
                                    <div class="rev-iptscore col-12">
                                        <p>Bagaimana peringkat untuk produk ini?</p>
                                        <div class="rev-star-wrap text-size-32 mb-2">
                                            <i class="fa fa-star fa-star-open" title="bad" data-score="1"></i>
                                            <i class="fa fa-star fa-star-open" title="poor" data-score="2"></i>
                                            <i class="fa fa-star fa-star-open" title="regular" data-score="3"></i>
                                            <i class="fa fa-star fa-star-open" title="good" data-score="4"></i>
                                            <i class="fa fa-star fa-star-open" title="gorgeous" data-score="5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="rev-ipttitle col-12">
                                        <div class="input-wrapper">
                                            <input type="text" id="rev-title" name="rev-title" required>
                                            <label for="rev-title">Beri judul pada review kamu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="rev-iptcontent col-12">
                                        <div class="input-wrapper">
                                            <textarea id="rev-content" name="rev-content" required></textarea>
                                            <label for="rev-content">Review kamu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="col-12">Tanggal pembelian/dicoba</p>
                                    <div class="rev-iptscore col-4">
                                        <div class="select-wrapper overflow-hidden col-12 p-0">
                                            <select name='rev-month'>
                                                <option value="" selected>Month</option>
                                                <option value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Mar</option>
                                                <option value="4">Apr</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Jun</option>
                                                <option value="7">Jul</option>
                                                <option value="8">Agt</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Okt</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Des</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="rev-iptscore col-4">
                                        <div class="select-wrapper overflow-hidden col-12 p-0">
                                            <select name='rev-year'>
                                                <option value="" selected>Year</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="rev-iptupload col-12">
                                        <p>Tambahkan review</p>
                                        <div class="col-12 p-0">
                                            <input type="file" class="d-none" name="rev-photos" id="rev-photos">
                                            <input type="file" class="d-none" name="rev-videos" id="rev-videos">
                                            <label for="rev-photos">
                                                <a class="btn-white">Upload</a>
                                            </label>
                                            <label for="rev-videos">
                                                <a class="btn-white">Tambah Video</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="rev-iptreco col-12">
                                        <p>Apakah kamu merekomendasikan produk ini kepada teman?</p>
                                        <div class="col-12 p-0">
                                            <button class="btn-white">Ya</button>
                                            <button class="btn-white">Tidak</button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-white m-auto">Kirimkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- MODAL ASK -->
        <div class="modal fade" id="ask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title head-font text-size-28 txt-purple" id="exampleModalLabel">Sampaikan pertanyaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/">
                            <div class="row mb-4">
                                <div class="ask-ipttitle col-12">
                                    <div class="input-wrapper">
                                        <input type="text" id="ask-title" name="ask-title" required>
                                        <label for="ask-title">Judul Pertanyaan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="ask-iptcontent col-12">
                                    <div class="input-wrapper">
                                        <textarea id="ask-content" name="ask-content" required></textarea>
                                        <label for="ask-content">Sampaikan pertanyaanmu untuk Home Tester</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-white m-auto">Kirim Pertanyaan</button>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer-wrapper" class="container-fluid negative">
            <div class="footer-items">
                <div class="col-2 footer-logo">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url().'assets/img/bg-logo2.png'?>" alt="Footer Logo">
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
        <script type="text/javascript" src="<?php echo base_url().'assets/js/popper.min.js'?>"></script> 
    </body>
</html>