<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>super_admin/company_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Company List
                </a>

                <a href="<?= base_url() ?>super_admin/zonal_office_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Zonal List">
                    <i class="fas fa-pencil"></i>Zonal List
                </a>
                <a href="<?= base_url() ?>super_admin/branch_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Branch List">
                    <i class="fas fa-pencil"></i>Branch List
                </a>
                <a href="<?= base_url() ?>super_admin/pick_point_list/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="PickPoint List">
                    <i class="fas fa-pencil"></i>PickPoint List
                </a>
                <a href="<?= base_url() ?>super_admin/bank_details/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Bank Details">
                    <i class="fas fa-pencil"></i>Bank Details
                </a>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Branch Office List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_branch_office">Add New</a></h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Zonal</th>
                            <th>Branch</th>
                            <th>Code#</th>
                            <th>Address</th>
                            <th>Contact no.</th>
                            <th>Email</th>
                            <th>branch Head</th>
                            <th>action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->osm->get_branch() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->zonal_code ?></td>
                                <td><?= $row->branch_office ?></td>
                                <td><?= $row->branch_code ?></td>
                                <td><?= $row->address ?></td>
                                <td><?= $row->contact_no ?></td>
                                <td><?= $row->email_address ?></td>
                                <td><?= $row->branch_head_id ?></td>

                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/branch_delete/<?= $row->br_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a>

                                    <a class="btn btn-warning btn-block mt-0" data-toggle="modal" data-target=".update_branch_office<?= $row->br_id ?>"><i class="fas fa-pencil-alt"></i></a>


                                </td>


                            </tr>

                            <?php include "modal/update_branch_office.php" ?>
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




<?php include "modal/create_branch_office.php" ?>