<?php include "breadcrumb.php" ?>
<div class="contact-list">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="btn-group">
                        <div>
                            <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = ucwords(str_replace("_", " ", $page_name)); ?>">
                                <i class="fas fa-book-alt"></i> <?= $page_name = ucwords(str_replace("_", " ", $page_name)); ?>
                            </a>
                            <a href="<?= base_url() ?>field_worker/create_customer/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Create">
                                <i class="fas fa-pencil"></i>Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->

    <div class="contact-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <form action="<?= base_url() ?>field_worker/search_customer" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search By ID" name="user_id">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fas fa-search"></i> Search </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
        </div><!--end row-->

        <div class="row">
            <!-- start fao list -->
            <?php $i = 1;
            foreach ($this->urm->get_customer_by_fieldworker_id() as $row) : ?>
                <div class="col-md-12 col-xl-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="">
                                <a href="#">
                                    <img src="<?= base_url() ?>uploads/photos/<?= $row->cm_image ?>" alt="" class=" img-fluid rounded-circle w-60">
                                </a>
                            </div>
                            <div class="card-title mt-2">
                                <h5><?= $row->customer ?></h5>
                                <p class="m-0">branch Code:<?= $row->branch_code ?></p>
                                <p class="m-0">ID: <?= $row->user_id ?></p>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-envelope float-right"></i><?= $row->email ?></li>
                                <li class="list-group-item"><i class="fas fa-phone float-right"></i><?= $row->cont_num ?></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <a href="<?= base_url() ?>field_worker/customer_profile/<?= $row->user_id ?>" class="btn btn-warning btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile">
                                <i class="fas fa-eye">&nbsp;PROFILE</i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="<?= base_url() ?>field_worker/edit_customer/<?= $row->user_id ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>field_worker/delete_customer/<?= $row->user_id ?>/<?= $row->cm_image ?>/<?= $row->user_name ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end fao list -->
        </div><!--end row-->
    </div>
</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->