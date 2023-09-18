<div class="content-wrapper">
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">All marriage Applications</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">marriage List</li>
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
                                        <td class="text-danger"><?= $row->marriage_status ?></td>
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
