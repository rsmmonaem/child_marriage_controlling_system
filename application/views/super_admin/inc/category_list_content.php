<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>


                <a href="<?= base_url() ?>super_admin/system_settings/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="All Requisition">
                    <i class="fas fa-pencil"></i>Pro Category
                </a>
                <a href="<?= base_url() ?>super_admin/pro_brand_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Pending Requisition">
                    <i class="fas fa-pencil"></i>Pro Brand
                </a>
                <a href="<?= base_url() ?>super_admin/pro_measure_list/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved Requsition">
                    <i class="fas fa-pencil"></i>Pro Measure
                </a>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Category List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_category">Add New</a></h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Category</th>
                            <th>Code#</th>
                            <th>action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getpro_category() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_cat_name ?></td>
                                <td><?= $row->pro_cat_code ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/pro_cat_delete/<?= $row->procat_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a></td>


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



<?php include "modal/create_pro_category.php" ?>