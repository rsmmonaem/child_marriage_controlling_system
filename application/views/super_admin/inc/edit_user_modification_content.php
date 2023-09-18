<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Update</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card m-b-30">

                <div class="card-body">
                    <div class="btn-group">
                        <div>
                            <a href="<?= base_url() ?>super_admin/user_modification_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>User List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="<?php echo base_url('super_admin/update_user_modification/'.$data->user_name)?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="modal-title" id="exampleModalform">Create News</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
<input type="hidden" name="u_id" value="<?=$data->u_id?>">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Full Name</label>
                                                <input type="text" class="form-control" id="field-1" name="full_name" value="<?= $data->full_name ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">User Name</label>
                                                <input type="text" class="form-control" id="field-1" name="user_name" value="<?= $data->user_name ?>" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Password</label>
												<input type="password" id="myInput" class="form-control" id="field-1" name="pass_word" value="<?= $data->pass_word?>">
										<br>
										<input type="checkbox" onclick="myFunction()"> Show Password
										<script>
											function myFunction() {
											var x = document.getElementById("myInput");
											if (x.type === "password") {
												x.type = "text";
											} else {
												x.type = "password";
											}
											}
										</script>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">User Type</label>
                                                <select class="form-control" name="user_type" id="branch_dropdown" >
                                                    <option value="" selected="" disabled="" hidden="">Select Here</option>
                                                    <option value="institute_admin" <?php if ($data->user_type == "institute_admin"){echo "selected";} ?> >Institute Admin</option>
                                                    <option value="marriage_admin" <?php if ($data->user_type == "marriage_admin"){echo "selected";} ?>   >marriage_admin</option>
													<option value="deo_admin" <?php if ($data->user_type == "deo_admin"){echo "selected";} ?>   >Deo Admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Status</label>
                                                <select class="form-control" name="status" id="branch_dropdown" >
                                                    <option value="" selected="" disabled="" hidden="">Select Here</option>
                                                    <option value="ENABLE" <?php if ($data->status == "ENABLE"){echo "selected";} ?> >Enable</option>
                                                    <option value="DISABLE" <?php if ($data->status == "DISABLE"){echo "selected";} ?> >Disable</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>

                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

</div>
