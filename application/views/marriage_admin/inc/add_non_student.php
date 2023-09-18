


<?php include "breadcrumb.php"; ?>



<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>marriage_admin/non_student_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Non Student List
                </a>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h2>Add Non Student</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <form action="<?= base_url() ?>marriage_admin/save_non_student" method="post" enctype="multipart/form-data" >
                <div class="col-md-12 col-sm-12">
                    <div class="admission-form">
                        <div class="row">

                        </div>
                        <input type="hidden"  name="who_add"       value="<?=$admin_info->user_name?>">
                    
                        <div class="row">
                            <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Basic Student Information:</strong></p> </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="name">Name <span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_name" id="name" value="" placeholder="Name" required="required" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="dob">Birth Date <span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_date_of_birth" id="dob" value="" placeholder="Birth Date" type="date" autocomplete="off" required="required">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="gender">Gender <span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_gender" id="gender" required="required">
                                        <option value="">--Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="blood_group">Blood Group</label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_bg_group" id="blood_group">
                                        <option value="">--Select--</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="religion">Religion </label>
                                    <select class="form-control col-md-12 col-xs-12" name="st_religion" id="add_religion">
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
                                    <label for="phone">NID</label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_nid_no" id="nid" value="" placeholder="NID" type="number" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="birth_certi_id">NID / Birth Certificate ID <span class="required">*</span></label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_birth_certificate_id" id="birth_certi_id" value="" placeholder="Birth Certificate ID" type="number" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="health_condition">Health Condition </label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_health_condition" id="health_condition" value="" placeholder="Health Condition" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="photo">Photo</label>
                                    <input class="form-control col-md-12 col-xs-12" name="st_photo" id="photo" type="file">
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
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_name" id="fatherName" value="" placeholder="Father's Name" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherNumber">Family Contact No</label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_phone" id="fatherNumber" value="" placeholder="Family Contact No" type="tel" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherNid">Father's NID / Birth ID</label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_nid" id="fatherNid" value="" placeholder="Father's NID / Birth ID" type="number" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="fatherProf">Father's Profession <span class="required">*</span> </label>
                                    <input class="form-control col-md-12 col-xs-12" name="fathers_profession" id="fatherProf" value="" placeholder="Father's Profession" type="text" autocomplete="off">
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
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_name" id="motherName" value="" placeholder="Mother's Name" type="text" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherNumber">Family Contact No</label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_phone" id="motherNumber" value="" placeholder="Family Contact No" type="tel" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherNid">Mother's NID / Birth Id</label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_nid" id="motherNid" value="" placeholder="Mother's NID / Birth Id" type="number" autocomplete="off">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="item form-group">
                                    <label for="motherProf">Mother's Profession <span class="required">*</span> </label>
                                    <input class="form-control col-md-12 col-xs-12" name="mothers_profession" id="motherProf" value="" placeholder="Mother Profession" type="text" autocomplete="off">
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
                                        <option value="father">Father</option>
                                        <option value="mother">Mother</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="row m-1" id="guardianDetails">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianName">Guardian Name<span class="required">*</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_name" id="guardianName"  placeholder="Name" required="required" type="text" >
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianNumber">Guardian Phone<span class="required">*</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_phone" id="guardianNumber"  placeholder="Phone" required="required" type="tel" autocomplete="off" >
                                        <div class="help-block"></div>
                                        <input type="hidden" name="guardian_id" id="guardian_id" value="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianNid">Guardian National ID</label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_nid" id="guardianNid"  placeholder="Guardian National ID" type="number" autocomplete="off" >
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianProf">Guardian Profession</label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_profession" id="guardianProf"  placeholder="Profession" type="text" autocomplete="off" >
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="item form-group">
                                        <label for="guardianRelation">Relation With Student <span class="text-primary">(optional)</span></label>
                                        <input class="form-control col-md-12 col-xs-12" name="guardian_info_rltn" id="guardianRelation" value="" placeholder="Relation With Student" type="text">
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
                                    <input type="text" name="st_present_address" class="form-control col-md-12 col-xs-12" id="" placeholder="Flat no.: 12, House no.: 526/1/1, Uposhohor Jhikira">
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="permanent_address">Village/Mohalla<span class="required">*</span></label>
                                    <input type="text" class="form-control col-md-12 col-xs-12" name="st_permanent_address" id="" placeholder="Village/Mohalla">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="is_guardian">Purosova / Union<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="st_union_pourosova" required="required" onchange="check_guardian_type(this.value);">
        <option value="">--Select--</option>
        <option value="Ullapara Pourasova">Ullapara Pourasova</option>
        <option value="Ullapara Sadar">Ullapara Sadar</option>
        <option value="Ramkrisnopur">Ramkrisnopur</option>
        <option value="Bangala">Bangala</option>
        <option value="Udhunia">Udhunia</option>
        <option value="Boropangashi">Boropangashi</option>
        <option value="Durganagar">Durganagar</option>
        <option value="Purnimagati">Purnimagati</option>
        <option value="Salanga">Salanga</option>
        <option value="Hatikumrul">Hatikumrul</option>
        <option value="Borohor">Borohor</option>
        <option value="Ponchocroshi">Ponchocroshi</option>
        <option value="Salop">Salop</option>
        <option value="Mohonpur">Mohonpur</option>
        <option value="Koyra">Koyra</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item form-group">
                                    <label for="is_guardian">Ward<span class="required">*</span></label>
                                    <select class="form-control col-md-12 col-xs-12 quick-field" name="st_ward" required="required" onchange="check_guardian_type(this.value);">
                                        <option value="">--Select--</option>
                                        <option value="1">Ward 01</option>
                                        <option value="2">Ward 02</option>
                                        <option value="3">Ward 03</option>
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div>

                        </div>


                        <div class="solid-line"><hr></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 margin-top">
                                <button type="reset" class="btn btn-raised btn-danger" data-dismiss="modal">Reset</button>
                                <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
