<?php include "breadcrumb.php" ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>common_user/insert_requisition" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Product Entry Details</h4> <br>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PRODUCT NAME</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="pro_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getproduct_name() as $row) : ?>
                                    <option value="<?= $row->pro_id ?>"><?= $row->pro_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_name">Add New</a>
                        </div>


                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">CATEGORY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="procat_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getpro_category() as $row) : ?>
                                    <option value="<?= $row->procat_id ?>"><?= $row->pro_cat_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_category">Add New</a>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">SUB-CATEGORY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="prosubcat_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getpro_sub_cat() as $row) : ?>
                                    <option value="<?= $row->prosubcat_id ?>"><?= $row->pro_sub_cat_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_sub_cat">Add New</a>
                        </div>


                    </div>



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">QUANTITY</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="pro_qnty" required>
                        </div>

                        <label for="example-text-input" class="col-sm-2 col-form-label">MEASURE</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="qnty_messure" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getqnty_messure() as $row) : ?>
                                    <option value="<?= $row->qnty_messure ?>"><?= $row->qnty_messure ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ml-2">ENTRY</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Requisition List</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Qnty</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->rm->getrequest_requisition() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_id ?></td>
                                <td><?= $row->pro_qnty ?>-<?= $row->qnty_messure ?></td>
                                <td><?= $row->created_date ?></td>
                                <td><?= $row->status ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>common_user/cart_requisition_delete/<?= $row->rr_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a></td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
                <form action="<?= base_url() ?>common_user/requisition_submit" method="post" enctype="multipart/form-data">
                    <?php $req_no = mt_rand(1000, 9999); ?>

                    <input type="hidden" name="req_no" value="RQ-<?= $req_no ?>">
                    <button type="submit" class="btn btn-primary ml-2">REQUEST</button>

                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->




</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php include "modal/create_pro_category.php" ?>

<?php include "modal/create_pro_sub_cat.php" ?>

<?php include "modal/create_pro_name.php" ?>