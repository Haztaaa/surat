<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">DATA Krisma</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Krisma</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Ubah Krisma</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                <div class="card">
                    <h5 class="card-header">Ubah Data Krisma</h5>
                    <div class="card-body">
                        <form action="<?= base_url('Krisma/ubah/') . $data['id_krisma'] ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label"> Nama</label>
                                <input id="inputText3" type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah</label>
                                <input id="inputText3" type="text" name="nama_ayah" class="form-control" value="<?= $data['nama_ayah'] ?>">
                                <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu</label>
                                <input id="inputText3" type="text" name="nama_ibu" class="form-control" value="<?= $data['nama_ibu'] ?>">
                                <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">No Baptis</label>
                                <input id="inputText3" type="text" name="no_baptis" class="form-control" value="<?= $data['no_baptis'] ?>">
                                <?= form_error('no_baptis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Permandian</label>
                                <input id="inputText3" type="date" name="tgl_permandian" class="form-control" value="<?= $data['tgl_permandian'] ?>">
                                <?= form_error('tgl_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Permandian</label>
                                <input id="inputText3" type="text" name="tmpt_permandian" class="form-control" value="<?= $data['tmpt_permandian'] ?>">
                                <?= form_error('tmpt_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Penguatan</label>
                                <input id="inputText3" type="text" name="nama_penguatan" class="form-control" value="<?= $data['nama_penguatan'] ?>">
                                <?= form_error('nama_penguatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Krisma</label>
                                <input id="inputText3" type="text" name="tmpt_krisma" class="form-control" value="<?= $data['tmpt_krisma'] ?>">
                                <?= form_error('tmpt_krisma', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Paroki Penerimaan</label>
                                <input id="inputText3" type="text" name="paroki_penerimaan" class="form-control" value="<?= $data['paroki_penerimaan'] ?>">
                                <?= form_error('paroki_penerimaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="<?= base_url('krisma') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>