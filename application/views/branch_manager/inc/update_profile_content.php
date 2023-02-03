<?php include "breadcrumb.php" ?>
<?php $error = $this->uri->segment(3);
if ($error == "username_error") {
    $error_msg = "USER NAME EXIST!";
}

if ($error == "username_invalid") {
    $error_msg = "Space or Invalid Symbol! user Name Must Contain Number and Alphabet";
}

if ($error == "success") {
    $error_msg = "Information Update Successfully!";
}
?>
<?php if ($error != "") { ?>
    <div class="alert alert-danger mb-0" role="alert">
        <strong><?= $error_msg ?></strong>
    </div>
<?php } ?>


<form action="<?= base_url() ?>super_admin/update_admin" method="post" enctype="multipart/form-data">



    <?php $i = 1;
    foreach ($this->urm->getadmin() as $row) : ?>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">UPDATE PROFIE</h4>
                        <?php // $user_name = mt_rand(100000,999999); 
                        ?>

                        <input type="hidden" name="user_name" value="<?= $row->user_name ?>">
                        <input type="hidden" name="pass_word" value="<?= $row->pass_word ?>">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">FULL NAME</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control ml-2" name="full_name" value="<?= $row->full_name ?>">
                            </div>
                        </div>

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



                        <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>

                        <a href="<?= base_url() ?>super_admin/" class="btn btn-danger ml-2">Cancel</a>
</form>
</div>
</div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
<?php endforeach; ?>

<?php include "modal/create_department.php" ?>
<?php include "modal/create_unit.php" ?>