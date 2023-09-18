<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>সকল ইমাম</h3>
            </div>
            <div class="card-body">
                <?php foreach ($this->aim->get_imam() as $row):?>
                    <div class="row mb-2">
                        <div class="col-md-6"><a href="<?= base_url();?>home/imam_details/<?= $row->imam_id  ?>">
                                <img src="<?= base_url();?>uploads/imam/<?= $row->imam_image ?>"
                                     class="card-img-top img-fluid" alt="<?= $row->imam_name?>"> </a> </div>
                        <div class="col-md-6">
                            <p class="card-text"><a href="<?= base_url();?>home/imam_details/<?= $row->imam_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->imam_name?></a></p>
                            <p>Date of Birth: <?= $row->imam_date_of_birth ?></p>
                            <p>Imam Contact Number: <?= $row->imam_mobile ?></p>
                            <p>Address: <?= $row->imam_address ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
