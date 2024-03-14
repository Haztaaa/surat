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

                                <li class="breadcrumb-item active" aria-current="page">Ubah Surat</li>
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
                        <form action="<?= base_url('perjanjian/ubah/') . $data['id_perjanjian'] ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Mempelai Pria</label>
                                <input id="inputText3" type="text" name="nama_laki" class="form-control" value="<?= $data['nama_laki'] ?>">
                                <?= form_error('nama_laki', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Mempelai Wanita</label>
                                <input id="inputText3" type="text" name="nama_perempuan" class="form-control" value="<?= $data['nama_perempuan'] ?>">
                                <?= form_error('nama_perempuan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Diteguhkan Di</label>
                                <input id="inputText3" type="text" name="diteguhkan" class="form-control" value="<?= $data['diteguhkan'] ?>">
                                <?= form_error('diteguhkan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal</label>
                                <input id="inputText3" type="date" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Peneguh</label>
                                <input id="inputText3" type="text" name="peneguh" class="form-control" value="<?= $data['peneguh'] ?>">
                                <?= form_error('peneguh', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="<?= base_url('perjanjian') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>