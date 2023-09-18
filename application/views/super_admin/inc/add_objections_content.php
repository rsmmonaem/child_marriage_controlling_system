<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/objections_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Objections List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    
    <form action="<?= base_url() ?>super_admin/add_objection" method="post" enctype="multipart/form-data">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="">
                        <h5 class="modal-title" id="exampleModalform">New Objections</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">	Complainant's Name
                                    </label>
                                    <input type="text" class="form-control" id="field-1" name="obj_title" required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Objections Subject</label>
                                    <input type="text" class="form-control" id="field-2" name="obj_category" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="field-2" name="obj_email" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Phone Number</label>
                                    <input type="number" class="form-control" id="field-2" name="obj_phone" >
                                </div>
                            </div>
							<style>
.note-editable.card-block {
    height: 300.604px;
}
</style>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Objections Description</label>
                                    <textarea type="text" class="form-control" id="summernote" name="obj_description" required="">

                                </textarea>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-raised btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                    </div>
                </div>
            </div>



        </div>
    </form>
</div>
