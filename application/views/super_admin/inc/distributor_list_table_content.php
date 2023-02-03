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
                            <a href="<?= base_url() ?>super_admin/distributor_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Card View">
                                <i class="fas fa-pencil"></i>Card List
                            </a>
                            <a href="<?= base_url() ?>super_admin/create_distributor/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Create">
                                <i class="fas fa-pencil"></i>Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-b-30">
                <form action="<?= base_url() ?>super_admin/search_distributor" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Search By Mobile No." name="cont_num">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fas fa-search"></i> Search </button>
                            </span>
                </form>

            </div>
        </div>
    </div>
</div>
</div><!--end row-->
<div class="row">

    <!-- Start of fao List -->



    <!-- end of fao_list -->

</div><!--end row-->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">


                <h4 class="mt-0 header-title">Distributors List</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Distributor</th>
                            <th>Phone</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Balance</th>
                            <th>Statemnt</th>
                            <th>Order</th>
                            <th>Stock</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->dmm->getdistributor() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <?php
                                $this->db->where('dis_code', $row->dis_code);
                                $distributor = $this->db->get("distributor")->row("distributor"); ?>
                                <td><?= $distributor ?></td>
                                <td><?= $row->cont_num ?></td>
                                <!-- <td><a href="<?= base_url() ?>super_admin/order_view/<?= $row->order_no ?>" type="button" class="btn btn-info">
                                                <?= $row->order_no ?>
                                            </a></td> -->
                                <td><?= $row->credit ?></td>

                                <td><?= $row->debit ?></td>
                                <td><?php if ($row->credit > $row->debit) {
                                        echo "<b style=color:red>-$row->balance</b>";
                                    } else {
                                        echo "$row->balance";
                                    } ?></td>
                                <td><a target="_blank" href="<?= base_url() ?>super_admin/distributor_statement/<?= $row->dis_code ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Statement">
                                        <i class="fas fa-align-justify"></i>
                                    </a></td>

                                <td><a target="_blank" href="<?= base_url() ?>super_admin/order_list/<?= $row->dis_code ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Order List">
                                        <i class="fas fa-list"></i>
                                    </a></td>
                                <td><a target="_blank" href="<?= base_url() ?>super_admin/distributor_stock_check/<?= $row->dis_code ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock List">
                                        <i class="fas fa-list"></i>
                                    </a></td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>



        </div><!--end row-->
    </div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
</div>