<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>সকল মসজিদ</h3>
            </div>
            <div class="card-body">
                <?php foreach ($this->amm->get_mosque() as $row):?>
                    <div class="row mb-2">
                        <div class="col-md-6"><a href="<?= base_url();?>home/mosque_details/<?= $row->mosque_id ?>">
                                <img src="<?= base_url();?>uploads/mosque/<?= $row->mosque_com_image ?>"
                                     class="card-img-top img-fluid" alt="<?= $row->mosque_name?>"> </a> </div>
                        <div class="col-md-6">
                            <p class="card-text"><a href="<?= base_url();?>home/mosque_details/<?= $row->mosque_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->mosque_name?></a></p>
                            <p>Mosque Found Data: <?= $row->mosque_found_date ?></p>
                            <p>Mosque Contact Number: <?= $row->mosque_contact_number ?></p>
                            <p>Committee Name: <?= $row->mosque_com_name ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
