<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/add_objection/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
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
                            <td> <?= character_limiter($row->obj_description, 20)?></td>


                            <td>
							<a href="" class="btn btn-success" data-toggle="modal" data-target="#m<?=$row->obj_id  ?>"><i class="fa fa-eye"></i> View</a>
								<a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/objection_delete/<?= $row->obj_id ?>" class="btn btn-danger btn-sm mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fas fa-times"></i> Delete
                                </a>
                                <a class="btn btn-success btn-sm mt-0" data-toggle="" href="<?= base_url() ?>super_admin/edit_objection/<?= $row->obj_id ?>">
									<i class="fas fa-pencil-alt"></i> Edit
								</a>
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



<div class="modal fade" id="m<?=$row->obj_id  ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->obj_id  ?>">
                                                                <?= $row->obj_title?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর নাম</td>
                                                                        <td><?= $row->obj_title ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর ইমেল</td>
                                                                        <td><?= $row->obj_email ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগের বিষয় </td>
                                                                        <td><?= $row->obj_category ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর ফোন নাম্বার</td>
                                                                        <td><?= $row->obj_phone ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিস্তারিত</td>
                                                                        <td><?= $row->obj_description ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



