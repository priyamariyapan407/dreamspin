<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    @media (max-width:575px) {
        #example1 {
            background-color: #fff !important;
        }

        .btn-info {
            font-size: 10px !important;
        }

        .action_colmn {
            text-align: center !important;
        }

        .fa_view {
            display: block;
        }

        .fa_edit {
            display: block;
        }

        .fa_delete {
            display: block;
        }

        .status {
            text-align: center !important;
            margin-bottom: 12% !important;
        }

        .text_end {
            text-align: left !important;
        }

        #example2 {
            max-width: 100%;
            overflow-x: scroll;
            background: #fff;
        }
    }

    @media (max-width:1600px) {
        .status {
            text-align: center !important;
            margin-bottom: 12% !important;
        }
    }

    #example2 {
        background: #fff;
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

    .status {
        text-align: right;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .bg-success {
        margin-top: 2%;
        padding: 1%;
    }

    .bg-warning {
        margin-top: 2%;
        padding: 1%;
    }

    .text_end {
        text-align: right;
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreamspin | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <?php $CI =& get_instance(); ?>

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
                            <a href=" <?php echo base_url('ContestCategory'); ?>" class="nav-link ">
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
                            <a href=" <?php echo base_url('MyMembers'); ?>" class="nav-link active">
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
                        <div class="col-sm-6" style="padding-left: 1%;padding-bottom: 1%;">
                            <h1>My Members</h1>
                            <?php if($this->session->flashdata('add_contest_category_success')){ ?>
                            <div class='bg-success'>
                                <?php echo $this->session->flashdata('add_contest_category_success') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('edit_contest_category_success')){ ?>
                            <div class='bg-success'>
                                <?php echo $this->session->flashdata('edit_contest_category_success') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('delete_success')){ ?>
                            <div class='bg-warning'>
                                <?php echo $this->session->flashdata('delete_success') ?>
                            </div>
                            <?php   } ?>
                        </div>
                        <div class="col-sm-6 text_end" style="padding-right: 1%;">

                            </a>

                        </div>






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
                                                <th>Member Id</th>
                                                <th>Member Name</th>
                                                <th>Gender</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <th>Referral code</th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                    $count = 1;
                     foreach($my_members_info as $my_member) {
                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td> <?php echo $my_member->member_id; ?></td>
                                                <td> <?php echo $my_member->member_name; ?></td>
                                                <td> <?php echo $my_member->gender; ?></td>
                                                <td> <?php echo $my_member->street .','.$my_member->area ?></td>
                                                <td> <?php echo $my_member->state; ?></td>
                                                <td> <?php echo $my_member->city; ?></td>
                                                <td> <?php echo $my_member->pincode; ?></td>
                                                <td> <?php echo $my_member->referal_code; ?></td>
                                                <td> <?php echo $my_member->status == 1 ? '<div class="row" style="height: 100%;">
                                                    <div class="col-12 col-xxl-9  status"><i class="fa fa-check" style="    color: #17a2b8;"></i></div>
                                                    <div class="col-12 col-xxl-9 status"><button type="button" class="btn btn-info btn-block btn-flat">Active</button></div>
                                                </div>':'<div class="row" style="height: 100%;">
                                                <div class="col-12 col-xxl-9 status"><i class="fa fa-times" style="    color: #dc3545;"></i></div>
                                                <div class="col-12 col-xxl-9 status"><button type="button" class="btn btn-danger btn-block btn-flat">Inactive</button></div>
                                                </div>'; ?>
                                                </td>
                                                <td class="action_colmn" align="center">
                                                    <span class="fa_view" style="margin: 2%;">
                                                        <a style="color:#000 !important"
                                                            href="<?php echo base_url('MyMembers/viewmember/'.$my_member->auto_id ) ?>"><span
                                                                class='fas fa-eye'></span></a></span>
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


        <!-- delete spin model starts here -->
        <div class="modal" id="delete_spin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center"> Delete Category </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="card card-primary">

                        <div class="card-body">
                            <div class="text-center">
                                <label> Are you sure you want to delete? </label>
                            </div>
                            <div class="row pad-top">

                                <div class="col-lg-6 text-center ">
                                    <form method="post"
                                        action="<?php echo base_url('ContestCategory/deleteCategory') ?>">
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
    <script>
    function deleteCatid(cat_id) {
        document.getElementById('delete_id').value = cat_id;
    }
    </script>
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