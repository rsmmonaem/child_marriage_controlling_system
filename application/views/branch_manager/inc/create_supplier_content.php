<?php include "breadcrumb.php" ?>
<div class="card m-b-30">

    <div class="card-body">

        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/supplier_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="List">
                    <i class="fas fa-pencil"></i>Supplier List
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
                <form action="<?= base_url() ?>super_admin/insert_supplier" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">SUPPLIER DETAILS</h4> <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">CATEGORY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="sup_category" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getsup_category() as $row) : ?>
                                    <option value="<?= $row->supc_name ?>"><?= $row->supc_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_sup_category">Add New</a>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">SUPPLIER NAME</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="sup_name" required>
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
                            <input class="form-control" type="email" name="sup_email" id="example-email-input" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ADDRESS</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="sup_address" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



<!-- end row -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php include "modal/create_sup_category.php" ?>