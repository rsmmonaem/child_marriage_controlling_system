<div class="card mt-5"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Guardian List</h2>
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Guardian Name</th>
                        <th>Mobile</th>
                        <th>NID</th>
                        <th>Date Of Birth</th>
                        <th>Religion</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl =1 ;
                    foreach($data as $row): ?>
                        <tr>
                            <td><?= $sl++ ?></td>
                            <td><?= $row->guardian_info_name ?></td>
                            <td><?= $row->guardian_info_nid ?></td>
                            <td><?= $row->guardian_info_phone ?></td>
                            <td><?= $row->guardian_info_date_of_birth ?></td>
                            <td><?= $row->guardian_info_religion ?></td>
                            <td><?= $row->guardian_info_present_address ?></td>
                            <td><?= $row->guardian_info_permanent_address ?></td>
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
