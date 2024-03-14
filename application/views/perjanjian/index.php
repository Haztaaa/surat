<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Surat Perjanjian Nikah</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Perjanjian Nikah</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <a href="<?= base_url('perjanjian/tambah') ?>" class="btn btn-primary mb-2">Tambah Surat</a>

                <div class="card">
                    <h5 class="card-header">Daftar Surat Perjanjian Pernikahan<?= $this->session->flashdata('message'); ?></h5>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Mempelai Pria</th>
                                    <th scope="col">Mempelai Wanita</th>
                                    <th scope="col">Tanggal Surat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($surat as $b) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $b['nama_laki'] ?></td>
                                        <td><?= $b['nama_perempuan'] ?></td>
                                        <td><?= $b['tgl_surat'] ?></td>

                                        <td>
                                            <a href="<?= base_url('perjanjian/ubah/') . $b['id_perjanjian'] ?>" class="btn btn-warning mb-2"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('perjanjian/cetak/') . $b['id_perjanjian'] ?>" class="btn btn-info mb-2"><i class="fas fa-print"></i></a>
                                            <a href="<?= base_url('perjanjian/detail/') . $b['id_perjanjian'] ?>" class="btn btn-success mb-2"><i class="fas fa-info"></i></a>

                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>