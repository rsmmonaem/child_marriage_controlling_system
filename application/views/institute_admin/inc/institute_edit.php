<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>institute_admin/institute_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>institute List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <form action="<?php echo base_url('institute_admin/update_institute/'.$data->inst_id)?>" method="post" enctype="multipart/form-data">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="">
                    <h5 class="modal-title" id="exampleModalform">New institute</h5>
                </div>
                <div class="modal-body">
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Institute Name</label>
                                <input type="text" value="<?=$data->inst_name?>" class="form-control" id="field-1" name="inst_name" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Institute EIIN</label>
                                <input type="text" value="<?=$data->inst_eiin?>" class="form-control" id="field-2" name="inst_eiin" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Institute Founded Date</label>
                                <input type="date" value="<?=$data->inst_founded?>" class="form-control" id="field-3" name="inst_founded" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Institute Contact</label>
                                <input type="text" value="<?=$data->inst_contact?>" class="form-control" id="field-4" name="inst_contact" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Institute Board</label>
                                <input type="tel" value="<?=$data->inst_board?>"  class="form-control" id="field-5" name="inst_board" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Institute Logo</label>
                                 <input type="hidden" name="old_logo" value="<?= $data->inst_logo ?>">
                                <input type="file" class="form-control" id="field-6" name="inst_logo" >
                            </div>
                        </div>
						<div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Institute Username</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$data->inst_username;  ?>" name="inst_username"  type="text" readonly="readonly">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Institute Password</label>
                                <input class="form-control col-md-12 col-xs-12"  value="<?=$data->inst_password ; ?>" name="inst_password" type="text" readonly="readonly" >
                                <div class="help-block"></div>
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

