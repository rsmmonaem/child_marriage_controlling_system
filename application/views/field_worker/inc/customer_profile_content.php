<?php $i = 1;
foreach ($this->urm->getonerow_customer() as $row) : ?>
<?php endforeach; ?>

<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <div class="dropdown">
                            <a href="<?= base_url() ?>field_worker/customer_list/" class="btn btn-warning btn-round ">
                                <i class="fas fa-fast-backward"></i> Back
                            </a>

                        </div>
                    </div>
                    <h4 class="page-title">CUSTOMER PROFILE</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle  mx-auto d-block w-80">
                        <div class="text-center">
                            <h5 class="mt-2 mb-0"><?= $row->customer ?></h5>
                            <small class="text-muted"><?= $row->branch_office ?></small>
                            <p class="text-muted mb-2 p-2"><a href="#">
                                    <img src="<?= base_url() ?>uploads/photos/<?= $row->cm_image ?>" alt="" class=" img-fluid rounded-circle w-60">
                                </a></p>
                            <a class="btn btn-primary btn-block mb-2" data-toggle="modal" data-target=".cp_payment">Payment</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card m-b-30 contact">
                            <div class="card-body">
                                <h6 class="header-title pb-3">Contact</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class=""><i class="fas fa-phone mr-2"></i><?= $row->cont_num ?></li>
                                    <li class="mt-2"><i class="far fa-envelope mt-2 mr-2"></i><?= $row->email ?></li>
                                    <li class="mt-2"><i class="fas fa-map-marker-alt mt-2 mr-2"></i><?= $row->cm_present_add ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h6 class="header-title pb-3">Granter</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class=""><i class="fas fa-user mr-2"></i><?= $row->granter_name ?></li>
                                    <li class="mt-2"><i class="fas fa-phone mt-2"></i> <?= $row->granter_cont ?></li>
                                    <li class="mt-2"><i class="fas fa-map-marker-alt mt-2 mr-2"></i><?= $row->granter_add ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 col-xl-9">
                <div class="card m-b-30">
                    <div class="card-header profile-tabs pb-0">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about" data-toggle="tab" aria-expanded="false"><i class="ti-user mr-2"></i>About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#photo" data-toggle="tab" aria-expanded="false"><i class="ti-image mr-2"></i>Document</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#purchase" data-toggle="tab" aria-expanded="false"><i class="ti-shopping-cart mr-2"></i>Purchase</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="tab-content">
                                <div class="tab-pane active pt-3" id="about">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12  profile-detail">
                                            <div class="">
                                                <h5 class="mb-0 py-2"> <i class="fa fa-graduation-cap text-primary"></i> Personal Details</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-8 align-self-center">
                                            <ul>
                                                <li><b>Name:</b> <?= $row->customer ?></li>
                                                <li><b>Father's Name:</b> <?= $row->father_name ?></li>
                                                <li><b>Mother's Name:</b> <?= $row->mother_name ?></li>
                                                <li><b>Date of Birth:</b> <?= $row->cm_dob ?></li>
                                                <li><b>Present Address Address:</b> <?= $row->cm_present_add ?></li>
                                                <li><b>Permanent Address:</b> <?= $row->cm_permanent_add ?></li>
                                                <li><b>NID No:</b> <?= $row->cm_nid_no ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-4 align-self-center">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="photo">
                                    <p class="pt-3 text-muted"></p>
                                    <div class="row px-3">
                                        <div class="col-lg-3 col-md-6 p-0">
                                            <div class="item-box">
                                                <a class="mfp-image img-fluid" href="<?= base_url() ?>uploads/photos/<?= $row->cm_image ?>" title="Customer Image">
                                                    <img class="item-container img-fluid " src="<?= base_url() ?>uploads/photos/<?= $row->cm_image ?>" alt="7" />
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 p-0">
                                            <div class="item-box">
                                                <a class="mfp-image img-fluid" href="<?= base_url() ?>uploads/photos/<?= $row->cm_nid_front ?>" title="NID Front">
                                                    <img class="mfp-fade img-fluid" src="<?= base_url() ?>uploads/photos/<?= $row->cm_nid_front ?>" alt="2" />
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 p-0 ">
                                            <div class="item-box">
                                                <a class="mfp-image img-fluid" href="<?= base_url() ?>uploads/photos/<?= $row->cm_nid_back ?>" title="NID Back">
                                                    <img class="img-fluid" src="<?= base_url() ?>uploads/photos/<?= $row->cm_nid_back ?>" alt="4" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-3"> <a href="#" class="primary"></a></div>
                                </div>
                                <div class="tab-pane" id="purchase">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <form class="form-horizontal form-material" action="<?= base_url() ?>field_worker/customer_purchase" method="post" enctype="multipart/form-data">

                                                    <input type="hidden" name="cm_id_no" value="<?= $row->cm_id_no ?>">
                                                    <input type="hidden" name="fw_id_no" value="<?= $user_id ?>">

                                                    <div class="form-group">
                                                        <label for="product_dropdown" class="col-sm-6 col-form-label">PRODUCT NAME</label>
                                                        <select class="form-control" name="pro_id" id="product_dropdown" required>
                                                            <option value="" selected="" disabled="" hidden="">Choose here</option>
                                                            <?php foreach ($this->imm->getproduct_stock_exists() as $row2) : ?>
                                                                <option value="<?= $row2->pro_id ?>"><?= $row2->pro_name ?>_<?= $row2->sell_price ?> Tk.</option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group" id="product_dropdown_info">

                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-primary btn-sm text-light px-4 mt-2 float-right">Purchase Order</button>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title pb-3">Purchase List</h5>
                                <!-- table purchase List -->
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped focus-on">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>CP-No</th>
                                                <th>Field Worker</th>
                                                <th>Product</th>
                                                <th>Purchase</th>
                                                <th>Payment</th>
                                                <th>Due</th>
                                                <th>Next Pay</th>
                                                <th>Status</th>
                                                <th>Next level</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($this->urm->getonerow_purchase() as $row) : ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_purchase_view/<?= $row->cp_no ?>" class="btn btn-warning btn-block mb-2"><?= $row->cp_no ?></a></td>
                                                    <?php 
                                                        $this->db->where('fw_id_no', $row->fw_id_no);
                                                        $field_worker_name = $this->db->get("field_worker")->row('field_worker');
                                                    ?>
                                                    <td><?= $field_worker_name ?></td>
                                                    <td><?= $row->pro_name ?></td>
                                                    <td><?= $row->purchase_total ?></td>
                                                    <td><?= $row->down_payment ?></td>
                                                    <td><?= $row->pay_due ?></td>
                                                    <td><?= implode('-', array_reverse(explode('-', $row->next_pay_date))); ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->next_level ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- purchase History -->

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title pb-3">Payment/History</h5>
                                <!-- table purchase List -->
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped focus-on">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>CP-No</th>
                                                <th>Instl. No</th>
                                                <th>Instl. Pay</th>
                                                <th>Product</th>
                                                <th>Purchase</th>
                                                <th>Payment</th>
                                                <th>Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($this->urm->getonerow_cp_history() as $row) : ?>
                                                <tr>
                                                    <td><?= implode('-', array_reverse(explode('-', explode(" ",$row->payment_date)[0]))); ?></td>
                                                    <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_purchase_view/<?= $row->cp_no ?>" class="btn btn-warning btn-block mb-2"><?= $row->cp_no ?></a></td>
                                                    <td><?= $row->instl_no ?></td>
                                                    <td><?= $row->instl_pay ?></td>
                                                    <td><?= $row->pro_name ?></td>
                                                    <td><?= $row->purchase_total ?></td>
                                                    <td><?= $row->down_payment ?></td>
                                                    <td><?= $row->pay_due ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end of purchase history -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!-- container -->
</div>
<!-- Page content Wrapper -->

</div>
<!-- content -->


<?php include "modal/cp_payment.php" ?>