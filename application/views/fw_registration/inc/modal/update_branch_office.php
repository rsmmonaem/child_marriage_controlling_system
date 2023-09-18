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
                                <label for="field-1" class="control-label">Zonal Office</label>

                                <select class="form-control" name="zonal_code" required>

                                    <?php foreach ($this->osm->get_zonal() as $row2) : ?>
                                        <option <?php if ($row->zonal_code == $row2->zonal_code) {
                                                    echo "selected";
                                                } ?> value="<?= $row2->zonal_code ?>"><?= $row2->zonal_office ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Branch Office Name</label>
                                <input type="text" class="form-control" id="field-1" name="branch_office" required="" value="<?= $row->branch_office ?>">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Branch Code</label>
                                <?php //$zonal_code = mt_rand(100,999); 
                                ?>
                                <input type="text" class="form-control" id="field-2" name="branch_code" value="<?= $row->branch_code ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Division</label>
                                <input type="text" class="form-control" id="field-1" name="division" required="" value="<?= $row->division ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">District</label>
                                <input type="text" class="form-control" id="field-1" name="district" required="" value="<?= $row->district ?>" disabled>
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
                                <label for="field-1" class="control-label">Email</label>
                                <input type="text" class="form-control" id="field-1" name="email_address" required="" value="<?= $row->email_address ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Founded</label>
                                <input type="date" class="form-control" id="field-1" name="founded_date" required="" value="<?= $row->founded_date ?>">
                            </div>
                        </div>





                    </div>
                    <!-- <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="field-3" class="control-label">Lolation</label>
                                                                                <input type="text" class="form-control" id="field-3" name="location">
                                                                            </div>
                                                                        </div>
                                                                    </div> -->


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>