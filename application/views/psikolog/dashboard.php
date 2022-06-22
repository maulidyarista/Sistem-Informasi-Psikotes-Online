<?php echo $this->load->view('layouts/header', NULL, TRUE); ?>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html"><img src="<?php echo  base_url(); ?>assets/img/logoo.png" data-retina="true" alt="" width="163" height="36"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="admin/dashboard">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Primary">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseData" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fas fa-clipboard"></i>
                        <span class="nav-link-text">Data Peserta</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseData">
                        <li>
                            <a href="user-profile.html">Jenis Layanan</a>
                        </li>
                        <li>
                            <a href="doctor-profile.html">Jenis Tes</a>
                        </li>
                        <li>
                            <a href="doctor-profile.html">Atur Jadwal</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Psikolog">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseData" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fas fa-clipboard"></i>
                        <span class="nav-link-text">Data Psikolog</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseData">
                        <li>
                            <a href="user-profile.html">Psikolog</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layanan">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseLayanan" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-gear"></i>
                        <span class="nav-link-text">Layanan</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseLayanan">
                        <li>
                            <a href="charts.html">Psikotes</a>
                        </li>
                        <li>
                            <a href="tables.html">Deteksi Dini</a>
                        </li>
                        <li>
                            <a href="tables.html">Umum</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Soal">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSoal" data-parent="#exampleAccordion">
                        <i class="fa fa-fw  far fa-list-alt"></i>
                        <span class="nav-link-text">Bank Soal</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseSoal">
                        <li>
                            <a href="charts.html">Jenis Soal</a>
                        </li>
                        <li>
                            <a href="tables.html">Simulasi Soal</a>
                        </li>
                        <li>
                            <a href="tables.html">Umum</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTransaksi" data-parent="#exampleAccordion">
                        <i class="fa fa-fw far fa-credit-card"></i>
                        <span class="nav-link-text">Transaksi</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseTransaksi">
                        <li>
                            <a href="charts.html">Psikotes</a>
                        </li>
                        <li>
                            <a href="tables.html">Deteksi Dini</a>
                        </li>
                        <li>
                            <a href="tables.html">Umum</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="admin/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Dashboard Saya</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fas fa-clipboard"></i>
                            </div>
                            <div class="mr-5">
                                <h5>Data Peserta</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="messages.html">
                            <span class="float-left">Lihat</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fas fa-clipboard"></i>
                            </div>
                            <div class="mr-5">
                                <h5>Data Psikolog</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                            <span class="float-left">Lihat</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw far fa-credit-card"></i>
                            </div>
                            <div class="mr-5">
                                <h5>Transaksi</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                            <span class="float-left">Lihat</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © RSUD. JOMBANG 2022</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php echo $this->load->view('layouts/footer', NULL, TRUE); ?>
</body>

</html>