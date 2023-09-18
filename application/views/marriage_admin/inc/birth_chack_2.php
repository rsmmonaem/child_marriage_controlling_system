
<?php


?>







<style>
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.me-2 {
    margin-right: .5rem !important;
}
</style>
<br>
<br>
<br>
<br>
<div class="container">


<div class="row">

    <div class="col-md-6">
        <div class="container">
            <div class="main-body">
                <div class="row">

                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?= base_url() ?>uploads/student/<?= $histry1->st_photo ?>" alt="Admin"
                                        class="rounded-circle p-2 bg-primary" Height="200" width="200">
                                    <div class="mt-3">
                                        <h4><?=$histry1->st_name?></h4>
                                        <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> <button
                                            class="btn btn-primary">Follow</button> <button
                                            class="btn btn-outline-primary">Message</button> -->
                                    </div>
                                </div>
                                <hr class="my-4">
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry1->st_name?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry1->st_date_of_birth?>"  readonly>
                                    </div>
                                </div>
								<div class="row mb-3">
									<?php

									//date in mm/dd/yyyy format; or it can be in other formats as well
									$birthDate = $histry1->st_date_of_birth;
									//explode the date to get month, day and year
									$birthDate = explode("-", $birthDate);
									//get age from date or birthdate
									$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
									  ? ((date("Y") - $birthDate[0]) - 0)
									  : (date("Y") - $birthDate[0]));

								  ?>


                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$age?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nid No</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry1->st_nid_no?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender	</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input id="input1" type="text" class="form-control" value="<?=$histry1->st_gender?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">birth Certificate No</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry1->st_birth_certificate_id?>"  readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?= base_url() ?>uploads/student/<?= $histry2->st_photo ?>" alt="Admin"
                                        class="rounded-circle p-2 bg-primary" width="200" height="200">
                                    <div class="mt-3">
                                        <h4><?=$histry2->st_name?></h4>
                                        <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> <button
                                            class="btn btn-primary">Follow</button> <button
                                            class="btn btn-outline-primary">Message</button> -->
                                    </div>
                                </div>
                                <hr class="my-4">
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry2->st_name?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry2->st_date_of_birth?>"  readonly>
                                    </div>
                                </div>
								<?php

									//date in mm/dd/yyyy format; or it can be in other formats as well
									$birthDate = $histry2->st_date_of_birth;
									//explode the date to get month, day and year
									$birthDate = explode("-", $birthDate);
									//get age from date or birthdate
									$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
									  ? ((date("Y") - $birthDate[0]) - 0)
									  : (date("Y") - $birthDate[0]));

								  ?>
								<div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$age?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nid No</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry2->st_nid_no?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender	</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input id="input2" type="text" class="form-control" value="<?=$histry2->st_gender?>"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">birth Certificate No</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?=$histry2->st_birth_certificate_id?>"  readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<form action="<?= base_url() ?>marriage_admin/save_marriage/" method="post" enctype="multipart/form-data">
	<input type="hidden" name="groom_name" value="<?=$histry1->st_name?>">
	<input type="hidden" name="groom_date_of_birth" value="<?=$histry1->st_date_of_birth?>">
	<input type="hidden" name="groom_gender" value="<?=$histry1->st_gender?>">
	<input type="hidden" name="groom_bg_group" value="<?=$histry1->st_bg_group?>">
	<input type="hidden" name="groom_religion" value="<?=$histry1->st_religion?>">
	<input type="hidden" name="groom_nid_no" value="<?=$histry1->st_nid_no?>">
	<input type="hidden" name="groom_birth_certificate_id" value="<?=$histry1->st_birth_certificate_id?>">
	<input type="hidden" name="groom_health_condition" value="<?=$histry1->st_health_condition?>">
	<input type="hidden" name="groom_photo" value="<?=$histry1->st_photo?>">
	<input type="hidden" name="groom_inst_name" value="<?=$histry1->st_inst_name?>">
	<br>
	<br>
	<input type="hidden" name="bride_name" value="<?=$histry2->st_name?>">
	<input type="hidden" name="bride_date_of_birth" value="<?=$histry2->st_date_of_birth?>">
	<input type="hidden" name="bride_gender" value="<?=$histry2->st_gender?>">
	<input type="hidden" name="bride_bg_group" value="<?=$histry2->st_bg_group?>">
	<input type="hidden" name="bride_religion" value="<?=$histry2->st_religion?>">
	<input type="hidden" name="bride_nid_no" value="<?=$histry2->st_nid_no?>">
	<input type="hidden" name="bride_birth_certificate_id" value="<?=$histry2->st_birth_certificate_id?>">
	<input type="hidden" name="bride_health_condition" value="<?=$histry2->st_health_condition?>">
	<input type="hidden" name="bride_photo" value="<?=$histry2->st_photo?>">
	<input type="hidden" name="bride_inst_name" value="<?=$histry2->st_inst_name?>">

	<input type="hidden" name="medium_user" value="<?=$user_name?>">
	<input type="hidden" name="medium_full_name" value="<?=$admin_info->full_name ?>">




		<div class="row">
							<div class="col-md-12 col-sm-12 margin-top">
							<button type="submit"  id="submitBtn" class=" hidden btn btn-info a-btn btn-hover"> Submit</button>
		</div>
</form>
</div>

</div>





<script>
    // Get the values of the gender input fields
    var gender1 = document.getElementById('input1').value;
    var gender2 = document.getElementById('input2').value;

    // Compare the gender values and show/hide the submit button accordingly
    var submitButton = document.getElementById('submitBtn');
    if (gender1 === gender2) {
        alert("The genders are the same! The genders Will Not same! You will redirect after 2 second");
        submitButton.classList.add('hidden');
        // Redirect after 2 seconds
        setTimeout(function() {
            window.location.href = "<?= base_url() ?>marriage_admin/birth"; // Replace with your desired URL
        }, 2000); // 2000 milliseconds = 2 seconds
    } else {
        submitButton.classList.remove('hidden');
    }


</script>

<style>
    .hidden {
        display: none;
    }
</style>
