<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_branch() as $row) : ?>
<?php endforeach; ?>

<div class="modal update_branch_office<?= $row->br_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/update_branch_office/<?= $row->br_id ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Update Branch Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_office" class="control-label">Branch Office Name</label>
                                <input type="text" class="form-control" id="branch_office" name="branch_office" required="" value="<?= $row->branch_office ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_code" class="control-label">Branch Code</label>
                                <input type="text" class="form-control" id="branch_code" name="branch_code" value="<?= $row->branch_code ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="division" class="control-label">Division</label>
                                <input type="text" class="form-control" id="division" name="division" required="" value="<?= $row->division ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district" class="control-label">District</label>
                                <input type="text" class="form-control" id="district" name="district" required="" value="<?= $row->district ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" class="control-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required="" value="<?= $row->address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no" required="" value="<?= $row->contact_no ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email_address" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" required="" value="<?= $row->email_address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="founded_date" class="control-label">Founded</label>
                                <input type="date" class="form-control" id="founded_date" name="founded_date" required="" value="<?= $row->founded_date ?>">
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