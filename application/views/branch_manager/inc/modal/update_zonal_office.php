<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_zonal() as $row) : ?>
<?php endforeach; ?>

<div class="modal update_zonal_office<?= $row->zo_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/update_zonal_office/<?= $row->zo_id ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Update Zonal Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Zonal Office Name</label>
                                <input type="text" class="form-control" id="field-1" name="zonal_office" required="" value="<?= $row->zonal_office ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Zonal Code</label>
                                <?php //$zonal_code = mt_rand(100,999); 
                                ?>
                                <input type="text" class="form-control" id="field-2" name="zonal_code" value="<?= $row->zonal_code ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Division</label>
                                <input type="text" class="form-control" id="field-1" name="division" required="" value="<?= $row->division ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">District</label>
                                <input type="text" class="form-control" id="field-1" name="district" required="" value="<?= $row->district ?>">
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