<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Surat Keterangan Telah Nikah</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Keterangan Nikah</a></li>

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
                <a href="<?= base_url('keterangan/tambah') ?>" class="btn btn-primary mb-2">Tambah Surat</a>

                <div class="card">
                    <h5 class="card-header">Daftar Surat Keterangan Pernikahan<?= $this->session->flashdata('message'); ?></h5>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pria</th>
                                    <th scope="col">Nama Wanita</th>
                                    <th scope="col">Tanggal Surat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($surat as $b) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $b['nama_pria'] ?></td>
                                        <td><?= $b['nama_wanita'] ?></td>
                                        <td><?= $b['tgl_surat'] ?></td>

                                        <td>
                                            <a href="<?= base_url('keterangan/ubah/') . $b['id_keterangan'] ?>" class="btn btn-warning mb-2"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('keterangan/detail/') . $b['id_keterangan'] ?>" class="btn btn-success mb-2"><i class="fas fa-info"></i></a>
                                            <a href="<?= base_url('keterangan/cetak/') . $b['id_keterangan'] ?>" class="btn btn-info mb-2"><i class="fas fa-print"></i></a>
                                            <a href="#" class="btn btn-danger mb-2"><i class="fas fa-trash"></i></a>
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