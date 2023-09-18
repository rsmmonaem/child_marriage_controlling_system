<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile Update</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <div class="row">

                <form class="col-md-12" action="<?php echo base_url('super_admin/update_user_profile/'.$data->user_name)?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="modal-title" id="exampleModalform">Update Profile</h5>
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

                                                <input type="text" class="form-control" id="field-1" name="user_name" value="<?= $data->user_name ?>"  readonly="readonly">
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
