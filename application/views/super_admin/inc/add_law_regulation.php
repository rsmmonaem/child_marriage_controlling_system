<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>super_admin/law_regulation_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Law/Regulation List
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title" id="exampleModalform">New Law/Regulation</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>super_admin/save_law_regulation/" method="post">
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Law/Regulation No
                                            </label>
                                            <input type="text" class="form-control" id="field-1" name="law_regulation_no" required="">
                                        </div>
                                    </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Policy/Rules</label>
                                        <textarea name="law_regulation_description"  class="form-control" id="summernote" cols="30" rows="10" required="" placeholder="Policy/Rules"></textarea>
                                    </div>
                                </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Law/Regulation Title</label>
                                            <input type="text" class="form-control" id="field-2" name="law_regulation_title" placeholder="Law/Regulation Title">
                                        </div>
                                    </div>
									<style>
.note-editable.card-block {
    height: 300.604px;
}
</style>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-raised btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
