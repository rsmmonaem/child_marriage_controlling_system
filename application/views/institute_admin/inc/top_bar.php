<!-- Start right Content here -->

<?php
$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$full_name = $this->db->get("admin_user")->row()->full_name;
$user_type = $this->session->userdata('user_type');

$status = $this->session->userdata('status');

if ($user_type !== "institute_admin") {
	$this->session->unset_userdata("user_name");
	$this->session->unset_userdata("user_type");
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("status");
	$this->session->sess_destroy();
	$this->session->set_flashdata('You are Not Super_admin', 'logged_out');
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
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url() ?>uploads/admin.png" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><?= $admin_info->full_name?></h5>

                            </div>
                            <a class="dropdown-item" href="<?= base_url() ?>institute_admin/update_profile"><i class="mdi mdi-account-circle "></i> Profile</a>

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
            </nav>
        </div>
