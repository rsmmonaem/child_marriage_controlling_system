<?php include "breadcrumb.php"; ?>

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
                            <th>Law/Regulation No</th>
                            <th>Law/Regulation Title</th>
                            <th>Law/Regulation Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->alrm->get_law_regulation() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->law_regulation_no ?></td>
                                <td><?= $row->law_regulation_title  ?></td>
                                <td><?= $row->law_regulation_description  ?></td>

                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>deo_admin/law_regulation_delete/<?= $row->law_regulation_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>deo_admin/edit_law_regulation/<?= $row->law_regulation_id ?>"><i class="fas fa-pencil-alt"></i></a>
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




