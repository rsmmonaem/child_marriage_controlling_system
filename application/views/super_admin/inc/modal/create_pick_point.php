<?php $page_name = $this->uri->segment(2); ?>

<div class="modal create_pick_point" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/create_pick_point/<?= $page_name ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">New PickPoint Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_code" class="control-label">Branch Office</label>
                                <select class="form-control" name="branch_code" id="branch_code" required>
                                    <?php foreach ($this->osm->get_branch() as $row) : ?>
                                        <option value="<?= $row->branch_code ?>"><?= $row->branch_office ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pickpoint_office" class="control-label">PickPoint Office Name</label>
                                <input type="text" class="form-control" id="pickpoint_office" name="pickpoint_office" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pickpoint_code" class="control-label">PickPoint Code</label>
                                <?php $branch_code = mt_rand(100, 999); ?>
                                <input type="text" class="form-control" id="pickpoint_code" name="pickpoint_code" value="PP-<?= $branch_code ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" class="control-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email_address" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="founded_date" class="control-label">Founded</label>
                                <input type="date" class="form-control" id="founded_date" name="founded_date" required="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>