

<div class="content">
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Religious Institutions Management</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
<?php
    $this->db->from("mosque");
    $mosque = $this->db->count_all("mosque");

    $this->db->from("purohit");
    $purohit = $this->db->count_all("purohit");

    $this->db->from("temple");
    $temple = $this->db->count_all("temple");

    $this->db->from("imam");
    $imam = $this->db->count_all("imam");

    $this->db->from("kazi");
    $kazi = $this->db->count_all("kazi");

?>

            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card mini-stat w-25 mr-3">
                        <div class="mini-stat-icon text-right">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/mosque_list">Mosque</a></h6>
                            <a href="<?= base_url()?>/super_admin/mosque_list" title="Product List">
                                <h4 class="mb-0"><?= $mosque ?></h4>
                            </a>
                        </div>
                    </div>
                    <div class="card mini-stat w-25 mr-3">
                        <div class="mini-stat-icon text-right">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/temple_list">Temple</a></h6>
                            <a href="<?= base_url()?>/super_admin/temple_list" title="Product List">
                                <h4 class="mb-0"><?= $temple ?></h4>
                            </a>
                        </div>
                    </div>
                    <div class="card mini-stat w-25 mr-3">
                        <div class="mini-stat-icon text-right">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/kazi_list">Kazi</a></h6>
                            <a href="<?= base_url()?>/super_admin/kazi_list" title="Product List">
                                <h4 class="mb-0"><?= $kazi ?></h4>
                            </a>
                        </div>
                    </div>
                    <div class="card mini-stat w-25 mr-3">
                        <div class="mini-stat-icon text-right">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/imam_list">Imam</a></h6>
                            <a href="<?= base_url()?>/super_admin/imam_list" title="Product List">
                                <h4 class="mb-0"><?= $imam ?></h4>
                            </a>
                        </div>
                    </div>
                    <div class="card mini-stat w-25 mr-3">
                        <div class="mini-stat-icon text-right">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/purohit_list">Purohit</a></h6>
                            <a href="<?= base_url()?>/super_admin/purohit_list" title="Product List">
                                <h4 class="mb-0"><?= $purohit ?></h4>
                            </a>
                        </div>
                    </div>
                </div>


            </div><!-- end row -->

            <div class="row">
                <!--  mosque details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Mosque Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Mosques</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mosque Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->amm->get_mosque_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->mosque_name, 20) ?></td>
                                        <td><?=$row->mosque_contact_number?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->mosque_id?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->mosque_id?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->mosque_id?>">
                                                                <?= $row->mosque_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/mosque/<?= $row->mosque_com_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>
                                                                    
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">মসজিদের নাম</td>
                                                                        <td><?= $row->mosque_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মসজিদের স্থাপনের তারিখ</td>
                                                                        <td><?= $row->mosque_found_date ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মসজিদের যোগাগোগ নাম্বার </td>
                                                                        <td><?= $row->mosque_contact_number ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->mosque_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->mosque_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->mosque_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->mosque_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->mosque_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->mosque_division ?></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td colspan="2" class="text-center"><h6>মসজিদ কমিটির তথ্য</h6></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">কমিটির নাম</td>
                                                                        <td><?= $row->mosque_com_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">কমিটি স্থাপনের তারিখ</td>
                                                                        <td><?= $row->mosque_com_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">কমিটি রেজিস্ট্রেশন নাম্বার</td>
                                                                        <td><?= $row->mosque_com_reg_no ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">কমিটি এনআইডি </td>
                                                                        <td><?= $row->mosque_com_nid ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">কমিটির যোগাগোগ নাম্বার </td>
                                                                        <td><?= $row->mosque_contact_number ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম </td>
                                                                        <td><?= $row->mosque_com_fathers_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%"> মাতার নাম </td>
                                                                        <td><?= $row->mosque_com_mothers_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->mosque_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->mosque_com_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->mosque_com_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->mosque_com_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->mosque_com_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->mosque_com_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_mosque" type="button" class="btn btn-primary waves-effect waves-light">Add Mosque</a>
                                <a href="<?= base_url();?>super_admin/mosque_list" type="button" class="btn btn-warning waves-effect">Mosque List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  imam details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Imam Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Imam</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Imam Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->aim->get_imam_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->imam_name, 20) ?></td>
                                        <td><?=$row->imam_mobile?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->imam_id ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->imam_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->imam_id ?>">
                                                                <?= $row->imam_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/imam/<?= $row->imam_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">ইমামের নাম</td>
                                                                        <td><?= $row->imam_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জন্ম তারিখ</td>
                                                                        <td><?= $row->imam_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মোবাইল নাম্বার</td>
                                                                        <td><?= $row->imam_mobile ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম	</td>
                                                                        <td><?= $row->imam_father_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->imam_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->imam_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->imam_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->imam_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->imam_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->imam_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_imam" type="button" class="btn btn-primary waves-effect waves-light">Add Imam</a>
                                <a href="<?= base_url();?>super_admin/imam_list" type="button" class="btn btn-warning waves-effect">Imam List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  kazi details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Kazi Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Kazi</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kazi Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->akm->get_kazi_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->kazi_name, 20) ?></td>
                                        <td><?=$row->kazi_mobile?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->kazi_id ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->kazi_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->kazi_id ?>">
                                                                <?= $row->kazi_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/kazi/<?= $row->kazi_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">কাজীর নাম</td> 
                                                                        <td><?= $row->kazi_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জন্ম তারিখ</td>
                                                                        <td><?= $row->kazi_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মোবাইল নাম্বার</td>
                                                                        <td><?= $row->kazi_mobile ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম	</td>
                                                                        <td><?= $row->kazi_father_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->kazi_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->kazi_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->kazi_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->kazi_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->kazi_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->kazi_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_kazi" type="button" class="btn btn-primary waves-effect waves-light">Add Kazi</a>
                                <a href="<?= base_url();?>super_admin/kazi_list" type="button" class="btn btn-warning waves-effect">Kazi List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Muazzin details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Muazzin Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Muazzin</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Muazzin Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->amzm->get_muazzin_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->muazzin_name, 20) ?></td>
                                        <td><?=$row->muazzin_mobile?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->muazzin_id ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->muazzin_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->muazzin_id ?>">
                                                                <?= $row->muazzin_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/muazzin/<?= $row->muazzin_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">মুয়াজ্জিনের নাম</td>
                                                                        <td><?= $row->muazzin_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জন্ম তারিখ</td>
                                                                        <td><?= $row->muazzin_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মোবাইল নাম্বার</td>
                                                                        <td><?= $row->muazzin_mobile ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম	</td>
                                                                        <td><?= $row->muazzin_father_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->muazzin_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->muazzin_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->muazzin_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->muazzin_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->muazzin_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->muazzin_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_muazzin" type="button" class="btn btn-primary waves-effect waves-light">Add Muazzin</a>
                                <a href="<?= base_url();?>super_admin/muazzin_list" type="button" class="btn btn-warning waves-effect">Muazzin List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Khatib Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Khatib</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Khatib Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->amzm->get_khatib_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->khatib_name, 20) ?></td>
                                        <td><?=$row->khatib_mobile?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#mk<?=$row->khatib_id ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="mk<?=$row->khatib_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->khatib_id ?>">
                                                                <?= $row->khatib_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/khatib/<?= $row->khatib_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">খতিবের নাম</td>
                                                                        <td><?= $row->khatib_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জন্ম তারিখ</td>
                                                                        <td><?= $row->khatib_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মোবাইল নাম্বার</td>
                                                                        <td><?= $row->khatib_mobile ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম	</td>
                                                                        <td><?= $row->khatib_father_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->khatib_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->khatib_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->khatib_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->khatib_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->khatib_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->khatib_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_khatib" type="button" class="btn btn-primary waves-effect waves-light">Add Khatib</a>
                                <a href="<?= base_url();?>super_admin/khatib_list" type="button" class="btn btn-warning waves-effect">Khatib List</a>
                            </div>
                        </div>
                    </div>
                </div>



                <!--  Temple details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Temple Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Temple</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Temple Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($this->atm->get_temple_home() as $row):?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= character_limiter( $row->temple_name, 20) ?></td>
                                            <td><?=$row->temple_contact_number?></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#mt<?=$row->temple_id?>"><i class="fa fa-eye"></i></a>

                                                <div class="modal fade" id="mt<?=$row->temple_id?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="<?=$row->temple_id?>">
                                                                    <?= $row->temple_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" class="text-dark">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center mb-2 ">
                                                                    <img src="<?= base_url();?>/uploads/temple/<?= $row->temple_com_image ?>" alt="" class="img-fluid w-50">
                                                                </div>

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered mb-0">
                                                                        <thead>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td width="30%">মন্দিরের নাম</td>
                                                                            <td><?= $row->temple_name ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">মন্দিরের স্থাপনের তারিখ</td>
                                                                            <td><?= $row->temple_found_date ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">মন্দিরের যোগাগোগ নাম্বার </td>
                                                                            <td><?= $row->temple_contact_number ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">ঠিকানা</td>
                                                                            <td><?= $row->temple_address ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">গ্রাম</td>
                                                                            <td><?= $row->temple_village ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">ইউনিয়ন</td>
                                                                            <td><?= $row->temple_union ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">থানা</td>
                                                                            <td><?= $row->temple_thana ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">জেলা</td>
                                                                            <td><?= $row->temple_district ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">বিভাগ</td>
                                                                            <td><?= $row->temple_division ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td colspan="2" class="text-center"><h6>মন্দির কমিটির তথ্য</h6></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">কমিটির নাম</td>
                                                                            <td><?= $row->temple_com_name ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">কমিটি স্থাপনের তারিখ</td>
                                                                            <td><?= $row->temple_com_date_of_birth ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">কমিটি রেজিস্ট্রেশন নাম্বার</td>
                                                                            <td><?= $row->temple_com_reg_no ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">কমিটি এনআইডি </td>
                                                                            <td><?= $row->temple_com_nid ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">কমিটির যোগাগোগ নাম্বার </td>
                                                                            <td><?= $row->temple_contact_number ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">পিতার নাম </td>
                                                                            <td><?= $row->temple_com_fathers_name ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%"> মাতার নাম </td>
                                                                            <td><?= $row->temple_com_mothers_name ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">ঠিকানা</td>
                                                                            <td><?= $row->temple_address ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">গ্রাম</td>
                                                                            <td><?= $row->temple_com_village ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">ইউনিয়ন</td>
                                                                            <td><?= $row->temple_com_union ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">থানা</td>
                                                                            <td><?= $row->temple_com_thana ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">জেলা</td>
                                                                            <td><?= $row->temple_com_district ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="30%">বিভাগ</td>
                                                                            <td><?= $row->temple_com_division ?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_temple" type="button" class="btn btn-primary waves-effect waves-light">Add Temple</a>
                                <a href="<?= base_url();?>super_admin/temple_list" type="button" class="btn btn-warning waves-effect">Temple List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  purohit details-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Purohit Details</h2>
                        </div>
                        <div class="card-body">
                            <h5>Latest Purohit</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Purohit Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach ($this->apm->get_purohit_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->purohit_name, 20) ?></td>
                                        <td><?=$row->purohit_mobile?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->purohit_id ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->purohit_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->purohit_id ?>">
                                                                <?= $row->purohit_name?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2 ">
                                                                <img src="<?= base_url();?>/uploads/purohit/<?= $row->purohit_image ?>" alt="" class="img-fluid w-50">
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">পুরোহিত নাম</td>
                                                                        <td><?= $row->purohit_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জন্ম তারিখ</td>
                                                                        <td><?= $row->purohit_date_of_birth ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মোবাইল নাম্বার</td>
                                                                        <td><?= $row->purohit_mobile ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">পিতার নাম	</td>
                                                                        <td><?= $row->purohit_father_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ঠিকানা</td>
                                                                        <td><?= $row->purohit_address ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">গ্রাম</td>
                                                                        <td><?= $row->purohit_village ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">ইউনিয়ন</td>
                                                                        <td><?= $row->purohit_union ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">থানা</td>
                                                                        <td><?= $row->purohit_thana ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">জেলা</td>
                                                                        <td><?= $row->purohit_district ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিভাগ</td>
                                                                        <td><?= $row->purohit_division ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-items text-center">
                                <a href="<?= base_url();?>super_admin/add_purohit" type="button" class="btn btn-primary waves-effect waves-light">Add Purohit</a>
                                <a href="<?= base_url();?>super_admin/purohit_list" type="button" class="btn btn-warning waves-effect">Purohit List</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>



        </div><!-- container -->
    </div> <!-- Page content Wrapper -->

</div>
