<?php include "breadcrumb.php" ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>super_admin/update_supplier" method="post" enctype="multipart/form-data">

                    <h4 class="mt-0 header-title">SUPPLIER DETAILS</h4>
                    <br>

                    <?php
                    foreach ($this->imm->getonerow_supplier() as $row) :
                    ?>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SUPPLIER NAME</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sup_name" value="<?= $row->sup_name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">CONTACT NO.</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cont_num" value="<?= $row->cont_num ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">EMAIL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sup_email" value="<?= $row->sup_email ?>">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ADDRESS.</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" name="sup_address" value="<?= $row->sup_address ?>">
                            </div>
                        </div>

                        <input type="hidden" name="sup_id" value="<?= $row->sup_id ?>">
                        <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>

                        <a href="<?= base_url() ?>super_admin/supplier_list" class="btn btn-danger ml-2">Cancel</a>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->




</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
<?php endforeach; ?>

<?php // include "modal/create_sup_category.php" ?>