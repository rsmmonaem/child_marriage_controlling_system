<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>সকল পুরোহিত</h3>
            </div>
            <div class="card-body">
                <?php foreach ($this->apm->get_purohit() as $row):?>
                    <div class="row mb-2">
                        <div class="col-md-6"><a href="<?= base_url();?>home/purohit_details/<?= $row->purohit_id  ?>">
                                <img src="<?= base_url();?>uploads/purohit/<?= $row->purohit_image ?>"
                                     class="card-img-top img-fluid" alt="<?= $row->purohit_name?>"> </a> </div>
                        <div class="col-md-6">
                            <p class="card-text"><a href="<?= base_url();?>home/purohit_details/<?= $row->purohit_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->purohit_name?></a></p>
                            <p>Date of Birth: <?= $row->purohit_date_of_birth ?></p>
                            <p>Purohit Contact Number: <?= $row->purohit_mobile ?></p>
                            <p>Address: <?= $row->purohit_address ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
