<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pending Application</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pending Trainee List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
									<th>Image</th>
									<th>Groom Name</th>
									<th>Groom Date Of Birth</th>
                                    <th>Image</th>
                                    <th>Bride Name</th>
                                    <th>Bride Date Of Birth</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sl =1 ;
                                foreach($data as $row): ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><img style="width:55px; height:55px;" src="<?= base_url() ?>uploads/student/<?= $row->groom_photo ?>"> </td>
										<td><?= $row->groom_name ?></td>
										<td><?= $row->groom_date_of_birth ?></td>
                                        <td><img style="width:55px; height:55px;" src="<?= base_url() ?>uploads/student/<?= $row->bride_photo ?>"> </td>
                                        <td><?= $row->bride_name ?></td>
                                        <td><?= $row->bride_date_of_birth ?></td>
                                        <td> <span class="text-capitalize badge badge-boxed badge-warning"><?= $row->marriage_status ?> </span></td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="<?= base_url() ?>super_admin/marriage_details/<?=$row->marriage_couple_id?>">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a class="btn btn-success btn-sm" onclick="return confirm('Do you want to Approve?');" href="<?= base_url() ?>super_admin/approve_marriage/<?= $row->marriage_couple_id?>" data-placement="top" data-toggle="tooltip" data-original-title="Approve">
                                                <i class="fas fa-check"></i> Approve
                                            </a>
											<a class="btn btn-success btn-sm" onclick="return confirm('Do you want to Reject?');" href="<?= base_url() ?>super_admin/reject_marriage/<?= $row->marriage_couple_id?>" data-placement="top" data-toggle="tooltip" data-original-title="Approve">
                                                <i class="fa fa-times-circle"></i> Reject
                                            </a>
                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/marriage_delete/<?= $row->marriage_couple_id?>" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>
