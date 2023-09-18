<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/add_non_student/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add Non Student
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!-- <?php echo $this->session->flashdata('message'); ?> -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <!-- <th>Institute</th> -->
                        <th>Photo </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row->st_name ?></td>
                            <td><?= $row->st_date_of_birth  ?></td>
                            <!-- <td><?= $row->st_inst_name?></td> -->
                            <td>

                                <img style="width: 80px;" src="<?= base_url() ?>uploads/student/<?= $row->st_photo ?>">

                            </td>

                            <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/non_student_delete/<?= $row->st_id ?>" class="btn btn-danger btn-sm mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i> Delete
                                </a>
                                <a class="btn btn-success btn-sm mt-0" data-toggle="" href="<?= base_url() ?>super_admin/edit_non_student/<?= $row->st_id ?>"><i class="fas fa-pencil-alt"> Edit</i></a>
                            </td>
                        </tr>
                        <!-- <?php include "modal/update_zonal_office.php" ?> -->
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




