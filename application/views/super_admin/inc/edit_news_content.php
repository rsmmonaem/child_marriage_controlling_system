<?php include "breadcrumb.php" ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>super_admin/news_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>News List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
	
    <form action="<?php echo base_url('super_admin/update_news/'.$data->news_id)?>" method="post" enctype="multipart/form-data">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="">
                    <h5 class="modal-title" id="exampleModalform">Create News</h5>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">News Title</label>
                                <input type="text" class="form-control" id="field-1" name="news_title" value="<?= $data->news_title ?>" required="">
                            </div>
                        </div>





                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">News Image</label>
                                <input type="hidden" class="form-control" value="<?= $data->news_image ?>" id="field-6" name="old_image" >
                                <input type="file" class="form-control" id="field-6" name="news_image" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Existing Image</label><br> 
                                <img style="width:150px; height:150px;"  class="control-label" src="<?= base_url() ?>uploads/news/<?= $data->news_image ?>" alt="">
                            </div>
                        </div>
						<style>
.note-editable.card-block {
    height: 563.604px;
}
</style>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label">News Description</label>
                                <textarea name="news_description" id="summernote" class="form-control" cols="30" rows="10"><?= $data->news_description ?></textarea>
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
