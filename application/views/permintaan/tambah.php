<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Permintaan Surat</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Permintaan</a></li>

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
                        <form action="<?= base_url('permintaan/tambah') ?>" method="POST">

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Pemohon</label>
                                <input id="inputText3" type="text" name="nama_pemohon" class="form-control" value="<?= $pengguna['nama'] ?>" readonly>

                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Wilayah Rohani</label>
                                <input id="inputText3" type="text" name="wilayah_rohani" class="form-control">
                                <?= form_error('wilayah_rohani', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Atas Nama</label>
                                <input id="inputText3" type="text" name="atas_nama" class="form-control">
                                <?= form_error('atas_nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nomor Telepon</label>
                                <input id="inputText3" type="text" name="no_telp" class="form-control">
                                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="input-select">Jenis Surat</label>
                                <select class="form-control" id="input-select" name="jenis_surat">
                                    <option disabled selected>Pilih Jenis Surat</option>
                                    <option value="Surat Permandian">Surat Permandian</option>
                                    <option value="Surat Perjanjian Nikah">Surat Perjanjian Nikah</option>
                                    <option value="Surat Keterangan Nikah">Surat Keterangan Nikah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="<?= base_url('permintaan') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>