<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_branch() as $row) : ?>
<?php endforeach; ?>

<div class="modal update_pick_point<?= $row->pickpoint_id  ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/update_pick_point/<?= $row->pickpoint_id  ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Update PickPoint Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-7" class="control-label">Branch Office</label>

                                <select class="form-control" name="branch_code" id="field-7" required>

                                    <?php foreach ($this->osm->get_branch() as $row2) : ?>
                                        <option <?php if ($row2->branch_code == $row->branch_code) {
                                                    echo "selected";
                                                } ?> value="<?= $row2->branch_code ?>"><?= $row2->branch_office ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">PickPoint Name</label>
                                <input type="text" class="form-control" id="field-1" name="pickpoint_office" required="" value="<?= $row->pickpoint_office ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">PickPoint Code</label>
                                <?php //$zonal_code = mt_rand(100,999); 
                                ?>
                                <input type="text" class="form-control" id="field-2" name="pickpoint_code" value="<?= $row->pickpoint_code ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-3" name="address" required="" value="<?= $row->address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="field-4" name="contact_no" required="" value="<?= $row->contact_no ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Email</label>
                                <input type="text" class="form-control" id="field-5" name="email_address" required="" value="<?= $row->email_address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Founded</label>
                                <input type="date" class="form-control" id="field-6" name="founded_date" required="" value="<?= $row->founded_date ?>">
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