            <?php $user_id = $this->session->userdata('user_id');

            $this->db->where('user_id', $user_id);
            $full_name = $this->db->get("admin_user")->row()->full_name;
            $user_type = $this->session->userdata('user_type');
            if ($user_type != "distributor") {
                $this->session->unset_userdata();
                $this->session->sess_destroy();
                $this->session->set_flashdata('logout_notification', 'logged_out');
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
                        <a href="<?= base_url() ?>distributor" class="logo"><img src="<?= base_url() ?>assets/backend/images/logo.png" height="50" alt="logo"></a>
                    </div>
                </div>


                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Overview</li>


                            <li>
                                <a href="<?= base_url() ?>distributor" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                                    <!-- <span class="badge badge-pill badge-primary float-right">5</span> -->
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url() ?>distributor/bank_details" class="waves-effect"><i class="fas fa-warehouse"></i><span>Bank Deposit</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                            </li>

                            <!-- <li>
                                <a href="<?= base_url() ?>distributor/customer_list" class="waves-effect"><i class="fas fa-child"></i><span>Customer</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li> -->

                            <li>
                                <a href="<?= base_url() ?>distributor/order_list" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Purchase Order </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                            </li>



                            <li>
                                <a href="<?= base_url() ?>distributor/stock_check" class="waves-effect waves-light"><i class="mdi mdi-table"></i><span> Stock </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                            </li>

                            <li>
                                <a href="<?= base_url() ?>distributor/sales_list" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Sales Order </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                            </li>




                            <li>

                                <a href="<?= base_url() ?>distributor/distributor_statement/<?= $user_id ?>" class="waves-effect"><i class="mdi mdi-table"></i><span>Statement </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                            </li>




                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End