<!-- header -->
<?php echo $this->load->view('layouts/header', NULL, TRUE); ?>
<!-- /header -->
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    <?php echo $this->load->view('layouts/navbar', NULL, TRUE); ?>
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Jenis Tes</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Tambah Data</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Tes</label>
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Tes">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori Layanan</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">Pilih Kategori Layanan</option>
                                <option value="Psikotes">Psikotes</option>
                                <option value="Deteksi Dini">Deteksi Dini</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file-text"></i>Keterangan</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Masukkan Keterangan</label>
                            <div class="editor"></div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-folder"></i>Icon</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Masukkan Gambar</h6>
                        <a href="#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Tambah Gambar</a>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <p><a href="#0" class="btn_1 medium">Save</a></p>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->

    <!-- footer -->
    <?php echo $this->load->view('layouts/footer', NULL, TRUE); ?>
    <!-- /footer -->
</body>

</html>