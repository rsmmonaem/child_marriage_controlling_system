
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
                                    <h1>Data Not Found</h1>
									<br>
									<br>
									<br>
									<br>

									<a href="add_student"><h3>Add Student</h3></a>
									<a href="add_student"><h3>Add Non Student</h3></a>

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
                                        class="rounded-circle p-2 bg-primary" Height="200" width="200">
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
								<div class="row mb-3">
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
                                        <input type="text" class="form-control" value="<?=$histry2->st_gender?>"  readonly>
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
</div>

</div>



