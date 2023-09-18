
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <!-- <div class="float-right">
                        <div class="dropdown">
                            <a href="<?= base_url() ?>child_marriage_controlling_system/super_admin/system_settings" class="btn btn-secondary btn-round" type="button" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings mr-1"></i>Settings
                            </a>
                        </div>
                    </div> -->
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <?php
        $who = $this->session->userdata('user_name');
        $this->db->from("student");
        $this->db->where('who_add', $who);
        $student = $this->db->count_all_results();

        $guardian_id = $this->session->userdata('user_name');
        $this->db->from("guardian_info");
        $this->db->where('who_add_guardian', $guardian_id);
        $guardian = $this->db->count_all_results();




        ?>


        <div class="row">
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-cube-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url() ?>institute_admin/student_list">Students</a></h6>
                        <a href="<?= base_url() ?>institute_admin/student_list">
                            <h4 class="mb-0"><?= $student?></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-buffer"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3"><a href="<?= base_url() ?>institute_admin/guardian_list">Guardians</a></h6>
                        <a href="<?= base_url() ?>institute_admin/guardian_list">
                            <h4 class="mb-0"><?= $guardian ?></h4>
                        </a>
                    </div>
                </div>
            </div>

        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Latest Student</h2>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Institute</th>
                                <th>Photo </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row->st_name ?></td>
                                    <td><?= $row->st_date_of_birth  ?></td>
                                    <td><?= $row->st_inst_name?></td>
                                    <td>

                                        <img style="width: 80px;" src="<?= base_url() ?>uploads/student/<?= $row->st_photo ?>">

                                    </td>

                                    <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>institute_admin/student_delete/<?= $row->st_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a class="btn btn-warning btn-block mt-0" data-toggle="" href="<?= base_url() ?>institute_admin/edit_student/<?= $row->st_id ?>"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div><!-- container -->
</div> <!-- Page content Wrapper -->

</div>
