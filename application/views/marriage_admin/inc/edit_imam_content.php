<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>marriage_admin/imam_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Imam List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Update Imam</h2>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('marriage_admin/update_imam/'.$data->imam_id)?>" method="post" enctype="multipart/form-data">
            <div class="col-md-12 col-sm-12">
                <div class="admission-form">
                    <div class="row">
                        <div class="col-md-12 col-sm-12"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class=""><strong>Basic Information:</strong></p> </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_name" id="name" value="<?= $data->imam_name ?>"  placeholder="Enter Full Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">NID Number<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_nid" id="NID Number"  value="<?= $data->imam_nid ?>"  placeholder="NID Number" required="required" type="number" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Father's Name<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_father_name" id="Father Name"  value="<?= $data->imam_father_name ?>" placeholder="Father Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_date_of_birth" id="date"  value="<?= $data->imam_date_of_birth ?>" placeholder="Birth Date" type="date" autocomplete="off" required="required">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Mobile<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_mobile" id="phone" value="<?= $data->imam_mobile ?>" placeholder="+88 012xxxxxxxx7" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="phone">Division <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_division" id="Division" value="<?= $data->imam_division ?>" placeholder="Division" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="birth_certi_id">District</label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_district" id="birth_certi_id" value="<?= $data->imam_division ?>" placeholder="District" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">


                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Thana</label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_thana" id="health_condition" value="<?= $data->imam_thana ?>" placeholder="Thana" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Union</label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_union" id="health_condition" value="<?= $data->imam_union ?>" placeholder="Union" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Village</label>
                                <input class="form-control col-md-12 col-xs-12" name="imam_village" id="health_condition" value="<?= $data->imam_village ?>" placeholder="Village" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="present_address">Address <span class="required">*</span></label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="imam_address" id="present_address" placeholder="Address" required="required"><?= $data->imam_address ?></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="photo">Photo</label>
                                <input type="hidden" name="old_image" value="<?= $data->imam_image ?>">
                                <input class="form-control col-md-12 col-xs-12" name="imam_image" id="photo" type="file">
                                <div class="text-info" style="font-size: 9px;">Image file format: .jpg, .jpeg, .png or .gif</div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Existing Photo</label><br>
                                <img style="width:150px; height:150px;"  class="control-label" src="<?= base_url() ?>uploads/imam/<?= $data->imam_image ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Imam Username</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?= $data->imam_username ?>" name="imam_username"  type="text" readonly="readonly">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Password</label>
                                <input class="form-control col-md-12 col-xs-12"  value="<?= $data->imam_password ?>" name="imam_password" type="text" readonly="readonly" >
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 margin-top">
                        <button type="submit" class="btn btn-info a-btn btn-hover"> Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
