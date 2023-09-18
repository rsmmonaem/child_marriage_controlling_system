<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?php echo base_url('super_admin/objection_list/')?>"  class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Objections List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <form action="<?php echo base_url('super_admin/update_objection/'.$data->obj_id)?>" method="post" enctype="multipart/form-data">
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
                                    <label for="field-1" class="control-label">Objections Title
                                    </label>
                                    <input type="text" class="form-control" id="field-1" name="obj_title" required="" value="<?= $data->obj_title ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Objections Category</label>
                                    <input type="text" class="form-control" id="field-2" name="obj_category" value="<?= $data->obj_category ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label"> Email</label>
                                    <input type="text" class="form-control" id="field-2" name="obj_category" value="<?= $data->obj_email ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label"> Phone Number </label>
                                    <input type="text" class="form-control" id="field-2" name="obj_category" value="<?= $data->obj_phone ?>">
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
                                    <textarea type="text" class="form-control" id="field-3" name="obj_description" required=""><?= $data->obj_description ?></textarea>
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
