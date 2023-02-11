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

                <form action="<?= base_url() ?>field_worker/update_customer" method="post" enctype="multipart/form-data">

                    <?php foreach ($this->urm->getonerow_customer() as $row) : ?>

                        <input type="hidden" name="fw_id_no" value="<?= $user_id ?>">

                        <h4 class="mt-0 header-title">Customer Update</h4><br>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">CUSTOMER NAME</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="customer" value="<?= $row->customer ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">FATHER'S NAME</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="father_name" value="<?= $row->father_name ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">MOTHER'S NAME</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="mother_name" value="<?= $row->mother_name ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">DATE OF BIRTH</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="cm_dob" value="<?= $row->cm_dob ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">NID NO.</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cm_nid_no" value="<?= $row->cm_nid_no ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">PRESENT ADDRESS</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cm_present_add" value="<?= $row->cm_present_add ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">PERMANENT ADDRESS</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cm_permanent_add" value="<?= $row->cm_permanent_add ?>" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">CUSTOMER ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cm_id_no" value="<?= $row->cm_id_no ?>" readonly>
                            </div>
                        </div>


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
                        <input type="hidden" name="prev_cm_image" value="<?= $row->cm_image ?>">
                        <input type="hidden" name="prev_cm_nid_front" value="<?= $row->cm_nid_front ?>">
                        <input type="hidden" name="prev_cm_nid_back" value="<?= $row->cm_nid_back ?>">
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">CHANGE PHOTO</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="cm_image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">CHANGE NID FRONT</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="cm_nid_front">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">CHANGE NID BACK</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="cm_nid_back">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">GRANTER NAME</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="granter_name" value="<?= $row->granter_name ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">GRANTER CONT NO.</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="granter_cont" value="<?= $row->granter_cont ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">GRANTER ADDRESS</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="granter_add" value="<?= $row->granter_add ?>" required>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>

                    <a href="<?= base_url() ?>field_worker/customer_list" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php // include "modal/create_branch_office.php" 
?>