<?php
$fw_id_no = $page_name = $this->uri->segment(3);
$user_name = $page_name = $this->uri->segment(4);
$pass_word = $page_name = $this->uri->segment(5);
?>

<div class="content">
    <div class="page-content-wrapper">
        <div class="container">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="btn-group">
                        <div>
                            <h4>Registration Success!</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">ACCOUNT DETAILS</h4>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control ml-2" name="user_name" value="<?= $fw_id_no ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">USER NAME</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control ml-2" name="user_name" value="<?= $user_name ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">PASSWORD</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control ml-2" name="pass_word" Value="CF1234" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">STATUS</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control ml-2" name="status" Value="DISABLE" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="text-align: center; margin: 25px 15%;">
                                <h4 style="COLOR:RED">PLEASE NOTE YOUR ACCOUNT DETAILS AND CONTACT TO ADMINISTRATION FOR ENABLE YOUR ACCOUNT.</h4>
                                <a href="<?= base_url() ?>login" class="btn btn-primary btn-lg ml-2">LOGIN</a>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div> <!-- Page content Wrapper -->
</div> <!-- content -->