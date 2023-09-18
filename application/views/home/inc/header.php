<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>চাইল্ড ম্যারেজ কন্ট্রোলিং সিস্টেম</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>/uploads/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/home_assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url();?>/assets/home_assets/css/style.css" />

</head>

<body style="font-family: 'Hind Siliguri', sans-serif;">

<main>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand d-flex text-center" href="<?= base_url();?>">
                    <img src="<?= base_url();?>/uploads/logo.png" alt=""  width="80px" height="80px"/>&nbsp;
                    <h6  class="logo-header m-auto">  চাইল্ড ম্যারেজ কন্ট্রোলিং সিস্টেম</h6>
                </a>
                <div class="text-align-right">

                    <?php
                    $user_type = $this->session->userdata('user_type');
                    $this->load->library('session');
                    if ($this->session->userdata('user_type','super_admin')== true): ?>
                        <a href="<?= base_url($user_type)?>" class="btn btn-success">Dashboard</a>
                        <a href="<?= base_url()?>admin/logout" class="btn btn-primary">logout</a>

                    <?php else: ?>
                        <a href="<?= base_url()?>login" class="btn btn-primary">Login</a>
                    <?php endif; ?>

                </div>
            </div>

        </nav>
        <!-- top bar section-->
        <div class="row">
            <!-- slider section -->
            <div class="slider-section">
                <div class="slider-text">
                    <br>

                </div>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($this->asm->get_slider() as $row):?>
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="<?= base_url() ?>uploads/slider/<?= $row->slider_image ?>" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <?php endforeach;  ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>

            <!-- nav bar section -->
            <nav class="navbar navbar-expand-lg d-flex">
                <div class="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="<?= base_url();?>/" class="nav-link"><i class="bi bi-house-door-fill"></i></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url();?>home/about" >
                                    আমাদের সম্পর্কে
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url();?>home/notice"
                                   aria-expanded="false">
                                    নোটিশ বোর্ড
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link <?php if($this->uri->segment(1)=="home/news"){echo 'class="active"';}?>" href="<?= base_url();?>home/news"
                                   aria-expanded="false">
                                    সকল খবরসমূহ
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="<?= base_url();?>home/laws"
                                   aria-expanded="false">
                                    আইন এবং প্রবিধান
                                </a>
                            </li>




                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url();?>home/mosque" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    মসজিদ
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->amm->get_mosque_home() as $row):?>
                                        <li><a class="dropdown-item" href="<?= base_url();?>home/mosque_details/<?= $row->mosque_id?>"><?= $row->mosque_name?> </a></li>
                                    <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/mosque">সকল মসজিদ</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url();?>home/imam/" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    ইমাম
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->aim->get_imam_home() as $row):?>
                                        <li><a class="dropdown-item" href="<?= base_url();?>home/imam_details/<?= $row->imam_id?>"><?= $row->imam_name?></a></li>
                                    <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/imam/">সকল ইমাম</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url();?>home/temple/" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    মন্দির
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->atm->get_temple_home() as $row):?>
                                        <li><a class="dropdown-item" href="<?= base_url();?>home/temple_details/<?= $row->temple_id?>"><?= $row->temple_name ?>
                                                </a></li>
                                    <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/temple/">সকল মন্দির</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url();?>home/purohit/" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    পুরোহিত
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->apm->get_purohit_home() as $row):?>
                                        <li><a class="dropdown-item" href="<?= base_url();?>home/purohit_details/<?= $row->purohit_id?>"><?= $row->purohit_name ?></a></li>
                                       <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/purohit/">সকল পুরোহিত</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= base_url();?>home/objection" >
                                    অভিযোগ জানান
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= base_url();?>home/contact" >
                                    যোগাযোগ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- main content section -->

