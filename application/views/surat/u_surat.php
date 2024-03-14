<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">SURAT PERMANDIAN</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Permandian</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ubah Tambah Surat</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                <div class="card">
                    <h5 class="card-header">Formulir Surat Permandian</h5>
                    <div class="card-body">
                        <form action="<?= base_url('surat/ubah/') . $data['id_permandian'] ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                                <input id="inputText3" type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                                <input id="inputText3" type="text" name="tempat_lahir" class="form-control" value="<?= $data['tmpt_lahir'] ?>">
                                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Permandian</label>
                                <input id="inputText3" type="date" name="tgl_permandian" class="form-control" value="<?= $data['tgl_permandian'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Permandian</label>
                                <input id="inputText3" type="text" name="tempat_permandian" class="form-control" value="<?= $data['tmpt_permandian'] ?>">
                                <?= form_error('tempat_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Anak</label>
                                <input id="inputText3" type="text" name="nama_anak" class="form-control" value="<?= $data['nama_anak'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="input-select">Jenis Kelamin</label>
                                <select class="form-control" id="input-select" name="jenis_kelamin">
                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                    <?php if ($data['jenis_kelamin'] == "Laki-laki") : ?>
                                        <option value="Laki-laki" selected>Laki - laki </option>
                                        <option value="Perempuan">Perempuan</option>
                                    <?php elseif ($data['jenis_kelamin'] == "Perempuan") : ?>
                                        <option value="Laki-laki">Laki - laki </option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah</label>
                                <input id="inputText3" type="text" name="nama_ayah" class="form-control" value="<?= $data['nama_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu</label>
                                <input id="inputText3" type="text" name="nama_ibu" class="form-control" value="<?= $data['nama_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Wali Baptis</label>
                                <input id="inputText3" type="text" name="wali_baptis" class="form-control" value="<?= $data['wali_baptis'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Diterima Oleh</label>
                                <input id="inputText3" type="text" name="diterima_oleh" class="form-control" value="<?= $data['diterima_oleh'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Sakramen</label>
                                <input id="inputText3" type="date" name="tgl_sakramen" class="form-control" value="<?= $data['tgl_sakramen'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Sakramen</label>
                                <input id="inputText3" type="text" name="tempat_sakramen" class="form-control" value="<?= $data['tmpt_sakramen'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Menikah Dengan</label>
                                <input id="inputText3" type="text" name="menikah_dengan" class="form-control" value="<?= $data['menikah_dengan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Menikah Dengan</label>
                                <input id="inputText3" type="date" name="tgl_menikah" class="form-control" value="<?= $data['tgl_menikah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Menikah</label>
                                <input id="inputText3" type="text" name="tempat_menikah" class="form-control" value="<?= $data['tmpt_menikah'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="<?= base_url('surat') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>