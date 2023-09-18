<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>সকল মন্দির</h3>
            </div>
            <div class="card-body">
                <?php foreach ($this->atm->get_temple()as $row):?>
                    <div class="row mb-2">
                        <div class="col-md-6"><a href="<?= base_url();?>home/temple_details/<?= $row->temple_id ?>">
                                <img src="<?= base_url();?>uploads/temple/<?= $row->temple_com_image ?>"
                                     class="card-img-top img-fluid" alt="<?= $row->temple_name?>"> </a> </div>
                        <div class="col-md-6">
                            <p class="card-text"><a href="<?= base_url();?>home/temple_details/<?= $row->temple_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->temple_name?></a></p>
                            <p>Temple Found Data: <?= $row->temple_found_date ?></p>
                            <p>Temple Contact Number: <?= $row->temple_contact_number ?></p>
                            <p>Committee Name: <?= $row->temple_com_name ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
