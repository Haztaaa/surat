<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Daftar Permintaan Surat</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Permintaan</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Daftar Permintaan Surat</a></li>

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


                <div class="card">
                    <h5 class="card-header">Daftar Permintaan<?= $this->session->flashdata('message'); ?></h5>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pemohon</th>
                                    <th scope="col">Nomor Telpon</th>
                                    <th scope="col">Jenis Surat</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($permintaan as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $p['nama_pemohon'] ?></td>
                                        <td><?= $p['no_telp'] ?></td>
                                        <td><?= $p['jenis_surat'] ?></td>
                                        <td><?= $p['keterangan'] ?></td>
                                        <td>
                                            <?php if ($p['status'] == 1) : ?>
                                                <span class="badge badge-success">Diterima</span>
                                            <?php elseif ($p['status'] == 3) : ?>
                                                <span class="badge badge-info">Selesai</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="#" onclick="selesai('<?php echo $p['id_permintaan']; ?>')" class="btn btn-info" data-toggle="modal" data-target="#selesai">Selesai</a>

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
        function selesai(id) {
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('/permintaan/get') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="selesai"]').val(data.id_permintaan);
                    $('#selesai').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <div class="">
        <!-- Modal -->
        <div class="modal fade" id="selesai" tabindex="-1" role="dialog" aria-labelledby="selesaiLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="selesaiLabel">Notifikasi</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <span class="badge badge-danger">Perhatian!</span>
                        <p>Jika permintaan surat belum selesai, maka jangan menyelesaikan daftar permintaan dahulu!</p>
                        <p>Apabila permintaan surat telah selesai maka dapat menyelesaikan permintaan!</p>
                        <form action="<?= base_url('permintaan/selesai') ?>" method="POST">
                            <input type="hidden" name="selesai">
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button class="btn btn-primary" type="submit">Selesai</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>