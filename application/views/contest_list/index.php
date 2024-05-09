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
        #example1 {
            background-color: #fff !important;
        }

        .status {
            text-align: center !important;
            margin-bottom: 12% !important;
        }

        .btn-info {
            font-size: 10px !important;
        }

        #example2 {
            background: #fff;
        }

        .category_drpdown {
            margin-top: 2% !important;
        }

        .spin_container {
            margin-top: 4% !important;
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

    .dropdown-contest-lst {
        margin-bottom: 2%;
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

    .spin_container {
        height: 100vh;
        padding: 2%;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .spin_wpr {
        /* width: 90%;
        max-width: 34.37em;
        max-height: 90vh; */
        /* background-color: #ffffff; */
        /* top: 50%;
        left: 50%; */
        /* padding: 3em; */
        /* border-radius: 1em;
        box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2); */
    }

    .spin_container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    #wheel {
        max-height: inherit;
        width: inherit;
        top: 0;
        padding: 0;
    }

    .dynamic_wheel {
        max-height: inherit;
        width: inherit;
        top: 0;
        padding: 0;
        /* display: none; */
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    #spin-btn {
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        height: 26%;
        width: 26%;
        border-radius: 50%;
        cursor: pointer;
        background: #000;
        color: #fff;
        border: 0.2rem solid #fff;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
    }

    #spin-btn_dynamic {
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        height: 26%;
        width: 26%;
        border-radius: 50%;
        cursor: pointer;
        background: #000;
        color: #fff;
        border: 0.2rem solid #fff;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
        display: none;
    }

    .spin_image {
        position: absolute;
        width: 4em;
        top: 45%;
        right: -8%;
    }

    #final-value {
        font-size: 1.5em;
        text-align: center;
        margin-top: 1.5em;
        color: #202020;
        font-weight: 500;
    }

    @media screen and (max-width: 768px) {
        .spin_wpr {
            font-size: 12px;
        }

        .spin_image {
            right: -5%;
        }
    }

    .def_spin {
        margin-top: 6%;
    }

    .spin_container {
        margin-top: 8%;
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
                            <a href=" <?php echo base_url('ContestCategory'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Contest Category List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" <?php echo base_url('ContestList'); ?>" class="nav-link active">
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
                        <div class="col-sm-6" style="padding-left: 1%;padding-bottom: 1%;">
                            <h1>Contest List</h1>
                            <?php if($this->session->flashdata('add_contest_list_success')){ ?>
                            <div class='bg-success'>
                                <?php echo $this->session->flashdata('add_contest_list_success') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('edit_contest_list_success')){ ?>
                            <div class='bg-success'>
                                <?php echo $this->session->flashdata('edit_contest_list_success') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('delete_success')){ ?>
                            <div class='bg-warning'>
                                <?php echo $this->session->flashdata('delete_success') ?>
                            </div>
                            <?php   } ?>
                        </div>
                        <div class="col-sm-6 text-end" style="padding-right: 1%;">
                            <a href="<?php echo base_url('ContestList/createContestList') ?>">
                                <div class="btn btn-warning">
                                    Add Contest
                                </div>
                            </a>

                        </div>






                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- spin type and category type dropdown starts here -->
                    <div class="row dropdown-contest-lst">
                        <div class="col-lg-3 col-md-3 col-sm-3  spin_drpdown">
                            <select name="spin_id" class="custom-select spin_type">
                                <?php if(empty($contest_spin_info)) echo "<option value=''>Please select contest category
                                    type</option>" ?>
                                <?php foreach($contest_spin_info as $contest_spin){ ?>
                                <option value="<?php echo $contest_spin->spin_id ?>"
                                    <?php if($contest_spin->spin_id==1) echo "selected:selected" ?>>
                                    <?php echo $contest_spin->spin_type_name ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 category_drpdown">
                            <select name="category_id" class="custom-select category_type">
                                <option value="">Please select contest category
                                    type</option>
                                <?php foreach($contest_category_info as $contest_category){ ?>

                                <option value="<?php echo $contest_category->contest_category_id  ?>">
                                    <?php echo $contest_category->contest_category_name ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- spin type and category type dropdown ends here -->
                    <div class="row card">
                        <div class="yellow_line"></div>
                        <div class="card-body col-12">

                            <div class="row">

                                <div class="col-lg-8">
                                    <div>

                                        <!-- /.card-header -->
                                        <div>
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>contest name</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="contest_lst">
                                                    <?php
                                            //   echo "<pre>"; print_r($contest_list_info);
                                            $s_no =1;
                                  if(!empty($contest_list_info))  {       
                 foreach($contest_list_info as $contest_list) {
                    
                                          ?>

                                                    <?php    
                                             $edit_del_num = 1; 
                                            for($j=1;$j<5;$j++){ 
                                               
                                                if($j == 1){
                                                    $contest_name ='contest_name1';
                                                    $status ='contest1_status';
                                                } else if ($j == 2){
                                                    $contest_name ='contest_name2';
                                                    $status ='contest2_status';
                                                } else if ($j == 3){
                                                    $contest_name ='contest_name3';
                                                    $status ='contest3_status';
                                                } else {
                                                    $contest_name ='contest_name4';
                                                    $status ='contest4_status';
                                                }
                                            ?>

                                                    <?php if(!empty($contest_list->$contest_name)){ ?>
                                                    <tr>
                                                        <td><?php echo  $s_no ?></td>

                                                        <td> <?php echo $contest_list->$contest_name; ?></td>

                                                        <td><?php echo ($contest_list->$status) == 1 ? '<div class="row" style="height: 100%;">
                                                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 status"><i class="fa fa-check" style="    color: #17a2b8;"></i></div>
                                                    <div class="col-12 col-sm-7 col-md-7 col-lg-7 status"><button type="button" class="btn btn-info btn-block btn-flat">Active</button></div>
                                                </div>':'<div class="row" style="height: 100%;">
                                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 status"><i class="fa fa-times" style="    color: #dc3545;"></i></div>
                                                <div class="col-12 col-sm-7 col-md-7 col-lg-7 status"><button type="button" class="btn btn-danger btn-block btn-flat">Inactive</button></div>
                                                </div>' ?>
                                                        </td>

                                                        <td class="action_colmn">
                                                            <span class="fa_view" style="margin: 2%;">
                                                                <a style="color:#000 !important"
                                                                    href="<?php echo base_url('ContestList/updateContestList/'.$contest_list->contest_id.'/'.$edit_del_num ) ?>"><span
                                                                        class='fas fa-edit'></span></a></span>
                                                            <span class="fa_delete" style="margin: 2%;">
                                                                <span style="cursor:pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_contest"
                                                                    onclick="deleteContestById('<?php echo $contest_list->contest_id  ?>','<?php echo $edit_del_num ?>')">
                                                                    <span class="fa fa-trash"></span></span>

                                                            </span>

                                                        </td>
                                                    </tr>

                                                    <?php $s_no ++; } $edit_del_num++; } ?>


                                                    <?php } } ?>
                                                </tbody>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card -->
                                <div class="col-lg-4">
                                    <div class="def_spin">
                                        Please select contest category type to display contests
                                    </div>
                                    <div class="spin_container">
                                        <div>
                                            <div>
                                                <div class="spin_wpr">

                                                    <div class="spin_container">
                                                        <!-- <canvas id="wheel"></canvas> -->
                                                        <canvas class="dynamic_wheel"></canvas>
                                                        <button id="spin-btn">Spin</button>
                                                        <!-- <button id="spin-btn_dynamic">Spin</button> -->

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Chart JS -->
                                        <script
                                            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js">
                                        </script>
                                        <!-- Chart JS Plugin for displaying text over chart -->
                                        <script
                                            src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js">
                                        </script>
                                        <!-- Script -->
                                    </div>
                                </div>
                            </div>

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
        <div class="modal" id="delete_contest">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center"> Delete Contest </h4>
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
                                    <form method="post" action="<?php echo base_url('ContestList/deleteContest') ?>">
                                        <input type="hidden" name="delete_id" id="delete_id">
                                        <input type="hidden" name="contest_id" id="contest_id">
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
    function deleteContestById(cat_id, contest_id) {
        console.log(cat_id, 'cat_id', contest_id, 'contest_id')
        document.getElementById('delete_id').value = cat_id;
        document.getElementById('contest_id').value = contest_id;
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
var spin_dynamic_names = '';
$(document).ready(function() {
    $('.spin_type').change(function() {
        var selected_spin_id = $(this).val();
        $.ajax({
                url: '<?php echo base_url().'ContestList/getCategoryAndListBySpinId' ?>',
                method: 'get',
                data: {
                    'spin_id': selected_spin_id
                },
                success: function(data) {
                    var result = data.split('::');
                    console.log('category_type', result[0]);
                    console.log('contest_lst', result[1]);
                    $('.category_type').html(result[0]);
                    $('.contest_lst').html(result[1]);
                    emptyLabels();
                }
            }

        )
    })
})
</script>


<script>
$(document).ready(function() {
    dynamic_spinner();
    $('.category_type').change(function() {
        var selected_cat_id = $(this).val();
        var selected_spin_id = $('select.spin_type option:selected').val();
        // console.log('selected_spin_id', selected_spin_id, 'selected_cat_id', selected_cat_id);
        $.ajax({
                url: '<?php echo base_url().'ContestList/getContestListBySpinIdAndCatId' ?>',
                method: 'get',
                data: {
                    'selected_spin_id': selected_spin_id,
                    'selected_cat_id': selected_cat_id
                },
                success: function(data) {
                    console.log('result', data);
                    var contest_item = data.split('::');
                    $('.contest_lst').html(contest_item[0]);
                    spin_dynamic_names = contest_item[1];
                    if (spin_dynamic_names != '') {
                        $('.def_spin').hide();
                        changeLabels();
                    }
                }
            }

        )
    })
})
</script>
<script>
$(function() {
    $('#example1').DataTable();
});
</script>

<!-- Chart JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<!-- Chart JS Plugin for displaying text over chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js">
</script>
<!-- Script -->
</div>

</html>



<script>
function dynamic_spinner() {


    const dynamic_wheel = document.getElementsByClassName("dynamic_wheel");
    const spinBtn = document.getElementById("spin-btn_dynamic");
    const finalValue = document.getElementById("final-value");


    const rotationValues = [{
            minDegree: 0,
            maxDegree: 30,
            value: 2,
        },
        {
            minDegree: 31,
            maxDegree: 90,
            value: 1,
        },
        {
            minDegree: 91,
            maxDegree: 150,
            value: 6,
        },
        {
            minDegree: 151,
            maxDegree: 210,
            value: 5,
        },
        {
            minDegree: 211,
            maxDegree: 270,
            value: 4,
        },
        {
            minDegree: 271,
            maxDegree: 330,
            value: 3,
        },
        {
            minDegree: 331,
            maxDegree: 360,
            value: 2,
        },
    ];
    //Size of each piece
    const data = [16, 16, 16, 16, 16, 16];
    //background color for each piece
    var pieColors = [
        "#f39c12",
        "#cccc00",
        "#00a65a",
        "#ff0000",
        "#b366ff",
        "#3c8dbc",
    ];
    //Create chart




    chartInstance = new Chart(dynamic_wheel, {
        //Plugin for displaying text on pie chart
        plugins: [ChartDataLabels],
        //Chart Type Pie
        type: "pie",
        data: {
            //Labels(values which are to be displayed on chart)
            labels: ['', '', '', '', '', ''],
            //Settings for dataset/pie
            datasets: [{
                backgroundColor: pieColors,
                data: data,
            }, ],

        },
        options: {
            //Responsive chart
            responsive: true,
            animation: {
                duration: 0,
            },
            plugins: {
                //hide tooltip and legend
                tooltip: false,
                legend: {
                    display: false,
                },
                //display labels inside pie chart
                datalabels: {
                    color: "#ffffff",
                    formatter: (_, context) =>
                        context.chart.data.labels[context.dataIndex],
                    font: {
                        size: 10,
                    },
                    rotation: ['-60', '', '60', '-60', '', '60']

                },
            },
        },
    });

}

function changeLabels() {
    if ((spin_dynamic_names != '')) {
        var spin_dynamic_names_array = JSON.parse(spin_dynamic_names);
        console.log('spin_dynamic_names test', spin_dynamic_names_array);
        var spinarray = [];
        spinarray[0] = 'Try Again';
        spinarray[3] = 'Hard luck';
        if (spin_dynamic_names_array[0] != '') {
            spinarray[1] = spin_dynamic_names_array[0];
        } else {
            spinarray[1] = '';
        }

        if (spin_dynamic_names_array[1] != '') {
            spinarray[2] = spin_dynamic_names_array[1];
        } else {
            spinarray[2] = '';
        }

        if (spin_dynamic_names_array[2] != '') {
            spinarray[4] = spin_dynamic_names_array[2];
        } else {
            spinarray[4] = '';
        }

        if (spin_dynamic_names_array[3] != '') {
            spinarray[5] = spin_dynamic_names_array[3];
        } else {
            spinarray[5] = '';
        }
        var final_spin_array = [];

        for (var i = 0; i < (spinarray.length); i++) {

            if (spinarray[i] == undefined) {
                spinarray[i] = '';
            }
            final_spin_array.push(spinarray[i]);
        }



    }
    if ((spin_dynamic_names != '')) {
        if (final_spin_array[0] != '') {
            var label1 = final_spin_array[0];
        } else {
            var label1 = '';
        }

        if (final_spin_array[1] != '') {
            var label2 = final_spin_array[1];
        } else {
            var label2 = '';
        }

        if (final_spin_array[2] != '') {
            var label3 = final_spin_array[2];
        } else {
            var label3 = '';
        }

        if (final_spin_array[3] != '') {
            var label4 = final_spin_array[3];
        } else {
            var label4 = '';
        }

        if (final_spin_array[4] != '') {
            var label5 = final_spin_array[4];
        } else {
            var label5 = '';
        }

        if (final_spin_array[5] != '') {
            var label6 = final_spin_array[5];
        } else {
            var label6 = '';
        }
    }
    if ((spin_dynamic_names != '')) {
        labels = [label1, label2, label3, label4, label5, label6];
    } else {
        labels = ['', '', '', '', '', ''];
    }
    if ((labels[1] == '') && (labels[2] == '') && (labels[4] == '')) {
        $('.def_spin').html('No active listings in the selected category');
        $('.def_spin').show();
    } else {
        $('.def_spin').hide();
    }
    console.log('labels', labels);
    chartInstance.data.labels = labels;
    chartInstance.update(); // Call the update method to apply the changes
}

function emptyLabels() {
    $('.def_spin').show();
    chartInstance.data.labels = ['', '', '', '', '', ''];
    chartInstance.update();
}
</script>