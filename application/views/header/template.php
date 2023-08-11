<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url(); ?>assets/img/logo_bakudapa_tr.png">
    <style>
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .logo-bakudapa {
            margin-right: 10px;
        }

        .logo-djpb {
            margin-left: 1250px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper mt-5">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?= base_url('index'); ?>">
                    <img src="<?= base_url('assets/img/logo_bakudapa_tr.png'); ?>" alt="Bakudapa" width="40" height="40" class="logo-bakudapa">Bakudapa
                    <img src="<?= base_url('assets/img/Logo DJPb Vertical.png'); ?>" alt="Logo DJPb Vertical" width="100" height="100" class="logo-djpb">
                    <img src=" <?= base_url('assets/img/logo INTRESS 3d.png'); ?>" alt="Logo INTRESS 3d" width="100" height="100" class="logo-intress">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-light">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="<?= base_url('index'); ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-light mt-5" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-house"></i>Dashboard</a>
                                <div id="submenu-1" class="collapse submenu bg-light">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('index'); ?>"><i class="fa-regular fa-circle"></i> Dashboard TKD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dbh') ? 'active' : '' ?>" href="<?= base_url('index/dbh'); ?>"><i class="fa-regular fa-circle"></i> DBH</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dana_desa') ? 'active' : '' ?>" href="<?= base_url('index/dana_desa'); ?>"><i class="fa-regular fa-circle"></i> Dana Desa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dak_fisik') ? 'active' : '' ?>" href="<?= base_url('index/dak_fisik'); ?>"><i class="fa-regular fa-circle"></i> DAK Fisik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dau') ? 'active' : '' ?>" href="<?= base_url('index/dau'); ?>"><i class="fa-regular fa-circle"></i> DAU</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'bo') ? 'active' : '' ?>" href="<?= base_url('index/bantuan_operasional'); ?>"><i class="fa-regular fa-circle"></i> Bantuan Operasional</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'dl') ? 'active' : '' ?>" href="<?= base_url('index/dashboard_laporan'); ?>"><i class="fa-regular fa-circle"></i> Dashboard Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa-solid fa-clone"></i> Per Daerah</a>
                                <div id="submenu-2" class="collapse submenu bg-light">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'sulawesi_utara') ? 'active' : '' ?>" href="<?= base_url('index/sulawesi_utara'); ?>"><i class="fa-regular fa-circle"></i> Sulawesi Utara</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabMinahasa') ? 'active' : '' ?>" href="<?= base_url('index/kabMinahasa'); ?>"><i class="fa-regular fa-circle"></i> Kab. Minahasa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabMinahasa_Sel') ? 'active' : '' ?>" href="<?= base_url('index/kabMinahasa_Sel'); ?>"><i class="fa-regular fa-circle"></i> Kab. Minahasa Selatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabMinahasa_Teng') ? 'active' : '' ?>" href="<?= base_url('index/kabMinahasa_Teng'); ?>"><i class="fa-regular fa-circle"></i> Kab. Minahasa Tenggara</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kota_manado') ? 'active' : '' ?>" href="<?= base_url('index/kota_manado'); ?>"><i class="fa-regular fa-circle"></i> Kota Manado</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kota_tomohon') ? 'active' : '' ?>" href="<?= base_url('index/kota_tomohon'); ?>"><i class="fa-regular fa-circle"></i> Kota Tomohon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabKep_sangihe') ? 'active' : '' ?>" href="<?= base_url('index/kabKep_sangihe'); ?>"><i class="fa-regular fa-circle"></i> Kab. Kepulauan Sangihe</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabKep_sitaro') ? 'active' : '' ?>" href="<?= base_url('index/kabKep_sitaro'); ?>"><i class="fa-regular fa-circle"></i> Kab. Kep. Sitaro</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabBol_mongondow') ? 'active' : '' ?>" href="<?= base_url('index/kabBol_mongondow'); ?>"><i class="fa-regular fa-circle"></i> Kab. Bol. Mongondow</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabBol_mong_utara') ? 'active' : '' ?>" href="<?= base_url('index/kabBol_mong_utara'); ?>"><i class="fa-regular fa-circle"></i> Kab. Bol. Mong. Utara</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabBol_mong_selatan') ? 'active' : '' ?>" href="<?= base_url('index/kabBol_mong_selatan'); ?>"><i class="fa-regular fa-circle"></i> Kab. Bol. Mong. Selatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabBol_mong_timur') ? 'active' : '' ?>" href="<?= base_url('index/kabBol_mong_timur'); ?>"><i class="fa-regular fa-circle"></i> Kab. Bol. Mong. Timur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kota_Kotamobagu') ? 'active' : '' ?>" href="<?= base_url('index/kota_Kotamobagu'); ?>"><i class="fa-regular fa-circle"></i> Kota Kotamobagu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabKep_talaud') ? 'active' : '' ?>" href="<?= base_url('index/kabKep_talaud'); ?>"><i class="fa-regular fa-circle"></i> Kab. Kepulauan Talaud</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kabMina_Utara') ? 'active' : '' ?>" href="<?= base_url('index/kabMina_Utara'); ?>"><i class="fa-regular fa-circle"></i> Kab. Minahasa Utara</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kota_bitung') ? 'active' : '' ?>" href="<?= base_url('index/kota_bitung'); ?>"><i class="fa-regular fa-circle"></i> Kota Bitung</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa-solid fa-clone"></i> Per KPPN</a>
                                <div id="submenu-3" class="collapse submenu bg-light" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kppn_manado') ? 'active' : '' ?>" href="<?= base_url('index/kppn_manado'); ?>"><i class="fa-regular fa-circle"></i> KPPN Manado</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kppn_tahuna') ? 'active' : '' ?>" href="<?= base_url('index/kppn_tahuna'); ?>"><i class="fa-regular fa-circle"></i> KPPN Tahuna</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kppn_kotamobagu') ? 'active' : '' ?>" href="<?= base_url('index/kppn_kotamobagu'); ?>"><i class="fa-regular fa-circle"></i> KPPN Kotamobagu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($active == 'kppn_bitung') ? 'active' : '' ?>" href="<?= base_url('index/kppn_bitung'); ?>"><i class="fa-regular fa-circle"></i> KPPN Bitung</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                PRODUK DAN PERATURAN
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
    </div>
</body>