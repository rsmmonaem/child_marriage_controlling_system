<?php //$i = 1;foreach ($this->asm->get_student_row() as $data) : endforeach; ?>
<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>deo_admin/student_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>student List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
<form action="<?= base_url() ?>deo_admin/update_student" method="post" enctype="multipart/form-data" >
<input  value="<?=$student->st_id?>" name="st_id" type="hidden" autocomplete="off">  
<input  value="<?=$parents_info->parents_info_id?>" name="parents_info_id" type="hidden" autocomplete="off">    
<input  value="<?=$guardian_info->guardian_id  ?>" name="guardian_id " type="hidden" autocomplete="off">              

<div class="col-md-12 col-sm-12">
                <div class="admission-form">
                    <div class="row"> 
                                                
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><hr></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Basic Student Information:</strong></p> </div>
                    </div>                           
                    <div class="row">                  
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name">Name <span >*</span></label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_name?>" name="st_name" id="name" value="" placeholder="Name"   type="text" autocomplete="off">
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
                             <label for="phone">Phone <span >*</span></label>
                             <input class="form-control col-md-12 col-xs-12" value="<?=$student->st_phone?>" name="st_phone" id="phone" value="" placeholder="Phone"   type="text" autocomplete="off">
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
						<!-- <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="health_condition">Institute Name </label>
                               <select class="form-control col-md-12 col-xs-12" name="st_inst_name" id="blood_group"> 
										<option value="">--Select--</option> 
									
								</select>
                               <div class="help-block"></div>
                            </div>
                        </div> -->
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
                               <label for="father_name">Father's Name </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->fathers_name?>" name="fathers_name" id="father_name" value="" placeholder="Father's Name" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_phone">Father's Phone </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->fathers_phone?>" name="fathers_phone" id="father_phone" value="" placeholder="Father's Phone" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div>
						<div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="mother_designation">Father's NID</label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->fathers_nid?>" name="fathers_nid" id="mother_designation" value="" placeholder="Mother's Designation" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_profession">Father's Profession </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->fathers_profession?>" name="fathers_profession" id="father_profession" value="" placeholder="Father's Profession" type="text" autocomplete="off">
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
                               <label for="mother_name">Mother's Name </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->mothers_name?>" name="mothers_name" id="mother_name" value="" placeholder="Mother's Name" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="mother_phone">Mother's Phone </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->mothers_phone?>" name="mothers_phone" id="mother_phone" value="" placeholder="Mother's Phone" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div>
						<div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="mother_designation">Mother's NID</label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->mothers_nid?>" name="mothers_nid" id="mother_designation" value="" placeholder="Mother's Designation" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="mother_profession">Mother's Profession </label>
                               <input class="form-control col-md-12 col-xs-12" value="<?=$parents_info->mothers_profession?>" name="mothers_profession" id="mother_profession" value="" placeholder="Mother Profession" type="text" autocomplete="off">
                               <div class="help-block"></div>
                            </div>
                        </div>
                       
                   </div>
                    
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="af-title"><strong>Guardian Information:</strong></p> </div>
                    </div>  
                    
                       
                    <div class="row"> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="is_guardian">Is Guardian?<span >*</span></label>
                                <select class="form-control col-md-12 col-xs-12 quick-field"  name="guardian_info_type" id="is_guardian">
                                
                                    <option value="Father" <?php if ($guardian_info->guardian_info_type == "Father"){echo "selected";} ?>>Father</option>
                                    <option value="Mother" <?php if ($guardian_info->guardian_info_type == "Mother"){echo "selected";} ?>>Mother</option>
                                    <option value="Other" <?php if ($guardian_info->guardian_info_type == "Other"){echo "selected";} ?>>Other</option>
                                    <option value="exist_guardian" <?php if ($guardian_info->guardian_info_type == "exist_guardian"){echo "selected";} ?>>Guardian Exist</option>
                                </select>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_name">Name<span >*</span></label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_name?>" name="guardian_info_name" id="gud_name" value="" placeholder="Name"   type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_phone">Phone<span >*</span></label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_phone?>" name="guardian_info_phone" id="gud_phone" value="" placeholder="Phone"   type="text" autocomplete="off">
                                <div class="help-block"></div>
                                <input type="hidden" name="guardian_id" id="guardian_id" value="">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_relation">Relation With Guardian </label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_rltn?>" name="guardian_info_rltn" id="relation_with" value="" placeholder="Relation With Guardian" type="text">
                                <div class="help-block"></div>
                            </div>
                        </div> 
                    </div> 
                                   
                                
                    
                    <div class="row">                                        

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_national_id">National ID</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_nid?>" name="guardian_info_nid" id="gud_national_id" value="" placeholder="National ID" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>                        
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_profession">Profession</label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_profession?>" name="guardian_info_profession" id="gud_profession" value="" placeholder="Profession" type="text" autocomplete="off">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="gud_dob">Birth Date </label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_date_of_birth?>" name="guardian_info_date_of_birth" id="add_gud_dob" value="" placeholder="Birth Date" type="date" autocomplete="off">
                                <div class="help-block"></div>
                             </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="gud_religion">Religion </label>
                                <select class="form-control col-md-12 col-xs-12" name="guardian_info_religion" id="gud_religion">
                                   
                                                                            <option value="Islam" <?php if ($guardian_info->guardian_info_religion == "Islam"){echo "selected";} ?>>Islam</option>
                                                                            <option value="Hindu"<?php if ($guardian_info->guardian_info_religion == "Hindu"){echo "selected";} ?>>Hindu</option>
                                                                            <option value="Christian"<?php if ($guardian_info->guardian_info_religion == "Christian"){echo "selected";} ?>>Christian</option>
                                                                            <option value="Buddha"<?php if ($guardian_info->guardian_info_religion == "Buddha"){echo "selected";} ?>>Buddha</option>
                                                                    </select>
                                <div class="help-block"></div>
                             </div>
                        </div>                   
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="other_info">Other Info </label>
                                <input class="form-control col-md-12 col-xs-12" value="<?=$guardian_info->guardian_info_other?>" name="guardian_info_other" id="add_gud_other_info" value="" placeholder="Other Info" type="text">
                                <div class="help-block"></div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">  
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_present_address">Present Address</label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column"  name="guardian_info_present_address" id="gud_present_address" placeholder="Permanent Address"><?=$guardian_info->guardian_info_present_address?></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_permanent_address">Permanent Address</label>
                                <textarea class="form-control col-md-12 col-xs-12 textarea-4column"  name="guardian_info_permanent_address" id="gud_permanent_address" placeholder="Permanent Address"><?=$guardian_info->guardian_info_permanent_address?>"</textarea>
                                <div class="help-block"></div>
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
                                <label for="present_address">Present Address <span  >*</span></label>
                                 <textarea class="form-control col-md-12 col-xs-12 textarea-4column"  name="st_present_address" id="present_address" placeholder="Present Address"  ><?=$student->st_present_address?></textarea>
                                 <div class="help-block"></div>
                            </div>
                        </div>                                    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="item form-group">
                               <label for="permanent_address">Permanent Address <span >*</span></label>
                               <textarea class="form-control col-md-12 col-xs-12 textarea-4column"  name="st_permanent_address" id="permanent_address" placeholder="Permanent Address"  ><?=$student->st_permanent_address?></textarea>
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



