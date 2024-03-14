<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">DATA SURAT KETERANGAN MENIKAH</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Keterangan Menikah</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Ubah Surat Keterangan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                <div class="card">
                    <h5 class="card-header">Formuli Data Surat Keterangan Telah Menikah</h5>
                    <div class="card-body">
                        <form action="<?= base_url('keterangan/ubah/') . $data['id_keterangan'] ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label"> Buku Perkawinan</label>
                                <input id="inputText3" type="text" name="buku_perkawinan" class="form-control" value="<?= $data['buku_perkawinan'] ?>">
                                <?= form_error('buku_perkawinan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Perkawinan</label>
                                <input id="inputText3" type="date" name="tgl_perkawinan" class="form-control" value="<?= $data['tgl_perkawinan'] ?>">
                                <?= form_error('tgl_perkawinan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Di Gereja</label>
                                <input id="inputText3" type="text" name="gereja" class="form-control" value="<?= $data['gereja'] ?>">
                                <?= form_error('gereja', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat</label>
                                <input id="inputText3" type="text" name="tempat" class="form-control" value="<?= $data['tempat'] ?>">
                                <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Pria</label>
                                <input id="inputText3" type="text" name="nama_pria" class="form-control" value="<?= $data['nama_pria'] ?>">
                                <?= form_error('nama_pria', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Wanita</label>
                                <input id="inputText3" type="text" name="nama_wanita" class="form-control" value="<?= $data['nama_wanita'] ?>">
                                <?= form_error('nama_wanita', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah (Pria)</label>
                                <input id="inputText3" type="text" name="ayah_pria" class="form-control" value="<?= $data['ayah_pria'] ?>">
                                <?= form_error('ayah_pria', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu (Pria)</label>
                                <input id="inputText3" type="text" name="ibu_pria" class="form-control" value="<?= $data['ibu_pria'] ?>">
                                <?= form_error('ibu_pria', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah (Wanita)</label>
                                <input id="inputText3" type="text" name="ayah_wanita" class="form-control" value="<?= $data['ayah_wanita'] ?>">
                                <?= form_error('ayah_wanita', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu (Wanita)</label>
                                <input id="inputText3" type="text" name="ibu_wanita" class="form-control" value="<?= $data['ibu_wanita'] ?>">
                                <?= form_error('ibu_wanita', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Saksi</label>
                                <input id="inputText3" type="text" name="saksi" class="form-control" value="<?= $data['saksi'] ?>">
                                <?= form_error('saksi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Saksi Resmi</label>
                                <input id="inputText3" type="text" name="saksi_resmi" class="form-control" value="<?= $data['saksi_resmi'] ?>">
                                <?= form_error('saksi_resmi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Diberikan Di</label>
                                <input id="inputText3" type="text" name="diberikan" class="form-control" value="<?= $data['diberikan'] ?>">
                                <?= form_error('diberikan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Diberikan</label>
                                <input id="inputText3" type="date" name="tgl_diberikan" class="form-control" value="<?= $data['tgl_diberikan'] ?>">
                                <?= form_error('tgl_diberikan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="<?= base_url('keterangan') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>