<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>temple_admin/add_temple/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add Temple
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Temple List</h2>
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Temple Name</th>
                        <th>Temple Username</th>
                        <th>Mobile</th>
                        <th>Found Date</th>
                        <th>Committee Name</th>
                        <th>Committee Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->atmb->get_temple() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><?= $row->temple_name ?></td>
                            <td><?= $row->temple_username ?></td>
                            <td><?= $row->temple_contact_number ?></td>
                            <td><?= $row->temple_found_date ?></td>
                            <td><?= $row->temple_com_name ?></td>
                            <td><img style="width:55px; height:55px;" src="<?= base_url() ?>uploads/temple/<?= $row->temple_com_image ?>"> </td>

                            <td>
                                <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>temple_admin/temple_delete/<?= $row->temple_id  ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i>
                                </a>

                                <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>temple_admin/edit_temple/<?= $row->temple_id  ?>"><i class="fas fa-pencil-alt"></i></a>
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
