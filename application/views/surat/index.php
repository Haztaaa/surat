<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Blank Pageheader </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
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
                <a href="<?= base_url('surat/tambah') ?>" class="btn btn-primary mb-2">Tambah Surat</a>

                <div class="card">
                    <h5 class="card-header">Daftar Surat Permandian <?= $this->session->flashdata('message'); ?></h5>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Anak</th>
                                    <th scope="col">Tanggal Dibuat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($surat as $b) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $b['nama_anak'] ?></td>
                                        <td><?= $b['tgl_buat'] ?></td>

                                        <td>
                                            <a href="<?= base_url('surat/ubah/') . $b['id_permandian'] ?>" class="btn btn-warning mb-2"><i class="fas fa-edit"></i></a>
                                            <a href="" onclick="cetak('<?php echo $b['id_permandian']; ?>')" class="btn btn-info mb-2" data-toggle="modal" data-target="#cetak"><i class="fas fa-print"></i></a>
                                            <a href="<?= base_url('surat/detail/') . $b['id_permandian'] ?>" class="btn btn-success mb-2"><i class="fas fa-eye"></i></a>
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

    <script>
        function cetak(id) {
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('/surat/get') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="cetak"]').val(data.id_permandian);
                    $('#cetak').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <div class="">
        <!-- Modal -->
        <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="cetakLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cetakLabel">Notifikasi</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <span class="badge badge-danger">Perhatian!</span>
                        <p>Nomor Regis akan otomatis dihitung saat menekan tombol cetak!
                            Pastikan Data sudah benar!
                        </p>
                        <form action="<?= base_url('surat/cetak') ?>" method="POST">
                            <input type="hidden" name="cetak">
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button class="btn btn-primary" type="submit">Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>