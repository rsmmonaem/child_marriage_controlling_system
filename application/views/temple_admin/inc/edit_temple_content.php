<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>temple_admin/temple_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Temple List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Add Mosque</h2>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('temple_admin/update_temple/'.$data->temple_id)?>" method="post" enctype="multipart/form-data">
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
                                <label for="name">Temple Name <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_name" id="name" value="<?= $data->temple_name ?>" placeholder="Enter Full Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="dob">Founded Date<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_found_date" id="date" value="<?= $data->temple_found_date ?>" placeholder="Birth Date" type="date" autocomplete="off" required="required">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Contact Number<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_contact_number" id="phone" value="<?= $data->temple_contact_number ?>" placeholder="+88 012xxxxxxxx7" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="phone">Division <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_division" id="Division" value="<?= $data->temple_division ?>" placeholder="Division" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="birth_certi_id">District</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_district" id="birth_certi_id" value="<?= $data->temple_district ?>" placeholder="District" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Thana</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_thana" id="health_condition" value="<?= $data->temple_thana ?>" placeholder="Thana" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Union</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_union" id="health_condition" value="<?= $data->temple_union ?>" placeholder="Union" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Village</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_village" id="temple_village" value="<?= $data->temple_village ?>" placeholder="Village" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="present_address">Address <span class="required">*</span></label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="temple_address" id="present_address" placeholder="Address" required="required"><?= $data->temple_address ?></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <!--                        <div class="col-md-6 col-sm-3 col-xs-12">-->
                        <!--                            <div class="item form-group">-->
                        <!--                                <label for="photo">Temple Photo</label>-->
                        <!--                                <input class="form-control col-md-12 col-xs-12" name="kazi_image" id="photo" type="file">-->
                        <!--                                <div class="text-info" style="font-size: 9px;">Image file format: .jpg, .jpeg, .png or .gif</div>-->
                        <!--                                <div class="help-block"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Temple Username</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?= $data->temple_username ?>" name="temple_username"  type="text" readonly="readonly">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Password</label>
                                <input class="form-control col-md-12 col-xs-12"  value="<?= $data->temple_password ?>" name="temple_password" type="text" readonly="readonly" >
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="text-success"><strong>Insert Committee Information</strong></p> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee Name <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_name" id="name" value="<?= $data->temple_com_name ?>" placeholder="Enter Full Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="dob">Committee Date of Birth<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_date_of_birth" id="date" value="<?= $data->temple_com_date_of_birth ?>" placeholder="Birth Date" type="date" autocomplete="off" required="required">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee Contact Number<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_mobile" id="phone" value="<?= $data->temple_com_mobile ?>" placeholder="+88 012xxxxxxxx7" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee Register Number<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_reg_no" id="phone" value="<?= $data->temple_com_reg_no ?>" placeholder="123456" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee NID<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_nid" id="phone" value="<?= $data->temple_com_nid ?>" placeholder="12345677890" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee Father Name<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_fathers_name" id="phone" value="<?= $data->temple_com_fathers_name ?>" placeholder="Father Name" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Committee Mother Name<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_mothers_name" id="phone" value="<?= $data->temple_com_mothers_name ?>" placeholder="MOther Name" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="phone">Division <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_division" id="Division" value="<?= $data->temple_com_division ?>" placeholder="Division" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="birth_certi_id">District</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_district" id="birth_certi_id" value="<?= $data->temple_com_district ?>" placeholder="District" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Thana</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_thana" id="health_condition" value="<?= $data->temple_com_thana ?>" placeholder="Thana" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Union</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_union" id="health_condition" value="<?= $data->temple_com_union ?>" placeholder="Union" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Village</label>
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_village" id="health_condition" value="<?= $data->temple_com_village ?>" placeholder="Village" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="present_address">Address <span class="required">*</span></label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="temple_com_address" id="present_address" placeholder="Address" required="required"><?= $data->temple_com_address ?></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="photo">Committee Photo</label>
                                <input type="hidden" name="old_image" value="<?= $data->temple_com_image ?>">
                                <input class="form-control col-md-12 col-xs-12" name="temple_com_image" id="photo" type="file">
                                <div class="text-info" style="font-size: 9px;">Image file format: .jpg, .jpeg, .png or .gif</div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Existing Photo</label><br>
                                <img style="width:150px; height:150px;"  class="control-label" src="<?= base_url() ?>uploads/temple/<?= $data->temple_com_image ?>" alt="">
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
