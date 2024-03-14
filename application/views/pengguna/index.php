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
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Permintaan</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Daftar Permintaan</a></li>

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
                <a href="<?= base_url('pengguna/tambah') ?>" class="btn btn-primary mb-2">Tambah Pengguna</a>

                <div class="card">
                    <h5 class="card-header">Daftar Pengguna<?= $this->session->flashdata('message'); ?></h5>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['username'] ?></td>
                                        <td><?= $p['jabatan'] ?></td>
                                        <td>
                                            <?php if ($p['status'] == 0) : ?>
                                                <a href="" onclick="tidak_aktif('<?php echo $p['id_user']; ?>')" class="badge badge-pill badge-success" data-toggle="modal" data-target="#tidak">Aktif</a>
                                            <?php else : ?>
                                                <a href="#" onclick="aktif('<?php echo $p['id_user']; ?>')" class="badge badge-pill badge-danger" data-toggle="modal" data-target="#aktif">Tidak Aktif</a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('pengguna/ubah/') . $p['id_user'] ?>" class="btn btn-warning mb-2"><i class="fas fa-edit"></i></a>
                                            <a href="#" onclick="hapus('<?php echo $p['id_user']; ?>')" class="btn btn-danger mb-2" data-toggle="modal" data-target="#hapus"><i class="fas fa-trash"></i></a>
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
        function aktif(id) {
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('/pengguna/get') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="a_id_user"]').val(data.id_user);
                    $('#aktif').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }

        function tidak_aktif(id) {
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('/pengguna/get') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="t_id_user"]').val(data.id_user);
                    $('#tidak').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }

        function hapus(id) {
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('/pengguna/get') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="hapus"]').val(data.id_user);
                    $('#hapus').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <div class="">
        <!-- Modal -->
        <div class="modal fade" id="aktif" tabindex="-1" role="dialog" aria-labelledby="aktifLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="aktifLabel">Notifikasi</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <p>Akun yang dipilih akan di aktifkan!</p>
                        <form action="<?= base_url('pengguna/aktif') ?>" method="POST">
                            <input type="hidden" name="a_id_user">
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button class="btn btn-primary" type="submit">Oke</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <!-- Modal -->
        <div class="modal fade" id="tidak" tabindex="-1" role="dialog" aria-labelledby="tidakLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tidakLabel">Notifikasi</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <p>Akun yang dipilih akan dinonaktifkan!</p>
                        <form action="<?= base_url('pengguna/tidak') ?>" method="POST">
                            <input type="hidden" name="t_id_user">
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button class="btn btn-primary" type="submit">Oke</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <!-- Modal -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusLabel">Notifikasi</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <p>Akun yang dipilih akan dihapus!</p>
                        <form action="<?= base_url('pengguna/hapus') ?>" method="POST">
                            <input type="hidden" name="hapus">
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button class="btn btn-primary" type="submit">Oke</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>