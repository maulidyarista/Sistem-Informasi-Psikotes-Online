<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title>Sistem Informasi Layanan Psikotes Online</title>

    <!-- Favicons-->
    <link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" type="image/x-icon" sizes="72x72">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" type="image/x-icon" sizes="114x114">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon" type="image/x-icon" sizes="144x144">

    <!-- GOOGLE WEB FONT -->
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo  base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo  base_url(); ?>assets/css/menu.css" rel="stylesheet">
    <link href="<?php echo  base_url(); ?>assets/css/vendors.css" rel="stylesheet">
    <link href="<?php echo  base_url(); ?>assets/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo  base_url(); ?>assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <header class="header_sticky">
        <div class="container">
            <div class="row">
                
                <!-- navbar -->
                <?php echo $this->load->view('akun/navbar', NULL, TRUE); ?>
                <!-- /navbar -->
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

    <main>
        <div class="bg_color_2">
            <div class="container margin_60_35">
                <div id="register">
                    <h1>Please register to Findoctor!</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <form action="<?php echo base_url(); ?>login/insert" method="POST">
                                <div class="box_form">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <?php echo form_error('username'); ?>
                                        <input type="text" class="form-control" placeholder="username" id="username" name="username" value="<?php echo set_value('username'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <?php echo form_error('name'); ?>
                                        <input type="text" class="form-control" placeholder="name" id="name" name="name" value="<?php echo set_value('name'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <?php echo form_error('email'); ?>
                                        <input type="email" class="form-control" placeholder="email address" id="email" name="email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <?php echo form_error('password1'); ?>
                                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Your password" value="<?php echo set_value('password1'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm password</label>
                                        <?php echo form_error('password2'); ?>
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password">
                                    </div>
                                    <div id="pass-info" class="clearfix"></div>
                                    <div class="form-group">
						                <label>Jenis Kelamin</label>
                                        <?php echo form_error('jenis_kelamin'); ?>
						                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
							                <option value="">pilih jenis kelamin</option>
							                <option value="Laki-Laki">Laki-Laki</option>
							                <option value="Perempuan">Perempuan</option>
						                </select>
					                </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <?php echo form_error('alamat'); ?>
                                        <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat" value="<?php echo set_value('alamat'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <?php echo form_error('tgl_lahir'); ?>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <?php echo form_error('no_telp'); ?>
                                        <input type="text" class="form-control" placeholder="no telepon" name="no_telp" id="no_telp" value="<?php echo set_value('no_telp'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>kode unik</label>
                                        <?php echo form_error('kode_unik'); ?>
                                        <input type="text" class="form-control" placeholder="kode unik" name="kode_unik" id="kode_unik" value="<?php echo set_value('kode_unik'); ?>">
                                    </div>
                                    <div class="checkbox-holder text-left">
                                        <div class="checkbox_2">
                                            <input type="checkbox" value="accept_2" id="check_2" name="check_2">
                                            <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center add_top_30">
                                        <input class="btn_1" type="submit" value="Submit">
                                    </div>
                                </div>
                                <p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
                            </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /register -->
            </div>
        </div>
    </main>
    <!-- /main -->

    <!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/common_scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/pw_strenght.js"></script>

</body>

</html>