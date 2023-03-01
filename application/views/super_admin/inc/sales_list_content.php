<?php include "breadcrumb.php"; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Product Sales List</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Total Qnt</th>
                            <th>In-Stock</th>
                            <th><strong>Sell Qnt</strong></th>
                            <!-- <th>Total Buy</th>
                            <th>Total Sell</th>
                            <th>Profit</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->get_product_with_sales() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->total_stock ?></td>
                                <td><?= $row->instock ?></td>
                                <td><strong><?= $sell_qnt = $row->total_stock - $row->instock ?></strong></td>

                                <!-- <td><?php // $buy = $sell_qnt * $row->latest_price ?> Tk.</td> -->

                                <!-- <td><?php // $sell = $sell_qnt * $row->sell_price ?> Tk.</td> -->
                                <!-- <td><?php // $profit = $sell - $buy ?> Tk.</td> -->
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