<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>সকল ইমাম</h3>
            </div>
            <div class="card-body">
                <?php foreach($this->alrm->get_law_regulation_home() as $row): ?>
                    <div class="row mb-2">
                        <div class="col-md-12 border p-2">
                            <p>আইন এবং প্রবিধান নংঃ <?= $row->law_regulation_no?></p>
                            <p class="card-text ">
                                <a href="<?= base_url();?>home/laws_details/<?= $row->law_regulation_id?>">
                                    <i class="bi bi-arrow-right-circle"></i> <?= $row->law_regulation_title?></a>
                            </p>


                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
