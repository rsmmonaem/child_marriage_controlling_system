<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/add_temple/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add User
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
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Password</th>
                        <th>User Type</th>
                        <th>Marriage_type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->umm->get_user() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><?= $row->user_name ?></td>
                            <td><?= $row->full_name ?></td>
                            <td><?= $row->pass_word ?></td>
                            <td><?= $row->user_type ?></td>
                            <td><?= $row->marriage_type ?></td>
                            <td><?= $row->status ?></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url() ?>super_admin/edit_user_modification/<?= $row->user_name ?>">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/user_modification_delete/<?= $row->u_id   ?>" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
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
