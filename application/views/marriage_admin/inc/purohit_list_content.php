<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>marriage_admin/add_purohit/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add Purohit
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Purohit Name</th>
                        <th>Mobile</th>
                        <th>NID</th>
                        <th>Date Of Birth</th>
                        <th>Father's Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->apm->get_purohit() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><img style="width:55px; height:55px;" src="<?= base_url() ?>uploads/purohit/<?= $row->purohit_image ?>"> </td>
                            <td><?= $row->purohit_name ?></td>
                            <td><?= $row->purohit_mobile ?></td>
                            <td><?= $row->purohit_nid ?></td>
                            <td><?= $row->purohit_date_of_birth ?></td>
                            <td><?= $row->purohit_father_name ?></td>
                            <td>
                                <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>marriage_admin/purohit_delete/<?= $row->purohit_id  ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i>
                                </a>

                                <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>marriage_admin/edit_purohit/<?= $row->purohit_id  ?>"><i class="fas fa-pencil-alt"></i></a>
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
