<!-- Start right Content here -->

<?php $user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$full_name = $this->db->get("admin_user")->row()->full_name;
$user_type = $this->session->userdata('user_type');
if ($user_type != "zonal_manager") {
    $this->session->unset_userdata();
    $this->session->sess_destroy();
    $this->session->set_flashdata('logout_notification', 'logged_out');
    redirect("login");
}


?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <?php
                    $this->db->where('status', 'pending');
                    $this->db->from("order_list");
                    $pending_order = $this->db->count_all_results();
                    ?>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bag noti-icon"></i>
                            <span class="badge badge-danger noti-icon-badge"><?= $pending_order ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right"><?= $pending_order ?></span>Orders</h5>
                            </div>





                            <!-- item-->
                            <?php $i = 1;
                            foreach ($this->omm->getorder_list() as $row) : ?>
                                <a href="<?= base_url() ?>zonal_manager/order_view/<?= $row->order_no ?>" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Purchase Order:</b><small class=""><?= $row->order_no ?></small></p>
                                </a>
                            <?php endforeach; ?>

                            <div class="dropdown-divider"></div>
                            <!-- All-->
                            <a href="<?= base_url() ?>zonal_manager/order_list/" class="dropdown-item notify-item">
                                View All
                            </a>
                        </div>
                    </li>

                    <?php
                    //$this->db->where('user_name',$user_id);
                    $this->db->where('status', 'pending');

                    $this->db->from("submit_requisition");
                    $pending_requisition = $this->db->count_all_results();
                    ?>



                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url() ?>uploads/admin.png" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div>
                            <a class="dropdown-item" href="<?= base_url() ?>zonal_manager/update_profile"><i class="mdi mdi-account-circle "></i> Profile</a>



                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?= base_url() ?>login/logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
                        </div>
                    </li>
                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- Top Bar End -->