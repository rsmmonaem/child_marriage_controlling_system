<?php
$user_name = $this->session->userdata('user_name');
$admin_info = $this->umm->get_user_modification_id('admin_user',$user_name );

?>


<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>
	

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="<?= base_url() ?>super_admin" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="100" alt="logo"></a>
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
                    <a href="<?= base_url() ?>super_admin/religious_institutions" class="waves-effect"><i class="mdi mdi-view-grid"></i><span>Religious Institutions</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span>
                        <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url() ?>super_admin/about_us">About Us</a></li>
                        <li><a href="<?= base_url() ?>super_admin/contact_page">Contact </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/add_institute" class="waves-effect"><i class="fas fa-school"></i><span>Add Institute</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
				<li>
                    <a href="<?= base_url() ?>super_admin/student_list" class="waves-effect"><i class="fas fa-user-graduate"></i><span>Student List</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>

                <li>
                    <a href="<?= base_url() ?>super_admin/non_student_list" class="waves-effect"><i class="far fa-user-circle"></i><span>Non Student List</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/pending_marriage" class="waves-effect"><i class="fa fa-history"></i><span>Pending Marriage</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
				<li>
                    <a href="<?= base_url() ?>super_admin/approved_marriage" class="waves-effect"><i class="fas fa-calendar-check"></i><span>Approved Marriage</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
				<li>
                    <a href="<?= base_url() ?>super_admin/rejected_marriage" class="waves-effect"><i class="fas fa-ban"></i><span>Rejected Marriage</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/guardian_list" class="waves-effect"><i class="fas fa-users"></i><span>Guardian</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                
                <li>
                    <a href="<?= base_url() ?>super_admin/add_objection" class="waves-effect"><i class="fab fa-readme"></i><span>Objections</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/add_law_regulation" class="waves-effect"><i class="fab fa-readme"></i><span>Law and regulation</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> 
                <li>
                    <a href="<?= base_url() ?>super_admin/add_notice" class="waves-effect"><i class="fas fa-receipt"></i><span>Notice Publication</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/add_slider" class="waves-effect"><i class="fas fa-image"></i><span>Slider</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/create_news" class="waves-effect"><i class="fas fa-university"></i><span>News Publication</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/message_list" class="waves-effect"><i class="fas fa-envelope"></i><span>Message List</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/user_list" class="waves-effect"><i class="fas fa-user"></i><span>User List</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>super_admin/edit_super_admin/<?=$user_name?>" class="waves-effect"><i class="nav-icon fas fa-user-cog"></i><span>User Profile</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>


<!-- Left Sidebar End-->

