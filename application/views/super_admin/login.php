<?php

//include "inc/head_links.php";
include "inc/form_header_links.php";
?>


<body class="fixed-left">
    <!-- Begin page -->
    <!--<div class="accountbg"></div>-->
    <div id="stars"></div>
    <div id="stars2"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center mt-0">
                    <a href="#" class="logo logo-admin"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="50" alt="logo"></a>
                </h3>

                <h6 class="text-center">Sign In</h6>

                <div class="p-3">

                    <form class="form-horizontal" action="<?= base_url() ?>login/login_process" method="post">

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Username" name="user_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="pass_word">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <a href="<?= base_url() ?>fw_registration/create_field_worker" class="btn btn-info btn-block waves-effect waves-light" type="submit">Registration</a>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <!-- <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password ?</a> -->

                                login details: <br>
                                <b>super admin:</b><br> user: admin password: admin <br>
                                <b>Field Worker:</b><br> user: 281354 password: CF1234 <br>
                                <b>Distributor:</b><br> user: 456788 password: CF1234 <br>
                                <b>Zonal Manager:</b><br> user: 719872 password: CF1234 <br>
                                <b>Branch Manager:</b><br> user: 789537 password: CF1234 <br>

                            </div>
                            <!-- <div class="col-sm-5 m-t-20">
                                    <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account ?</a>
                                </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery  -->
    <script src="<?= base_url() ?>assets/backend/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/modernizr.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/detect.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/fastclick.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.blockUI.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/waves.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url() ?>assets/backend/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/backend/js/app.js"></script>

</body>

</html>