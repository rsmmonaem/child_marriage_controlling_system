<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/requisition_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="All Requisition">
                    <i class="fas fa-pencil"></i>All Requisition
                </a>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                </a>
                <a href="<?= base_url() ?>super_admin/requisition_list_approved/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved Requsition">
                    <i class="fas fa-pencil"></i>Approved Requisition
                </a>
                <a href="<?= base_url() ?>super_admin/requisition_list_reject/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Rejected Requsition">
                    <i class="fas fa-pencil"></i>Rejected Requisition
                </a>

                <a href="<?= base_url() ?>super_admin/distribution_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved Requsition">
                    <i class="fas fa-pencil"></i>Distribution
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Requisition List || <a href="">Add New</a></h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Requisition#</th>
                            <th>Status</th>
                            <th>Next Level</th>
                            <th>Date</th>
                            <th>action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->rm->requisition_pending_admin() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->req_no ?></td>
                                <td><?= $row->status ?></td>
                                <td><?= $row->next_level ?></td>
                                <td><?= $row->created_date ?></td>
                                <td><a class="btn btn-danger text-light" href="<?= base_url() ?>super_admin/requisition_view/<?= $row->req_no ?>">View</a></td>


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