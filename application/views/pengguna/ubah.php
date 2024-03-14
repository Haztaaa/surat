<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Ubah data Pengguna</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pengguna</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Ubah Pengguna</li>
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
                        <form action="<?= base_url('pengguna/ubah/') . $data['id_user'] ?>" method="POST">

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama </label>
                                <input id="inputText3" type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Pengguna</label>
                                <input id="inputText3" type="text" name="nama_pengguna" class="form-control" value="<?= $data['username'] ?>">
                                <?= form_error('nama_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kata Sandi</label>
                                <input id="pw" type="password" name="kata_sandi" class="form-control" value="<?= $data['password'] ?>">
                                <?= form_error('kata_sandi', '<small class="text-danger pl-3">', '</small>'); ?>
                                <br>

                                <input type="checkbox" onclick="myFunction()">Lihat Kata Sandi
                            </div>

                            <div class="form-group">
                                <label for="input-select">Jabatan</label>
                                <select class="form-control" id="input-select" name="jabatan">
                                    <option disabled selected>Pilih Jabatan</option>
                                    <?php if ($data['jabatan'] == "Sekretariat") : ?>
                                        <option value="Sekretariat" selected>Sekertariat</option>
                                        <option value="Ketua Wilayah">Ketua Wilayah</option>
                                    <?php elseif ($data['jabatan'] == "Ketua Wilayah") : ?>
                                        <option value="Sekertariat">Sekertariat</option>
                                        <option value="Ketua Wilayah" selected>Ketua Wilayah</option>
                                    <?php endif; ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="<?= base_url('pengguna') ?>" class="btn btn-danger ">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("pw");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>