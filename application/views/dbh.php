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
                        <h2 class="pageheader-title"><i class="fa-solid fa-house"></i> DBH</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('index'); ?>" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('index/dbh'); ?>" class="breadcrumb-link">DBH</a></li>
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
                'dataDBH' => $dataDBH
            ];
            ?>

            <div class="ecommerce-widget">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data DBH</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class="thead-light">
                                        <?php foreach ($data as $key => $tableData) : ?>
                                            <tr>
                                                <th style="width: 8px;">NO</th>
                                                <th><?= $tableData['values'][0][0]; ?></th>
                                                <th><?= $tableData['values'][0][1]; ?></th>
                                                <th><?= $tableData['values'][0][2]; ?></th>
                                                <th><?= $tableData['values'][0][3]; ?></th>
                                                <th><?= $tableData['values'][0][4]; ?></th>
                                                <th><?= $tableData['values'][0][5]; ?></th>
                                                <th><?= $tableData['values'][0][6]; ?></th>
                                                <th><?= $tableData['values'][0][7]; ?></th>
                                                <th><?= $tableData['values'][0][8]; ?></th>
                                                <th><?= $tableData['values'][0][9]; ?></th>
                                                <th><?= $tableData['values'][0][10]; ?></th>
                                                <th><?= $tableData['values'][0][11]; ?></th>
                                                <th><?= $tableData['values'][0][12]; ?></th>
                                                <th><?= $tableData['values'][0][13]; ?></th>
                                                <th><?= $tableData['values'][0][14]; ?></th>
                                                <th><?= $tableData['values'][0][15]; ?></th>
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
                                                <td><?= $tableData['values'][$i][5]; ?></td>
                                                <td><?= $tableData['values'][$i][6]; ?></td>
                                                <td><?= $tableData['values'][$i][7]; ?></td>
                                                <td><?= $tableData['values'][$i][8]; ?></td>
                                                <td><?= $tableData['values'][$i][9]; ?></td>
                                                <td><?= $tableData['values'][$i][10]; ?></td>
                                                <td><?= $tableData['values'][$i][11]; ?></td>
                                                <td><?= $tableData['values'][$i][12]; ?></td>
                                                <td><?= $tableData['values'][$i][13]; ?></td>
                                                <td><?= $tableData['values'][$i][14]; ?></td>
                                                <td><?= $tableData['values'][$i][15]; ?></td>
                                            </tr>
                                        <?php endfor; ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
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
<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    new DataTable('#table');
</script>