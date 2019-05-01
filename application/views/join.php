<body class='body-sc'>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header-wrapper">
            <div class="header-items container-fluid">
                <div class="header-logo">
                    <a href="<?php echo site_url('UserController/index')?>"><img src="<?php echo base_url('assets/img/etc/htc_logo2.png')?>" alt="Header Logo"></a>
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
                <div class="container-inner col-12 pt-3 mt-5">
                    <div class="row m-0 mb-4">
                        <div class="col-12">
                            <h1 class="text-center txt-purple">Daftar sekarang</h1>
                        </div>
                    </div>
                    <div class="row m-0 mb-4">
                        <div class="col-5 m-auto text-center">
                            <p class="body-font text-size-18 text-white">Kami akan kirimkan produk gratis ke rumah kamu.<br/>Silakan coba produknya di rumah dan sampaikan review kamu bersama ribuan penguji lainnya secara online.</p>
                        </div>
                    </div>
                    <div class="row m-0 mb-4">
                        <div class="col-12 text-center">
                            <div class="col-6 m-auto">
                                <button class="btn-white mb-4">Gabung via Facebook</button>
                            </div>
                            <div class="col-6 m-auto">
                                <button class="btn-white" id="btnEmail">Gabung via Email</button>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-8 m-auto">
                            <form action="/" method="POST" id="frmJoin" class="d-none">
                                <div class="row pb-3">
                                    <div class="input-outer col-12 mb-2">
                                        <div class="input-wrapper">
                                            <input type="text" id="firstname" name="firstname" required>
                                            <label for="firstname">Nama depan</label>
                                        </div>
                                        <div class="input-error">
                                            <span>
                                                <!-- Error -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               <div class="row pb-4">
                                    <div class="input-outer col-12 mb-2">
                                        <div class="input-wrapper">
                                            <input type="email" id="email" name="email" required>
                                            <label for="email">Alamat email</label>
                                        </div>
                                        <div class="input-error">
                                            <span>
                                                <!-- Error -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="input-outer col-12 text-center mb-2">
                                        <button class="btn-white" type="submit">Kirimkan</button>
                                    </div>
                                    <div class="input-outer col-12 text-center text-uppercase">
                                        <a href="#" class='href-link'>Sudah menjadi member?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>