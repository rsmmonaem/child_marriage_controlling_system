<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />


<!---->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">-->


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
                            <th>Action</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($this->pm->get_contact_message_list() as $row):?>
                                <td><?= $i++ ?></td>
                                <td><?= character_limiter( $row->ctm_subject, 20) ?></td>
                                <td><?=$row->ctm_name?></td>
                                <td><?=$row->ctm_email?></td>
                                <td><?= character_limiter( $row->ctm_description, 30) ?></td>
                                <td><?=$row->ctm_date?></td>
                                <td><a onclick="deletedata(<?= $row->ctm_id ?>)" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" id="delete"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
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

</div> <!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<script>
    function deletedata(ctm_id)
    {
        swal({
                title: "Are you Sure?",
                text: "Do you Want To delete",
                type: "warning",
                showCancelButton: true,
                // confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,

            },
            function(){

                $.ajax({
                    url: "<?= base_url('deo_admin/message_delete/'.$row->ctm_id) ?>",
                    type: "get",
                    data: {id:ctm_id},
                    success:function(){
                        swal('Message Deleted Successfully', 'success');
                        window.location.reload();
                        $("#delete"+id).fadeTo("slow", 0.7, function(){
                            $(this).remove();

                        })


                    },
                    error:function(){
                        swal('Something is Wrong', 'error');
                    }
                });

            });
    }
</script>


