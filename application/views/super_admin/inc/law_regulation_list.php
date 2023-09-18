<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/law_regulation_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Add Law Regulation
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Law and Regulation</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Law and Regulation No</th>
                            <th>Law and Regulation Title</th>
                            <th>Law and Regulation Description</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($this->alrm->get_law_regulation() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->law_regulation_no ?></td>
                                <td><?= $row->law_regulation_title  ?></td>
                                <td maxlength="10"><?= $row->law_regulation_description  ?></td>

                                <td ><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/law_regulation_delete/<?= $row->law_regulation_id ?>" class="btn btn-danger btn-sm mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm mt-0" data-toggle="" href="<?= base_url() ?>super_admin/edit_law_regulation/<?= $row->law_regulation_id ?>"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                            <!-- <?php include "modal/update_zonal_office.php" ?> -->
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->



