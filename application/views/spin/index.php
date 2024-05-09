<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreamspin | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <?php $CI =& get_instance(); ?>
    <style>
    @media (max-width:575px) {
        #example2 {
            background: #fff;
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

    .bg-success {
        margin-top: 2%;
        padding: 1%;
    }

    .bg-warning {
        margin-top: 2%;
        padding: 1%;
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
        <nav class="main-header navbar navbar-expand  navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto text-white">
                <!-- Navbar Search -->
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
                            <a href=" <?php echo base_url('Spin'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Spin Type
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('ContestCategory'); ?>" class="nav-link">
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
                            <a href=" <?php echo base_url('ContestWinners'); ?>" class="nav-link">
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
                        <div class="col-6 col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <h1>Spin Type</h1>

                            <?php if($this->session->flashdata('delete_record')){ ?>
                            <p class="bg-warning">
                                <?php echo $this->session->flashdata('delete_record') ?></p>
                            <?php  } ?>

                            <?php if($this->session->flashdata('add_spin_success')){ ?>
                            <p class="bg-success">
                                <?php echo $this->session->flashdata('add_spin_success') ?></p>
                            <?php  } ?>

                            <?php if($this->session->flashdata('edit_spin_success')){ ?>
                            <p class="bg-success">
                                <?php echo $this->session->flashdata('edit_spin_success') ?></p>
                            <?php  } ?>

                        </div>
                        <div class="col-6 col-xs-12 col-sm-6 col-md-6 col-lg-6 text-end">
                            <button type="button" class="btn btn-warning " data-bs-toggle="modal"
                                data-bs-target="#create_spin">
                                Add Spin
                            </button>
                            <!-- <button type="button">
             <a href="<?php echo base_url('Spin/createSpin') ?>">  Add Spin </a>
            </button> -->
                        </div>

                        <!-- create spin model starts here -->
                        <div class="modal create_spin" id="create_spin">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"> Add Spin Type </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="card card-primary">
                                        <form method="post" action="<?php echo base_url('Spin/storeSpin') ?>">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Spin Type</label>
                                                    <input type="text" class="form-control" name="spin_type_name"
                                                        placeholder="Enter the Spin type">
                                                    <?php if($this->session->flashdata('add_spin_error')){ ?>
                                                    <script>
                                                    $('.create_spin').addClass('show');
                                                    $('.create_spin').css('display', 'block');
                                                    </script>
                                                    <p class="text-danger">
                                                        <?php echo $this->session->flashdata('add_spin_error') ?></p>
                                                    <?php  } ?>
                                                </div>

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-warning">Submit</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- create spin model ends here -->




                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="yellow_line"></div>
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Spin Category</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                    $count = 1;
                     foreach($spin_info as $spin_name) { 
                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td> <?php echo $spin_name->spin_type_name; ?></td>
                                                <td>
                                                    <span style="margin: 2%;">
                                                        <span style="cursor:pointer;" data-bs-toggle="modal"
                                                            data-bs-target="#edit_spin"
                                                            onclick="getSpinInfo('<?php echo $spin_name->spin_id ?>','<?php echo $spin_name->spin_type_name ?>')"><span
                                                                class='fas fa-edit'></span></span></span>
                                                    <span style="margin: 2%;">
                                                        <span style="cursor:pointer;" data-bs-toggle="modal"
                                                            data-bs-target="#delete_spin"
                                                            onclick="deleteSpin('<?php echo $spin_name->spin_id ?>')">
                                                            <span class="fa fa-trash"></span></span>

                                                    </span>

                                                </td>
                                            </tr>

                                            <?php $count++; } ?>

                                        </tbody>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- edit spin model starts here -->
        <div class="modal edit_spin" id="edit_spin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"> Edit Spin Type </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="card card-primary">
                        <form method="post" action="<?php echo base_url('Spin/updatespin') ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Spin Type</label>
                                    <input type="text" class="form-control" id="spin_name" name="new_spin_name"
                                        placeholder="Enter the Spin type">

                                    <input type="hidden" id="spin_id" name="spin_id"
                                        value="<?php if($this->session->flashdata('edit_spin_id')) echo $this->session->flashdata('edit_spin_id') ?>">
                                    <?php if($this->session->flashdata('edit_spin_error')){ ?>
                                    <script>
                                    $('.edit_spin').addClass('show');
                                    $('.edit_spin').css('display', 'block');
                                    </script>
                                    <p class="text-danger">
                                        <?php echo $this->session->flashdata('edit_spin_error') ?></p>
                                    <?php  } ?>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" name="update" class="btn btn-warning">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit spin model ends here -->


    <!-- delete spin model starts here -->
    <div class="modal" id="delete_spin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center"> Delete Spin </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="card card-primary">

                    <div class="card-body">
                        <div class="text-center">
                            <label> Are you sure you want to delete? </label>
                        </div>
                        <!-- <div class="form-group">
                    
                    <input type="text" class="form-control" id="spin_name"  name="new_spin_name" placeholder="Enter the Spin type">
                    <input type="hidden" id="spin_id" name="spin_id">
                  </div> -->

                        <!-- <div class="card-footer"> -->
                        <div class="row pad-top">

                            <div class="col-lg-6 text-center ">
                                <form method="post" action="<?php echo base_url('Spin/deletespin') ?>">
                                    <input type="hidden" name="delete_id" id="delete_id">
                                    <button type="submit" class="btn btn-warning delete">Yes</button>
                                </form>
                            </div>
                            <div class="col-lg-6 text-center ">
                                <button class="btn btn-danger delete" data-bs-dismiss="modal">No</button>
                            </div>
                            <!-- </div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delete spin model ends here -->
    <!-- /.content-wrapper -->
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

<script>
$(function() {
    $('#example1').DataTable();
});
</script>
</script>

<script>
function getSpinInfo(spin_id, spin_name) {
    document.getElementById('spin_name').value = spin_name;
    document.getElementById('spin_id').value = spin_id;
}

function deleteSpin(spin_id) {
    document.getElementById('delete_id').value = spin_id;
}
</script>
<script>
$(document).ready(function() {
    $('.btn-close').click(function() {
        $('.create_spin ').addClass('hide');
        $('.create_spin ').css('display', 'none');
        $('.edit_spin ').addClass('hide');
        $('.edit_spin ').css('display', 'none');
    })
})
</script>