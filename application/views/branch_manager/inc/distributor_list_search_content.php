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

                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-b-30">
                <form action="<?= base_url() ?>branch_manager/search_distributor" method="post" enctype="multipart/form-data">
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
    <!-- start fao list -->

    <?php $i = 1;
    foreach ($this->dmm->search_distributor_result() as $row) : ?>
        <div class="col-md-12 col-xl-4">
            <div class="card text-center">
                <div class="card-body">

                    <div class="card-title mt-2">
                        <h5><?= $row->distributor ?></h5>
                        <p class="m-0">Credit:<?= $row->credit ?>|| Debit: <?= $row->debit ?> || Balance: <?php if ($row->credit > $row->debit) {
                                                                                                            echo "<b style=color:red>-$row->balance</b>";
                                                                                                        } else {
                                                                                                            echo "$row->balance";
                                                                                                        } ?></p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-envelope float-right"></i><?= $row->dis_email ?></li>
                        <li class="list-group-item"><i class="fas fa-phone float-right"></i><?= $row->cont_num ?></li>

                        <li class="list-group-item"><i class="fas fa-home float-right"></i><?= $row->dis_address ?></li>

                    </ul>

                </div>
                <div class="btn-group">

                    <a href="<?= base_url() ?>branch_manager/order_list/<?= $row->dis_code ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Order List">
                        <i class="fas fa-list"></i>
                    </a>

                    <a href="<?= base_url() ?>branch_manager/distributor_statement/<?= $row->dis_code ?>" class="btn btn-primary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Statement">
                        <i class="fas fa-align-justify"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- end fao list -->

</div><!--end row-->
</div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->