<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">


</div>

<div class="card">
    <div class="card-header">
        <h2>Update Contact Page</h2>
    </div>
    <div class="card-body">
        <form action="<?= base_url('deo_admin/update_contact_page');?>" method="post">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Contact Page Title</label>
                                        <input type="hidden" name="con_id" value="<?= $data->con_id ?>">

                                        <input type="text" class="form-control" id="text" name="con_title" value="<?= $data->con_title?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Facebook Link</label>
                                        <input type="text" class="form-control" id="text" name="con_facebook" value="<?= $data->con_facebook?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Instagram Link</label>
                                        <input type="text" class="form-control" id="text" name="con_instagram" value="<?= $data->con_instagram?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Twitter Link</label>
                                        <input type="text" class="form-control" id="text" name="con_twitter" value="<?= $data->con_twitter?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Youtube Link</label>
                                        <input type="text" class="form-control" id="text" name="con_youtube" value="<?= $data->con_youtube?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Google Plus Link</label>
                                        <input type="text" class="form-control" id="text" name="con_google" value="<?= $data->con_google?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Contact Email</label>
                                        <input type="text" class="form-control" id="text" name="con_email" value="<?= $data->con_email?>" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label">Phone Number </label>
                                        <input type="text" class="form-control" id="text" name="con_phone" value="<?= $data->con_phone?>" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Address</label>
                                        <textarea name="con_address" class="form-control" id="" cols="5" rows="5"><?= $data->con_address?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
</div>
</div>
