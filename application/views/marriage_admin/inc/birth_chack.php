<?php include "breadcrumb.php"; ?>
<div class="page-content-wrapper">
<style>
	  .card-title {
    margin-bottom: 0.75rem;
    font-size: 24px;
    text-align: center;
}
</style>
    <div class="container-fluid">

        <div class="row">
			
            <div class="col-md-12">
			<div class="card">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Marriage Registration First Step</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bs-stepper linear">
                                <div class="bs-stepper-content">

                                    <form action="<?= base_url() ?>marriage_admin/birth_chack" method="post"
                                        enctype="multipart/form-data">
                                        <div id="logins-part" class="content active dstepper-block col-md-12"
                                            role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <label for="name">Groom <span class="text-danger">*</span></label>
                                                    <input type="number" name="groom_birth_id" class="form-control"
                                                        id="input1" placeholder="Enter NID/Birth Number" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name">Bride <span class="text-danger">*</span></label>
                                                    <input type="number" name="bride_birth_id" class="form-control"
                                                        id="input2" placeholder="Enter NID/Birth Number" required="">
                                                </div>
                                                <p id="error-message"
                                                    style="color: red; margin-left: 16px; display: none;"> NID Number
                                                    Will Not Same</p>
                                            </div>
                                            <br>

                                            <button type="submit" id="submit-button"
                                                class="btn btn-primary">Next</button>
                                        </div>
                                    </form>
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
<script>
// Get references to the input fields, error message, and submit button
const input1 = document.getElementById('input1');
const input2 = document.getElementById('input2');


const errorMessage = document.getElementById('error-message');
const submitButton = document.getElementById('submit-button');


// Add an event listener to both input fields
input1.addEventListener('input', checkValues);
input2.addEventListener('input', checkValues);


function checkValues() {
    // Get the values from the input fields
    const value1 = Number(input1.value);
    const value2 = Number(input2.value);

    // Display the error message if the values are the same
    if (value1 === value2) {
        errorMessage.style.display = 'block';
        submitButton.style.display = 'none';
    } else {
        errorMessage.style.display = 'none';
        submitButton.style.display = 'block';
    }
}



</script>
