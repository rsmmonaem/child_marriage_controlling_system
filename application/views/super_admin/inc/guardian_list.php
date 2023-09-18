<?php include "breadcrumb.php" ?>

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
                        <th>Guardian Name</th>
                        <th>Mobile</th>
                        <th>NID/Birth ID</th>
                        <th>Profession</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($this->gm->get_guardian() as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><?= $row->guardian_info_name ?></td>
                            <td><?= $row->guardian_info_nid ?></td>
                            <td><?= $row->guardian_info_phone ?></td>
                            <td><?= $row->guardian_info_profession ?></td>
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
