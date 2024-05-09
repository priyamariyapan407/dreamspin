<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreamspin | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <?php $CI =& get_instance(); ?>

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
    <style>
    @media (max-width:499px) {
        .rounded_bg {
            padding-top: 3% !important;
            padding-bottom: 3% !important;
            border-radius: 50% !important;
            font-size: 1.5rem !important;
            width: 16% !important;
        }

        .chart-mrgn {
            background-color: unset;
            margin-top: 4% !important;
            margin-bottom: 8% !important;
        }
    }

    @media (min-width:500px) and (max-width:767px) {
        .rounded_bg {
            padding-top: 3% !important;
            padding-bottom: 3% !important;
            border-radius: 50% !important;
            font-size: 1.5rem !important;
            width: 16% !important;
        }

        .cat_count {
            margin-bottom: 7% !important;
        }

        .chart-mrgn {
            background-color: unset;
            margin-top: 4% !important;
            margin-bottom: 8% !important;
        }
    }

    /* @media (min-width:576px) and (max-width:1076px) {
        .rounded_bg {
            padding-top: 5% !important;
            padding-bottom: 5% !important;
            border-radius: 50% !important;
            font-size: 1.5rem !important;
            width: 16% !important;
        }


    } */

    @media (min-width:769px) and (max-width:1290px) {
        .rounded_bg {
            background-color: #17a2b8 !important;
            padding-top: 8% !important;
            padding-bottom: 8% !important;
            border-radius: 50% !important;
            font-size: 2.5rem !important;
            width: 80% !important;
        }


    }

    .rounded_bg {
        background-color: #17a2b8 !important;
        padding-top: 10%;
        padding-bottom: 10%;
        border-radius: 50%;
        font-size: 3.5rem;
        width: 90%;
    }

    .cat_count {
        font-weight: bold;
        margin-top: 5%;
        text-align: center;
        margin-bottom: 15%;
    }

    .head {
        font-size: 1.5rem;
    }

    .content-header {
        padding: 1px 0.5rem !important;
    }

    .chart-mrgn {
        background-color: unset;
        margin-top: 7%;
    }

    .bg-info {
        margin-top: 4%;
    }

    .main-footer {
        background-color: #c1d6edfc !important;
        border-top: 1px solid #dee2e6;
        color: #0c3e9b !important;
        padding: 0.5rem !important;
    }
    </style>
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
                <!-- Messages Dropdown Menu -->

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
                            <a href=" <?php echo base_url('Welcome/dashboard') ?>" class="nav-link active">
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <span class="m-0 head">Home</span> <span class="breadcrumb-item">Control panel</span>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-7 col-sm-7 col-md-7">
                            <!-- small box -->
                            <div class="row">
                                <div class="col-lg-5 col-sm-12 col-md-12">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3 style="color:#000;margin-bottom: -0.5rem;"><?php echo $users_count ?>
                                            </h3>
                                            <p style="color:#000;">users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-primary chart-mrgn">

                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="areaChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->

                        </div>
                        <div class="col-lg-5 col-sm-5 col-md-5">
                            <?php 
                            $categories_count_sort = array();
                        //    echo "<pre>"; print_r($categories_count);
                            foreach($categories_count as $categories){
                                $count = 0;
                                if(!empty($categories->contest_name1)){
                                    $count += 1;
                                }
                                if(!empty($categories->contest_name2)){
                                    $count += 1;
                                }
                                if(!empty($categories->contest_name3)){
                                    $count += 1;
                                }
                                if(!empty($categories->contest_name4)){
                                    $count += 1;
                                }
                                array_push($categories_count_sort,['name'=>$categories->contest_category_name,'count'=>$count]);
                            }
                            $all_cate = array();
                            foreach($categories_count as $categories){
                                array_push($all_cate,$categories->contest_category_name);
                            }
                            $unique_categories = array_values(array_unique($all_cate));
                            
                           $sorted_array =array();
//  echo "<pre>"; print_r($categories_count_sort);
                           for($i=0;$i<count($unique_categories);$i++){
                            for($j=0;$j<count($categories_count_sort);$j++){
                                // echo "<pre>"; print_r($categories_count_sort[$j]['name']);
                                $cnt = '';
                                if($unique_categories[$i] ==($categories_count_sort[$j]['name'])){
                                    $matched = '';
                                     
                                        for($k=0;$k<count($sorted_array);$k++){
                                            if(empty($sorted_array)){
                                                array_push($sorted_array,['name'=>$categories_count_sort[$j]['name'],'count'=>$categories_count_sort[$j]['count']]);
                                            } else {
                                                if($sorted_array[$k]['name'] == $categories_count_sort[$j]['name']){
                                                    $sorted_array[$k]['count'] = ($sorted_array[$k]['count']) + ($categories_count_sort[$j]['count']);
                                                    $matched = 'yes';
                                                }
                                            }
                                           
                                        }
                                    

                                    if($matched != 'yes'){
                                        array_push($sorted_array,['name'=>$categories_count_sort[$j]['name'],'count'=>$categories_count_sort[$j]['count']]);
                                    }
                                
                                  
                                    
                                }
                            }
                           }

                            // echo "<pre>"; print_r($sorted_array); 
                            ?>
                            <div class="row ">
                                <?php foreach($sorted_array as $cat_list){ ?>

                                <div class="col-lg-6 col-12 col-sm-12 col-md-6" align="center">
                                    <div class="row" align="center">
                                        <div class="col-lg-2 col-md-2 col-12 col-sm-12"></div>
                                        <div class="col-lg-7 col-md-7 col-12 col-sm-12">
                                            <div class="rounded_bg">
                                                <?php echo $cat_list['count']; ?>
                                            </div>
                                            <div class="cat_count">
                                                <?php echo $cat_list['name']; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2  col-md-2 col-sm-12 col-12"></div>
                                    </div>


                                    <?php // echo "<pre>"; print_r($cat_list); ?>
                                </div>


                                <?php } 
                                $user_entry_date = array();
                                $user_count = array();
                               
                                foreach($chart_info as $info){
                                    array_push($user_entry_date,$info->created_at);
                                    array_push($user_count,$info->user_count);
                                }
                                // echo "<pre>"; print_r($user_entry_date);
                                // echo "<pre>"; print_r($user_count);
                                ?>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
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

<script>
$(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    let user_entry_date = '<?php echo json_encode($user_entry_date); ?>';
    var user_entry_date_object = $.parseJSON(user_entry_date);

    var user_entry_date_array = $.map(user_entry_date_object, function(value, index) {
        return [value];
    });


    let user_count = '<?php echo json_encode($user_count); ?>';
    var user_count_object = $.parseJSON(user_count);

    var user_count_array = $.map(user_count_object, function(value, index) {
        return [value];
    });
    console.log(user_count_array, 'user_count_array');
    // user_entry_date1 = user_entry_date.replace(/^'|'$/g, '');
    // user_count1 = user_count.replace(/^'|'$/g, '');
    // console.log('user_entry_date', user_entry_date);
    // console.log('user_count', user_count);
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {

        labels: user_entry_date_array,
        datasets: [{
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: user_count_object
        }]
    }

    var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                }
            }]
        }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [
            'Chrome',
            'IE',
            'FireFox',
            'Safari',
            'Opera',
            'Navigator',
        ],
        datasets: [{
            data: [700, 500, 400, 600, 300, 100],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                stacked: true,
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }

    new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
    })
})
</script>