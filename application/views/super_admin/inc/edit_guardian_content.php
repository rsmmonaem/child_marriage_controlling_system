<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/non_student_list" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Guardian List
                </a>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Update Guardian</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <form action="<?= base_url() ?>super_admin/save_non_student" method="post" enctype="multipart/form-data" >
                <div class="col-md-12 col-sm-12">
                    <div class="admission-form">

                        <div class="row">
                            <div class="col-md-12 col-sm-12"><p class=""><strong>Guardian Information:</strong></p> </div>
                        </div>


                        <div class="row">
<!--                            <div class="col-md-3 col-sm-3 col-xs-12">-->
<!--                                <div class="item form-group">-->
<!--                                    <label for="is_guardian">Is Guardian?<span class="required">*</span></label>-->
<!--                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="non_student_guardian_info_type" id="is_guardian" required="required" onchange="check_guardian_type(this.value);">-->
<!--                                        <option value="">--Select--</option>-->
<!--                                        <option value="father">Father</option>-->
<!--                                        <option value="mother">Mother</option>-->
<!--                                        <option value="other">Other</option>-->
<!--                                        <option value="exist_guardian">Guardian Exist</option>-->
<!--                                    </select>-->
<!--                                    <div class="help-block"></div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_name">Name<span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_name" id="gud_name" value="<?= $data->guardian_info_name ?>" placeholder="Name" required="required" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_phone">Phone<span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_phone" id="gud_phone" value="" placeholder="Phone" required="required" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_relation">Relation With Guardian</label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_rltn" id="relation_with" value="" placeholder="Relation With Guardian" type="text">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_national_id">National ID</label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_nid" id="gud_national_id" value="" placeholder="National ID" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>



                        <div class="row">


                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_profession">Profession</label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_profession" id="gud_profession" value="" placeholder="Profession" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_dob">Birth Date </label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_date_of_birth" id="add_gud_dob" value="" placeholder="Birth Date" type="date" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_religion">Religion </label>
                                    <select class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_religion" id="gud_religion">
                                        <option value="">--Select--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddha">Buddha</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="other_info">Other Info </label>
                                    <input class="form-control col-md-12 col-xs-12" name="non_student_guardian_info_other" id="add_gud_other_info" value="" placeholder="Other Info" type="text">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_present_address">Present Address</label>
                                    <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="non_student_guardian_info_present_address" id="gud_present_address" placeholder="Permanent Address"></textarea>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="gud_permanent_address">Permanent Address</label>
                                    <textarea class="form-control col-md-12 col-xs-12 textarea-4column" name="non_student_guardian_info_permanent_address" id="gud_permanent_address" placeholder="Permanent Address"></textarea>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>




                        <div class="solid-line"><hr></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 margin-top">
                                <button type="submit" class="btn btn-info a-btn btn-hover"> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

