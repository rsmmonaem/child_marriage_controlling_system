<!-- Top Bar End -->
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <h5>Welcome Mr. <?= $admin_info->full_name ?></h5>

                    <h6><?= $admin_info->marriage_type ?></h6>




                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        
        <div class="row">
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="mdi mdi-cube-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Students</h6>
                        <div class="float-right">
                            <a href="super_admin/outof_stock_check" title="StockOut Product List">
                                <p class="mb-0"><b>None-Student:</b> 5</p>
                            </a>
                        </div>
                        <a href="super_admin/stock_check" title="Product List">
                            <h4 class="mb-0">13</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="mdi mdi-buffer"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Objections</h6>
                        <a href="super_admin/customer_list" title="Customer List">
                            <h4 class="mb-0">5</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="mdi mdi-tag-text-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Registration</h6>
                        <div class="float-right">
                            <p class="mb-0"><b>Rejected:</b> 0</p>
                        </div>
                        <a href="super_admin/inventory_list" title="Purchase List">
                            <h4 class="mb-0">10.00</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="mdi mdi-account-multiple-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Users</h6>
                        <div class="float-right">
                            <a href="super_admin/field_worker_list_table" title="Fieldworker List">
                                <p class="mb-0"><b>Field Worker:</b> 7</p>
                            </a>
                        </div>
                        <h4 class="mb-0">14</h4>
                    </div>
                </div>
            </div>

        </div><!-- end row -->

    

    </div><!-- container -->
</div> <!-- Page content Wrapper -->

</div>
