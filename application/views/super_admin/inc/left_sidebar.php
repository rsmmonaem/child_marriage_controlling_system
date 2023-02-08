<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="<?= base_url() ?>super_admin" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="50" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Overview</li>
                <li>
                    <a href="<?= base_url() ?>super_admin" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                        <!-- <span class="badge badge-pill badge-primary float-right">5</span> -->
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/office_setup" class="waves-effect"><i class="fas fa-warehouse"></i><span>Office Setup</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/bank_details" class="waves-effect"><i class="fas fa-university"></i><span>Banking</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/zonal_manager_list" class="waves-effect"><i class="fas fa-anchor"></i><span>Regional Manager</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/branch_manager_list" class="waves-effect"><i class="fas fa-band-aid"></i><span>Branch Manager</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/distributor_list_table" class="waves-effect waves-light"><i class="mdi mdi-cart"></i> <span> Distributor </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/field_worker_list_table" class="waves-effect"><i class="fas fa-chalkboard-teacher"></i><span>Field Worker</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/customer_list" class="waves-effect"><i class="fas fa-users"></i><span>Customer List</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/supplier_list" class="waves-effect waves-light"><i class="mdi mdi-bullseye"></i> <span> Supplyer </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/inventory_list" class="waves-effect waves-light"><i class="mdi mdi-table"></i><span> Stock </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/order_list" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Purchase Order </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/sales_list" class="waves-effect"><i class="fas fa-chart-bar"></i><span>Sales List </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/profit_fact" class="waves-effect"><i class="fas fa-wallet"></i><span>Profit Fact </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>


                <!-- extra  -->
                <li class="menu-title">Extra</li>
                <li>
                    <a href="<?= base_url() ?>super_admin/system_settings" class="waves-effect waves-light"><i class="fas fa-plus-square"></i><span> Add Category </span> <span class="float-right"></span></a>
                </li>

                <!-- <li class="menu-title">Reporting</li>
                
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Report </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="#"> Purchase Report</a></li>
                        <li><a href="#"> Requisition Report</a></li>
                        <li><a href="#"> Distribution Report</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End