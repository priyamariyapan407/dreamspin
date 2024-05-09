<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreamspin | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <?php $CI =& get_instance(); ?>
    <style>
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

    .alert-danger {
        --bs-alert-color: #842029 !important;
        --bs-alert-bg: #f8d7da !important;
        --bs-alert-border-color: #f5c2c7 !important;
    }

    .alert {
        color: var(--bs-alert-color) !important;
        background-color: var(--bs-alert-bg) !important;
        border: var(--bs-alert-border) !important;
        border-radius: var(--bs-alert-border-radius) !important;
    }

    .step1_circle {
        background: #ffc107 !important;
        width: 25px;
        height: 25px;
        position: relative;
        border-radius: 50%;
        z-index: 2;
        border: 1px solid #ced4da;
    }

    .step2_circle {
        background: #fff !important;
        width: 25px;
        height: 25px;
        position: relative;
        border-radius: 50%;
        z-index: 2;
        border: 1px solid #ced4da;
    }

    .step_line {
        width: 100%;
        background: #ced4da;
        height: 2%;
        justify-content: center;
        vertical-align: middle;
        position: absolute;
        margin-top: 6%;
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
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $CI->config->base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo $CI->config->base_url(); ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet"
        href="<?php echo $CI->config->base_url(); ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?php echo $CI->config->base_url(); ?>assets/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $CI->config->base_url(); ?>assets/dist/css/adminlte.min.css">
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href=" <?php echo $CI->config->base_url(); ?>assets/#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->
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
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3" align="center">
                                    <div class="step_line"></div>
                                    <div class="step1_circle">1</div>
                                </div>
                                <div class="col-lg-3" align="center">
                                    <div class="step_line"></div>
                                    <div class="step2_circle">2</div>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>


                        </div>
                        <div class="col-lg-3"></div>

                    </div>

                    <!-- <div class="step1_text">Step 1</div>
                    <div class="step2_text">Step 2</div> -->
                    <div class="row mb-2">
                        <div class="col-sm-6" style="padding-left: 1%;padding-bottom: 1%;">
                            <h1>Add Contest Details (Step -1 )</h1>
                            <?php if($this->session->flashdata('add_contest_list_error')){ ?>
                            <div class='alert alert-danger' role="alert">
                                <?php echo $this->session->flashdata('add_contest_list_error') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('add_non_empty_contestlist_error')){ ?>
                            <div class='alert alert-danger' role="alert">
                                <?php echo $this->session->flashdata('add_non_empty_contestlist_error') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('spin_type_error')){ ?>
                            <div class='alert alert-danger' role="alert">
                                <?php echo $this->session->flashdata('spin_type_error') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('spin_category_type_error')){ ?>
                            <div class='alert alert-danger' role="alert">
                                <?php echo $this->session->flashdata('spin_category_type_error') ?>
                            </div>
                            <?php   } ?>
                            <?php if($this->session->flashdata('category_type_error')){ ?>
                            <div class='alert alert-danger' role="alert">
                                <?php echo $this->session->flashdata('category_type_error') ?>
                            </div>
                            <?php   } ?>
                        </div>

                        <div class="col-sm-6 text-end" style="padding-right: 1%;">
                            <form method="post" action="<?php echo base_url('ContestList/storeContestList') ?>">
                                <a href="<?php echo base_url('ContestList/index') ?>">
                                    <span type="button" class="btn btn-light">
                                        Cancel
                                    </span></a>
                                <a>
                                    <button type="submit" class="btn btn-warning">
                                        submit
                                    </button></a>

                        </div>
                        <div class="bottom_line"></div>
                        <!-- create form starts here -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="yellow_line"></div>
                                            <div class="card-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Spin Type</label>
                                                                <select name='spin_id' class="custom-select spin_type">
                                                                    <option value="">Select spin type
                                                                    </option>
                                                                    <?php  foreach($contest_spin_info as $spin_name){ ?>
                                                                    <option value="<?php echo $spin_name->spin_id?>"
                                                                        <?php if($spin_name->spin_id == $this->session->flashdata('selected_spin_id')) echo 'selected=selected' ?>>
                                                                        <?php echo $spin_name->spin_type_name ?>
                                                                    </option>
                                                                    <?php   }
                                                              ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Contest
                                                                    Type</label>

                                                                <select name='category_id'
                                                                    class="custom-select category_data">
                                                                    <option value="">Select category contest
                                                                        type
                                                                    </option>
                                                                    <?php  foreach($contest_category_info as $contest_category){ ?>
                                                                    <option
                                                                        value="<?php echo $contest_category->contest_category_id?>"
                                                                        <?php if($contest_category->contest_category_id == $this->session->flashdata('selected_category_id')) echo 'selected=selected' ?>>
                                                                        <?php echo $contest_category->contest_category_name ?>
                                                                    </option>
                                                                    <?php   }
                                                              ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- contest 1 starts here -->
                                                        <div class="col-lg-4">
                                                            <div>

                                                                <label class="col-form-label">
                                                                    Contest1 Name</label>
                                                                <input type="text" name="contest_name1"
                                                                    class="form-control"
                                                                    placeholder="Enter contest1 name"
                                                                    <?php if($this->session->flashdata('add_contest_list_error1')) echo 'disabled' ?>
                                                                    value="<?php if(!empty($this->session->flashdata('current_contest_name1'))) echo $this->session->flashdata('current_contest_name1')  ?>">


                                                                <?php if($this->session->flashdata('add_contest_list_error1')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('add_contest_list_error1') 
    
    
    ?>
                                                                </div>
                                                                <?php   } ?>

                                                                <?php if(empty($this->session->flashdata('current_contest_name1'))) {if($this->session->flashdata('contest_name1_empty_indicator')){ ?>
                                                                <div class='alert alert-success' role="alert">
                                                                    <?php echo $this->session->flashdata('contest_name1_empty_indicator') ?>
                                                                </div>
                                                                <?php   }} ?>

                                                                <?php if($this->session->flashdata('duplicate_contest1')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('duplicate_contest1') ?>
                                                                </div>
                                                                <?php   } ?>

                                                            </div>
                                                        </div>
                                                        <!-- content 1 ends here -->
                                                        <!-- content 2 starts here -->
                                                        <div class="col-lg-4">
                                                            <div>

                                                                <label class="col-form-label">
                                                                    Contest2 Name</label>
                                                                <input type="text" name="contest_name2"
                                                                    class="form-control"
                                                                    placeholder="Enter contest2 name"
                                                                    <?php if($this->session->flashdata('add_contest_list_error2')) echo 'disabled' ?>
                                                                    value="<?php if(!empty($this->session->flashdata('current_contest_name2'))) echo $this->session->flashdata('current_contest_name2')  ?>">

                                                                <?php if($this->session->flashdata('add_contest_list_error2')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('add_contest_list_error2') ?>
                                                                </div>
                                                                <?php   } ?>
                                                                <?php  if(empty($this->session->flashdata('current_contest_name2'))) { if($this->session->flashdata('contest_name2_empty_indicator')){ ?>
                                                                <div class='alert alert-success' role="alert">
                                                                    <?php echo $this->session->flashdata('contest_name2_empty_indicator') ?>
                                                                </div>
                                                                <?php  } } ?>
                                                                <?php if($this->session->flashdata('duplicate_contest2')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('duplicate_contest2') ?>
                                                                </div>
                                                                <?php   } ?>

                                                            </div>
                                                        </div>
                                                        <!-- content 2 ends here -->

                                                        <!-- content 3 starts here -->
                                                        <div class="col-lg-4">
                                                            <div>

                                                                <label class="col-form-label">
                                                                    Contest3 Name</label>
                                                                <input type="text" name="contest_name3"
                                                                    class="form-control"
                                                                    placeholder="Enter contest3 name"
                                                                    <?php if($this->session->flashdata('add_contest_list_error3')) echo 'disabled' ?>
                                                                    value="<?php if(!empty($this->session->flashdata('current_contest_name3'))) echo $this->session->flashdata('current_contest_name3')  ?>">
                                                                <?php if($this->session->flashdata('add_contest_list_error3')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('add_contest_list_error3') ?>
                                                                </div>
                                                                <?php   } ?>
                                                                <?php  if(empty($this->session->flashdata('current_contest_name3'))) { if($this->session->flashdata('contest_name3_empty_indicator')){ ?>
                                                                <div class='alert alert-success' role="alert">
                                                                    <?php echo $this->session->flashdata('contest_name3_empty_indicator') ?>
                                                                </div>
                                                                <?php  } } ?>
                                                                <?php if($this->session->flashdata('duplicate_contest3')){ ?>
                                                                <div class='alert alert-danger' role="alert">
                                                                    <?php echo $this->session->flashdata('duplicate_contest3') ?>
                                                                </div>
                                                                <?php   } ?>

                                                            </div>
                                                        </div>
                                                        <!-- content 3 ends here -->
                                                    </div>

                                                    <div class="row">
                                                        <!-- cotest 4 starts here -->
                                                        <div class="col-lg-4">

                                                            <label class="col-form-label">
                                                                Contest4 Name</label>
                                                            <input type="text" name="contest_name4" class="form-control"
                                                                placeholder="Please contest name"
                                                                <?php if($this->session->flashdata('add_contest_list_error4')) echo 'disabled' ?>
                                                                value="<?php if(!empty($this->session->flashdata('current_contest_name4'))) echo $this->session->flashdata('current_contest_name4')  ?>">

                                                            <?php if($this->session->flashdata('add_contest_list_error4')){ ?>
                                                            <div class='alert alert-danger' role="alert">
                                                                <?php echo $this->session->flashdata('add_contest_list_error4') ?>
                                                            </div>
                                                            <?php   } ?>
                                                            <?php  if(empty($this->session->flashdata('current_contest_name4'))) { if($this->session->flashdata('contest_name4_empty_indicator')){ ?>
                                                            <div class='alert alert-success' role="alert">
                                                                <?php echo $this->session->flashdata('contest_name4_empty_indicator') ?>
                                                            </div>
                                                            <?php  } } ?>
                                                            <?php if($this->session->flashdata('duplicate_contest4')){ ?>
                                                            <div class='alert alert-danger' role="alert">
                                                                <?php echo $this->session->flashdata('duplicate_contest4') ?>
                                                            </div>
                                                            <?php   } ?>

                                                        </div>
                                                        <!-- contest 4 ends here -->

                                                        <!-- contest start date time starts here -->
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Contest start date</label>
                                                                <div class="input-group date" id="conteststartdate"
                                                                    data-target-input="nearest">
                                                                    <input type="text" name="start_date"
                                                                        class="form-control datetimepicker-input"
                                                                        data-target="#conteststartdate" />
                                                                    <div class="input-group-append"
                                                                        data-target="#conteststartdate"
                                                                        data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- contest start date time ends here -->

                                                        <!-- contest start date time starts here -->
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Contest end date</label>
                                                                <div class="input-group date" id="contestenddate"
                                                                    data-target-input="nearest">
                                                                    <input type="text" name="end_date"
                                                                        class="form-control datetimepicker-input"
                                                                        data-target="#contestenddate" />
                                                                    <div class="input-group-append"
                                                                        data-target="#contestenddate"
                                                                        data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- contest start date time ends here -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Contest play mode</label>
                                                                <select name="play_mode" class="custom-select">
                                                                    <option value="">Select puzzle game</option>

                                                                    <option value="1">puzzle game1</option>
                                                                    <option value="2">puzzle game2</option>
                                                                    <option value="3">puzzle game3</option>
                                                                    <option value="4">puzzle game4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label"> Contest Join Fee</label>
                                                            <input type="text" name="join_fee" class="form-control"
                                                                placeholder="Enter contest join fee">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label">Maximum Add </label>
                                                            <input type="text" name="max_add" class="form-control"
                                                                placeholder="Enter maximum add">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
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
<!-- Bootstrap -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo $CI->config->base_url(); ?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="<?php echo $CI->config->base_url(); ?>assets/dist/js/pages/dashboard3.js"></script>



<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script
    src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
</script>
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->

<script
    src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
</script>

<!-- Bootstrap Switch -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo $CI->config->base_url(); ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->






<!-- AdminLTE for demo purposes -->
<!-- AdminLTE for demo purposes -->

<script>
$(function() {
    $('#example1').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('.spin_type').change(function() {
        var selected_spin_id = $(this).val();
        $.ajax({
                url: '<?php echo base_url().'ContestList/getCategoryBySpinId' ?>',
                method: 'get',
                data: {
                    'spin_id': selected_spin_id
                },
                success: function(data) {
                    console.log('data', data);
                    $('.category_data').html(data);

                }
            }

        )
    })
})

$('#reservationdatetime').datetimepicker({
    icons: {
        time: 'far fa-clock'
    }
});
</script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()



    //Date and time picker
    $('#reservationdatetime').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                'MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

})


//Date picker
$('#conteststartdate').datetimepicker({
    format: 'L'
});

//Date picker
$('#contestenddate').datetimepicker({
    format: 'L'
});


document.addEventListener("DOMContentLoaded", function() {
    window.stepper = new Stepper(document.querySelector(".bs-stepper"));
});

// DropzoneJS Demo Code Start
Dropzone.autoDiscover = false;

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(document.body, {
    // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
        myDropzone.enqueueFile(file);
    };
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width =
        progress + "%";
});

myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement
        .querySelector(".start")
        .setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
};
// DropzoneJS Demo Code End
</script>