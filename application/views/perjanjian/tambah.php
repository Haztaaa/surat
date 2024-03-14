<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">SURAT PERJANJIAN NIKAH</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Perjanjian</a></li>

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
                    <h5 class="card-header">Formulir Surat Perjanjian Nikah</h5>
                    <div class="card-body">
                        <form action="<?= base_url('perjanjian/tambah') ?>" method="POST">
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">No</label>
                                <input id="inputText3" type="text" name="kode" value="<?= $kode_auto ?>" class="form-control" readonly>
                                
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Mempelai Pria</label>
                                <input id="inputText3" type="text" name="nama_laki" class="form-control">
                                <?= form_error('nama_laki', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Mempelai Wanita</label>
                                <input id="inputText3" type="text" name="nama_perempuan" class="form-control">
                                <?= form_error('nama_perempuan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Diteguhkan Di</label>
                                <input id="inputText3" type="text" name="diteguhkan" class="form-control">
                                <?= form_error('diteguhkan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal</label>
                                <input id="inputText3" type="date" name="tanggal" class="form-control">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Peneguh</label>
                                <input id="inputText3" type="text" name="peneguh" class="form-control">
                                <?= form_error('peneguh', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="<?= base_url('keterangan') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>