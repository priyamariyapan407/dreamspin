<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreamspin | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <?php $CI =& get_instance(); ?>
    <style>
    @media (max-width: 575px) {
        .text_end {
            text-align: left !important;
        }

        .category_head_right {
            padding-left: 5% !important;
            padding-bottom: 5% !important;
        }

        .category_head_left {
            padding-left: 5% !important;
            padding-bottom: 5% !important;
        }
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        margin: 2px 0;
        white-space: nowrap;
        justify-content: flex-end;
    }

    .pad-top {
        margin-top: 3% !important;
    }

    .delete {
        padding: 3% 14% !important;
    }

    .category_head_left {
        padding-left: 2%;
        padding-bottom: 1%;
    }

    .text_end {
        text-align: right;
    }

    .category_head {
        margin-left: 0% !important;
        margin-right: 0% !important;
    }

    .category_head_right {
        padding-right: 2%;
        padding-bottom: 1%;
    }

    .category_head_left {
        padding-left: 2%;
        padding-bottom: 1%;
    }

    .text_end {
        text-align: right;
    }

    .category_head {
        margin-left: 0% !important;
        margin-right: 0% !important;
    }

    .main-footer {
        background-color: #c1d6edfc !important;
        border-top: 1px solid #dee2e6;
        color: #0c3e9b !important;
        padding: 0.5rem !important;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
        background: #fff;
    }

    .yellow_line {
        width: 100%;
        background-color: #ffc107;
        height: 2px;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href=" https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href=" <?php echo $CI->config->base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=" <?php echo $CI->config->base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet"
        href=" <?php echo $CI->config->base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src=" <?php echo $CI->config->base_url(); ?>assets/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href=" <?php echo $CI->config->base_url(); ?>assets/#"
                        role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto text-white">
                Hierarchy : Superadmin

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src=" <?php echo $CI->config->base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dreamspin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href=" <?php echo base_url('Welcome/dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('Spin'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Spin Type
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('ContestCategory'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Contest Category List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('ContestList'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Contest List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('MyMembers'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    My Members
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('Banners'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Banners
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('ContestWinners'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Contest Winners
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('Reports'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Reports
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="row category_head">
                            <div class="col-sm-6 col-lg-6 col-md-6 category_head_left">
                                <h1>View Contest Winners</h1>
                            </div>

                            <div class="col-sm-6 col-lg-6 col-md-6 text_end category_head_right">
                                <form method="post"
                                    action="<?php echo base_url('ContestCategory/updatecategoryDetails') ?>">
                                    <a href="<?php echo base_url('ContestWinners/index') ?>">
                                        <span type="button" class="btn btn-default">
                                            Cancel
                                        </span></a>
                                    <a>


                            </div>
                        </div>
                        <div>
                            <!-- create form starts here -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="yellow_line"></div>
                                                <div class="card-body">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <?php foreach($winners_info_by_id as $winners){ 
                                                             ?>
                                                            <div class="row">
                                                                <!-- left container starts here -->
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Name</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->name?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Member ID</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->member_id?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Email ID</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->email_id?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Contest Category</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->contest_category?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Contest Name</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->contest_name?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                </div>
                                                                <!-- left container ends here -->
                                                                <!-- right container starts here -->
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Date</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->created_at?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Month</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->month ?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Year</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->year?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Prize</label>
                                                                        <input type="text" name="category_contest_name"
                                                                            class="form-control"
                                                                            value="<?php echo $winners->contest_name?>"
                                                                            placeholder="Please enter contest category name"
                                                                            disabled="disabled">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">
                                                                            Promote</label>
                                                                        <div>
                                                                            <?php echo ($winners->promote) == 1 ? '<button type="button" class="btn btn-success">Selected</button>':'<button type="button" class="btn btn-info">Select</button>' ?>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- right container ends here -->
                                                            </div>


                                                            <?php   } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </section>
                        </div>
                        <!-- create form ends here -->
                        </form>

                    </div>
                </div><!-- /.container-fluid -->
            </section>


        </div>

        <footer class="main-footer">

            <strong>Copyright &copy; 2020
                Pay1Win1.in.</strong>
            All rights reserved.
        </footer>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/moment/moment.min.js"></script>
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src=" <?php echo $CI->config->base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script
        src=" <?php echo $CI->config->base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=" <?php echo $CI->config->base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
</body>

</html>
<!-- jQuery -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script
    src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js">
</script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
</script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $CI->config->base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo $CI->config->base_url(); ?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="<?php echo $CI->config->base_url(); ?>assets/dist/js/pages/dashboard3.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE for demo purposes -->

<script>
$(function() {
    $('#example1').DataTable();
});
</script>