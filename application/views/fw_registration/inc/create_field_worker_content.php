<?php //include "breadcrumb.php" 
?>

<div class="content">
    <div class="page-content-wrapper">
        <div class="container">
            <div class="card m-b-15">
                <div class="card-body">
                    <h4>Field Worker Registration Form</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url() ?>fw_registration/insert_field_worker" method="post" enctype="multipart/form-data">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Field Worker Details</h4> <br>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">BRANCH OFFICE</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="branch_code" id="branch_dropdown" required>
                                            <option value='' selected disabled hidden>Select Branch</option>
                                            <?php foreach ($this->osm->get_branch() as $row) : ?>
                                                <option value="<?= $row->branch_code ?>"><?= $row->branch_office ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">FULL NAME</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="field_worker" required>
                                    </div>
                                </div>

                                <?php $fw_id_no = mt_rand(100000, 999999); ?>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">FIELD WORKER ID</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="hidden" name="fw_id_no" value="<?= $fw_id_no ?>">
                                        <input class="form-control" type="text" name="Show_fw_id_no" required disabled value="<?= $fw_id_no ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT NO.</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="tel" name="cont_num" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="email" name="email" id="example-email-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">PHOTO</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">CV</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="fw_cv">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">LOGIN DETAILS</h4>
                                <?php $user_name = mt_rand(100000, 999999); ?>

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
                                        <select class="form-control ml-2" name="status" required readonly>
                                            <option value="DISABLE" selected>DISABLE</option>

                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div> <!-- Page content Wrapper -->
</div> <!-- content -->