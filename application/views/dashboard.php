<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->

<head>
    <style>
        /* Gaya untuk elemen dengan kelas "col-xl-12" */
        .col-xl-12 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"><i class="fa-solid fa-house"></i> Dashboard TKD</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('index'); ?>" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('index'); ?>" class="breadcrumb-link">Dashboard Penyaluran TKD di Sulawesi Utara</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg 12 col-md-12 col-sm-12 col-12">
                        <h6>Date last updated: </h6>
                        <h6 id="updateakhir"></h6>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-tiffany"><i class="fa-solid fa-bookmark"></i> DANA ALOKASI UMUM</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5 class="">Pagu: </h5>
                                    <h4 class="" id="pg_dau_tot">Rp 000</h4>
                                    <h5 class="">Realisasi: </h5>
                                    <h4 class="" id="real_dau_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-tiffany" role="progressbar" id="perbar_real_dau_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyalur: <span class="float-end text-tiffany" id="per_real_dau_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-danger"><i class="fa-solid fa-hand-holding-hand"></i> DANA BAGI HASIL</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_dbh_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_dbh_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-danger" role="progressbar" id="perbar_real_dbh_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-danger" id="per_real_dbh_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-success"><i class="fa-solid fa-people-group"></i> DANA DESA</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_dd_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_dd_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-success" role="progressbar" id="perbar_real_dd_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-success" id="per_real_dd_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-orange"><i class="fa-solid fa-landmark"></i> DAK FISIK</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_df_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_df_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-orange" role="progressbar" id="perbar_real_df_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-orange" id="per_real_df_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-warning"><i class="fa-solid fa-graduation-cap"></i> BOS</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_bos_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_bos_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-warning" role="progressbar" id="perbar_real_bos_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-warning" id="per_real_bos_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-primary"><i class="fa-solid fa-child-reaching"></i> BOP PAUD</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_bopp_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_bopp_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-primary" role="progressbar" id="perbar_real_bopp_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-primary" id="per_real_bopp_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-secondary"><i class="fa-solid fa-user-nurse"></i> BOP KESETARAAN</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_bopk_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_bopk_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress bg-secondary" role="progressbar" id="perbar_real_bopk_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-secondary" id="per_real_bopk_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
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


<!-- Optional JavaScript -->
<!-- JS API Gsheet-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- Mulai JS Ambil Data Gsheet-->
<script type="text/javascript">
    // https://google,developers.appspot.com/chart/interactive/docs/spreadsheets#gid
    google.load('visualization', '1', {
        packages: ['corechart', 'line']
    });
    google.setOnLoadCallback(drawChart);

    function drawChart() {
        // Add your sheets url and range below 
        var spreadsheetUrl = "https://docs.google.com/spreadsheets/d/1KOhG-r_fseF_AnVK3HxNK1okvKlvzvJRWzLpzkCMl2g/edit#gid=1036961748?range=A1";
        var query = new google.visualization.Query(spreadsheetUrl);
        query.send(handleQueryResponse);
    }

    function handleQueryResponse(response) {
        var dataTable = response.getDataTable();
        // https://developers.google.com/chart/interactive/docs/reference?hl=en#methods
        // getValue(rowIndex, columnIndex)

        // DAU
        document.getElementById("pg_dau_tot").innerHTML = dataTable.getValue(0, 5);
        document.getElementById("real_dau_tot").innerHTML = dataTable.getValue(0, 6);
        document.getElementById("per_real_dau_tot").innerHTML = dataTable.getValue(0, 8);
        document.getElementById("perbar_real_dau_tot").style.width = dataTable.getValue(0, 8);

        // DBH
        document.getElementById("pg_dbh_tot").innerHTML = dataTable.getValue(1, 5);
        document.getElementById("real_dbh_tot").innerHTML = dataTable.getValue(1, 6);
        document.getElementById("per_real_dbh_tot").innerHTML = dataTable.getValue(1, 8);
        document.getElementById("perbar_real_dbh_tot").style.width = dataTable.getValue(1, 8);

        // DD
        document.getElementById("pg_dd_tot").innerHTML = dataTable.getValue(3, 5);
        document.getElementById("real_dd_tot").innerHTML = dataTable.getValue(3, 6);
        document.getElementById("per_real_dd_tot").innerHTML = dataTable.getValue(3, 8);
        document.getElementById("perbar_real_dd_tot").style.width = dataTable.getValue(3, 8);

        // DF
        document.getElementById("pg_df_tot").innerHTML = dataTable.getValue(2, 5);
        document.getElementById("real_df_tot").innerHTML = dataTable.getValue(2, 6);
        document.getElementById("per_real_df_tot").innerHTML = dataTable.getValue(2, 8);
        document.getElementById("perbar_real_df_tot").style.width = dataTable.getValue(2, 8);

        // BOS
        document.getElementById("pg_bos_tot").innerHTML = dataTable.getValue(4, 5);
        document.getElementById("real_bos_tot").innerHTML = dataTable.getValue(4, 6);
        document.getElementById("per_real_bos_tot").innerHTML = dataTable.getValue(4, 8);
        document.getElementById("perbar_real_bos_tot").style.width = dataTable.getValue(4, 8);

        // BOP PAUD
        document.getElementById("pg_bopp_tot").innerHTML = dataTable.getValue(5, 5);
        document.getElementById("real_bopp_tot").innerHTML = dataTable.getValue(5, 6);
        document.getElementById("per_real_bopp_tot").innerHTML = dataTable.getValue(5, 8);
        document.getElementById("perbar_real_bopp_tot").style.width = dataTable.getValue(5, 8);

        // BOP KESETARAAN
        document.getElementById("pg_bopk_tot").innerHTML = dataTable.getValue(6, 5);
        document.getElementById("real_bopk_tot").innerHTML = dataTable.getValue(6, 6);
        document.getElementById("per_real_bopk_tot").innerHTML = dataTable.getValue(6, 8);
        document.getElementById("perbar_real_bopk_tot").style.width = dataTable.getValue(6, 8);

        // Properties
        document.getElementById("updateakhir").innerHTML = dataTable.getValue(7, 0);

    }
</script>
<!-- Akhir JS Ambil Data Gsheet-->


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


</body>

</html>