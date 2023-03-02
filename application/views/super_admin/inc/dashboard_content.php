<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <div class="dropdown">
                            <a href="<?= base_url() ?>super_admin/system_settings" class="btn btn-secondary btn-round" type="button" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings mr-1"></i>Settings
                            </a>
                        </div>
                    </div>
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
        $this->db->from("order_list");
        $total_order = $this->db->count_all_results();
        $this->db->where('status', "pending");

        $this->db->from("order_list");
        $pending_order = $this->db->count_all_results();

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
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-cube-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Items</h6>
                        <div class="float-right">
                            <a href="<?= base_url() ?>super_admin/outof_stock_check">
                                <p class="mb-0"><b>stock-out:</b> <?= $items_stockout ?></p>
                            </a>
                        </div>
                        <a href="<?= base_url() ?>super_admin/stock_check">
                            <h4 class="mb-0"><?= $items ?></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-buffer"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Orders</h6>
                        <div class="float-right">
                            <a href="<?= base_url() ?>super_admin/order_list_pending">
                                <p class="mb-0"><b>pending:</b> <?= $pending_order ?></p>
                            </a>
                        </div>
                        <a href="<?= base_url() ?>super_admin/order_list">
                            <h4 class="mb-0"><?= $total_order ?></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-tag-text-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Purchase</h6>
                        <div class="float-right">
                            <p class="mb-0"><b>due:</b> <?= $due_purchase ?></p>
                        </div>
                        <h4 class="mb-0"><?= $total_purchase ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-account-multiple-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Users</h6>
                        <div class="float-right">
                            <p class="mb-0"><b>common:</b> <?= $common_user ?></p>
                        </div>
                        <h4 class="mb-0"><?= $total_users ?></h4>
                    </div>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Pending Purchase Approval</h6>

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
                                        <th><strong>Status</strong></th>
                                        <th>Next level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->urm->get_pending_customer_purchase() as $row) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a target="_blank" href="<?= base_url() ?>super_admin/customer_purchase_view/<?= $row->cp_no ?>" class="btn btn-warning btn-block mb-2"><?= $row->cp_no ?></a></td>
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
                                            <td><strong style="color: red;"><?= $row->status ?></strong></td>
                                            <td><?= $row->next_level ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Field Worker Registration Request</h6>

                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped focus-on">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Branch</th>
                                        <th>Contact</th>
                                        <th>Username</th>
                                        <th><strong>Status</strong></th>
                                        <th>Reg. Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->urm->get_disabled_field_worker() as $row) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a target="_blank" href="<?= base_url() ?>super_admin/edit_field_worker/<?= $row->user_id ?>" class="btn btn-warning btn-block mb-2"><?= $row->user_id ?></a></td>
                                            <td><?= $row->field_worker ?></td>
                                            <td><?= $row->branch_office ?></td>
                                            <td><?= $row->cont_num ?></td>
                                            <td><?= $row->user_name ?></td>
                                            <td><strong style="color: red;"><?= $row->status ?></strong></td>
                                            <td><?= implode('-', array_reverse(explode('-', explode(' ', $row->created_date)[0]))); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- end row -->

    </div><!-- container -->
</div> <!-- Page content Wrapper -->

</div> <!-- content -->