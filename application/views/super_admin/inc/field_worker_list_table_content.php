<?php include "breadcrumb.php" ?>
<div class="contact-list">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">

                <div class="card-body">
                    <div class="btn-group">
                        <div>

                            <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                                <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                            </a>
                            <a href="<?= base_url() ?>super_admin/field_worker_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Table View">
                                <i class="fas fa-pencil"></i>Card View
                            </a>
                            <a href="<?= base_url() ?>super_admin/create_field_worker/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Create">
                                <i class="fas fa-pencil"></i>Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->

    <div class="contact-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <form action="<?= base_url() ?>super_admin/search_field_worker" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search By ID" name="user_id">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fas fa-search"></i> Search </button>
                                </span>


                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div><!--end row-->


        <div class="row">

            <!-- Start of table List -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <h4 class="mt-0 header-title">Sales Officer List</h4>


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Password</th>
                                    <th>Order(Tk)</th>
                                    <th>Commission(Tk)</th>
                                    <th>Due(Tk)</th>
                                    <th>Order List</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php $i = 1;
                                foreach ($this->urm->getfield_worker() as $row) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>

                                        <td><?= $row->field_worker ?></td>
                                        <td><?= $row->cont_num ?></td>
                                        <td><?= $row->fw_id_no ?></td>
                                        <!-- <td><a href="<?= base_url() ?>super_admin/order_view/<?= $row->order_no ?>" type="button" class="btn btn-info">
                                                <?= $row->order_no ?>
                                            </a></td> -->

                                        <?php
                                        $this->db->where('user_id', $row->user_id);
                                        $user_name = $this->db->get("admin_user")->row("user_name");
                                        $this->db->where('user_id', $row->user_id);
                                        $pass_word = $this->db->get("admin_user")->row("pass_word");

                                        ?>
                                        <td><?= $user_name ?></td>
                                        <td><?= $pass_word ?></td>
                                        <?php $this->db->where('fw_id_no', $row->fw_id_no);

                                        $this->db->select_sum('sub_total');
                                        $result = $this->db->get('order_list')->row();
                                        $total_order = $result->sub_total; ?>
                                        <td><?= $total_order ?></td>

                                        <?php $this->db->where('fw_id_no', $row->fw_id_no);

                                        $this->db->select_sum('commission');
                                        $result = $this->db->get('order_list')->row();
                                        $total_commission = $result->commission; ?>
                                        <td><?= $total_commission ?></td>
                                        <?php $this->db->where('fw_id_no', $row->fw_id_no);

                                        $this->db->select_sum('due');
                                        $result = $this->db->get('order_list')->row();
                                        $total_due = $result->due; ?>
                                        <td><?= $total_due ?></td>

                                        <td><a target="_blank" href="<?= base_url() ?>super_admin/fw_order_list/<?= $row->fw_id_no ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Order List">
                                                <i class="fas fa-list"></i>
                                            </a></td>
                                        <td><?= $row->status ?></td>
                                        <td><a href="<?= base_url() ?>super_admin/edit_field_worker/<?= $row->user_id ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a></td>
                                        <?php if ($row->status == "DISABLE") { ?>
                                            <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/delete_field_worker/<?= $row->user_id ?>/<?= $row->fw_image ?>/<?= $row->user_name ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                                    <i class="fas fa-times"></i>
                                                </a></td>
                                        <?php } else {
                                            echo "<td>NA</td>";
                                        }  ?>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>



                </div><!--end row-->
            </div>

            <!-- end of table list -->

        </div><!--end row-->


    </div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->