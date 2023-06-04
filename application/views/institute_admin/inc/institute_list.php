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
                            <th>Institute Name</th>
                            <th>EIIN</th>
                            <th>Board </th>
                            <th>Contact</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
						
                        foreach ($this->aim->get_institute() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->inst_name ?></td>
                                <td><?= $row->inst_eiin  ?></td>
                                <td><?= $row->inst_board ?></td>
                                <td><?= $row->inst_contact ?></td>
                                <td> 
                                   
                                     <img style="width: 80px;" src="<?= base_url() ?>uploads/institute/<?= $row->inst_logo ?>">   
                                     
                                </td>

                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>institute_admin/institute_delete/<?= $row->inst_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>institute_admin/edit_institute/<?= $row->inst_id ?>"><i class="fas fa-pencil-alt"></i></a>
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




