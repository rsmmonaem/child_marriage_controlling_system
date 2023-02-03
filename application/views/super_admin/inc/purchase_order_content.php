<?php include "breadcrumb.php";


?>
<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>


                <a href="<?= base_url() ?>super_admin/purchase_order_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="All Requisition">
                    <i class="fas fa-pencil"></i>PO List
                </a>
                <a href="<?= base_url() ?>super_admin/purchase_order_list_pending/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Pending Requisition">
                    <i class="fas fa-pencil"></i>Pending PO
                </a>
                <a href="<?= base_url() ?>super_admin/purchase_order_list_approved/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved Requsition">
                    <i class="fas fa-pencil"></i>Approved PO
                </a>
                <a href="<?= base_url() ?>super_admin/purchase_order_list_reject/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Rejected Requsition">
                    <i class="fas fa-pencil"></i>Rejected PO
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>super_admin/insert_purchase_order" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Create New Purchase Order</h4> <br>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PRODUCT NAME</label>
                        <div class="col-sm-6">
                            <input type="text" name="pro_name" class="select2 form-control mb-3 custom-select">

                        </div>


                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">CATEGORY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="procat_id" required>
                                <!-- <option>Select</option> -->
                                <?php foreach ($this->imm->getpro_category() as $row) : ?>
                                    <option value="<?= $row->pro_cat_name ?>"><?= $row->pro_cat_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!--  <div class="col-sm-4">
                                                    <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_category">Add New</a>
                                                </div> -->


                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">BRAND</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="pro_brand" required>
                                <option value="N/A">Select</option>
                                <?php foreach ($this->imm->getpro_brand() as $row) : ?>
                                    <option value="<?= $row->pro_brand ?>"><?= $row->pro_brand ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- <div class="col-sm-4">
                                                    <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_brand">Add New</a>
                                                </div> -->


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

                <h4 class="mt-0 header-title">Purchase Order List</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Cat</th>
                            <th>Brand</th>

                            <th>Qnty</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php //echo $user_id= $this->session->userdata('user_id'); 
                    ?>

                    <tbody>
                        <?php $i = 1;
                        foreach ($this->po->getpurchase_order_entry() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->procat_id ?></td>
                                <td><?= $row->pro_brand ?></td>

                                <td><?= $row->pro_qnty ?>-<?= $row->qnty_messure ?></td>
                                <td><?= $row->created_date ?></td>
                                <td><?= $row->status ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/purchase_order_delete/<?= $row->po_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a></td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
                <form action="<?= base_url() ?>super_admin/purchase_order_submit" method="post" enctype="multipart/form-data">
                    <?php
                    $time_stamp = date("YmdHis");
                    //$rp_no = $unit_name."-".$department."-".$time_stamp;
                    $po_no = "PO-" . $time_stamp;

                    ?>

                    <input type="hidden" name="po_no" value="<?= $po_no ?>">
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