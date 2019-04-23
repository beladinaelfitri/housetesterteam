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
        <<header id="header-wrapper">
            <div class="header-items container-fluid">
                <div class="header-logo">
                    <a href="#"><img src="<?php echo base_url().'assets/img/htc_logo2.png'?>" alt="Header Logo"></a>
                </div>
                <nav id="navbar-wrapper">
                    <ul>
                        <li><a href="#">Review & Komentar</a></li>
                        <li><a href="#">Teruji di Rumah</a></li>
                        <li><a href="#">Terbaik</a></li>
                        <li>
                            <a href="#" class="username"><span>Hai, <?=  $firstname;?></span>
                                <div class="head-profile">
                                    <img src="">
                                </div>
                            </a>
                        </li>
                        <li><a href="<?php echo site_url().'/UserController/Logout';?>">Keluar</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div class="container-fluid">
                <div class="container-inner col-12 pl-0 pr-0 pt-5">
                    <div class="row mb-5">
                        <div class="col-9">
                            <h2 class="head-font">Tentang Saya</h2>
                        </div>
                        <div class="col-3 tr">
                            <p class="mt-3 body-font text-14">Anggota Sejak: <?= $regis_time ?><!-- PHP --></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <form action="#" id="frmAvatar" method="post">
                                        <div class="pp-wrapper">
                                            <div class="pp-holder" style="background-image:url('<?php echo base_url().'assets/img/profile/1.gif'?>')"></div>
                                        </div>
                                        <!--<div class="nopp-wrapper">
                                            <div class="nopp-holder">
                                                <span>K</span>
                                            </div>
                                        </div>-->
                                        <div class="nopp-upload">
                                            <input type="file" id="nopp-upload">
                                            <label class="nm" for="nopp-upload">
                                                <a class="href-link">Upload</a>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <ul class="pp-info paragraph-font list-unstyled pl-0 mb-0">
                                        <li><?=  $firstname;?></li>
                                        <li><?=  $jk;?></li>
                                        <li><?=  $bulan,', ', $tahun;?></li>
                                        <li><?=  $hp;?></li>
                                        <li><?=  $email;?></li>
                                        <li><?=  $kab,', ', $prov;?></li>
                                        <li>Indonesia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pp-achievement col-3">
                            <p class="text-center text-18">Pencapaian</p>
                        </div>
                        <div class="pp-score col-3">
                            <p class="text-center text-18">Skor klub</p>
                            <div class='col-12'>
                                <img src="<?php echo base_url().'assets/img/badges/xfac_B.png'?>">
                                <p class='text-18 text-center mt-4'>Bronze</p>
                            </div>
                            <div class='col-12 text-center text-size-16 body-font'>
                                <p>Level selanjutnya: <span><b>Silver</b></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12">
                                    <button class="btn-white w-100" type="button">Profil lengkap</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-12">
                                    <button class="btn-white w-100" type="button">Info Lebih Lanjut</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-12 pp-score">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <ul class="nav tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="activity-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="true">Aktivitas</a></li>
                                <li class="nav-item"><a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Profil</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rincian</a></li>
                                <li class="nav-item"><a class="nav-link" id="socials-tab" data-toggle="tab" href="#socials" role="tab" aria-controls="socials" aria-selected="false">Media Sosial</a></li>
                                <li class="nav-item"><a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Pengaman</a></li>
                                <li class="nav-item"><a class="nav-link" id="mybadges-tab" data-toggle="tab" href="#mybadges" role="tab" aria-controls="mybadges" aria-selected="false">Lencana</a></li>
                                <li class="nav-item"><a class="nav-link" id="myuploads-tab" data-toggle="tab" href="#myuploads" role="tab" aria-controls="myuploads" aria-selected="false">Upload</a></li>
                            </ul>
                            <div class="tab-content mb-5 pb-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                                    <div class="form-wrapper mt-3">
                                        <h3 class="head-font txt-purple">Survei yang telah saya lengkapi</h3>
                                        <!-- SURVEI == NULL -->
                                        <p class="text-16 mt-4 mb-5">Kamu belum melengkapi uji coba apapun, pastikan kamu sudah mendaftar dan mengaktivasi akunmu.</p>
                                        <!-- SURVEI != NULL-->
                                        <h3 class="head-font txt-purple">Komentar & Review Saya</h3>
                                        <!-- COMMENT & REVIEW == NULL -->
                                        <p class="text-16 mt-4">Home Tester Club mengharapkan kontribusi darimu. Kamu belum memberikan review apapun.</p>
                                        <!-- COMMENT & REVIEW != NULL -->
                                        <div class="reviewlist row mr-0 pb-3">
                                            <div class="col-2 pl-0">
                                                <div class="reviewimg-wrap" style="background-image: url('<?php echo base_url().'assets/img/products/miesedapayam.jpg'?>')"></div>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-18 mt-5">Mie Sedaap Instant Mi Goreng rasa Mi Ayam Istimewa</p>
                                                <p class="paragraph-font text-size-18">Saya kurang suka mie sedap varian baru yg rasa mie ayam karena rasanya kurang nendang.Namun untuk tekstur sudah ok. Mungkin memang kurang cocok dilidah saya tapi mungkin yang lain bisa nyobain..</p>
                                            </div>
                                            <div class="col-2 text-right pr-0">
                                                <p class="body-font text-size-14 mt-5">19 Apr 19</p>
                                                <a href="#" class='txt-black'><i class="far fa-trash-alt fa-2x mt-3"></i></a>
                                            </div>
                                        </div>
                                        <div class="reviewlist row mr-0 pb-3">
                                            <div class="col-2 pl-0">
                                                <div class="reviewimg-wrap" style="background-image: url('<?php echo base_url().'assets/img/products/icecreamthaitea.jpg'?>')"></div>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-18 mt-5">Wall's Ice Cream Sandwich rasa Thai tea & Milk</p>
                                                <p class="paragraph-font text-size-18">Suka bgt sama ice cream ini, esnya lembut, rasanya enak ngga bikin eneg, manisnya pas, apalagi rasa thai teanya emm nyummii, wajib coba ni para pecinta ice cream. Paling enak sih makan pas lagi panas terik hehe.</p>
                                            </div>
                                            <div class="col-2 text-right pr-0">
                                                <p class="body-font text-size-14 mt-5">19 Apr 19</p>
                                                <a href="#" class='txt-black'><i class="far fa-trash-alt fa-2x mt-3"></i></a>
                                            </div>
                                        </div>
                                        <div class="reviewlist row mr-0 pb-3">
                                            <div class="col-2 pl-0">
                                                <div class="reviewimg-wrap" style="background-image: url('assets/img/products/spicychickenstrip.jpg')"></div>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-18 mt-5">So Good Spicy Chicken Strip</p>
                                                <p class="paragraph-font text-size-18">Menurut saya pribadi sih, spicy chicken strip dari so good ini sangat di rekomendasikan bagi penyuka chicken strip. apalagi disertai dengan bumbu pedas, dan ga ketinggalan juga tepung crispy yang gurih. pokoknya simpel banget masaknya, gurih, dan ga nyesel kalau kalian nyoba beli ini..</p>
                                            </div>
                                            <div class="col-2 text-right pr-0">
                                                <p class="body-font text-size-14 mt-5">19 Apr 19</p>
                                                <a href="#" class='txt-black'><i class="far fa-trash-alt fa-2x mt-3"></i></a>
                                            </div>
                                        </div>
                                        <div class='col-12 text-center mt-4'>
                                            <button class='btnApply btn-white' type='submit'>Lanjut</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <div class="form-wrapper pl-5 pr-5 mt-5">
                                        <form action="<?php echo site_url().'/UserController/RegisterAbout';?>" method="POST">
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="head-font txt-purple text-size-28">Berapa jumlah orang yang tinggal di rumah anda?</div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                    <div class="select-wrapper overflow-hidden col-6 p-0">
                                                        <select name="anak">
                                                            <option <?php if ($jum_orang == '' ) echo 'selected' ; ?> value="">Sebutkan</option>
                                                            <option <?php if ($jum_orang == 'A' ) echo 'selected' ; ?> value="A">Anda Sendiri</option>
                                                            <option <?php if ($jum_orang == 'B' ) echo 'selected' ; ?> value="B">2 Orang</option>
                                                            <option <?php if ($jum_orang == 'C' ) echo 'selected' ; ?> value="C">3 Orang</option>
                                                            <option <?php if ($jum_orang == 'D' ) echo 'selected' ; ?> value="D">4 Orang</option>
                                                            <option <?php if ($jum_orang == 'E' ) echo 'selected' ; ?> value="E">5 Orang</option>
                                                            <option <?php if ($jum_orang == 'F' ) echo 'selected' ; ?> value="F">6 Atau Lebih</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="head-font txt-purple text-size-28">Apakah anda memiliki anak yang berusia dibawah 18 tahun?</div>
                                                    <div class="body-font text-size-14 mt-3">Kamu dapat memilih maksimal 2 jawaban</div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                    <div class="input-wrapper col-12 pl-0 pr-0 mt-5">
                                                        <input type="checkbox" id="child1" name="child" <?php if ($anak == 'p' ) echo 'checked' ; ?> value="p">
                                                        <label for="child1">Perempuan</label>
                                                    </div>
                                                    <div class="input-wrapper col-12 pl-0 pr-0 mt-5">
                                                        <input type="checkbox" id="child2" name="child" <?php if ($anak == 'l' ) echo 'checked' ; ?> value="l">
                                                        <label for="child2">Laki-laki</label>
                                                    </div>
                                                    <div class="input-wrapper col-12 pl-0 pr-0 mt-5">
                                                        <input type="checkbox" id="child0" name="child" <?php if ($anak == 'n' ) echo 'checked' ; ?> value="n">
                                                        <label for="child0">Tidak/Belum memiliki anak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="head-font txt-purple text-size-28">Pada tahun berapa anak anda lahir?</div>
                                                    <div class="body-font text-size-14 mt-3">Kamu dapat memilih maksimal 8 jawaban</div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                    <div class="row ml-0 mr-0 mt-4">
                                                        <div class="input-wrapper col-6 pl-0 pr-0 mt-3">
                                                            <input type="checkbox" id="child-date1" name="child-date" <?php if ($tahun_anak == '2019' ) echo 'checked' ; ?> value="2019">
                                                            <label for="child-date1">2019</label>
                                                        </div>
                                                        <div class="input-wrapper col-6 pl-0 pr-0 mt-3">
                                                            <input type="checkbox" id="child-date2" name="child-date" <?php if ($tahun_anak == '2018' ) echo 'checked' ; ?> value="2018">
                                                            <label for="child-date2">2018</label>
                                                        </div>
                                                        <div class="input-wrapper col-6 pl-0 pr-0 mt-3">
                                                            <input type="checkbox" id="child-date3" name="child-date" <?php if ($tahun_anak == '2017' ) echo 'checked' ; ?> value="2017">
                                                            <label for="child-date3">2017</label>
                                                        </div>
                                                        <div class="input-wrapper col-6 pl-0 pr-0 mt-3">
                                                            <input type="checkbox" id="child-date4" name="child-date" <?php if ($tahun_anak == '2016' ) echo 'checked' ; ?> value="2016">
                                                            <label for="child-date4">2016</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="head-font txt-purple text-size-28">Manakah yang paling tepat menggambarkan penghasilan bulanan anda ?</div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                    <div class="select-wrapper overflow-hidden col-6 p-0">
                                                        <select name="gaji">
                                                            <option <?php if ($gaji == '' ) echo 'selected' ; ?> value="">Sebutkan</option>
                                                            <option <?php if ($gaji == 'A' ) echo 'selected' ; ?> value="A">Dibawah Rp. 3.000.000</option>
                                                            <option <?php if ($gaji == 'B' ) echo 'selected' ; ?> value="B">Rp. 3.000.000 - Rp 10.000.000</option>
                                                            <option <?php if ($gaji == 'C' ) echo 'selected' ; ?> value="C">Rp. 10.000.000 - Rp. 15.000.000</option>
                                                            <option <?php if ($gaji == 'D' ) echo 'selected' ; ?> value="D">Rp. 15.000.000 - Rp. 25.000.000</option>
                                                            <option <?php if ($gaji == 'E' ) echo 'selected' ; ?> value="E">Rp. 25.000.000 - Rp. 35.000.000</option>
                                                            <option <?php if ($gaji == 'F' ) echo 'selected' ; ?> value="F">Diatas  Rp. 35.000.000</option>
                                                            <option <?php if ($gaji == 'G' ) echo 'selected' ; ?> value="G">Menolak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="head-font txt-purple text-size-28">Dari seluruh penghasilan Anda dalam sebulan, berapakah persentase untuk berbelanja kebutuhan rumah tangga?</div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                    <div class="select-wrapper overflow-hidden col-6 p-0">
                                                        <select name="outcome">
                                                            <option <?php if ($gaji == '' ) echo 'selected' ; ?> value="">Sebutkan</option>
                                                            <option <?php if ($gaji == 'A' ) echo 'selected' ; ?> value="A">0-25%</option>
                                                            <option <?php if ($gaji == 'B' ) echo 'selected' ; ?> value="B">25%-49%</option>
                                                            <option <?php if ($gaji == 'C' ) echo 'selected' ; ?> value="C">50%-74%</option>
                                                            <option <?php if ($gaji == 'D' ) echo 'selected' ; ?> value="D">Lebih dari 75%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2 text-right">
                                                    <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-wrapper">
                                        <form action="<?php echo site_url().'/UserController/editRincian';?>" method="POST">
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="firstname" name="firstname" required value="<?=  $firstname;?>">
                                                        <label for="firstname">Nama depan</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="lastname" name="lastname" required value="<?=  $lastname;?>">
                                                        <label for="lastname">Nama Keluarga</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="jk" name="jk" readonly value="<?=  $jk;?>">
                                                        <label for="jk" >Jenis Kelamin</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                            <?= form_error('jk') ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="bulan" name="bulan" required readonly value="<?=  $bulan,', ', $tahun;?>">
                                                        <label for="lastname">Bulan & tahun lahir</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="email" name="email" required value="<?=  $email;?>">
                                                        <label for="lastname">Alamat email</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                            <?= form_error('email') ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="numphone" name="numphone" required value="<?=  $hp;?>">
                                                        <label for="lastname">Telepon *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                            <?= form_error('numphone') ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <textarea id="address" name="address" required><?=  $alamat;?></textarea>
                                                        <label for="lastname">Alamat *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="address2" name="address2" required value="<?=  $alamat_dua;?>">
                                                        <label for="lastname">Alamat baris ke-2 *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="address3" name="address3" required value="<?=  $kel;?>">
                                                        <label for="lastname">Kelurahan *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="address4" name="address4" required value="<?=  $kec;?>">
                                                        <label for="lastname">Kecamatan *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="address5" name="address5" required value="<?=  $kab;?>">
                                                        <label for="lastname">Kabupaten *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="select-wrapper overflow-hidden col-12 p-0">
                                                        <select name="prov">
                                                            <option <?php if ($prov == '' ) echo 'selected' ; ?> value="">Provinsi *</option>
                                                            <option <?php if ($prov == 'AC' ) echo 'selected' ; ?> value="AC">Aceh</option>
                                                            <option <?php if ($prov == 'BA' ) echo 'selected' ; ?> value="BA">Bali</option>
                                                            <option <?php if ($prov == 'BT' ) echo 'selected' ; ?> value="BT">Banten</option>
                                                            <option <?php if ($prov == 'BE' ) echo 'selected' ; ?> value="BE">Bengkulu</option>
                                                            <option <?php if ($prov == 'JK' ) echo 'selected' ; ?> value="JK">DKI Jakarta</option>
                                                            <option <?php if ($prov == 'GO' ) echo 'selected' ; ?> value="GO">Gorontalo</option>
                                                            <option <?php if ($prov == 'JA' ) echo 'selected' ; ?> value="JA">Jambi</option>
                                                            <option <?php if ($prov == 'JB' ) echo 'selected' ; ?> value="JB">Jawa Barat</option>
                                                            <option <?php if ($prov == 'JT' ) echo 'selected' ; ?> value="JT">Jawa Tengah</option>
                                                            <option <?php if ($prov == 'JI' ) echo 'selected' ; ?> value="JI">Jawa Timur</option>
                                                            <option <?php if ($prov == 'KB' ) echo 'selected' ; ?> value="KB">Kalimantan Barat</option>
                                                            <option <?php if ($prov == 'KS' ) echo 'selected' ; ?> value="KS">Kalimantan Selatan</option>
                                                            <option <?php if ($prov == 'KT' ) echo 'selected' ; ?> value="KT">Kalimantan Tengah</option>
                                                            <option <?php if ($prov == 'KI' ) echo 'selected' ; ?> value="KI">Kalimantan Timur</option>
                                                            <option <?php if ($prov == 'KU' ) echo 'selected' ; ?> value="KU">Kalimantan Utara</option>
                                                            <option <?php if ($prov == 'BB' ) echo 'selected' ; ?> value="BB">Kepulauan Bangka Belitung</option>
                                                            <option <?php if ($prov == 'KR' ) echo 'selected' ; ?> value="KR">Kepulauan Riau</option>
                                                            <option <?php if ($prov == 'LA' ) echo 'selected' ; ?> value="LA">Lampung</option>
                                                            <option <?php if ($prov == 'MA' ) echo 'selected' ; ?> value="MA">Maluku</option>
                                                            <option <?php if ($prov == 'MU' ) echo 'selected' ; ?> value="MU">Maluku Utara</option>
                                                            <option <?php if ($prov == 'NB' ) echo 'selected' ; ?> value="NB">Nusa Tenggara Barat</option>
                                                            <option <?php if ($prov == 'NT' ) echo 'selected' ; ?> value="NT">Nusa Tenggara Timur</option>
                                                            <option <?php if ($prov == 'PA' ) echo 'selected' ; ?> value="PA">Papua</option>
                                                            <option <?php if ($prov == 'PB' ) echo 'selected' ; ?> value="PB">Papua Barat</option>
                                                            <option <?php if ($prov == 'RI' ) echo 'selected' ; ?> value="RI">Riau</option>
                                                            <option <?php if ($prov == 'SR' ) echo 'selected' ; ?> value="SR">Sulawesi Barat</option>
                                                            <option <?php if ($prov == 'SN' ) echo 'selected' ; ?> value="SN">Sulawesi Selatan</option>
                                                            <option <?php if ($prov == 'ST' ) echo 'selected' ; ?> value="ST">Sulawesi Tengah</option>
                                                            <option <?php if ($prov == 'SG' ) echo 'selected' ; ?> value="SG">Sulawesi Tenggara</option>
                                                            <option <?php if ($prov == 'SA' ) echo 'selected' ; ?> value="SA">Sulawesi Utara</option>
                                                            <option <?php if ($prov == 'SB' ) echo 'selected' ; ?> value="SB">Sumatera Barat</option>
                                                            <option <?php if ($prov == 'SS' ) echo 'selected' ; ?> value="SS">Sumatera Selatan</option>
                                                            <option <?php if ($prov == 'SU' ) echo 'selected' ; ?> value="SU">Sumatera Utara</option>
                                                            <option <?php if ($prov == 'YO' ) echo 'selected' ; ?> value="YO">Yogyakarta</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="input-wrapper">
                                                        <input type="text" id="address6" name="address6" required value="<?=  $kodepos;?>">
                                                        <label for="lastname">Kode pos *</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="input-inner col-12 mb-2">
                                                    <div class="select-wrapper overflow-hidden col-12 p-0">
                                                        <select disabled="true">
                                                            <option value="ID" selected="selected">Indonesia</option>
                                                        </select>
                                                    </div>
                                                    <!-- <a href="#" class="body-font text-decoration-none txt-black">Ubah negara</a>-->
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2 text-right">
                                                    <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="socials" role="tabpanel" aria-labelledby="socials-tab">
                                    <div class="form-wrapper mt-4">
                                        <h3 class="head-font txt-purple mb-5">Platform yang terkoneksi</h3>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch p-0">
                                                        <a href="#">
                                                            <i class="fab fa-facebook-square fa-3x"></i>
                                                        </a>
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch p-0">
                                                        <a href="#" for="customSwitch1">
                                                            <i class="fab fa-instagram fa-3x"></i>
                                                        </a>
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                    <div class="form-wrapper">
                                        <form action="<?php echo site_url().'/UserController/editSecurity';?>" method="POST">
                                            <div class="row pt-3">
                                                <div class="col-12 input-outer">
                                                    <p class="text-size-18 txt-black">Kata sandi membutuhkan: <span class="pass-small">huruf kecil</span>, <span class="pass-num">angka</span>, <span class="pass-special">spesial karakter (!@#$%*)</span>, <span class="pass-len">6 karakter atau lebih</span></p>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-8 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="password" id="password" name="password" required value="<?= $password;?>">
                                                        <label for="password">Kata sandi</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-8 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="password" id="repassword" name="repassword" required  value="<?= $password;?>">
                                                        <label for="repassword">Konfirmasi kata sandi</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mt-5">
                                                    <div class="col-12 input-outer">
                                                        <p class="text-size-18 txt-black">Apakah ingin profil kamu dilihat publik? Dengan profil publik member lain dapat melihat nama pertama kamu, kota, tanggal bergabung, semua review yang pernah kamu berikan secara online dan foto profil yang kamu upload.</p>
                                                    </div>
                                                </div>
                                            <div class="row pt-3">
                                                <div class="col-12 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="radio" id="vsbl1" name="comms1">
                                                        <label for="vsbl1">Ya - saya setuju bantuan ini membuat review saya lebih berharga</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-12 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="radio" id="vsbl2" name="comms1">
                                                        <label for="vsbl2">Tidak - saya pilih tanpa nama (anonimus)</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mt-5">
                                                    <div class="col-12 input-outer">
                                                        <p class="text-size-18 txt-black">Komunikasi dari Home Tester Club:</p>
                                                    </div>
                                                </div>
                                            <div class="row pt-3">
                                                <div class="col-12 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="radio" id="comms1" name="comms">
                                                        <label for="comms1">Saya ingin menerima informasi tentang uji di rumah berbagai produk, kompetisi dan komunikasi terkait dari Home Tester Club</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-12 input-outer">
                                                    <div class="input-wrapper">
                                                        <input type="radio" id="comms2" name="comms">
                                                        <label for="comms2">Saya tidak ingin mendapatkan komunikasi dari Home Tester Club ataupun merek terkait</label>
                                                    </div>
                                                    <div class="input-error">
                                                        <span>
                                                            <!-- Error -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0 pt-3 pb-3">
                                                <div class="input-inner col-12 mb-2 text-right">
                                                    <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-xs-12">        
                                        <hr class="margin-b30">
                                        <h3 class="heading-font text-bold txt-purple margin-b20">Kamu ingin menghapus akunmu?</h3>
                                        <p class="paragraph-txt txt-black">Sayang sekali kamu mau pergi. Untuk menghapus akun, klik link di bawah ini. Kalau bisa, beritahu kami alasan kamu pergi.</p>
                                        <a class="href-link" href="<?php echo site_url().'/UserController/deleteUser';?>">HAPUS AKUN SAYA</a>
                                        <hr class="margin-t30">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mybadges" role="tabpanel" aria-labelledby="mybadges-tab">
                                    <div class="form-wrapper mt-3">
                                        <div class="col-7 p-0">
                                            <h3 class="head-font txt-purple">Pencapaian</h3>
                                            <p class="paragraph-font txt-black text-size-18 mt-4 mb-5">Jika kamu berkontribusi di segala aspek Home Tester Club, besar kemungkinan kamu akan membuka kunci Lencana Club. Itu berarti kamu adalah member yang paling berharga karena telah berpartisipasi di segala hal.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="checkbox" id="showbadge" name="showbadge">
                                                    <label class="txt-black text-size-16" for="showbadge">Tunjukan lencana yang didapatkan saja</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="myuploads" role="tabpanel" aria-labelledby="myuploads-tab">
                                    <div class="form-wrapper mt-5">
                                        <div class="col-12 p-0">
                                            <h3 class="head-font txt-purple">Upload</h3>
                                            <p class="paragraph-font txt-black text-size-16 mt-4 mb-5 pl-3">Mudah sekali untuk mulai di Home Tester Club. Cukup klik menu "Review" dan bagikan pendapat kamu tentang produk yang dicoba.</p>
                                        </div>
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
    </body>
</html>