<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3><?= $data->imam_name ?></h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="<?= base_url();?>uploads/imam/<?= $data->imam_image ?>" alt=""
                         class="img-fluid text-center mb-5" width="50%">
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <td width="30%">ইমামের নাম</td>
                        <td><?= $data->imam_name ?></td>
                    </tr> 
                    <tr>
                        <td width="30%">জন্ম তারিখ</td>
                        <td><?= $data->imam_date_of_birth ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মোবাইল নাম্বার</td>
                        <td><?= $data->imam_mobile ?></td>
                    </tr>
                    <tr>
                        <td width="30%">পিতার নাম	</td>
                        <td><?= $data->imam_father_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->imam_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->imam_village ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->imam_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->imam_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->imam_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->imam_division ?></td>
                    </tr>


                    <tbody>
                    <tr>

                    </tr>
                    <tr>

                    </tr>
                    <tr>

                    </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
