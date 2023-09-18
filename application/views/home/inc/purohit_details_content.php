<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3><?= $data->purohit_name ?></h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="<?= base_url();?>uploads/purohit/<?= $data->purohit_image ?>" alt=""
                         class="img-fluid text-center mb-5" width="50%">
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <td width="30%">পুরোহিতের নাম</td>
                        <td><?= $data->purohit_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জন্ম তারিখ</td>
                        <td><?= $data->purohit_date_of_birth ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মোবাইল নাম্বার</td>
                        <td><?= $data->purohit_mobile ?></td>
                    </tr>
                    <tr>
                        <td width="30%">পিতার নাম	</td>
                        <td><?= $data->purohit_father_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->purohit_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->purohit_village ?></td>
                    </tr>
                    <tr> 
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->purohit_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->purohit_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->purohit_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->purohit_division ?></td>
                    </tr>
                    <tr>
                        <th>মন্দিরের নাম</th>
                        <th><a href="<?= base_url();?>home/temple_details/<?= $data->temple_id?>"><?= $data->temple_name ?></a></th>

                    </tr>
                    <tr>

                    </tr>
                    <tbody>

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
