<?php

$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$full_name = $this->db->get("admin_user")->row()->full_name;
$user_type = $this->session->userdata('user_type');
$status = $this->session->userdata('status');
if ($user_type != "field_worker") {
    $this->session->unset_userdata();
    $this->session->sess_destroy();
    $this->session->set_flashdata('logout_notification', 'logged_out');
    redirect("login");
}

if ($status == "DISABLE") {
    // $this->session->unset_userdata();

    $this->session->unset_userdata("user_name");
    $this->session->unset_userdata("user_type");
    $this->session->unset_userdata("user_id");
    $this->session->unset_userdata("status");

    $this->session->sess_destroy();
    // $this->session->set_flashdata('logout_notification', 'logged_out');
    // echo "<script>alert('ACCOUNT IS DISABLE!') 
    // window.location.href='login';</script>";
    $this->session->set_flashdata('account_disabled', 'Account Disabled!');
    redirect("login");
}

?>

<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="<?= base_url() ?>field_worker" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="50" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Overview</li>
                <li>
                    <a href="<?= base_url() ?>field_worker" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                        <!-- <span class="badge badge-pill badge-primary float-right">5</span> -->
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>field_worker/bank_details" class="waves-effect"><i class="fas fa-warehouse"></i><span>Bank Deposit</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>field_worker/customer_list" class="waves-effect"><i class="fas fa-child"></i><span>Customer</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <!-- <li>
                    <a href="<?= base_url() ?>field_worker/order_list" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Purchase Order </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> -->
                <li>
                    <a href="<?= base_url() ?>field_worker/stock_check" class="waves-effect waves-light"><i class="mdi mdi-table"></i><span> Stock </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>field_worker/installment_collection" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>Instl. Collection</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>field_worker/product_sales_list" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>Product Sales</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <!-- <li>
                    <a href="<?= base_url() ?>field_worker/purchase_order_list" class="waves-effect"><i class="mdi mdi-table"></i><span>Purchase Order </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> -->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End