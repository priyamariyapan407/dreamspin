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
        .gradient-bg {

            font-size: 3rem !important;
            letter-spacing: 0.3rem !important;
            line-height: 3.5rem !important;
            padding: 4%;
        }

        #example1 {
            background-color: #fff !important;
        }

        select.custom-select.month {
            margin-top: 3%;
        }

        select.custom-select.year {
            margin-top: 3%;
        }

        select.custom-select.year {
            margin-top: 3%;
        }

        .filter {
            margin-top: 3% !important;
            margin-bottom: 2% !important;
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
        background: #fff !important;
    }

    .gradient-bg {
        background-image: linear-gradient(to right, #0000ff8f, #ff5722fa);
        color: white;
        text-align: center;
        font-style: italic;
        font-size: 4rem;
        letter-spacing: 0.3rem;
        font-weight: bold;
        line-height: 5rem;
    }

    .head {
        font-weight: bold;
        border: 1px solid #dee2e6;
    }

    .inner_table {
        border-right: 1px solid #dee2e6;
        border-left: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
    }

    .inner_table1 {
        border-right: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
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
                        <div class="col-sm-6" style="padding-left: 1%;padding-bottom: 1%;">
                            <h1>Contest Winners</h1>
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
                        <div class="col-lg-3 col-md-3 col-sm-3  spin_drpdown">
                            <select name="category_id" class="custom-select category_type">

                                <option value="">Contest Type</option>
                                <?php foreach($contest_category_info as $contest_category){ ?>

                                <option value="<?php echo $contest_category->contest_category  ?>">
                                    <?php echo $contest_category->contest_category ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <select name="month" class="custom-select month">
                                <option value="">Select Month</option>
                                <?php foreach($months as $month){ ?>

                                <option value="<?php echo $month->month  ?>">
                                    <?php echo $month->month ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <select name="year" class="custom-select year">
                                <option value="">Select Year</option>
                                <?php foreach($years as $year){ ?>

                                <option value="<?php echo $year->year  ?>">
                                    <?php echo $year->year ?></option>
                                <?php  }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 filter">
                            <button type="button" class="btn btn-success">Filter</button>
                        </div>
                    </div>
                    <!-- spin type and category type dropdown ends here -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="yellow_line"></div>
                                <!-- /.card-header -->
                                <div class="card-body append-winners">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Member ID</th>
                                                <th>Email ID</th>
                                                <th>Contest Category</th>
                                                <th>Contest Name</th>
                                                <th>Date</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                                <th>Promote</th>
                                            </tr>
                                        </thead>
                                        <tbody class="contest_lst" align="center">
                                            <!-- <img src="<?php // echo $CI->config->base_url()?>/assets/images/spin_and_win.jpg"
                                                class="bg_image" alt="image"> -->

                                            <?php
                                            //   echo "<pre>"; print_r($contest_list_info);
                                            $s_no =1;
                                    
                 foreach($contest_winners as $winners) {
                    $sendEmailBaseUrl = base_url('ContestWinners/sendEmail'  );
                  
                                          ?>

                                            <tr>
                                                <td><?php echo  $s_no ?></td>

                                                <td> <?php echo $winners->name; ?></td>
                                                <td> <?php echo $winners->member_id; ?></td>
                                                <td> <?php echo $winners->email_id; ?></td>
                                                <td> <?php echo $winners->contest_category; ?></td>
                                                <td> <?php echo $winners->contest_name; ?></td>
                                                <td> <?php echo $winners->created_at; ?></td>
                                                <td> <?php echo $winners->month; ?></td>
                                                <td> <?php echo $winners->year; ?></td>
                                                <td> <?php echo $winners->contest_name; ?></td>


                                                <td class="action_colmn">
                                                    <span class="fa_view" style="margin: 2%;">
                                                        <a style="color:#000 !important"
                                                            href="<?php echo base_url('ContestWinners/viewWinners/'.$winners->winner_id  ) ?>"><span
                                                                class='fas fa-eye'></span></a></span>
                                                    <span class="fa_delete" style="margin: 2%;">
                                                        <span style="cursor:pointer;" data-bs-toggle="modal"
                                                            data-bs-target="#delete_contest"
                                                            onclick="deleteWinnerById('<?php echo $winners->winner_id ?>')">
                                                            <span class="fa fa-trash"></span></span>

                                                    </span>

                                                </td>
                                                <td><?php echo ($winners->promote) == 1 ? '<button type="button" class="btn btn-success">Selected</button>':'<form method="post" action='.$sendEmailBaseUrl.'>
                                                    <input type="hidden" name="winner_id" value='.$winners->winner_id.' id="delete_id">
                                                    <button type="submit" class="btn btn-info">Select</button>
                                                    </form>' ?>
                                                </td>
                                            </tr>



                                            <?php $s_no++; } ?>
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
        <div class="modal" id="delete_contest">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center"> Delete Winner </h4>
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
                                    <form method="post" action="<?php echo base_url('ContestWinners/deleteWinner') ?>">
                                        <input type="hidden" name="delete_id" id="delete_id">
                                        <button type="submit" class="btn btn-primary delete">Yes</button>
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


<!-- <script>
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

                }
            }

        )
    })
})
</script> -->


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
        console.log(selected_category_type, 'selected_category_type');
        // console.log(selected_date, 'selected_date');
        if ((selected_category_type != '')) {
            $.ajax({
                    url: '<?php echo base_url().'ContestWinners/getWinnersByDateAndCategory' ?>',
                    method: 'get',
                    data: {
                        'selected_category_type': selected_category_type,
                        'selected_month': selected_month,
                        'selected_year': selected_year
                    },
                    success: function(data) {
                        console.log('result', data);
                        $('.append-winners').html(data);

                    }
                }

            )
        }
    })

    $('.category_type').change(function() {
        var category_type = $(this).val();
        $.ajax({
                url: '<?php echo base_url().'ContestWinners/getMonthAndDate' ?>',
                method: 'get',
                data: {
                    'category_type': category_type
                },
                success: function(data) {
                    console.log(data, 'category_type change data');
                    // var result = data.split('::');
                    // console.log('category_type', result[0]);
                    // console.log('contest_lst', result[1]);
                    $('.month').html(data);
                    // $('.contest_lst').html(result[1]);

                }
            }

        )
    })

    $('.month').change(function() {
        var month = $(this).val();
        $.ajax({
                url: '<?php echo base_url().'ContestWinners/getYear' ?>',
                method: 'get',
                data: {
                    'month': month
                },
                success: function(data) {
                    console.log(data, 'month change data');
                    // var result = data.split('::');
                    // console.log('category_type', result[0]);
                    // console.log('contest_lst', result[1]);
                    $('.year').html(data);
                    // $('.contest_lst').html(result[1]);

                }
            }

        )
    })


})
</script>
<!-- <script>
$(function() {
    $('')
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script> -->