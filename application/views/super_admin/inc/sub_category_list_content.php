<?php include "breadcrumb.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Sub Category List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_sub_cat">Add New</a></h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sub Category</th>
                            <th>Code#</th>
                            <th>Category</th>
                            <th>action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getsub_category() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_sub_cat_name ?></td>
                                <td><?= $row->pro_sub_cat_code ?></td>
                                <td><?= $row->procat_id ?></td>

                                <td>EDIT || <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/sub_cat_delete/<?= $row->prosubcat_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
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



<?php include "modal/create_pro_sub_cat.php" ?>