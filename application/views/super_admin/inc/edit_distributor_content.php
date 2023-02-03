<?php include "breadcrumb.php" ?>
<div class="card m-b-30">

    <div class="card-body">

        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/distributor_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="List">
                    <i class="fas fa-pencil"></i>Distributor List
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
                <form action="<?= base_url() ?>super_admin/update_distributor" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">DISTRIBUTOR DETAILS</h4> <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">COMPANY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="company_code" required>

                                <?php foreach ($this->dmm->getonerow_distributor() as $row) : ?>
                                <?php endforeach; ?>

                                <?php foreach ($this->osm->get_company() as $row2) : ?>
                                    <option <?php if ($row->company_code == $row2->company_code) {
                                                echo "selected";
                                            } ?> value="<?= $row2->company_code ?>"><?= $row2->com_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- <div class="col-sm-4">
                                                    <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_sup_category">Add New</a>
                                                </div> -->


                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Branch Office</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="branch_code" required>

                                <?php foreach ($this->osm->get_branch() as $row2) : ?>
                                    <option <?php if ($row->branch_code == $row2->branch_code) {
                                                echo "selected";
                                            } ?> value="<?= $row2->branch_code ?>"><?= $row2->branch_office ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- <div class="col-sm-4">
                                                    <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_branch_office">Add New</a>
                                                </div> -->


                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">DISTRIBUTOR NAME</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="distributor" required value="<?= $row->distributor ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT PERSON</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="contact_person" required value="<?= $row->contact_person ?>">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT NO.</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" name="cont_num" required value="<?= $row->cont_num ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="dis_email" id="example-email-input" value="<?= $row->dis_email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ADDRESS</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="dis_address" required value="<?= $row->dis_address ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">CREDIT</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="credit" required value="<?= $row->credit ?>" readonly>
                        </div>

                        <label for="example-text-input" class="col-sm-2 col-form-label">DEBIT</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="debit" required value="<?= $row->debit ?>" readonly>
                        </div>


                    </div>
                    <input type="hidden" name="dis_code" value="<?= $row->dis_code ?>">
                    <!-- <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>
                                                </form> -->

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

                <a href="<?= base_url() ?>super_admin/distributor_list" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->


<!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php //include "modal/create_sup_category.php" 
?>