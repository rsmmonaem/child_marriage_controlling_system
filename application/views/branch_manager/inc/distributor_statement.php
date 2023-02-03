<?php include "breadcrumb.php"; ?>
<div class="row d-flex justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body invoice">


                <div class="">
                    <h4 class="mb-0 align-self-center"><img src="<?= base_url() ?>assets/backend/images/logo.png" alt="s"></h4>
                </div>
                <div class="clearfix"> </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="float-left mt-4">
                            <?php
                            $dis_code = $this->uri->segment(3);
                            $this->db->where('dis_code', $dis_code);
                            $distributor = $this->db->get("distributor")->row("distributor");
                            $cont_num = $this->db->get("distributor")->row("cont_num");
                            $address = $this->db->get("distributor")->row("dis_address");

                            ?>
                            <address>
                                <strong><?= $distributor ?></strong> <br>
                                <abbr title="Phone">P: <?= $cont_num ?></abbr> <br> <?= $address ?>
                            </address>
                        </div>
                        <div class="float-right mt-4">


                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Debit</th>
                                        <th>Credit</th>
                                        <th>Balance</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->omm->distributor_statement() as $row) : ?>
                                        <tr>

                                            <td><?= $i++ ?></td>

                                            <td><?= $row->created_date ?></td>

                                            <td><?= $row->description ?></td>
                                            <td><?= $row->debit ?></td>
                                            <td><?= $row->credit ?></td>
                                            <?php if ($row->credit > $row->debit) {
                                                echo "<td style= color:red>-$row->balance</td>";
                                            } else {
                                                echo "<td style= color:green><b>$row->balance</b></td>";
                                            } ?>



                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row" style="border-radius: 0px;">





                </div><!--end row-->

                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                        <div class="text-center text-muted"><small>Design And Developed By TechnoFLicker !</small></div>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="d-print-none float-right">
                            <a href="javascript:window.print()" class="btn btn-info text-light"><i class="fas fa-print"></i></a>
                            <a href="<?= base_url() ?>branch_manager/distributor_list" class="btn btn-warning text-light">RETURN</a>

                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>
</div><!--end row-->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->