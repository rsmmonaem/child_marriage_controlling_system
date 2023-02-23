<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/bank_deposit_list/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Bank Details">
                    <i class="fas fa-pencil"></i>Deposit List
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Bank Details List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_bank_details">Add New</a></h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank Name</th>
                            <th>Branch</th>
                            <th>Account No.</th>
                            <th>Account Name</th>
                            <th>Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $inc = 1;
                        foreach ($this->osm->get_bank() as $row) : ?>
                            <tr>
                                <td><?= $inc++ ?></td>
                                <td><?= $row->bank_name ?></td>
                                <td><?= $row->branch_name ?></td>
                                <td><?= $row->account_no ?></td>
                                <td><?= $row->account_name ?></td>
                                <td><?= $row->balance ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/bank_delete/<?= $row->b_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        
                                        <a class="btn btn-warning btn-block mt-0" data-toggle="modal" data-target=".update_bank_details<?= $row->b_id ?>"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php include "modal/update_bank_details.php" ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->




<?php include "modal/create_bank_details.php" ?>