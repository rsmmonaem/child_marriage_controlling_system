<?php include "breadcrumb.php" ?>
<div class="card m-b-30">

    <div class="card-body">

        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/unit_head_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="List">
                    <i class="fas fa-pencil"></i>Unit Head List
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
                <form action="<?= base_url() ?>super_admin/insert_unit_head" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Unit Head Details</h4> <br>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">UNIT</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="unit_name" required>

                                <?php foreach ($this->urm->getunit() as $row) : ?>
                                    <option value="<?= $row->unit_name ?>"><?= $row->unit_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_unit">Add New</a>
                        </div>


                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">DEPARTMENT</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="department" required>

                                <?php foreach ($this->urm->getdepartment() as $row) : ?>
                                    <option value="<?= $row->dep_name ?>"><?= $row->dep_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_department">Add New</a>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">UNIT HEAD name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="uh_name" required>
                        </div>
                    </div>
                    <?php $uh_id_no = mt_rand(100000, 999999); ?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">UNIT HEAD ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="uh_id_no" required readonly value="UG-UH-<?= $uh_id_no ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">DESIGNATION</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="designation" required>
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
                            <input class="form-control" type="email" name="email" id="example-email-input" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">PHOTO</label>
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
                        <input type="text" class="form-control ml-2" name="pass_word" Value="ugpass123" readonly>
                    </div>
                </div>

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


<?php include "modal/create_department.php";
include "modal/create_unit.php";
?>