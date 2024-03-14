<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Halaman Utama</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Beranda Admin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">




                <div class="row">
                    <!-- ============================================================== -->
                    <!-- sales  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total Pengguna</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $t_pengguna ?></h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- new customer  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Permintaan Surat</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $permintaan_surat ?></h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end new customer  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- visitor  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total Komuni pertama</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $komuni ?></h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end visitor  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Total Daftar Krisma</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?= $krisma ?></h1>
                                    </h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total orders  -->
                    <!-- ============================================================== -->
                </div>

                <div>
                    <img src="<?= base_url() ?>assets/images/logo1.png" width="200px" height="200px" style="margin-left:420px;">
                    <p style="font-size:25px; margin-left:115px; color:#0E0C28;">GEREJA ST. MARIA RATU PARA RASUL PAROKI MANEMBO-NEMBO</p>
                </div>

            </div>
        </div>
    </div>