<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/purohit_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Purohit List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Add Purohit</h2>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>/super_admin/add_purohit/" method="post" enctype="multipart/form-data">
            <div class="col-md-12 col-sm-12">
                <div class="admission-form">
                    <div class="row">
                        <div class="col-md-12 col-sm-12"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class=""><strong>Basic Information:</strong></p> </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Temple Name<span class="text-danger">*</span></label>
                                <select name="purohit_temple_id" id="" class="form-control">
                                    <option class="form-control">Select Temple</option>
                                    <?php foreach ($this->atm->get_temple() as $row):?>
                                    <option value="<?= $row->temple_id  ?>" class="form-control"><?= $row->temple_name ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_name" id="name" value="" placeholder="Enter Full Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">NID/BIRTH Number<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_nid" id="NID Number" value="" placeholder="NID Number" required="required" type="number" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Father's Name<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_father_name" id="Father Name" value="" placeholder="Father Name" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_date_of_birth" id="date" value="" placeholder="Birth Date" type="date" autocomplete="off" required="required">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Mobile<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_mobile" id="phone" value="" placeholder="+88 012xxxxxxxx7" required="required" type="phone" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="phone">Division <span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_division" id="Division" value="" placeholder="Division" required="required" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="birth_certi_id">District<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_district" id="birth_certi_id" value="" placeholder="District" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

						

                    </div>
                    <div class="row">


                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Thana<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_thana" id="health_condition" value="" placeholder="Thana" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Union<span class="text-danger">*</span></label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_union" id="health_condition" value="" placeholder="Union" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="health_condition">Village</label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_village" id="health_condition" value="" placeholder="Village" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="present_address">Address <span class="required">*</span></label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="purohit_address" id="present_address" placeholder="Address" required="required"></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="photo">Photo</label>
                                <input class="form-control col-md-12 col-xs-12" name="purohit_image" id="photo" type="file">
                                <div class="text-info" style="font-size: 9px;">Image file format: .jpg, .jpeg, .png or .gif</div>
                                <div class="help-block"></div>
                            </div>
                        </div>
						<div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
							<label for="health_condition">Purohit Username</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?= random_int(100000, 999999); ?>" name="purohit_username"  type="text" readonly="readonly">
                                <div class="help-block"></div>
                            </div>
                        </div>

						<div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="item form-group">
							<label for="health_condition">Purohit Password</label>
                                <input class="form-control col-md-12 col-xs-12"  value="<?= random_int(100000, 999999); ?>" name="purohit_password" type="text" readonly="readonly" >
                                <div class="help-block"></div>
                            </div>
                        </div>
						
                    </div>


                </div>




                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="af-title bg-primary">
                            <strong>Student Address:</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item form-group">
                            <label for="present_address">Present Address <span class="required">*</span></label>
                             <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="st_present_address" id="present_address" placeholder="Present Address" required="required"></textarea>
                             <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item form-group">
                           <label for="permanent_address">Permanent Address <span class="required">*</span></label>
                           <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="st_permanent_address" id="permanent_address" placeholder="Permanent Address" required="required"></textarea>
                           <div class="help-block"></div>
                        </div>
                    </div>
               </div> -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 margin-top">
                        <button type="reset" class="btn btn-raised btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
