<div class="left side-menu" style="background: #d6ebd6";>
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>
	

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="<?= base_url() ?>Imam_admin" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="100" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Overview</li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                        <!-- <span class="badge badge-pill badge-primary float-right">5</span> -->
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_institute" class="waves-effect"><i class="fas fa-school"></i><span>Add Institute</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
				<li>
                    <a href="<?= base_url() ?>Imam_admin/add_student" class="waves-effect"><i class="fas fa-user-graduate"></i><span>Add student</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>

                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_non_student" class="waves-effect"><i class="fas fa-quidditch"></i><span>Add Non-Student</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>

                <li>
                    <a href="<?= base_url() ?>Imam_admin/guardian_list" class="waves-effect"><i class="fas fa-users"></i><span>Guardian</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_mosque" class="waves-effect"><i class="fas fa-university"></i><span>Mosque</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_temple" class="waves-effect"><i class="fas fa-university"></i><span>Temple</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> 
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_kazi" class="waves-effect"><i class="fas fa-user-tie"></i><span>Kazi</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_imam" class="waves-effect"><i class="fas fa-user-tie"></i><span>Imam</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_purohit" class="waves-effect"><i class="fas fa-user-tie"></i><span>Purohit</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/8" class="waves-effect"><i class="fab fa-readme"></i><span>Latest inquiry</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> 
                <li>
                    <a href="<?= base_url() ?>Imam_admin/9" class="waves-effect"><i class="fab fa-readme"></i><span>Objections</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/10" class="waves-effect"><i class="fab fa-readme"></i><span>Law and regulation</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li> 
                <li>
                    <a href="<?= base_url() ?>Imam_admin/add_notice" class="waves-effect"><i class="fas fa-receipt"></i><span>Notice Publication</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>                
                <li>
                    <a href="<?= base_url() ?>Imam_admin/create_news" class="waves-effect"><i class="fas fa-university"></i><span>News Publication</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Imam_admin/13" class="waves-effect"><i class="fas fa-university"></i><span>User Management</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>" class="waves-effect"><i class="fas fa-university"></i><span>Profile</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>


<!-- Left Sidebar End-->


<style>
	.mini-stat-icon.text-right {
    background-color: green;
}

.mini-stat .mini-stat-icon i{
    background: white;
	color: green;
}
a.bg-primary:hover, a.bg-primary:focus, .btn-primary {
    background-color: green !important;
    border: 1px solid white !important;
}

.btn:not(:disabled):not(.disabled) {
    background: green;
}

.af-title {
    background-color: #008000;
    color: white;
}

#sidebar-menu > ul > li > a {
	color: #000000;
}

.text-center {
	background: #00800029;
}
#sidebar-menu {
    background: #d6ebd6;
}

#sidebar-menu > ul > li > a.active {
    color: #28a745;
    background-color: #ffffff;
}
</style>
