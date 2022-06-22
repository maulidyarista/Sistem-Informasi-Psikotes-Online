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
    <!-- /header -->

    <main>
        <div class="bg_color_2">
            <div class="container margin_60_35">
                <div id="login-2">
                    <h1>Please login to Findoctor!</h1>
                    <form action="<?php echo base_url(); ?>login/auth" method="POST">
                        <div class="box_form clearfix">
                        
                            <div class="box_login">
                                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                <a href="#0" class="social_bt google">Login with Google</a>
                                <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                            </div>
                            <div class="box_login last">
                                <?php echo $this->session->flashdata('msg');?>
                                <div class="form-group">
                                    <?php echo form_error('username'); ?>
                                    <input type="text" id="username" class="form-control" placeholder="Username Anda" name="username" value="<?php echo set_value('username'); ?>">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password'); ?>
                                    <input type="password" id="password" class="form-control" placeholder="Password Anda" name="password" value="<?php echo set_value('password'); ?>">
                                    <a href="#0" class="forgot"><small>Forgot password?</small></a>
                                </div>
                                
                                <div class="form-group">
                                    <input class="btn_1" type="submit" value="Login">
                                </div>
                                
                            </div>
                        </div>
                    </form>
                    <p class="text-center link_bright">Do not have an account yet? <a href="<?php echo base_url(); ?>login/register"><strong>Register now!</strong></a></p>
                </div>
                <!-- /login -->
            </div>
        </div>
    </main>
    <!-- /main -->

    <!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/common_scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/functions.js"></script>

</body>

</html>