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
        .status {
            text-align: center;
            margin-bottom: 4%;
        }

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

        .rw-css {
            display: table;
            width: 100%;
        }

        .cl-css {
            width: 43% !important;
        }

        .cl-left-css {
            width: 57% !important;
        }

        .member_image {
            width: 90% !important;
            display: flex;
        }
    }

    .cl-css {
        width: 30%;
    }

    .member_image {
        width: 40%;
        display: flex;
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

    .border_bottom {
        border-bottom: 1px solid #ced4da;
        padding: 0.5% 0%;
    }

    .border_top {
        border-top: 1px solid #ced4da;
        padding: 0.5% 0%;
    }

    .border {
        border-top: 1px solid #ced4da;
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
                    <div class=" mb-2">
                        <div class="row category_head">
                            <div class="col-sm-6 col-lg-6 col-md-6 category_head_left">
                                <h1>View My Member</h1>
                                <?php if($this->session->flashdata('edit_my_member_success')){ ?>
                                <div class='bg-success'>
                                    <?php echo $this->session->flashdata('edit_my_member_success') ?>
                                </div>
                                <?php   } ?>

                                <?php if($this->session->flashdata('delete_success')){ ?>
                                <div class='bg-warning'>
                                    <?php echo $this->session->flashdata('delete_success') ?>
                                </div>
                                <?php   } ?>
                            </div>

                            <div class="col-sm-6 col-lg-6 col-md-6 text_end category_head_right">
                                <form method="post">
                                    <a href="<?php echo base_url('MyMembers/index') ?>">
                                        <span type="button" class="btn btn-light">
                                            Cancel
                                        </span></a>
                                    <a>
                                        <a>

                                            <span type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#delete_member"
                                                onclick="deleteMemberById('<?php echo $this->uri->segment('3');  ?>')">
                                                Delete
                                            </span></a>
                                        <a>
                                            <a
                                                href="<?php echo base_url('MyMembers/updatemember/'.$this->uri->segment('3')) ?>">
                                                <span type="button" class="btn btn-warning">
                                                    Edit
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
                                                            <?php   $count=1; ?>
                                                            <?php foreach($member_info_by_id as $member_info){ ?>

                                                            <div class="row">
                                                                <!-- left container starts here -->
                                                                <div class="col-12  col-md-6 col-lg-6">
                                                                    <table id="example2" class="table">
                                                                        <tbody>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Member Name

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->member_name ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Member Id

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->member_id ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Street

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->street ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Area

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->area ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Country

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->country ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    State

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->state ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    City

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->city ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Pincode

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->pincode ?>

                                                                                </td>

                                                                            </tr>




                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- left container ends here -->
                                                                <!-- right container starts here -->
                                                                <div class="col-12  col-md-6 col-lg-6">
                                                                    <table id="example2" class="table">
                                                                        <tbody>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    First Name

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->first_name ?>

                                                                                </td>

                                                                            </tr>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Last Name

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->last_name ?>

                                                                                </td>

                                                                            </tr>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Mobile No

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->mobile_no ?>

                                                                                </td>

                                                                            </tr>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Email Id

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': ' .$member_info->email_id ?>

                                                                                </td>

                                                                            </tr>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Date of Birth

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->dob ?>

                                                                                </td>

                                                                            </tr>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Referral Code

                                                                                </td>
                                                                                <td class="cl-left-css">
                                                                                    <?php echo ': '. $member_info->referal_code ?>

                                                                                </td>

                                                                            </tr>
                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Status

                                                                                </td>
                                                                                <td class="cl-left-css">

                                                                                    <?php echo ($member_info->status) == 1 ? '<div class="row" style="height: 100%;"> 
                                                                    <div class="col-12 col-sm-1 col-md-1 col-lg-1 status"><i class="fa fa-check" style="    color: #17a2b8;"></i></div>
                                                                    <div class="col-12 col-sm-5 col-md-5 col-lg-5 status"><button type="button" class="btn btn-info btn-block btn-flat">Active</button></div>
                                                                    </div>':'<div class="row" style="height: 100%;">
                                                                    <div class="col-12 col-sm-1 col-md-1 col-lg-1 status"><i class="fa fa-times" style="    color: #dc3545;"></i></div>
                                                                    <div class="col-12 col-sm-5 col-md-5 col-lg-5 status"><button type="button" class="btn btn-danger btn-block btn-flat">Inactive</button></div>
                                                                    </div>' ?>

                                                                                </td>

                                                                            <tr class="rw-css">
                                                                                <td class="cl-css">

                                                                                    Member Photo

                                                                                </td>
                                                                                <td class="cl-left-css">

                                                                                    <div class="member_image">

                                                                                        <?php if(!empty($member_info->member_photo)){ ?>
                                                                                        <img src=" <?php echo $CI->config->base_url().'/images/'.$member_info->member_photo  ?> "
                                                                                            alt="My member"
                                                                                            style="width:100%;">
                                                                                        <?php } ?>
                                                                                    </div>

                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <!-- right container ends here -->
                                                            </div>




                                                        </div>
                                                        <?php $count++;  } ?>
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


        <!-- delete member model starts here -->
        <div class="modal" id="delete_member">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center"> Delete Member </h4>
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
                                    <form method="post" action="<?php echo base_url('MyMembers/deleteMember') ?>">
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
        <!-- delete member model ends here -->
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
<script>
function deleteMemberById(mem_id) {
    document.getElementById('delete_id').value = mem_id;
}
</script>