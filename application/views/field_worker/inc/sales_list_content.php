<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>field_worker/create_sales/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Create Sales
                </a>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                </a>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Sales List</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Order#</th>
                            <th>Company#</th>
                            <th>Distributor</th>
                            <th>Total</th>
                            <th>Commission</th>
                            <th>Payment</th>
                            <th>sub_total</th>
                            <th>Due</th>
                            <!-- <th>Status</th> -->
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->som->getsales_list_fw() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->order_date ?></td>
                                <td><a href="<?= base_url() ?>field_worker/sales_order_view/<?= $row->order_no ?>" type="button" class="btn btn-info">
                                        <?= $row->order_no ?>
                                    </a></td>
                                <td><?= $row->company_code ?></td>
                                <?php
                                $this->db->where('dis_code', $row->dis_code);
                                $distributor = $this->db->get("distributor")->row("distributor"); ?>
                                <td><?= $distributor ?></td>
                                <td><?= $row->intotal ?></td>
                                <td><?= $row->commission ?></td>
                                <td><?= $row->payment ?> By <?= $row->pay_sys ?></td>

                                <td><?= $row->sub_total ?></td>
                                <td><?= $row->due ?></td>
                                <!-- <td><a href="<?= base_url() ?>field_worker/order_view/<?= $row->order_no ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a></td> -->
                                <!-- <td><?= $row->status ?></td> -->

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->