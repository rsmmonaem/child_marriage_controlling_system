<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3><?= $data->temple_name ?></h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="<?= base_url();?>uploads/temple/<?= $data->temple_com_image ?>" alt=""
                         class="img-fluid text-center mb-5" width="50%">
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tbody>
                    <tr>
                        <td width="30%">মন্দিরের নাম</td>
                        <td><?= $data->temple_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মন্দিরের স্থাপনের তারিখ</td>
                        <td><?= $data->temple_found_date ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মন্দিরের যোগাগোগ নাম্বার </td>
                        <td><?= $data->temple_contact_number ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->temple_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->temple_village ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->temple_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->temple_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->temple_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->temple_division ?></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center"><h6>মন্দির কমিটির তথ্য</h6></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটির নাম</td>
                        <td><?= $data->temple_com_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি স্থাপনের তারিখ</td>
                        <td><?= $data->temple_com_date_of_birth ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি রেজিস্ট্রেশন নাম্বার</td>
                        <td><?= $data->temple_com_reg_no ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি এনআইডি </td>
                        <td><?= $data->temple_com_nid ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটির যোগাগোগ নাম্বার </td>
                        <td><?= $data->temple_contact_number ?></td>
                    </tr>
                    <tr>
                        <td width="30%">পিতার নাম </td>
                        <td><?= $data->temple_com_fathers_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> মাতার নাম </td>
                        <td><?= $data->temple_com_mothers_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->temple_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->temple_com_village ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->temple_com_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->temple_com_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->temple_com_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->temple_com_division ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><h6>পুরোহিত লিস্ট</h6></td>
                    </tr>
                    <?php foreach ($purohit as $row):?>
                    <tr>
                        <th width="30%">পুরোহিতের নাম</th>
                        <th><a href="<?= base_url();?>home/purohit_details/<?= $row->purohit_id?>"><?= $row->purohit_name ?></a></th>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
