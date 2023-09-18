<div class="content">
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <?php
        $this->db->from("mosque");
        $mosque = $this->db->count_all("mosque");

        $this->db->from("institute");
        $institute = $this->db->count_all("institute");

        $this->db->from("admin_user");
        $admin_user = $this->db->count_all("admin_user");

        $this->db->from("purohit");
        $purohit = $this->db->count_all("purohit");

        $this->db->from("temple");
        $temple = $this->db->count_all("temple");

        $this->db->from("imam");
        $imam = $this->db->count_all("imam");

        $this->db->from("kazi");
        $kazi = $this->db->count_all("kazi");

        $this->db->from("slider");
        $slider = $this->db->count_all("slider");

        $this->db->from("notice");
        $notice = $this->db->count_all("notice");

        $this->db->from("news");
        $news = $this->db->count_all("news");

        $this->db->from("objections");
        $objections = $this->db->count_all("objections");

        $this->db->from("student");
        $student = $this->db->count_all("student");

        $this->db->from("marriage_couple");
        $marriage = $this->db->count_all("marriage_couple");

        $this->db->from("student");
        $this->db->where('student_type','non_student');
        $non_student = $this->db->count_all_results();

        $this->db->from("marriage_couple");
        $this->db->where('marriage_status','pending');
        $pending_marriage = $this->db->count_all_results();

        $this->db->from("marriage_couple");
        $this->db->where('marriage_status','Married');
        $success_marriage = $this->db->count_all_results();

		$this->db->from("marriage_couple");
        $this->db->where('marriage_status','rejected');
        $rejected_marriage = $this->db->count_all_results();

        ?>
        
        <div class="row">
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fab fa-readme"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/objections_list">Objections</a></h6>
                        <a href="<?= base_url()?>super_admin/objections_list" title="Product List">
                            <h4 class="mb-0"><?= $objections ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/news_list">News</a></h6>
                        <a href="<?= base_url()?>super_admin/news_list" title="Product List">
                            <h4 class="mb-0"><?= $news ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/slider_list">Slider</a></h6>
                        <a href="<?= base_url()?>super_admin/slider_list" title="Product List">
                            <h4 class="mb-0"><?= $slider ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/notice_list">Notice</a></h6>
                        <a href="<?= base_url()?>super_admin/notice_list" title="Product List">
                            <h4 class="mb-0"><?= $notice ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="">Students</a></h6>
                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $student ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Non Students</h6>
                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $non_student ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fa fa-history"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Pending Marriage</h6>

                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $pending_marriage ?></h4>
                        </a>
                    </div>
                </div>
            </div>
			

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Approved Marriage</h6>
                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $success_marriage?></h4>
                        </a>
                    </div>
                </div>
            </div>

			
			<div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Rejected Marriage</h6>
                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $rejected_marriage?></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="">All Marriage Applications</a></h6>
                        <a href="" title="Product List">
                            <h4 class="mb-0"><?= $marriage?></h4>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/institute_list">Institute</a></h6>
                        <a href="<?= base_url()?>super_admin/mosque_list" title="Product List">
                            <h4 class="mb-0"><?= $institute ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/mosque_list">Mosque</a></h6>
                        <a href="<?= base_url()?>super_admin/mosque_list" title="Product List">
                            <h4 class="mb-0"><?= $mosque ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>/super_admin/temple_list">Temple</a></h6>
                        <a href="<?= base_url()?>super_admin/temple_list" title="Product List">
                            <h4 class="mb-0"><?= $temple ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/kazi_list">Kazi</a></h6>
                        <a href="<?= base_url()?>super_admin/kazi_list" title="Product List">
                            <h4 class="mb-0"><?= $kazi ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/imam_list">Imam</a></h6>
                        <a href="<?= base_url()?>super_admin/imam_list" title="Product List">
                            <h4 class="mb-0"><?= $imam ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/purohit_list">Purohit</a></h6>
                        <a href="<?= base_url()?>super_admin/purohit_list" title="Product List">
                            <h4 class="mb-0"><?= $purohit ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat-green">
                    <div class="mini-stat-icon-green text-right">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url()?>super_admin/purohit_list">Total User</a></h6>
                        <a href="<?= base_url()?>super_admin/purohit_list" title="Product List">
                            <h4 class="mb-0"><?= $admin_user ?></h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Objections</h2>
                    </div>
                    <div class="card-body">
                        <h5>Latest Objections</h5>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Objection Title</th>
                                    <th>Complainant's Name</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                foreach ($this->aom->get_objection_dash() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->obj_category, 20) ?></td>
                                        <td><?=$row->obj_title?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->obj_id  ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->obj_id  ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->obj_id  ?>">
                                                                <?= $row->obj_title?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর নাম</td>
                                                                        <td><?= $row->obj_title ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর ইমেল</td>
                                                                        <td><?= $row->obj_email ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগের বিষয় </td>
                                                                        <td><?= $row->obj_category ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">অভিযোগকারীর ফোন নাম্বার</td>
                                                                        <td><?= $row->obj_phone ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিস্তারিত</td>
                                                                        <td><?= $row->obj_description ?></td>
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
                            <a href="<?= base_url();?>super_admin/add_objection" type="button" class="btn btn-primary waves-effect waves-light">Create Objection</a>
                            <a href="<?= base_url();?>super_admin/objections_list" type="button" class="btn btn-warning waves-effect">Objection List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact Message</h2>
                    </div>
                    <div class="card-body">
                        <h5>Latest Message</h5>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Message Subject</th>
                                    <th>Sender Name</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                foreach ($this->pm->get_contact_home() as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->ctm_subject, 20) ?></td>
                                        <td><?=$row->ctm_name?></td>
                                        <td>
                                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target="#m<?=$row->ctm_id  ?>"><i class="fa fa-eye"></i></a>

                                            <div class="modal fade" id="m<?=$row->ctm_id  ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?=$row->ctm_id  ?>">
                                                                <?= $row->ctm_subject?></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-dark">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">মেসেজদাতার নাম</td>
                                                                        <td><?= $row->ctm_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজদাতার ইমেল</td>
                                                                        <td><?= $row->ctm_email ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজের বিষয় </td>
                                                                        <td><?= $row->ctm_subject ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিস্তারিত</td>
                                                                        <td><?= $row->ctm_description ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজ প্রদানের তারিখ</td>
                                                                        <td><?= $row->ctm_date ?></td>
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
                            <a href="<?= base_url();?>super_admin/message_list" type="button" class="btn btn-warning waves-effect">Contact Message List</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-data">
                        <h6 class="d-inline-block">Latest Marriages</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="border-top-0 w-60">Groom</th>
                                    <th class="border-top-0">Groom Name</th>
                                    <th class="border-top-0">Date/Time</th>

                                    <th class="border-top-0">Bride</th>
                                    <th class="border-top-0">Bride Name</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($this->assm->marriage_couple_dash() as $row):?>
                                <tr>
                                    <td><img class="rounded-circle p-2 bg-primary" src="<?=base_url()?>uploads/student/<?= $row->groom_photo?>" alt="user" width="100"></td>
                                    <td><?= $row->groom_name?></td>
                                    <td> <?= date('l jS \of F Y h:i:s A', strtotime( $row->marriage_date)); ?></td>

                                    <td><img class="rounded-circle p-2" style="background: rgb(91 107 231);" src="<?=base_url()?>uploads/student/<?= $row->bride_photo?>" alt="" width="100"></td>
                                    <td><?= $row->bride_name?></td>
                                    <td><span class="badge badge-boxed <?php if ($row->marriage_status == 'Married'){
                                        echo "badge-primary";
                                        }elseif ($row->marriage_status == 'rejected'){
                                            echo "badge-danger";
                                        }else{
                                        echo "badge-warning";
                                        }
                                        ?>"><?= $row->marriage_status?></span>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    

    </div><!-- container -->
</div> <!-- Page content Wrapper -->

</div>
