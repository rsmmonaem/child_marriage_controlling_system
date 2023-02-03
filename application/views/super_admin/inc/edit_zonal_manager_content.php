<?php include "breadcrumb.php" ?>
<?php $error = $this->uri->segment(4);
if ($error == "username_error") {
    $error_msg = "USER NAME EXIST!";
}

if ($error == "username_invalid") {
    $error_msg = "Space or Invalid Symbol! user Name Must Contain Number and Alphabet";
}
?>
<div class="row">
    <div class="col-12">
        <?php if ($error != "") { ?>
            <div class="alert alert-danger mb-0" role="alert">
                <strong><?= $error_msg ?></strong>
            </div>
        <?php } ?>
        <div class="card m-b-30">
            <div class="card-body">

                <form action="<?= base_url() ?>super_admin/update_zonal_manager" method="post" enctype="multipart/form-data">


                    <h4 class="mt-0 header-title">Zonal Manager Details</h4> <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ZONAL OFFICE</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="zonal_code">
                                <option>Select</option>
                                <?php foreach ($this->osm->get_zonal() as $row2) : ?>
                                    <?php $i = 1;
                                    foreach ($this->urm->getonerow_zonal_manager() as $row) : ?>
                                        <option <?php if ($row->zonal_code == $row2->zonal_code) {
                                                    echo "selected";
                                                } ?> value="<?= $row2->zonal_code ?>"><?= $row2->zonal_office ?></option>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- <div class="col-sm-4">
                                                    <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_zonal_office">Add New</a>
                                                </div> -->
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ZONAL MANAGER NAME</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="zonal_manager" value="<?= $row->zonal_manager ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ZONAL MANAGER ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="zm_id_no" value="<?= $row->zm_id_no ?>" readonly>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">DESIGNATION</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="designation" value="<?= $row->designation ?>" >
                                                </div>
                                            </div> -->



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT NO.</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" name="cont_num" value="<?= $row->cont_num ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" id="example-email-input" value="<?= $row->email ?>">
                        </div>
                    </div>
                    <input type="hidden" name="image" value="<?= $row->zm_image ?>">
                    <input type="hidden" name="zm_cv" value="<?= $row->zm_cv ?>">

                    <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">CHANGE PHOTO</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="image">
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
                <?php // $user_name = mt_rand(100000,999999); 
                ?>

                <input type="hidden" name="user_name" value="<?= $row->user_name ?>">
                <input type="hidden" name="pass_word" value="<?= $row->pass_word ?>">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">USER NAME</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control ml-2" name="new_user_name" value="<?= $row->user_name ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">PASSWORD</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control ml-2" name="new_pass_word" value="<?= $row->pass_word ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-5">
                        <select class="form-control ml-2" name="status" required>
                            <option <?php if ($row->status == "ENABLE") {
                                        echo "selected";
                                    } ?> value="ENABLE">ENABLE</option>

                            <option value="DISABLE" <?php if ($row->status == "DISABLE") {
                                                        echo "selected";
                                                    } ?>>DISABLE</option>

                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>

                <a href="<?= base_url() ?>super_admin/zonal_manager_list" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php include "modal/create_zonal_office.php" ?>