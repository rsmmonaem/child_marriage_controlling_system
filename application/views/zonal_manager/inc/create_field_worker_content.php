<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">

        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/field_worker_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="List">
                    <i class="fas fa-pencil"></i>Field Worker List
                </a>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                </a>

            </div>
        </div>



    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>super_admin/insert_field_worker" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Field Worker Details</h4> <br>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">DISTRIBUTOR</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="dis_code" required>

                                <?php foreach ($this->dmm->getdistributor() as $row) : ?>
                                    <option value="<?= $row->dis_code ?>"><?= $row->distributor ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/create_distributor/">Add New</a>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">BRANCH OFFICE</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="branch_code" required>

                                <?php foreach ($this->osm->get_branch() as $row) : ?>
                                    <option value="<?= $row->branch_code ?>"><?= $row->branch_office ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_branch_office">Add New</a>
                        </div>


                    </div>



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">FULL NAME</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="field_worker" required>
                        </div>
                    </div>

                    <?php $fw_id_no = mt_rand(100000, 999999); ?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">FIELD WORKER ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="fw_id_no" required readonly value="<?= $fw_id_no ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT NO.</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" name="cont_num" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" id="example-email-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">PHOTO</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">CV</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="fw_cv">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">MONTHLY TARGET</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="target" id="example-email-input" required>
                        </div>
                    </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-12">
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
                        <select class="form-control ml-2" name="status" required>
                            <option value="ENABLE" selected="">ENABLE</option>

                            <option value="DISABLE">DISABLE</option>

                        </select>
                    </div>
                </div>

                <!-- <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">UNTIL</label>
                                                        <div class="col-sm-5">
                                                        <input type="text" class="form-control ml-2" name="status_until" Value="<?php echo date('m/d/y'); ?>">
                                                    </div>
                                                    </div> -->

                <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php include "modal/create_branch_office.php";
include "modal/create_company.php";

?>