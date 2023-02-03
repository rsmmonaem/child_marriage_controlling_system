<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_company() as $row) : ?>
<?php endforeach; ?>

<div class="modal update_company<?= $row->com_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/update_company/<?= $row->com_id ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="company_code" value="<?= $row->company_code ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Update company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Company Name</label>
                                <input type="text" class="form-control" id="field-1" name="com_name" required="" value="<?= $row->com_name ?>">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Company Code</label>
                                <?php //$zonal_code = mt_rand(100,999); 
                                ?>
                                <input type="text" class="form-control" id="field-2" name="company_code" value="<?= $row->company_code ?>" readonly>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-1" name="address" required="" value="<?= $row->address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="field-1" name="contact_no" required="" value="<?= $row->contact_no ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Change Logo</label>
                                <input type="file" class="form-control" id="field-1" name="com_logo">
                            </div>
                            <input type="hidden" name="com_logo" value="<?= $row->com_logo ?>">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Founded</label>
                                <input type="date" class="form-control" id="field-1" name="founded_date" required="" value="<?= $row->founded_date ?>">
                            </div>
                        </div>





                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>