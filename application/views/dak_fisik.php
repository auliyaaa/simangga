<!doctype html>
<html lang="en">
<!-- <head>
        Required meta tags -->
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
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datatables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />
<title><?= $title ?></title>
<link rel="icon" href="<?= base_url(); ?>assets/img/logo_bakudapa_tr.png">
<!-- jquery 3.3.1 -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="<?= base_url(); ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="<?= base_url(); ?>assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="<?= base_url(); ?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="<?= base_url(); ?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="<?= base_url(); ?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="<?= base_url(); ?>assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="<?= base_url(); ?>assets/libs/js/dashboard-ecommerce.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            var count = 0;
            $("table tr").filter(function(index) {
                if (index !== 0) { // Exclude the header row
                    var toggle = $(this).text().toLowerCase().indexOf(value) > -1;
                    $(this).toggle(toggle);
                    if (toggle) count++;
                }
            });
            if (count == 0) $('#no-results').show();
            else $('#no-results').hide();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.btn').click(function() {
            var source = $(this).data('source');

            // hide all tables
            $('.table-wrapper').hide();

            // show the table related to the clicked button
            $('#' + source).show();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable({
            "pageLength": 10,
            "searching": false,
            "lengthChange": false
        });
    });
</script>

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

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"><i class="fa-solid fa-house"></i> Dak Fisik</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('index'); ?>" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('index'); ?>" class="breadcrumb-link">Dak Fisik</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <?php
            $data = [
                'kota' => $dataKota,
                'bidang' => $dataBidang,
                'sub_bidang' => $dataSubBidang,
                'kppn' => $dataKppn
            ];
            ?>

            <div class="ecommerce-widget">
                <div class="table-responsive">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="button-group">
                            <button class="btn btn-primary" id="btn-kota" data-source="kota">Kota</button>
                            <button class="btn btn-primary" id="btn-bidang" data-source="bidang">Bidang</button>
                            <button class="btn btn-primary" id="btn-sub-bidang" data-source="sub_bidang">Sub Bidang</button>
                            <button class="btn btn-primary" id="btn-kppn" data-source="kppn">KPPN</button>
                        </div>
                        <input class="form-control" type="text" id="search" style="width:75%;" placeholder="Search">
                    </div>

                    <?php foreach ($data as $key => $tableData) : ?>
                        <div id="<?= $key; ?>" class="table-wrapper" style="display: <?= $key === 'kota' ? 'block' : 'none'; ?>;">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 8px;">NO</th>
                                        <th><?= $tableData['values'][0][0]; ?></th>
                                        <th><?= $tableData['values'][0][1]; ?></th>
                                        <th><?= $tableData['values'][0][2]; ?></th>
                                        <th><?= $tableData['values'][0][3]; ?></th>
                                        <th><?= $tableData['values'][0][4]; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i < count($tableData['values']); $i++) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $tableData['values'][$i][0]; ?></td>
                                            <td><?= $tableData['values'][$i][1]; ?></td>
                                            <td><?= $tableData['values'][$i][2]; ?></td>
                                            <td><?= $tableData['values'][$i][3]; ?></td>
                                            <td><?= $tableData['values'][$i][4]; ?></td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>

                    <div id="no-results" class="alert alert-info" style="display: none;">Data tidak ditemukan.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2023 Bakudapa. All rights reserved.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->

</body>

</html>