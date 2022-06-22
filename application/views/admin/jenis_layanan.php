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
                <li class="breadcrumb-item active">Jenis Layanan</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <!-- <div class="card-header">
                    <i class="fa fa-table"></i> Data Table Example
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>Jenis Layanan</th>
                                    <th>Perlu Login</th>
                                    <th>Urutan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->


    <!-- footer -->
    <?php echo $this->load->view('layouts/footer', NULL, TRUE); ?>
    <!-- /footer -->
</body>

</html>