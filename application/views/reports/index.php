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

        .contest_name {
            margin-top: 3%;
        }

        .spin_type {
            margin-top: 3%;
        }

        .total_contestants {
            margin-top: 3%;
        }

        .total_winners {
            margin-top: 3%;
        }

        .month {
            margin-top: 3%;
        }

        .year {
            margin-top: 3%;
        }

        .filter {
            margin-top: 3% !important;
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

    .cat_type {
        display: none;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
        background: #fff;
    }

    .winners_bg {
        background: #fff;
        border: 1px solid #dee2e6;
        font-weight: bold;
        padding: 0.5% 0.5% 0.5% 0.5%;
        text-align: center;
        cursor: pointer;
    }

    .winner_outer_bg {
        background: #fff;
        padding: 0.5% 1% 0.5% 1%;
        margin-bottom: 2%;
    }

    .red_bg {
        background-color: #E91E63;
        font-weight: bold;
        padding: 5% 0%;
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
                            <a href=" <?php echo base_url('ContestList'); ?>" class="nav-link ">
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
                            <a href=" <?php echo base_url('Reports'); ?>" class="nav-link active">
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
                            <h1>All Contest Reports</h1>
                            <?php if($this->session->flashdata('email-success')){ ?>
                            <div class='bg-success'>
                                <?php echo $this->session->flashdata('email-success') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('email-error')){ ?>
                            <div class='bg-warning'>
                                <?php echo $this->session->flashdata('email-error') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('delete_success')){ ?>
                            <div class='bg-warning'>
                                <?php echo $this->session->flashdata('delete_success') ?>
                            </div>
                            <?php   } ?>
                            <div class='bg-warning cat_type'>
                                Please select category type
                            </div>
                        </div>







                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- spin type and category type dropdown starts here -->
                    <div class="row dropdown-contest-lst">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <select name="category_id" class="custom-select category_type">

                                <option value="">Contest Category List</option>
                                <?php foreach($contest_category_info as $contest_category){ ?>

                                <option value="<?php echo $contest_category->contest_category  ?>">
                                    <?php echo $contest_category->contest_category ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 ">
                            <select name="contest_name" class="custom-select contest_name">

                                <option value="">Contest Name</option>
                                <?php foreach($contest_name as $name){ ?>
                                <option value="<?php echo $name->contest_name  ?>">
                                    <?php echo $name->contest_name ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 ">
                            <select name="spin_type" class="custom-select spin_type">

                                <option value="">Spin Type</option>
                                <?php foreach($spin_type as $spin){ ?>

                                <option value="<?php echo $spin->spin_type  ?>">
                                    <?php echo $spin->spin_type ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 ">
                            <select name="total_contestants" class="custom-select total_contestants">

                                <option value="">Total Contestants</option>
                                <?php foreach($total_contestants as $contestants){ ?>

                                <option value="<?php echo $contestants->name  ?>">
                                    <?php echo $contestants->name ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-1 ">
                            <select name="total_winners" class="custom-select total_winners">

                                <option value="">Winners</option>
                                <?php foreach($total_winners as $winners){ ?>

                                <option value="<?php echo $winners->name  ?>">
                                    <?php echo $winners->name ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <select name="month" class="custom-select month">
                                <option value="">Month</option>
                                <?php foreach($months as $month){ ?>

                                <option value="<?php echo $month->month  ?>">
                                    <?php echo $month->month ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <select name="year" class="custom-select year">
                                <option value="">Year</option>
                                <?php foreach($years as $year){ ?>

                                <option value="<?php echo $year->year  ?>">
                                    <?php echo $year->year ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 filter">
                            <button type="button" class="btn btn-success">Filter</button>
                        </div>
                    </div>
                    <!-- spin type and category type dropdown ends here -->
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10 main_div">

                                    <?php  $count = 0;      
                                   foreach($contest_winners as $winners) { ?>

                                    <div class="winner_outer_bg " onclick="toggle('<?php  echo $count?>')">
                                        <div class="row">
                                            <div class="col-lg-4 winners_bg"> <?php echo $winners->contest_category; ?>
                                            </div>
                                            <div class="col-lg-4 winners_bg">
                                                <?php echo 'Total Contestants - ' .$winners->total_contestants; ?>
                                            </div>
                                            <div class="col-lg-4 winners_bg">
                                                <div class="row">
                                                    <div class="col">
                                                        <?php echo 'Total Winners - ' .$winners->total_winners; ?>
                                                    </div>
                                                    <div class="col-lg-1 col-1 fa_<?php echo $count?>"
                                                        style="text-align=right">
                                                        <i class="fa fa-sort-down"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="<?php  echo $count?>" align="center" style="display:none;">
                                        <div class="row" align="center">
                                            <?php

                                    foreach($AllWinnersBySpinType[$count] as $spin_type){ ?>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-8">
                                                        <div class="red_bg">
                                                            <div>Total Contestants</div>
                                                            <h2> <?php echo $spin_type->total_contestants ?> </h2>
                                                            <div>Total Winners</div>
                                                            <h2> <?php echo $spin_type->total_winners ?> </h2>
                                                        </div>

                                                        <div> <?php echo $spin_type->spin_type ?> </div>
                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                            </div>
                                            <?php  }  ?>
                                        </div>
                                    </div>

                                    <?php  $count++; } ?>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-lg-1"></div>

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
    function toggle(ID) {
        var element = document.getElementById(ID);
        var className = ID;
        var selector = '.fa_' + className;
        console.log('selector', selector);
        var down_arrow = document.querySelector(selector);

        // console.log('down_arrow', down_arrow);
        if (element.style.display === "none") {

            element.style.display = "block";

            var iconElement = document.createElement('i');
            iconElement.className = 'fa fa-sort-up';
            down_arrow.innerHTML = iconElement.outerHTML;

            console.log('block', down_arrow.innerHtml);
        } else {

            element.style.display = "none";

            var iconElement = document.createElement('i');
            iconElement.className = 'fa fa-sort-down';
            down_arrow.innerHTML = iconElement.outerHTML;
            console.log('none', down_arrow.innerHtml);
        }
    }

    function deleteWinnerById(winner_id) {
        console.log(winner_id, 'winner_id');
        document.getElementById('delete_id').value = winner_id;
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
$(document).ready(function() {
    $('#example1').DataTable();
    $('.filter').click(function() {

        var selected_category_type = $('.category_type').val();
        if (selected_category_type == '') {
            $('.cat_type').show();
        } else {
            $('.cat_type').hide();
        }
        var selected_month = $('.month').val();
        var selected_year = $('.year').val();
        var contest_name = $('.contest_name').val();
        var spin_type = $('.spin_type').val();
        console.log(selected_category_type, 'selected_category_type');
        if ((selected_category_type != '')) {
            $.ajax({
                    url: '<?php echo base_url().'Reports/getReport' ?>',
                    method: 'get',
                    data: {
                        'selected_category_type': selected_category_type,
                        'selected_month': selected_month,
                        'selected_year': selected_year,
                        'contest_name': contest_name,
                        'spin_type': spin_type
                    },
                    success: function(data) {
                        console.log('result', data);
                        $('.main_div').html(data);
                        $('#example1').DataTable().reload();

                    }
                }

            )
        }
    })

    $('.category_type').change(function() {
        var category_type = $(this).val();
        $.ajax({
                url: '<?php echo base_url().'Reports/getMonthAndDate' ?>',
                method: 'get',
                data: {
                    'category_type': category_type
                },
                success: function(data) {
                    cat_res = data.split('::');
                    contestname = cat_res[0];
                    spin_type = cat_res[1];
                    total_contestants = cat_res[2];
                    winner = cat_res[3];
                    month = cat_res[4];
                    year = cat_res[5];
                    console.log(contestname, 'contestname');
                    console.log(spin_type, 'spin_type');
                    console.log(total_contestants, 'total_contestants');
                    console.log(winner, 'winner');
                    console.log(month, 'month');
                    console.log(year, 'year');
                    $('.contest_name').html(contestname);
                    $('.spin_type').html(spin_type);
                    $('.total_contestants').html(total_contestants);
                    $('.total_winners').html(winner);
                    $('.month').html(month);
                    $('.year').html(year);
                }
            }

        )
    })

    $('.category_type,.month,.year,.contest_name,.spin_type').change(function() {
        var selected_category_type = $('.category_type').val();
        var selected_month = $('.month').val();
        var selected_year = $('.year').val();
        var contest_name = $('.contest_name').val();
        var spin_type = $('.spin_type').val();
        $.ajax({
                url: '<?php echo base_url().'Reports/getContests' ?>',
                method: 'get',
                data: {
                    'selected_category_type': selected_category_type,
                    'selected_month': selected_month,
                    'selected_year': selected_year,
                    'contest_name': contest_name,
                    'spin_type': spin_type
                },
                success: function(data) {
                    console.log(data, 'contest data');
                    var result = data.split('::');
                    $('.total_contestants').html(result[0]);
                    $('.total_winners').html(result[1]);
                }
            }

        )
    })


})
</script>