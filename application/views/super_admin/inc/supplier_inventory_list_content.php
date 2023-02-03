<?php include "breadcrumb.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?php

                $sup_id = $this->uri->segment(3);
                $this->db->where('sup_id', $sup_id);
                $sup_name = $this->db->get("supplier")->row("sup_name");



                ?>
                <h4 class="mt-0 header-title">Inventory List Of <b><?= $sup_name ?></b></h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Inventory#</th>
                            <th>Invoice#</th>
                            <th>Supplier</th>
                            <th>Total</th>
                            <th>Commission</th>
                            <th>Payment</th>
                            <th>sub_total</th>
                            <th>Due</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->supplier_inventory_list() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->invoice_date ?></td>
                                <td><a href="<?= base_url() ?>super_admin/inventory_view/<?= $row->inventory_no ?>" type="button" class="btn btn-primary">
                                        <?= $row->inventory_no ?>
                                    </a></td>
                                <td><?= $row->invoice_no ?></td>
                                <?php
                                $this->db->where('sup_id', $row->sup_id);
                                $sup_name = $this->db->get("supplier")->row("sup_name"); ?>
                                <td><?= $sup_name ?></td>
                                <td><?= $row->intotal ?></td>
                                <td><?= $row->commission ?></td>
                                <td><?= $row->payment ?> By <?= $row->pay_sys ?></td>

                                <td><?= $row->sub_total ?></td>
                                <td><?= $row->due ?></td>
                                <td><a href="<?= base_url() ?>super_admin/inventory_view/<?= $row->inventory_no ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View">
                                        <i class="fas fa-eye"></i>
                                    </a></td>


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