<?php //$i = 1;foreach ($this->asm->get_student_row() as $data) : endforeach; ?>
<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>institute_admin/student_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>student List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Update Student</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <form action="<?= base_url() ?>institute_admin/update_student" method="post" enctype="multipart/form-data" >
                <input  value="<?=$student->st_id?>" name="st_id" type="hidden" autocomplete="off">
                <input  value="<?=$parents_info->parents_info_id?>" name="parents_info_id" type="hidden" autocomplete="off">
                <input  value="<?=$guardian_info->guardian_id  ?>" name="guardian_id" type="hidden" autocomplete="off">
				<input type="hidden"  name="who_add"       value="<?=$admin_info->user_name?>">
                <div class="col-md-12 col-sm-12">
                    <div class="admission-form">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="name">Name <span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_name" id="name" value="<?=$student->st_name?>" placeholder="Name" required="required" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="dob">Birth Date <span >*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_date_of_birth?>" name="st_date_of_birth" id="dob" value="" placeholder="Birth Date" type="date" autocomplete="off" >
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gender">Gender <span >*</span></label>
                                    <select class="form-control" name="st_gender" id="branch_dropdown" >
                                        <option value="Male" <?php if ($student->st_gender == "Male"){echo "selected";} ?> >Male</option>
                                        <option value="Female" <?php if ($student->st_gender == "Female"){echo "selected";} ?>   >Female</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="blood_group">Blood Group</label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_bg_group" id="blood_group">

                                        <option value="A+"<?php if ($student->st_bg_group == "A+"){echo "selected";} ?>>A+</option>
                                        <option value="A-" <?php if ($student->st_bg_group == "A-"){echo "selected";} ?>>A-</option>
                                        <option value="B+" <?php if ($student->st_bg_group == "B+"){echo "selected";} ?>>B+</option>
                                        <option value="B-" <?php if ($student->st_bg_group == "B-"){echo "selected";} ?>>B-</option>
                                        <option value="O+" <?php if ($student->st_bg_group == "O+"){echo "selected";} ?>>O+</option>
                                        <option value="O-" <?php if ($student->st_bg_group == "O-"){echo "selected";} ?>>O-</option>
                                        <option value="AB+" <?php if ($student->st_bg_group == "AB+"){echo "selected";} ?>>AB+</option>
                                        <option value="AB-" <?php if ($student->st_bg_group == "AB-"){echo "selected";} ?>>AB-</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="religion">Religion </label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_religion" id="add_religion">
                                        <option value="Islam" <?php if ($student->st_bg_group == "Islam"){echo "selected";} ?> >Islam</option>
                                        <option value="Hindu" <?php if ($student->st_bg_group == "Hindu"){echo "selected";} ?> >Hindu</option>
                                        <option value="Christian" <?php if ($student->st_bg_group == "Christian"){echo "selected";} ?> >Christian</option>
                                        <option value="Buddha" <?php if ($student->st_bg_group == "Buddha"){echo "selected";} ?> >Buddha</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="phone">NID</label>
                                    <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_nid_no?>" name="st_nid_no" id="nid" value="" placeholder="NID" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="birth_certi_id">Birth Certificate ID </label>
                                    <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_birth_certificate_id?>" name="st_birth_certificate_id" id="birth_certi_id" value="" placeholder="Birth Certificate ID" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="health_condition">Health Condition </label>
                                    <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_health_condition?>" name="st_health_condition" id="health_condition" value="" placeholder="Health Condition" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="st_class">Student Class<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_class" id="add_religion">
                                        <option value="">--Select--</option>
                                        <option value="1" <?php if ($student->st_class == 1){echo 'selected';}?> >Class 01</option>
                                        <option <?php if ($student->st_class == 2){echo 'selected';}?>  value="2">Class 02</option>
                                        <option <?php if ($student->st_class == 3){echo 'selected';}?>  value="3">Class 03</option>
                                        <option <?php if ($student->st_class == 4){echo 'selected';}?>  value="4">Class 04</option>
                                        <option <?php if ($student->st_class == 5){echo 'selected';}?>  value="5">Class 05</option>
                                        <option <?php if ($student->st_class == 6){echo 'selected';}?>  value="6">Class 06</option>
                                        <option <?php if ($student->st_class == 7){echo 'selected';}?>  value="7">Class 07</option>
                                        <option <?php if ($student->st_class == 8){echo 'selected';}?>  value="8">Class 08</option>
                                        <option <?php if ($student->st_class == 9){echo 'selected';}?>  value="9">Class 09</option>
                                        <option <?php if ($student->st_class == 10){echo 'selected';}?> value="10">Class 10</option>
                                        <option <?php if ($student->st_class == 11){echo 'selected';}?> value="11">Class 11</option>
                                        <option <?php if ($student->st_class == 12){echo 'selected';}?> value="12">Class 12</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="st_class_section">Student Class Section<span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_class_section" id="birth_certi_id"  placeholder="Student Section" type="text" autocomplete="off" value="<?= $student->st_class_section ?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="st_class_roll">Student Class Roll<span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_class_roll" id="birth_certi_id"  placeholder="Student Roll" type="number" autocomplete="off" value="<?= $student->st_class_roll ?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="photo">Photo</label>
                                    <input type="hidden" name="old_st_photo" value="<?= $student->st_photo ?>">
                                    <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_photo?>" name="st_photo" id="photo" type="file">
                                    <div class="text-info" style="font-size: 9px;">Image file format: .jpg, .jpeg, .png or .gif</div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Father Information:</strong></p> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherName">Father's Name <span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_name" id="fatherName"  placeholder="Father's Name" type="text" value="<?=$parents_info->fathers_name?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherNumber">Family Contact No</label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_phone" id="fatherNumber"  placeholder="Family Contact No" type="tel" autocomplete="off" value="<?=$parents_info->fathers_phone?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherNid">Father's NID / Birth ID</label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_nid" id="fatherNid"  placeholder="Father's NID / Birth ID" type="number" autocomplete="off" value="<?=$parents_info->fathers_nid?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherProf">Father's Profession <span class="required">*</span> </label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_profession" id="fatherProf" placeholder="Father's Profession" type="text" autocomplete="off" value="<?=$parents_info->fathers_profession?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Mother Information:</strong></p> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherName">Mother's Name <span class="required">*</span> </label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_name" id="motherName" placeholder="Mother's Name" type="text" autocomplete="off" value="<?=$parents_info->mothers_name?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherNumber">Family Contact No</label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_phone" id="motherNumber" placeholder="Family Contact No" type="tel" autocomplete="off" value="<?=$parents_info->mothers_phone?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherNid">Mother's NID / Birth Id</label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_nid" id="motherNid" placeholder="Mother's NID / Birth Id" type="number" autocomplete="off" value="<?=$parents_info->mothers_nid?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherProf">Mother's Profession <span class="required">*</span> </label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_profession" id="motherProf" placeholder="Mother Profession" type="text" autocomplete="off" value="<?=$parents_info->mothers_profession?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Guardian Information:</strong></p> </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="is_guardian">Guardian<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="guardian_info_type" id="guardian" required="required" onchange="check_guardian_type(this.value);">
                                        <option value="">--Select--</option>
                                        <option value="father" <?php if ($guardian_info->guardian_info_type == 'father' ){echo 'selected';} ?> >Father</option>
                                        <option value="mother" <?php if ($guardian_info->guardian_info_type == 'mother' ){echo 'selected';} ?>>Mother</option>
                                        <option value="other" <?php if ($guardian_info->guardian_info_type == 'other' ){echo 'selected';} ?>>Other</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="row m-1" id="guardianDetails">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianName">Guardian Name<span class="required">*</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_name" id="guardianName" value="<?= $guardian_info->guardian_info_name?>" placeholder="Name" required="required" type="text" aria-valuemax="">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianNumber">Guardian Phone<span class="required">*</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_phone" id="guardianNumber" placeholder="Phone" required="required" type="tel" autocomplete="off" value="<?= $guardian_info->guardian_info_phone?> ">
                                        <div class="help-block"></div>
                                        <input type="hidden" name="guardian_id" id="guardian_id" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianNid">Guardian National ID</label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_nid" id="guardianNid" placeholder="National ID" type="number" autocomplete="off" value="<?= $guardian_info->guardian_info_nid?> ">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianProf">Guardian Profession</label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_profession" id="guardianProf"  placeholder="Profession" type="text" autocomplete="off" value="<?= $guardian_info->guardian_info_profession?> ">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianRelation">Relation With Student <span class="text-primary">(optional)</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_rltn" id="guardianRelation"  placeholder="Relation With Student" type="text" value="<?= $guardian_info->guardian_info_rltn?> ">
                                        <strong>if you choose Other as Guardian</strong>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p class="af-title">
                                    <strong>Student Address:</strong>
                                </p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="permanent_address">House/Building Name & Number<span class="required">*</span></label>
                                    <input type="text" name="st_present_address" class="form-control col-md-12 col-xs-12" id="" placeholder="Flat no.: 12, House no.: 526/1/1, Uposhohor Jhikira" value="<?= $student->st_present_address ?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="permanent_address">Village/Mohalla<span class="required">*</span></label>
                                    <input type="text" class="form-control col-md-12 col-xs-12" name="st_permanent_address" id="" placeholder="Village/Mohalla" value="<?= $student->st_permanent_address ?>">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="is_guardian">Purosova / Union<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="st_union_pourosova" required="required" onchange="check_guardian_type(this.value);">
<option value="">--Select--</option>


        <option value="Ullapara Pourasova" <?php if ($student->st_union_pourosova == "Ullapara Pourasova"){echo 'selected';} ?>>Ullapara Pourasova</option>
        <option value="Ullapara Sadar" <?php if ($student->st_union_pourosova == "Ullapara Sadar"){echo 'selected';} ?>>Ullapara Sadar</option>
        <option value="Ramkrisnopur" <?php if ($student->st_union_pourosova == "Ramkrisnopur"){echo 'selected';} ?>>Ramkrisnopur</option>
        <option value="Bangala" <?php if ($student->st_union_pourosova == "Bangala"){echo 'selected';} ?>>Bangala</option>
        <option value="Udhunia" <?php if ($student->st_union_pourosova == "Udhunia"){echo 'selected';} ?>>Udhunia</option>
        <option value="Boropangashi" <?php if ($student->st_union_pourosova == "Boropangashi"){echo 'selected';} ?>>Boropangashi</option>
        <option value="Durganagar" <?php if ($student->st_union_pourosova == "Durganagar"){echo 'selected';} ?>>Durganagar</option>
        <option value="Purnimagati" <?php if ($student->st_union_pourosova == "Purnimagati"){echo 'selected';} ?>>Purnimagati</option>
        <option value="Salanga" <?php if ($student->st_union_pourosova == "Salanga"){echo 'selected';} ?>>Salanga</option>
        <option value="Hatikumrul" <?php if ($student->st_union_pourosova == "Hatikumrul"){echo 'selected';} ?>>Hatikumrul</option>
        <option value="Borohor" <?php if ($student->st_union_pourosova == "Borohor"){echo 'selected';} ?>>Borohor</option>
        <option value="Ponchocroshi" <?php if ($student->st_union_pourosova == "Ponchocroshi"){echo 'selected';} ?>>Ponchocroshi</option>
        <option value="Salop" <?php if ($student->st_union_pourosova == "Salop"){echo 'selected';} ?>>Salop</option>
        <option value="Mohonpur" <?php if ($student->st_union_pourosova == "Mohonpur"){echo 'selected';} ?>>Mohonpur</option>
        <option value="Koyra" <?php if ($student->st_union_pourosova == "Koyra"){echo 'selected';} ?>>Koyra</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="is_guardian">Ward<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="st_ward" required="required" onchange="check_guardian_type(this.value);">
                                        <option value="">--Select--</option>
                                        <option value="1" <?php if ($student->st_ward == 1 ){echo 'selected';} ?>>Ward 01</option>
                                        <option value="2" <?php if ($student->st_ward == 2 ){echo 'selected';} ?>>Ward 02</option>
                                        <option value="3" <?php if ($student->st_ward == 3 ){echo 'selected';} ?>>Ward 03</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12"><hr></div>
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




<script>
    $(document).ready(function () {
        const guardianDetailsDiv = $('#guardianDetails');

        // Initially hide the guardian details input fields
        guardianDetailsDiv.hide();

        // Function to handle select box change event
        function handleGuardianChange() {
            const guardianOption = $('#guardian').val();

            if (guardianOption === 'father') {
                showGuardianDetails($('#fatherName').val(), $('#fatherNumber').val(), $('#fatherNid').val(), $('#fatherProf').val());
            } else if (guardianOption === 'mother') {
                showGuardianDetails($('#motherName').val(), $('#motherNumber').val(), $('#motherNid').val(), $('#motherProf').val());
            } else if (guardianOption === 'other') {
                guardianDetailsDiv.show();
                $('#guardianName').val('');
                $('#guardianNumber').val('');
                $('#guardianNid').val('');
                $('#guardianProf').val('');
                $('#guardianRelation').val('');
            } else {
                guardianDetailsDiv.hide();
            }
        }

        function showGuardianDetails(name, number, nid, prof) {
            const guardianNameInput = $('#guardianName');
            const guardianNumberInput = $('#guardianNumber');
            const guardianNidInput = $('#guardianNid');
            const guardianProfInput = $('#guardianProf');

            guardianNameInput.val(name);
            guardianNumberInput.val(number);
            guardianNidInput.val(nid);
            guardianProfInput.val(prof);
            guardianDetailsDiv.show();
        }

        // Attach an event listener to the select box
        $('#guardian').on('change', handleGuardianChange);

        // Attach event listeners to the father and mother inputs to handle manual changes
        $('#fatherName,#fatherNumber, #fatherNid, #fatherProf').on('input', function () {
            const guardianOption = $('#guardian').val();
            if (guardianOption === 'father') {
                showGuardianDetails($(this).val(), $('#fatherNumber').val());
                showGuardianDetails($(this).val(), $('#fatherNid').val());
                showGuardianDetails($(this).val(), $('#fatherProf').val());
            }
        });

        $('#motherName, #motherNumber, #motherNid, #motherProf').on('input', function () {
            const guardianOption = $('#guardian').val();
            if (guardianOption === 'mother') {
                showGuardianDetails($(this).val(), $('#motherNumber').val());
                showGuardianDetails($(this).val(), $('#motherNid').val());
                showGuardianDetails($(this).val(), $('#motherProf').val());
            }
        });
    });
</script>
