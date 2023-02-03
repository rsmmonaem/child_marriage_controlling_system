<?php include "breadcrumb.php"; ?>

<?php

$start_date = $this->input->post('start_date');
$end_date = $this->input->post('end_date');
$this->db->order_by("bd_id", "DESC");
$this->db->where('created_date >=', $start_date);
$this->db->where('created_date <=', $end_date);

$query = $this->db->get("bank_deposit")->result();
//$query->result();
$this->db->order_by("bd_id", "DESC");
$this->db->where('created_date >=', $start_date);
$this->db->where('created_date <=', $end_date);
$sum = $this->db->select_sum('deposit_amount', 'total_deposit');
$sum = $this->db->get('bank_deposit');
$result = $sum->result();

$total_deposit = $result[0]->total_deposit;


?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>



                <a href="<?= base_url() ?>super_admin/bank_details/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Bank Details">
                    <i class="fas fa-pencil"></i>Bank Details
                </a>

                <a href="<?= base_url() ?>super_admin/bank_deposit_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Branch List">
                    <i class="fas fa-pencil"></i>Deposit List
                </a>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <form action="<?= base_url() ?>super_admin/search_bank_deposit_list" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="input-group">

                        <input type="date" class="form-control" placeholder="Search By ID" name="start_date">
                        <input type="date" class="form-control" placeholder="Search By ID" name="end_date">
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
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title"><b style="color:green">Bank Deposit From: <?= $start_date ?> To <?= $start_date ?> In-Total:<?= $total_deposit ?> Tk.</b></h4>




                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank Name</th>
                            <th>Branch</th>
                            <th>Account No.</th>
                            <th>Account Name</th>
                            <th>Deposit</th>
                            <th>Slip#</th>
                            <th>Balance</th>

                            <th>Date</th>


                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($query as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->bank_name ?></td>
                                <td><?= $row->branch_name ?></td>
                                <td><?= $row->account_no ?></td>
                                <td><?= $row->account_name ?></td>
                                <td><?= $row->deposit_amount ?></td>
                                <td><?= $row->deposit_slip ?></td>
                                <td><?= $row->balance ?></td>
                                <td> <?= $row->created_date ?></td>


                            </tr>

                            <?php //include "modal/bank_deposit.php" 
                            ?>
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




<?php include "modal/create_bank_details.php" ?>