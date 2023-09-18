<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>deo_admin/add_objection/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Create Objections
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
<!--                --><?php //echo $this->session->flashdata('message'); ?>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Complainant's Name</th>
                        <th>Objections Subject</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Objections Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($this->aom->get_objection() as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row->obj_title ?></td>
                            <td><?= $row->obj_category  ?></td>
                            <td><?= $row->obj_email  ?></td>
                            <td><?= $row->obj_phone ?></td>
                            <td> <?= character_limiter($row->obj_description, 20) ?></td>


                            <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>deo_admin/objection_delete/<?= $row->obj_id ?>" class="btn btn-sm btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a class="btn btn-sm btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>deo_admin/edit_objection/<?= $row->obj_id ?>"><i class="fas fa-pencil-alt"></i></a>
                            </td>
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




