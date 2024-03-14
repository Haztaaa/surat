<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">DATA KOMUNI PERTAMA</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Komuni Pertama</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Tambah Komuni</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                <div class="card">
                    <h5 class="card-header">Tambah Data Komuni</h5>
                    <div class="card-body">
                        <form action="<?= base_url('komuni/tambah') ?>" method="POST">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label"> Nama</label>
                                <input id="inputText3" type="text" name="nama" class="form-control">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ayah</label>
                                <input id="inputText3" type="text" name="nama_ayah" class="form-control">
                                <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Ibu</label>
                                <input id="inputText3" type="text" name="nama_ibu" class="form-control">
                                <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">No Baptis</label>
                                <input id="inputText3" type="text" name="no_baptis" class="form-control">
                                <?= form_error('no_baptis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal Permandian</label>
                                <input id="inputText3" type="date" name="tgl_permandian" class="form-control">
                                <?= form_error('tgl_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tempat Permandian</label>
                                <input id="inputText3" type="text" name="tmpt_permandian" class="form-control">
                                <?= form_error('tmpt_permandian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Paroki Penerimaan</label>
                                <input id="inputText3" type="text" name="paroki_penerimaan" class="form-control" value="Paroki Maria Ratu Para Rasul Manembo-Nembo">
                                <?= form_error('paroki_penerimaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="<?= base_url('komuni') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>