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
                        <h2 class="pageheader-title"><i class="fa-solid fa-clone"></i> Per Daerah</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Per Daerah</li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('index/kabMinahasa'); ?>" class="breadcrumb-link">Kab. Minahasa</a></li>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-tiffany"><i class="fa-solid fa-bookmark"></i> DANA ALOKASI UMUM</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5 class="">Pagu: </h5>
                                    <h4 class="" id="pagu_dau">Rp 000</h4>
                                    <h5 class="">Realisasi: </h5>
                                    <h4 class="" id="real_dau">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-tiffany text-tiffany" role="progressbar" id="perbar_real_dau"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyalur: <span class="float-end text-tiffany" id="per_real_dau">0%</span></p>
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
                                        <div class="progress-bar bg-danger text-danger" role="progressbar" id="perbar_real_dbh_tot"></div>
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
                                        <div class="progress-bar bg-success text-success" role="progressbar" id="perbar_real_dd_tot"></div>
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
                                    <h5 class="widget-icon radius-10 text-warning"><i class="fa-solid fa-graduation-cap"></i> BOS</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_bos_tot">Rp 000</h4>
                                    <h5>Realisasi: </h5>
                                    <h4 id="real_bos_tot">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-warning text-warning" role="progressbar" id="perbar_real_bos_tot"></div>
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
                                        <div class="progress-bar bg-primary text-primary" role="progressbar" id="perbar_real_bopp_tot"></div>
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
                                        <div class="progress-bar bg-secondary text-secondary" role="progressbar" id="perbar_real_bopk_tot"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-secondary" id="per_real_bopk_tot">0%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="widget-icon radius-10 text-dark"><i class="fa-solid fa-landmark"></i> DAK FISIK</h5>
                                </div>
                                <div class="metric-value d-inline-block">
                                    <h5>Pagu: </h5>
                                    <h4 id="pg_df">Rp 000</h4>
                                    <h5>Kontrak: </h5>
                                    <h4 id="kontrak">Rp 000</h4>
                                    <h5>Salur: </h5>
                                    <h4 id="salur">Rp 000</h4>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-dark text-dark" role="progressbar" id="perbar_df"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Persentase Penyaluran: <span class="float-end text-dark" id="per_df">0%</span></p>
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
        var spreadsheetUrl = "https://docs.google.com/spreadsheets/d/12RpUNWuYsg45Zc7Qe-JT8fQH5kiuTl-UWbi0AYCqGw8/edit#gid=0?range=A3";
        var query = new google.visualization.Query(spreadsheetUrl);
        query.send(handleQueryResponse);
    }

    function handleQueryResponse(response) {
        var dataTable = response.getDataTable();

        // function Percent(x, y) {
        //     return (x/y)*100;
        // }
        // var fixPercentDAU = Percent(dataTable.getValue(2, 2),dataTable.getValue(2, 1)).toFixed(2);
        // var fixPercentDBH = Percent(dataTable.getValue(2, 5),dataTable.getValue(2, 4)).toFixed(2);
        // var fixPercentDD = Percent(dataTable.getValue(2, 12),dataTable.getValue(2, 11)).toFixed(2);
        // var fixPercentDF = Percent(dataTable.getValue(2, 9),dataTable.getValue(2, 8)).toFixed(2);
        // var fixPercentBOS = Percent(dataTable.getValue(2, 15),dataTable.getValue(2, 14)).toFixed(2);
        // var fixPercentBOP_PAUD = Percent(dataTable.getValue(2, 18),dataTable.getValue(2, 17)).toFixed(2);
        // var fixPercentBOP = Percent(dataTable.getValue(2, 21),dataTable.getValue(2, 20)).toFixed(2);

        // DAU
        document.getElementById("pagu_dau").innerHTML = dataTable.getValue(3, 1);
        document.getElementById("real_dau").innerHTML = dataTable.getValue(3, 2);
        document.getElementById("per_real_dau").innerHTML = dataTable.getValue(3, 3);
        document.getElementById("perbar_real_dau").innerHTML = dataTable.getValue(3, 3);
        // document.getElementById("per_real_dau").innerHTML = fixPercentDAU + "%";

        // DBH
        document.getElementById("pg_dbh_tot").innerHTML = dataTable.getValue(3, 4);
        document.getElementById("real_dbh_tot").innerHTML = dataTable.getValue(3, 5);
        document.getElementById("per_real_dbh_tot").innerHTML = dataTable.getValue(3, 6);
        document.getElementById("perbar_real_dbh_tot").innerHTML = dataTable.getValue(3, 6);

        // DD
        document.getElementById("pg_dd_tot").innerHTML = dataTable.getValue(3, 11);
        document.getElementById("real_dd_tot").innerHTML = dataTable.getValue(3, 12);
        document.getElementById("per_real_dd_tot").innerHTML = dataTable.getValue(3, 13);
        document.getElementById("perbar_real_dd_tot").innerHTML = dataTable.getValue(3, 13);

        // DF
        document.getElementById("pg_df").innerHTML = dataTable.getValue(3, 7);
        document.getElementById("kontrak").innerHTML = dataTable.getValue(3, 8);
        document.getElementById("salur").innerHTML = dataTable.getValue(3, 9);
        document.getElementById("per_df").innerHTML = dataTable.getValue(3, 10);
        document.getElementById("perbar_df").innerHTML = dataTable.getValue(3, 10);

        // BOS
        document.getElementById("pg_bos_tot").innerHTML = dataTable.getValue(3, 14);
        document.getElementById("real_bos_tot").innerHTML = dataTable.getValue(3, 15);
        document.getElementById("per_real_bos_tot").innerHTML = dataTable.getValue(3, 16);
        document.getElementById("perbar_real_bos_tot").innerHTML = dataTable.getValue(3, 16);

        // BOP PAUD
        document.getElementById("pg_bopp_tot").innerHTML = dataTable.getValue(3, 17);
        document.getElementById("real_bopp_tot").innerHTML = dataTable.getValue(3, 18);
        document.getElementById("per_real_bopp_tot").innerHTML = dataTable.getValue(3, 19);
        document.getElementById("perbar_real_bopp_tot").innerHTML = dataTable.getValue(3, 19);

        // // BOP KESETARAAN
        document.getElementById("pg_bopk_tot").innerHTML = dataTable.getValue(3, 20);
        document.getElementById("real_bopk_tot").innerHTML = dataTable.getValue(3, 21);
        document.getElementById("per_real_bopk_tot").innerHTML = dataTable.getValue(3, 22);
        document.getElementById("perbar_real_bopk_tot").innerHTML = dataTable.getValue(3, 22);
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