<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/contact_assets/css/util.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/contact_assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="contact1">
                <div class="container-contact1">
                    <form class="contact1-form validate-form" method="post" action="<?= base_url();?>home/objection_save" enctype="multipart/form-data">
                        <span class="contact1-form-title"> আপনার অভিযোগ জানান</span>
                        <div class="wrap-input1 validate-input" data-validate="Subject is required">
                            <label class="input-group obj-label" for="inputGroupFile02">অভিযোগের বিষয়</label>
                            <input class="input1" id="subject" type="text" name="obj_category" placeholder="বিষয়" required/>
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Name is required">
                            <label class="input-group obj-label" for="inputGroupFile02">আপনার নাম</label>
                            <input class="input1" id="name" type="text" name="obj_title" placeholder="নাম" required/>
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Valid email is required: 01122441454 ">
                            <label class="input-group obj-label" for="inputGroupFile02">আপনার মোবাইল নাম্বার</label>
                            <input class="input1" type="number" id="phone_number" name="obj_phone" placeholder="মোবাইল নাম্বার" required/>
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <label class="input-group obj-label" for="inputGroupFile02">আপনার ইমেইল</label>
                            <input class="input1" type="text" name="obj_email" placeholder="ইমেইল" required/>
                            <span class="shadow-input1"></span>
                        </div>
<!--                        <div class="wrap-input1 validate-input" data-validate="Valid email is required: 01122441454 ">-->
<!--                            <div class="input-group">-->
<!--                                <input type="file" class="form-control input1" name="obj_image" id="inputGroupFile02">-->
<!--                                <label class="input-group-text" for="inputGroupFile02">ছবি</label>-->
<!--                            </div>-->
<!--                            <span class="shadow-input1"></span>-->
<!--                        </div>-->


                        <div class="wrap-input1 validate-input" data-validate="Message is required">
                            <label class="input-group obj-label" for="inputGroupFile02">আপনার বার্তা টি পাঠান</label>
                            <textarea class="input1" id="description" name="obj_description" placeholder="আপনার বার্তা টি পাঠান"></textarea>
                            <span class="shadow-input1"></span>
                        </div>
                        <div class="container-contact1-form-btn">
                            <button class="contact1-form-btn">
                            <span>
                              সাবমিট করুন
                              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
