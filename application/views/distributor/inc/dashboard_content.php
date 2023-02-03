<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <div class="dropdown">
                            <a href="<?= base_url() ?>distributor/system_settings" class="btn btn-secondary btn-round" type="button" aria-haspopup="true" aria-expanded="false">
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
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-cube-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Items</h6>
                        <div class="float-right">
                            <a href="<?= base_url() ?>distributor/outof_stock_check">
                                <p class="mb-0"><b>stock-out:</b> <?= $items_stockout ?></p>
                            </a>
                        </div>
                        <a href="<?= base_url() ?>distributor/stock_check">
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
                        <h6 class="text-uppercase mb-3">Requisition</h6>
                        <div class="float-right">
                            <a href="<?= base_url() ?>distributor/requisition_list_pending">
                                <p class="mb-0"><b>pending:</b> <?= $pending_rq ?></p>
                            </a>
                        </div>
                        <a href="<?= base_url() ?>distributor/requisition_list">
                            <h4 class="mb-0"><?= $total_rq ?></h4>
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

            <div class="col-6">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Pending Requisition</h6>
                        <div class="float-right ml-2">
                            <div class="dropdown">
                                <a class="btn btn-outline-light btn-sm" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-menu"></i>
                                </a>
                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#">Today</a>
                                                        <a class="dropdown-item" href="#">This Week</a>
                                                        <a class="dropdown-item" href="#">This Month</a>
                                                    </div> -->
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
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="text-dark"><?= $row->req_no ?></a>
                                            </td>

                                            <td><?= $row->created_date ?></td>
                                            <td> <?= $row->intotal_price ?>
                                            </td>

                                            <td><a href="<?= base_url() ?>distributor/requisition_view/<?= $row->req_no ?>"><span class="badge badge-boxed  badge-primary">View</span></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- pending PO -->
            <div class="col-6">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Pending PO</h6>
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
                                        <th class="border-top-0">PO#</th>
                                        <th class="border-top-0">Date/Time</th>

                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->po->getpurchase_order_limit() as $row) : ?>
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="text-dark"><?= $row->po_no ?></a>
                                            </td>

                                            <td><?= $row->created_date ?></td>


                                            <td><a href="<?= base_url() ?>distributor/purchase_order_view/<?= $row->po_no ?>"><span class="badge badge-boxed  badge-primary">View</span></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end pending PO -->
        </div><!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->





<!-- <a class="monthly-price"> <span class="change-box-text">billed monthly</span> <span class="change-box"></span></a> -->

<!-- <i class="monthly">$299.99<small>/mo</small></i> -->


<!-- <a class="menu-btn-changer" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/flags/usa.svg" alt="" /> united states</a> -->



<!-- <div class="container">
            <div class="banner-servers-box">
                <div class="counter-placeholder"></div>
                <div class="banner-text-left">
                    <h5>our server is<strong>24% faster</strong></h5>
                    <p>with under 60 seconds worldwide Deploy!</p>
                </div>
                <a class="benchmarks-link" href="#">benchmarks</a>
            </div>

            <div class="row justify-content-left server-tabls-head">
                <div class="col-md-2">storage</div>
                <div class="col-md-2">cpu</div>
                <div class="col-md-2">memory</div>
                <div class="col-md-2">bandwidth</div>
                <div class="col-md-4">price</div>
            </div>

            <div class="server-tabls-body">
                <div class="row justify-content-left server-tabls-row">
                    <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>120 GB </b>SSD</div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>16 CPU</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>512 MB</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>0.50 TB</b><span class="span-info-servers">IPv6</span></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$12</b>/mo</div>
                    <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
                </div>

                <div class="row justify-content-left server-tabls-row best-one">
                    <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>180 GB </b>SSD</div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>32 CPU</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>6 GB</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>3 TB</b><span class="span-info-servers">IPv6</span></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$36</b>/mo</div>
                    <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
                </div>

                <div class="row justify-content-left server-tabls-row">
                    <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>320 GB </b>SSD</div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>64 CPU</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>12 GB</b></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>8 TB</b><span class="span-info-servers">IPv6</span></div>
                    <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$46</b>/mo</div>
                    <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
                </div>
            </div>

            <div class="button-row text-center">
                <a class="btn jango-color-btn" href="#">create new account now</a>
            </div>

        </div> -->