<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu <?php echo $page  ?>
                    </li>

                    <?php if ($this->session->userdata('level') == 1) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dashboard_p') ?>"> <i class="fas fa-suitcase"></i>Beranda</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == 2) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dashboard_s') ?>"> <i class="fas fa-suitcase"></i>Beranda</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == 1) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('permintaan/validasi') ?>"> <i class="fas fa-check"></i>Permohonan
                                <?php
                                $cek =  $this->db->query("SELECT * from permintaan WHERE status = 0")->num_rows();
                                if ($cek > 0) {

                                    echo '<span style="background:#e53935;color:white;width:45px;height:25px;text-align:center;line-height:10px; border-radius: 30%;">‎ ‎ ‎ ' . $cek . ' ‎ ‎ ‎</span>';
                                }
                                ?> </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == 2) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('permintaan/diterima') ?>"> <i class="fas fa-check"></i>Permintaan Surat
                                <?php
                                $cek =  $this->db->query("SELECT * from permintaan WHERE status = 1")->num_rows();
                                if ($cek > 0) {

                                    echo '<span style="background:#e53935;color:white;width:45px;height:25px;text-align:center;line-height:10px; border-radius: 30%;">‎ ‎ ‎ ' . $cek . ' ‎ ‎ ‎</span>';
                                }
                                ?> </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == 1) : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('pengguna') ?>"><i class="fa fa-fw fa-user-circle"></i>Daftar Pengguna</a>

                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') != 3) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-file"></i>Buat Surat</a>
                            <div id="submenu-2" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('surat') ?>">Surat Permandian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('keterangan') ?>">Keterangan telah menikah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('perjanjian') ?>">Perjanjian nikah</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == 3) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('permintaan') ?>"><i class="far fa-file-archive"></i>Permintaan Surat</a>

                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') != 3) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('komuni') ?>"><i class=" fas fa-users"></i>Daftar Komuni Pertama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('krisma') ?>"><i class=" fas fa-users"></i>Daftar Krisma</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>