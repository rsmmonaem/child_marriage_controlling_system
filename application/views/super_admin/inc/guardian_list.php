<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Guardian Name</th>
                        <th>Mobile</th>
                        <th>NID</th>
                        <th>Date Of Birth</th>
                        <th>Religion</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->gm->get_guardian() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><?= $row->guardian_info_name ?></td>
                            <td><?= $row->guardian_info_nid ?></td>
                            <td><?= $row->guardian_info_phone ?></td>
                            <td><?= $row->guardian_info_date_of_birth ?></td>
                            <td><?= $row->guardian_info_religion ?></td>
                            <td><?= $row->guardian_info_present_address ?></td>
                            <td><?= $row->guardian_info_permanent_address ?></td>
                            <td>
                                <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/kazi_delete/<?= $row->guardian_id  ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i>
                                </a>

                                <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>super_admin/edit_purohit/<?= $row->guardian_id  ?>"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
