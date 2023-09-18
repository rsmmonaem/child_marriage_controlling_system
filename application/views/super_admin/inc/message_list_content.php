
<div class="card m-b-30">
    <h2>Contact Message List</h2>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Contact Message</h2>
            </div>
            <div class="card-body">
                <h5>Latest Message</h5>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Message Subject</th>
                            <th>Sender Name</th>
                            <th>Email</th>
                            <th>Message Description</th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($this->pm->get_contact_message_list() as $row):?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= character_limiter( $row->ctm_subject, 20) ?></td>
                                <td><?=$row->ctm_name?></td>
                                <td><?=$row->ctm_email?></td>
                                <td><?= character_limiter( $row->ctm_description, 30) ?></td>
                                <td><?=$row->ctm_date?></td>
                                <td>
                                    <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->ctm_id  ?>"><i class="fa fa-eye"></i></a>

                                    <div class="modal fade" id="m<?=$row->ctm_id  ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="<?=$row->ctm_id  ?>">
                                                        <?= $row->ctm_subject?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" class="text-dark">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <thead>

                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td width="30%">মেসেজদাতার নাম</td>
                                                                <td><?= $row->ctm_name ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">মেসেজদাতার ইমেল</td>
                                                                <td><?= $row->ctm_email ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">মেসেজের বিষয় </td>
                                                                <td><?= $row->ctm_subject ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">বিস্তারিত</td>
                                                                <td><?= $row->ctm_description ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">মেসেজ প্রদানের তারিখ</td>
                                                                <td><?= $row->ctm_date ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
