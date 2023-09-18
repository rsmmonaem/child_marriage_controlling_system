<?php
$user_name = $this->session->userdata('user_name');	
$admin_info = $this->umm->get_user_modification_id('admin_user',$user_name );
$admin_info = $this->umm->get_user_modification_id('admin_user',$user_name );

$us=$admin_info->marriage_type;
//$this->db->where('details_type');
$user_data = $this->db->get($us);
$result =  $user_data->row();
?>


<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>


    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="<?= base_url() ?>marriage_admin" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="100" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Overview</li>
                <li>
                    <a href="<?= base_url() ?>marriage_admin" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                        <!-- <span class="badge badge-pill badge-primary float-right">5</span> -->
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>marriage_admin/add_student" class="waves-effect"><i class="fas fa-user-tie"></i><span>Add Student</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>marriage_admin/add_non_student" class="waves-effect"><i class="fas fa-user-tie"></i><span>Add Non Student</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>

				<li>
                    <a href="<?= base_url() ?>marriage_admin/birth" class="waves-effect"><i class="fas fa-user-tie"></i><span>Marriage Registration  </span> <span class="float-right"></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>marriage_admin/marriage_list" class="waves-effect"><i class="fas fa-user-tie"></i><span> All Marriage list</span> <span class="float-right"></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>marriage_admin/edit_profile" class="waves-effect"><i class="fas fa-university"></i><span>Profile</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>


<!-- Left Sidebar End-->