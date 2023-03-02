<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <?php
        //$this->db->where('user_name',$user_id);
        //$this->db->where('status','pending');

        $this->db->from("product_name");
        $items = $this->db->count_all_results();
        $this->db->where('instock', 0);

        $this->db->from("product_name");
        $items_stockout = $this->db->count_all_results();
        $this->db->from("submit_requisition");
        $total_rq = $this->db->count_all_results();
        $this->db->where('status', "pending");

        $this->db->from("submit_requisition");
        $pending_rq = $this->db->count_all_results();

        $this->db->select_sum('sub_total');
        $result = $this->db->get('inventory_list')->row();
        $total_purchase = $result->sub_total;

        $this->db->select_sum('due');
        $due_result = $this->db->get('inventory_list')->row();
        $due_purchase = $due_result->due;

        $this->db->from("admin_user");
        $total_users = $this->db->count_all_results();

        $this->db->from("common_user");
        $common_user = $this->db->count_all_results();

        ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Pending Requisition</h6>
                        <div class="float-right ml-2">
                            <div class="dropdown">
                                <a class="btn btn-outline-light btn-sm" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-menu"></i>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0 w-60">Serial</th>
                                        <th class="border-top-0">RQ#</th>
                                        <th class="border-top-0">Date/Time</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->rm->requisition_limit_admin() as $row) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a href="javascript:void(0);" class="text-dark"><?= $row->req_no ?></a></td>
                                            <td><?= $row->created_date ?></td>
                                            <td> <?= $row->intotal_price ?></td>
                                            <td><a href="<?= base_url() ?>super_admin/requisition_view/<?= $row->req_no ?>"><span class="badge badge-boxed  badge-primary">View</span></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pending PO -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="heading">
                                <h4 class="mt-0 header-title">Installment Collection <span class="badge badge-secondary">Not Completed</span></h4>
                            </div>
                        </div>
                        <?php
                        $num_rows = $this->urm->get_installment_collection_by_fieldworker();
                        if ($num_rows != "NO_RECORD_FOUND") {
                        ?>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th><strong>Date</strong></th>
                                        <th>Purchase No</th>
                                        <th>Product</th>
                                        <th>Purchase</th>
                                        <th>Payment</th>
                                        <th><strong>Due</strong></th>
                                        <th>Pay Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($this->urm->get_installment_collection_by_fieldworker() as $row) : ?>
                                        <tr>
                                            <td><strong><?= implode("-", array_reverse(explode("-", $row->next_pay_date))); ?></strong></td>
                                            <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_profile/<?= $row->cm_id_no ?>" type="button" class="btn btn-secondary">
                                                    #<?= $row->cp_no ?>
                                                </a></td>
                                            <td><?= $row->pro_name ?></td>
                                            <td><?= $row->purchase_total ?></td>
                                            <td><?= $row->down_payment ?></td>
                                            <td><strong><?= $row->pay_due ?></strong></td>
                                            <td><?= $row->pay_status ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "<div class='text-center'><h5 class='mt-4'><strong>No Collection Data Found For You</strong></h5></div>";
                        }
                        ?>
                    </div>
                </div>
            </div><!-- end pending PO -->
        </div><!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
</div> <!-- content -->