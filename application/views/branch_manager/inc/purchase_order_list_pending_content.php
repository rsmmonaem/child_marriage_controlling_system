<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>


                <a href="<?= base_url() ?>super_admin/purchase_order_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Pending Requisition">
                    <i class="fas fa-pencil"></i>PO List
                </a>
                <a href="<?= base_url() ?>super_admin/purchase_order_list_approved/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved">
                    <i class="fas fa-pencil"></i>Approved PO
                </a>
                <a href="<?= base_url() ?>super_admin/purchase_order_list_reject/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Rejected">
                    <i class="fas fa-pencil"></i>Rejected PO
                </a>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Purchase Request List</h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>PR#</th>
                            <th>Status</th>
                            <th>Next Level</th>
                            <th>Date</th>
                            <th>action</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php $i = 1;
                        foreach ($this->po->getpurchase_order_pending() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->po_no ?></td>
                                <td><?= $row->status ?></td>
                                <td><?= $row->next_level ?></td>
                                <td><?= $row->created_date ?></td>
                                <td><a class="btn btn-danger text-light" href="<?= base_url() ?>super_admin/purchase_order_view/<?= $row->po_no ?>">View</a></td>


                            </tr>

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