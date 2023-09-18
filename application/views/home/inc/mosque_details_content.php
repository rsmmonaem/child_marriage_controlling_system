<div class="row mt-2">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3><?= $data->mosque_name ?></h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="<?= base_url();?>uploads/mosque/<?= $data->mosque_com_image ?>" alt=""
                         class="img-fluid text-center mb-5" width="50%">
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tbody>
                    <tr>
                        <td width="30%">মসজিদের নাম</td>
                        <td><?= $data->mosque_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মসজিদের স্থাপনের তারিখ</td>
                        <td><?= $data->mosque_found_date ?></td>
                    </tr>
                    <tr>
                        <td width="30%">মসজিদের যোগাগোগ নাম্বার </td>
                        <td><?= $data->mosque_contact_number ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->mosque_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->mosque_village ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->mosque_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->mosque_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->mosque_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->mosque_division ?></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center"><h6>মসজিদ কমিটির তথ্য</h6></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটির নাম</td>
                        <td><?= $data->mosque_com_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি স্থাপনের তারিখ</td>
                        <td><?= $data->mosque_com_date_of_birth ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি রেজিস্ট্রেশন নাম্বার</td>
                        <td><?= $data->mosque_com_reg_no ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটি এনআইডি </td>
                        <td><?= $data->mosque_com_nid ?></td>
                    </tr>
                    <tr>
                        <td width="30%">কমিটির যোগাগোগ নাম্বার </td>
                        <td><?= $data->mosque_contact_number ?></td>
                    </tr>
                    <tr>
                        <td width="30%">পিতার নাম </td>
                        <td><?= $data->mosque_com_fathers_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%"> মাতার নাম </td>
                        <td><?= $data->mosque_com_mothers_name ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ঠিকানা</td>
                        <td><?= $data->mosque_address ?></td>
                    </tr>
                    <tr>
                        <td width="30%">গ্রাম</td>
                        <td><?= $data->mosque_com_village ?></td>
                    </tr>
                    <tr>
                        <td width="30%">ইউনিয়ন</td>
                        <td><?= $data->mosque_com_union ?></td>
                    </tr>
                    <tr>
                        <td width="30%">থানা</td>
                        <td><?= $data->mosque_com_thana ?></td>
                    </tr>
                    <tr>
                        <td width="30%">জেলা</td>
                        <td><?= $data->mosque_com_district ?></td>
                    </tr>
                    <tr>
                        <td width="30%">বিভাগ</td>
                        <td><?= $data->mosque_com_division ?></td>
                    </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
