<div class="row mt-2">
  <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h2>নোটিশ বোর্ড</h2>
            </div>
            <div class="card-body">
                <?php foreach($this->adm->get_notice() as $row): ?>
                <p><a href="<?= base_url();?>home/notice_details/<?= $row->not_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->not_title ?></a>

                </p>
                <?php endforeach;  ?>
                <a href="<?= base_url();?>home/notice" class="btn btn-light" > সকল </a>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                <p><a href="#" class="text-decoration-none"> খবর </a></p>
            </div>
            <div class="card-body">

                <marquee behavior="scroll" direction="left"
                         onmouseover="this.stop();"
                         onmouseout="this.start();">

                    <?php foreach ($this->anm->get_news() as $row):?>
                        <span class="h5"><a href="<?= base_url();?>home/news_details/<?= $row->news_id?>"> <?= $row->news_title ?>,   </a></span>
                    <?php endforeach;?>
                </marquee>

                <a href="<?= base_url();?>home/news" class="btn btn-light" > সকল </a>
            </div>

            <!-- introduction card  -->


        </div>
      <div class="card mt-2">
          <div class="card-header">
              <h2>আইন এবং প্রবিধান</h2>
          </div>
          <div class="card-body">
              <?php foreach($this->alrm->get_law_regulation_home() as $row): ?>
                  <p><a href="<?= base_url();?>home/laws_details/<?= $row->law_regulation_id ?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->law_regulation_title ?></a>

                  </p>
              <?php endforeach;  ?>
              <a href="<?= base_url();?>home/laws" class="btn btn-light" > সকল </a>
          </div>
      </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-5 card-bottom-border">
                    <h5 class="p-2">মসজিদের লিস্ট</h5>
                    <div class="row">
                        <div class="card-body d-flex">
                            <img src="<?= base_url();?>assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
                            <ul>
                                <?php foreach ($this->amm->get_mosque_home() as $row):?>
                                <li><a href="<?= base_url();?>home/mosque_details/<?= $row->mosque_id?>"><?= $row->mosque_name?> </a></li>
                                <?php endforeach;?>
                                <li><a href="<?= base_url();?>home/mosque">সকল</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5 card-bottom-border">
                    <h5 class="p-2">ঈমামের লিস্ট</h5>
                    <div class="row">
                        <div class="card-body d-flex">
                            <img src="<?= base_url();?>/assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
                            <ul>
                                <?php foreach ($this->aim->get_imam_home() as $row):?>
                                    <li><a href="<?= base_url();?>home/imam_details/<?= $row->imam_id?>"><?= $row->imam_name?> </a></li>
                                <?php endforeach;?>
                                <li><a href="<?= base_url();?>home/imam/">সকল</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-5 card-bottom-border">
                    <h5 class="p-2">মন্দিরের লিস্ট </h5>
                    <div class="row">
                        <div class="card-body d-flex">
                            <img src="<?= base_url();?>/assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
                            <ul>
                                <?php foreach ($this->atm->get_temple_home() as $row):?>
                                    <li><a href="<?= base_url();?>home/temple_details/<?= $row->temple_id?>"><?= $row->temple_name?> </a></li>
                                <?php endforeach;?>
                                <li><a href="<?= base_url();?>home/temple">সকল</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5 card-bottom-border">
                    <h5 class="p-2">পুরোহিতের লিস্ট </h5>
                    <div class="row">
                        <div class="card-body d-flex">
                            <img src="<?= base_url();?>/assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
                            <ul>

                                <?php foreach ($this->apm->get_purohit_home() as $row):?>
                                    <li><a href="<?= base_url();?>home/purohit_details/<?= $row->purohit_id?>"><?= $row->purohit_name?> </a></li>
                                <?php endforeach;?>
                                <li><a href="<?= base_url();?>home/purohit/">সকল</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
