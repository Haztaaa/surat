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
                                <li class="breadcrumb-item active" aria-current="page">Tambah Surat</li>
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
                        <form action="<?= base_url('surat/tambah') ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                                <input id="inputText3" type="date" name="tgl_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                                <input id="inputText3" type="text" name="tempat_lahir" class="form-control">
                                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Permandian</label>
                                <input id="inputText3" type="date" name="tgl_permandian" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Permandian</label>
                                <input id="inputText3" type="text" name="tempat_permandian" class="form-control">
                                <?= form_error('tempat_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Anak</label>
                                <input id="inputText3" type="text" name="nama_anak" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="input-select">Jenis Kelamin</label>
                                <select class="form-control" id="input-select" name="jenis_kelamin">
                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki - laki </option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah</label>
                                <input id="inputText3" type="text" name="nama_ayah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu</label>
                                <input id="inputText3" type="text" name="nama_ibu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Wali Baptis</label>
                                <input id="inputText3" type="text" name="wali_baptis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Diterima Oleh</label>
                                <input id="inputText3" type="text" name="diterima_oleh" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Sakramen</label>
                                <input id="inputText3" type="date" name="tgl_sakramen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Sakramen</label>
                                <input id="inputText3" type="text" name="tempat_sakramen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Menikah Dengan</label>
                                <input id="inputText3" type="text" name="menikah_dengan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Menikah Dengan</label>
                                <input id="inputText3" type="date" name="tgl_menikah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Menikah</label>
                                <input id="inputText3" type="text" name="tempat_menikah" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="<?= base_url('surat') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>