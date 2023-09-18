<!-- Start right Content here -->



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
                                <h5>Welcome:<br> <?= $full_name; ?></h5>
                            </div>
                            <a class="dropdown-item" href="<?= base_url() ?>field_worker/update_profile"><i class="mdi mdi-account-circle "></i> Profile</a>


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