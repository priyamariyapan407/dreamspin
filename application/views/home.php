<!doctype html>
<html lang="en">
<?php $CI =& get_instance(); ?>

<head>
    <style>
    @media (min-width:0px) and (max-width:767px) {


        .bg_image {
            width: 100%;
        }
    }

    .image_res {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }



    .bg_image {
        width: 100%;
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

    .error_msg {
        margin-top: 5%;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12">
                    <!-- <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center"> -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 image_res">
                            <img src="<?php echo $CI->config->base_url()?>/assets/images/admin_bg.png" class="bg_image"
                                alt="image">
                        </div>
                        <div class=" col-lg-5 col-md-5 col-sm-12">
                            <div class="card text-white" style="border-radius: 1rem;background-color: #576ace;">
                                <div class="card-body p-5 text-center">

                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <form method="post" autocomplete="off"
                                            action="<?=base_url('Welcome/adminLogin')?>">
                                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typeEmailX">Email</label>
                                                <input type="email" name="email" placeholder="email" id="typeEmailX"
                                                    class="form-control form-control-lg" />

                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typePasswordX">Password</label>
                                                <input type="password" id="typePasswordX" name="password"
                                                    placeholder="password" class="form-control form-control-lg" />

                                            </div>

                                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot
                                                    password?</a></p>

                                            <button class="btn btn-outline-light btn-lg px-5"
                                                type="submit">Login</button>

                                        </form>
                                        <?php
                if($this->session->flashdata('success')){ ?>
                                        <p class='alert alert-danger error_msg' role="alert">
                                            <?= $this->session->flashdata('success'); ?> </p>
                                        <?php } ?>
                                        <?php
                if($this->session->flashdata('error')){ ?>
                                        <p class='alert alert-danger error_msg' role="alert">
                                            <?= $this->session->flashdata('error'); ?> </p>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- </div>
        </div> -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>