<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/add_muazzin/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add Muazzin
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
                        <th>Muazzin Name</th>
                        <th>Muazzin Username</th>
                        <th>Mobile</th>
                        <th>NID</th>
                        <th>Date Of Birth</th>
                        <th>Father's Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->amzm->get_muazzin() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><img style="width:55px; height:55px;" src="<?= base_url() ?>uploads/muazzin/<?= $row->muazzin_image ?>"> </td>
                            <td><?= $row->muazzin_name ?></td>
                            <td><?= $row->muazzin_username ?></td>
                            <td><?= $row->muazzin_mobile ?></td>
                            <td><?= $row->muazzin_nid ?></td>
                            <td><?= $row->muazzin_date_of_birth ?></td>
                            <td><?= $row->muazzin_father_name ?></td>
                            <td>
                                <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/muazzin_delete/<?= $row->muazzin_id  ?>" class="btn btn-danger btn-sm mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i> Delete
                                </a>

                                <a class="btn btn-success btn-sm mt-0" data-toggle="" href="<?= base_url() ?>super_admin/edit_muazzin/<?= $row->muazzin_id  ?>"><i class="fas fa-pencil-alt"></i> Edit</a>
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
