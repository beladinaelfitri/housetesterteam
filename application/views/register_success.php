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
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper">
            <div class="header-items container-fluid">
                <div class="header-logo">
                    <a href="#"><img src="<?php echo base_url().'assets/img/htc_logo2.png'?>" alt="Header Logo"></a>
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
                <div class="section-container signup-section">
                    <div class="col-12 section-hd">
                        <h2>Hai <!-- Name -->, ayo lengkapi profil Home Tester Club kamu</h2>
                        <p class="body-font">Untuk bisa memberikan info tentang uji coba produk yang sesuai dengan kamu, kami butuh sedikit informasi rincian tentang kamu.</p>
                        <ul class="nav tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Tentang Kamu</a></li>
                            <li class="nav-item"><a class="nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false">Alamat</a></li>
                            <li class="nav-item"><a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Profil Singkat</a></li>
                            <li class="nav-item"><a class="nav-link" id="socials-tab" data-toggle="tab" href="#socials" role="tab" aria-controls="socials" aria-selected="false">Koneksi Sosial Kamu</a></li>
                            <li class="nav-item"><a class="nav-link" id="last-tab" data-toggle="tab" href="#last" role="tab" aria-controls="last" aria-selected="false">Satu Hal Terakhir</a></li>
                        </ul>
                        <div class="col-10 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-join-wrapper">
                                    <form action="<?php echo site_url().'/UserController/RegisterDelivery';?>\
                                        " method="POST">
                                        <div class="row">
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                                                    <label for="firstname">Nama depan</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="lastname" name="lastname">
                                                    <label for="lastname">Nama Keluarga</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="select-wrapper">
                                                    <select name="jk">
                                                        <option selected>Jenis Kelamin</option>
                                                        <option value="m">Laki - laki</option>
                                                        <option value="f">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <p>Bulan & tahun lahir*</p>
                                            </div>
                                            <div class="col-6 input-outer">
                                                <div class="select-wrapper">
                                                    <select name="bulan">
                                                        <option selected>Bulan</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6 input-outer">
                                                <div class="select-wrapper">
                                                    <select>
                                                        <option selected>Tahun</option>
                                                        <!-- PHP LOOP -->
                                                    </select>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                                                    <label for="email">Alamat email</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <p>Kata sandi membutuhkan: <span class="pass-small">huruf kecil</span>, <span class="pass-num">angka</span>, <span class="pass-special">spesial karakter (!@#$%*)</span>, <span class="pass-len">6 karakter atau lebih</span></p>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="password" id="password" name="password">
                                                    <label for="password">Kata sandi</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="password" id="repassword" name="repassword">
                                                    <label for="repassword">Konfirmasi kata sandi</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <p>Komunikasi dari Home Tester Club:</p>
                                            </div>
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
                                            <div class="col-12 input-outer">
                                                <div class="head-pp">Privasi & Syarat dan Ketentuan</div>
                                                <div class="desc-pp">Saya telah membaca Koleksi Pernyataan Kebijakan Buchanan Group dan menyetujui informasi pribadi saya diperlakukan dengan cara yang dinyatakan. Saya juga setuju untuk menerima komunikasi selanjutnya dari perusahaan Buchanan Group (dan direktur, pembantu dan agen mereka), mitra promosi dan pihak ketiga tepercaya lainnya dengan cara yang dijelaskan dalam kumpulkan pernyataan.</div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="checkbox" id="pp" name="pp">
                                                    <label for="pp">Silakan setujui syarat dan ketentuan untuk melanjutkan</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer tr">
                                                <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                                <div class="form-header">Kami membutuhkan alamat kamu agar Kami dapat mengirimkan produk gratis ke rumah kamu. Lengkapi kolom di bawah ini dan pastikan untuk memberikan data terkini dengan selalu memperbaharui data kamu.</div>
                                <div class="form-join-wrapper">
                                    <form action="/" method="POST">
                                        <div class="row">
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="phonenum" name="phonenum">
                                                    <label for="phonenum">Telepon *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <textarea type="text" id="address" name="address"></textarea>
                                                    <label for="address">Alamat *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="address2" name="address2">
                                                    <label for="address2">Alamat baris ke-2 *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="address3" name="address3">
                                                    <label for="address3">Kelurahan *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="address4" name="address4">
                                                    <label for="address4">Kecamatan *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="address5" name="address5">
                                                    <label for="address5">Kabupaten / Kota *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="select-wrapper">
                                                    <select>
                                                        <option value="" selected>Provinsi *</option>
                                                        <option value="AC">Aceh</option>
                                                        <option value="BA">Bali</option>
                                                        <option value="BT">Banten</option>
                                                        <option value="BE">Bengkulu</option>
                                                        <option value="JK">DKI Jakarta</option>
                                                        <option value="GO">Gorontalo</option>
                                                        <option value="JA">Jambi</option>
                                                        <option value="JB">Jawa Barat</option>
                                                        <option value="JT">Jawa Tengah</option>
                                                        <option value="JI">Jawa Timur</option>
                                                        <option value="KB">Kalimantan Barat</option>
                                                        <option value="KS">Kalimantan Selatan</option>
                                                        <option value="KT">Kalimantan Tengah</option>
                                                        <option value="KI">Kalimantan Timur</option>
                                                        <option value="KU">Kalimantan Utara</option>
                                                        <option value="BB">Kepulauan Bangka Belitung</option>
                                                        <option value="KR">Kepulauan Riau</option>
                                                        <option value="LA">Lampung</option>
                                                        <option value="MA">Maluku</option>
                                                        <option value="MU">Maluku Utara</option>
                                                        <option value="NB">Nusa Tenggara Barat</option>
                                                        <option value="NT">Nusa Tenggara Timur</option>
                                                        <option value="PA">Papua</option>
                                                        <option value="PB">Papua Barat</option>
                                                        <option value="RI">Riau</option>
                                                        <option value="SR">Sulawesi Barat</option>
                                                        <option value="SN">Sulawesi Selatan</option>
                                                        <option value="ST">Sulawesi Tengah</option>
                                                        <option value="SG">Sulawesi Tenggara</option>
                                                        <option value="SA">Sulawesi Utara</option>
                                                        <option value="SB">Sumatera Barat</option>
                                                        <option value="SS">Sumatera Selatan</option>
                                                        <option value="SU">Sumatera Utara</option>
                                                        <option value="YO">Yogyakarta</option>
                                                    </select>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-wrapper">
                                                    <input type="text" id="address6" name="address6">
                                                    <label for="address6">Kode pos *</label>
                                                </div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer tr">
                                                <button class="btnBack btn-white" type="button">Kembali</button>
                                                <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="form-header">Kami membutuhkan lebih banyak info tentang kamu supaya kamu bisa merasakan manfaat maksimal dari Home Tester Club.</div>
                                <div class="form-join-wrapper">
                                    <form action="/" method="POST">
                                        <div class="row">
                                            <div class="col-12 input-outer">
                                                <div class="input-header">Berapa jumlah orang yang tinggal di rumah anda?</div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                                <div class="select-wrapper np col-6">
                                                    <select>
                                                        <option value="" selected>Sebutkan</option>
                                                        <option value="A">Anda Sendiri</option>
                                                        <option value="B">2 Orang</option>
                                                        <option value="C">3 Orang</option>
                                                        <option value="D">4 Orang</option>
                                                        <option value="E">5 Orang</option>
                                                        <option value="F">6 Atau Lebih</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-header">Apakah anda memiliki anak yang berusia dibawah 18 tahun?</div>
                                                <div class="input-desc body-font">Kamu dapat memilih maksimal 2 jawaban</div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="checkbox" id="child1" name="child">
                                                    <label for="child1">Perempuan</label>
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="checkbox" id="child2" name="child">
                                                    <label for="child2">Laki-laki</label>
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="checkbox" id="child0" name="child">
                                                    <label for="child0">Tidak/Belum memiliki anak</label>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-header">Pada tahun berapa anak anda lahir?</div>
                                                <div class="input-desc body-font">Kamu dapat memilih maksimal 8 jawaban</div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                                <div class="input-wrapper np fl col-6">
                                                    <input type="checkbox" id="child-date1" name="child-date">
                                                    <label for="child-date1">2019</label>
                                                </div>
                                                <div class="input-wrapper np fl col-6">
                                                    <input type="checkbox" id="child-date2" name="child-date">
                                                    <label for="child-date2">2018</label>
                                                </div>
                                                <div class="input-wrapper np fl col-6">
                                                    <input type="checkbox" id="child-date3" name="child-date">
                                                    <label for="child-date3">2017</label>
                                                </div>
                                                <div class="input-wrapper np fl col-6">
                                                    <input type="checkbox" id="child-date4" name="child-date">
                                                    <label for="child-date4">2016</label>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-header">Manakah yang paling tepat menggambarkan penghasilan bulanan anda ?</div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                                <div class="select-wrapper np col-6">
                                                    <select>
                                                        <option value="" selected>Sebutkan</option>
                                                        <option value="A">Dibawah Rp. 3.000.000</option>
                                                        <option value="B">Rp. 3.000.000 - Rp 10.000.000</option>
                                                        <option value="C">Rp. 10.000.000 - Rp. 15.000.000</option>
                                                        <option value="D">Rp. 15.000.000 - Rp. 25.000.000</option>
                                                        <option value="E">Rp. 25.000.000 - Rp. 35.000.000</option>
                                                        <option value="F">Diatas  Rp. 35.000.000</option>
                                                        <option value="G">Menolak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer">
                                                <div class="input-header">Dari seluruh penghasilan Anda dalam sebulan, berapakah persentase untuk berbelanja kebutuhan rumah tangga?</div>
                                                <div class="input-error">
                                                    <span>
                                                        <!-- Error -->
                                                    </span>
                                                </div>
                                                <div class="select-wrapper np col-6">
                                                    <select>
                                                        <option value="" selected>Sebutkan</option>
                                                        <option value="A">0-25%</option>
                                                        <option value="B">25%-49%</option>
                                                        <option value="C">50%-74%</option>
                                                        <option value="D">Lebih dari 75%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 input-outer tr">
                                                <button class="btnApply btn-white" type="submit">Kirimkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="socials" role="tabpanel" aria-labelledby="socials-tab">
                                <div class="form-header col-8">Beberapa uji coba produk kami melibatkan partisipasi sosial. Masuk ke akunmu sekarang supaya lebih dikenal dan dihargai atas kontribusi kamu.</div>
                                <div class="form-join-wrapper">
                                    <form action="/" method="POST">
                                        <div class="row">
                                            <div class="col-6 input-outer">
                                                <a class="soconn-wrap" href="#">
                                                    <div class="soconn-outer">
                                                        <div class="soconn-inner">
                                                            <i class="fab fa-facebook-square fa-2x"></i>
                                                            <br/>
                                                            <span>Facebook</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 input-outer">
                                                <a class="soconn-wrap" href="#">
                                                    <div class="soconn-outer">
                                                        <div class="soconn-inner">
                                                            <i class="fab fa-instagram fa-2x"></i>
                                                            <br/>
                                                            <span>Instagram</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 input-outer tr">
                                                <button class="btnBack btn-white" type="submit">Kembali</button>
                                                <button class="btnApply btn-white" type="submit">Berikutnya</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="last" role="tabpanel" aria-labelledby="last-tab">
                                <div class="form-join-wrapper">
                                    <form action="/" method="POST">
                                        <div class="row">
                                            <div class="col-8 input-outer">
                                                <div class="input-header">Terima kasih telah bergabung dengan Home Tester Club</div>
                                                <div class="input-desc body-font">Dapatkan kesempatan lebih besar untuk menguji coba produk gratis dengan memperbaharui data diri kamu. Lakukan pembaharuan secara berkala kapan saja di tombol Tentang Saya.</div>
                                            </div>
                                            <div class="row col-12">
                                                <div class="col-3 input-outer">
                                                    <a class="soconn-wrap" href="#">
                                                        <div class="soconn-outer">
                                                            <div class="soconn-inner">
                                                                <i class="fas fa-camera fa-2x"></i>
                                                                <br/>
                                                                <span>Upload</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-3 input-outer">
                                                    <a class="soconn-wrap" href="#">
                                                        <div class="soconn-outer">
                                                            <div class="soconn-inner">
                                                                <i class="fas fa-pencil-alt fa-2x"></i>
                                                                <br/>
                                                                <span>Tulis Review</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-3 input-outer">
                                                    <a class="soconn-wrap" href="#">
                                                        <div class="soconn-outer">
                                                            <div class="soconn-inner">
                                                                <i class="fas fa-box-open fa-2x"></i>
                                                                <br/>
                                                                <span>Tulis Review</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-3 input-outer">
                                                    <a class="soconn-wrap" href="#">
                                                        <div class="soconn-outer">
                                                            <div class="soconn-inner">
                                                                <i class="fas fa-home fa-2x"></i>
                                                                <br/>
                                                                <span>Tulis Review</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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