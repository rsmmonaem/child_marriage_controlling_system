<?php
ob_start();
class Office_setup_model  extends CI_Model {


    function create_company() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("com_name", "com_name", "xss_clean");
        $this->form_validation->set_rules("company_code", "company_code", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("com_logo", "com_logo", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/company_list/error');
        } else {

            $com_logo = $_FILES['com_logo']['name'];
            if ($com_logo != "") {
                $com_logo = random_string('alnum', 10) . '.jpg';
                
                //insert image
                $config['file_name'] = $com_logo;
                $config['upload_path'] = 'uploads/company';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('com_logo');

                $file_data = $this->upload->data();
            } else {
                $com_logo = "default.png";
            }



            //insert data to database

            $data = array(

                'com_name'                 => $this->input->post('com_name'),
                'company_code'             => $this->input->post('company_code'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'com_logo'                 => $com_logo,
                'founded_date'             => $this->input->post('founded_date')

            );

            $this->db->insert('company_list', $data);
            //$id = $this->db->insert_id();
            redirect("super_admin/company_list/");
        }
    }




    function get_company() {
        $this->db->order_by("com_id", "DESC");
        $query = $this->db->get("company_list");
        return $query->result();
    }

    function getonerow_company() {
        $com_id = $this->uri->segment(3);
        $this->db->where('company_code', $com_id);
        $query = $this->db->get("company_list");
        return $query->result();
    }


    function update_company() {


        $this->load->library("form_validation");
        $this->form_validation->set_rules("com_name", "com_name", "xss_clean");
        $this->form_validation->set_rules("company_code", "company_code", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("com_logo", "com_logo", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/company_list/error');
        } else {

            $com_logo = $_FILES['com_logo']['name'];
            if ($com_logo != "") {
                $com_logo = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $com_logo;
                $config['upload_path'] = 'uploads/company';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('com_logo');

                $file_data = $this->upload->data();
            } else {
                $com_logo = $this->input->post('com_logo');
            }


            $com_id = $this->uri->segment(3);

            //zone change

            echo $company_code = $this->input->post('company_code');


            //insert data to database

            $data = array(

                'com_name'                 => $this->input->post('com_name'),
                'company_code'             => $this->input->post('company_code'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'com_logo'                 => $com_logo,
                'founded_date'             => $this->input->post('founded_date')



            );


            $this->db->where('company_code', $company_code);
            $this->db->update('company_list', $data);
            redirect("super_admin/company_list");
        }
    }



    function create_zonal_office() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("division", "division", "xss_clean");
        $this->form_validation->set_rules("district", "district", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("zonal_head_id", "zonal_head_id", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/zonal_office_list/error');
        } else {

            //insert data to database
            $data = array(
                'zonal_office'             => $this->input->post('zonal_office'),
                'zonal_code'             => $this->input->post('zonal_code'),
                'division'                 => $this->input->post('division'),
                'district'                 => $this->input->post('district'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                'zonal_head_id'         => "null",
                'founded_date'             => $this->input->post('founded_date')
            );

            $this->db->insert('zonal_office', $data);
            //$id = $this->db->insert_id();
            redirect("super_admin/zonal_office_list/");

            /*$page_name=$this->uri->segment(3);

		if($page_name=="create_supplier"){redirect("super_admin/create_supplier/");}
		if($page_name=="create_unit_head"){redirect("super_admin/create_unit_head/");}
		if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}*/
        }
    }




    function get_zonal() {
        $this->db->order_by("zo_id", "DESC");
        $query = $this->db->get("zonal_office");
        return $query->result();
    }

    function getonerow_zonal() {
        $zo_id = $this->uri->segment(3);
        $this->db->where('zo_id', $zo_id);
        $query = $this->db->get("zonal_office");
        return $query->result();
    }


    function update_zonal_office() {

        $this->load->library("form_validation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("division", "division", "xss_clean");
        $this->form_validation->set_rules("district", "district", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("zonal_head_id", "zonal_head_id", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/zonal_office_list/error');
        } else {
            $zo_id = $this->uri->segment(3);

            //insert data to database
            $data = array(
                'zonal_office'             => $this->input->post('zonal_office'),
                //'zonal_code' 			=>$this->input->post('zonal_code'),
                'division'                 => $this->input->post('division'),
                'district'                 => $this->input->post('district'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                //'zonal_head_id' 		=>"null",
                'founded_date'             => $this->input->post('founded_date')
            );

            $this->db->where('zo_id', $zo_id);
            $this->db->update('zonal_office', $data);
            redirect("super_admin/zonal_office_list");
        }
    }


    function create_branch_office() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("branch_office", "branch_office", "xss_clean");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");
        $this->form_validation->set_rules("division", "division", "xss_clean");
        $this->form_validation->set_rules("district", "district", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("branch_head_id", "branch_head_id", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/branch_office_list/error');
        } else {

            //get zonal code
            echo $zonal_code = $this->input->post('zonal_code');

            $this->db->where('zonal_code', $zonal_code);
            $query = $this->db->get("zonal_office")->result();
            foreach ($query as $row) {
                $zonal_office = $row->zonal_office;
                $district = $row->district;
                $division = $row->division;
            }

            //insert data to database
            $data = array(
                'zonal_code'             => $this->input->post('zonal_code'),
                'zonal_office'             => $zonal_office,
                'branch_office'         => $this->input->post('branch_office'),
                'branch_code'             => $this->input->post('branch_code'),
                'division'                 => $division,
                'district'                 => $district,
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                'branch_head_id'         => "null",
                'founded_date'             => $this->input->post('founded_date')
            );

            $this->db->insert('branch_office', $data);
            //$id = $this->db->insert_id();
            redirect("super_admin/branch_list/");

            /*$page_name=$this->uri->segment(3);

		if($page_name=="create_supplier"){redirect("super_admin/create_supplier/");}
		if($page_name=="create_unit_head"){redirect("super_admin/create_unit_head/");}
		if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}*/
        }
    }




    function get_branch() {
        $this->db->order_by("br_id", "DESC");
        $query = $this->db->get("branch_office");
        return $query->result();
    }

    function getonerow_branch() {
        $br_id = $this->uri->segment(3);
        $this->db->where('br_id', $br_id);
        $query = $this->db->get("branch_office");
        return $query->result();
    }


    function update_branch_office() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("branch_office", "branch_office", "xss_clean");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");
        $this->form_validation->set_rules("division", "division", "xss_clean");
        $this->form_validation->set_rules("district", "district", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("branch_head_id", "branch_head_id", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/branch_list/error');
        } else {
            $br_id = $this->uri->segment(3);

            //zone change
            echo $zonal_code = $this->input->post('zonal_code');

            $this->db->where('zonal_code', $zonal_code);
            $query = $this->db->get("zonal_office")->result();
            foreach ($query as $row) {
                $zonal_office = $row->zonal_office;
                $district = $row->district;
                $division = $row->division;
            }

            //insert data to database
            $data = array(
                'zonal_code'             => $this->input->post('zonal_code'),
                'zonal_office'             => $zonal_office,
                'branch_office'         => $this->input->post('branch_office'),
                'branch_code'             => $this->input->post('branch_code'),
                'division'                 => $division,
                'district'                 => $district,
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                'branch_head_id'         => "null",
                'founded_date'             => $this->input->post('founded_date')
            );

            $this->db->where('br_id', $br_id);
            $this->db->update('branch_office', $data);
            redirect("super_admin/branch_list");
        }
    }

    
    // PickPoint Model Functions Starts
    function create_pick_point() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");
        $this->form_validation->set_rules("division", "division", "xss_clean");
        $this->form_validation->set_rules("district", "district", "xss_clean");
        $this->form_validation->set_rules("pickpoint_office", "pickpoint_office", "xss_clean");
        $this->form_validation->set_rules("pickpoint_code", "pickpoint_code", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/pick_point_list/error');
        } else {

            //get branch code
            $branch_code = $this->input->post('branch_code');

            $this->db->where('branch_code', $branch_code);
            $query = $this->db->get("branch_office")->result();
            foreach ($query as $row) {
                $zonal_office = $row->zonal_office;
                $zonal_code = $row->zonal_code;
                $branch_office = $row->branch_office;
                $district = $row->district;
                $division = $row->division;
            }

            //insert data to database
            $data = array(
                'zonal_office'             => $zonal_office,
                'zonal_code'             => $zonal_code,
                'branch_office'         => $branch_office,
                'branch_code'             => $this->input->post('branch_code'),
                'division'                 => $division,
                'district'                 => $district,
                'pickpoint_office'             => $this->input->post('pickpoint_office'),
                'pickpoint_code'             => $this->input->post('pickpoint_code'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                'pickpoint_head_id'         => "null",
                'founded_date'             => $this->input->post('founded_date')
            );

            $this->db->insert('pickpoint_office', $data);
            //$id = $this->db->insert_id();
            redirect("super_admin/pick_point_list");

            /*$page_name=$this->uri->segment(3);

		if($page_name=="create_supplier"){redirect("super_admin/create_supplier/");}
		if($page_name=="create_unit_head"){redirect("super_admin/create_unit_head/");}
		if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}*/
        }
    }

    function get_all_pick_point() {
        $this->db->order_by("pickpoint_id", "DESC");
        $query = $this->db->get("pickpoint_office");
        return $query->result();
    }

    function getonerow_pick_point() {
        $pickpoint_id = $this->uri->segment(3);
        $this->db->where('pickpoint_id', $pickpoint_id);
        $query = $this->db->get("pickpoint_office");
        return $query->result();
    }


    function update_pick_point() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");
        $this->form_validation->set_rules("pickpoint_office", "pickpoint_office", "xss_clean");
        $this->form_validation->set_rules("address", "address", "xss_clean");
        $this->form_validation->set_rules("contact_no", "contact_no", "xss_clean");
        $this->form_validation->set_rules("email_address", "email_address", "xss_clean");
        $this->form_validation->set_rules("founded_date", "founded_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/pick_point_list/error');
        } else {
            $pickpoint_id = $this->uri->segment(3);

            //get branch code
            $branch_code = $this->input->post('branch_code');

            $this->db->where('branch_code', $branch_code);
            $query = $this->db->get("branch_office")->result();
            foreach ($query as $row) {
                $zonal_office = $row->zonal_office;
                $zonal_code = $row->zonal_code;
                $branch_office = $row->branch_office;
                $district = $row->district;
                $division = $row->division;
            }

            //insert data to database
            $data = array(
                'zonal_office'             => $zonal_office,
                'zonal_code'             => $zonal_code,
                'branch_office'         => $branch_office,
                'branch_code'             => $this->input->post('branch_code'),
                'division'                 => $division,
                'district'                 => $district,
                'pickpoint_office'             => $this->input->post('pickpoint_office'),
                'address'                 => $this->input->post('address'),
                'contact_no'             => $this->input->post('contact_no'),
                'email_address'         => $this->input->post('email_address'),
                'founded_date'             => $this->input->post('founded_date')
            );

            // var_dump($data);

            $this->db->where('pickpoint_id', $pickpoint_id);
            $this->db->update('pickpoint_office', $data);
            redirect("super_admin/pick_point_list");
        }
    }
    // PickPoint Model Functions Ends

    function create_bank_details() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("bank_name", "bank_name", "xss_clean");
        $this->form_validation->set_rules("branch_name", "branch_name", "xss_clean");
        $this->form_validation->set_rules("account_no", "account_no", "xss_clean");
        $this->form_validation->set_rules("account_name", "account_name", "xss_clean");
        $this->form_validation->set_rules("starting_balance", "starting_balance", "xss_clean");
        $this->form_validation->set_rules("created_date", "created_date", "xss_clean");
        $this->form_validation->set_rules("update_date", "update_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/bank_details/error');
        } else {

            //insert data to database
            $data = array(
                'bank_name'         => $this->input->post('bank_name'),
                'branch_name'         => $this->input->post('branch_name'),
                'account_no'         => $this->input->post('account_no'),
                'account_name'         => $this->input->post('account_name'),
                'starting_balance'     => $this->input->post('starting_balance'),
                'balance'             => $this->input->post('starting_balance'),
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $this->db->insert('bank_details', $data);
            //$id = $this->db->insert_id();
            redirect("super_admin/bank_details/");

            /*$page_name=$this->uri->segment(3);

		if($page_name=="create_supplier"){redirect("super_admin/create_supplier/");}
		if($page_name=="create_unit_head"){redirect("super_admin/create_unit_head/");}
		if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}*/
        }
    }




    function get_bank() {
        $this->db->order_by("b_id", "DESC");
        $query = $this->db->get("bank_details");
        return $query->result();
    }

    function getonerow_bank() {
        $b_id = $this->uri->segment(3);
        $this->db->where('b_id', $b_id);
        $query = $this->db->get("bank_details");
        return $query->result();
    }


    function update_bank_details() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("bank_name", "bank_name", "xss_clean");
        $this->form_validation->set_rules("branch_name", "branch_name", "xss_clean");
        $this->form_validation->set_rules("account_no", "account_no", "xss_clean");
        $this->form_validation->set_rules("account_name", "account_name", "xss_clean");
        $this->form_validation->set_rules("balance", "balance", "xss_clean");
        $this->form_validation->set_rules("created_date", "created_date", "xss_clean");
        $this->form_validation->set_rules("update_date", "update_date", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/bank_details/error');
        } else {
            $b_id = $this->uri->segment(3);

            //insert data to database
            $data = array(
                'bank_name'         => $this->input->post('bank_name'),
                'branch_name'         => $this->input->post('branch_name'),
                'account_no'         => $this->input->post('account_no'),
                'account_name'         => $this->input->post('account_name'),
                'balance'             => $this->input->post('balance'),
                'update_date'         => date('Y-m-d H:i:s')
            );

            $this->db->where('b_id', $b_id);
            $this->db->update('bank_details', $data);
            redirect("super_admin/bank_details");
        }
    }


    function bank_deposit() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("bank_name", "bank_name", "xss_clean");
        $this->form_validation->set_rules("branch_name", "branch_name", "xss_clean");
        $this->form_validation->set_rules("account_no", "account_no", "xss_clean");
        $this->form_validation->set_rules("account_name", "account_name", "xss_clean");
        $this->form_validation->set_rules("deposit_amount", "deposit_amount", "xss_clean");
        $this->form_validation->set_rules("deposit_slip", "deposit_slip", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/bank_details/error');
        } else {

            $fw_id_no = $this->input->post('fw_id_no');
            $b_id = $this->input->post('b_id');
            //find bank balance
            $last_balance = $this->input->post('balance');
            $deposit_amount = $this->input->post('deposit_amount');
            $balance = $last_balance + $deposit_amount;

            //insert data to database
            $data = array(
                'b_id'                 => $this->input->post('b_id'),
                'bank_name'         => $this->input->post('bank_name'),
                'branch_name'         => $this->input->post('branch_name'),
                'account_no'         => $this->input->post('account_no'),
                'account_name'         => $this->input->post('account_name'),
                'last_balance'         => $last_balance,
                'deposit_amount'     => $deposit_amount,
                'balance'             => $balance,
                'deposit_slip'         => $this->input->post('deposit_slip'),
                'fw_id_no'             => $this->input->post('fw_id_no'),
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $data2 = array(
                'balance'             => $balance,
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $this->db->insert('bank_deposit', $data);

            $this->db->where('b_id', $b_id);
            $this->db->update('bank_details', $data2);

            //dis ledger
            // distributor ledger

            $this->db->order_by("dis_code", "DESC");
            $this->db->where('dis_code', $dis_code);
            $balance = $this->db->get("distributor")->row("balance");
            $this->db->where('dis_code', $dis_code);
            $credit = $this->db->get("distributor")->row("credit");
            $this->db->where('dis_code', $dis_code);
            $debit = $this->db->get("distributor")->row("debit");

            $update_credit = $credit - $deposit_amount;
            $update_debit = $debit + $deposit_amount;
            $balance = $update_credit - $update_debit;
            $data_dis_update = array(

                'credit'                     => $update_credit,
                'debit'                     => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'update_date'                 => date('Y-m-d H:i:s')

            );

            $this->db->where('dis_code', $dis_code);
            $this->db->update('distributor', $data_dis_update);

            $dis_ledger = array(


                'description'                 => "Direct Deposit",
                'dis_code'                     => $dis_code,
                'credit'                     => $update_credit,
                'debit'                     => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'created_date'             => date('Y-m-d H:i:s')

            );

            $this->db->insert('dis_ledger', $dis_ledger);
            //$id = $this->db->insert_id();
            redirect("field_worker/bank_deposit_list/");
        }
    }

    function bank_deposit_dis() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("bank_name", "bank_name", "xss_clean");
        $this->form_validation->set_rules("branch_name", "branch_name", "xss_clean");
        $this->form_validation->set_rules("account_no", "account_no", "xss_clean");
        $this->form_validation->set_rules("account_name", "account_name", "xss_clean");
        $this->form_validation->set_rules("deposit_amount", "deposit_amount", "xss_clean");
        $this->form_validation->set_rules("deposit_slip", "deposit_slip", "xss_clean");
        $this->form_validation->set_rules("deposit_type", "deposit_type", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('distributor/bank_deposit/error');
        } else {

            $dis_code = $this->input->post('dis_code');
            $b_id = $this->input->post('b_id');
            //find bank balance
            $last_balance = $this->input->post('balance');
            $deposit_amount = $this->input->post('deposit_amount');
            $balance = $last_balance + $deposit_amount;

            //insert data to database
            $data = array(
                'b_id'                 => $this->input->post('b_id'),
                'bank_name'         => $this->input->post('bank_name'),
                'branch_name'         => $this->input->post('branch_name'),
                'account_no'         => $this->input->post('account_no'),
                'account_name'         => $this->input->post('account_name'),
                'last_balance'         => $last_balance,
                'deposit_amount'     => $deposit_amount,
                'balance'             => $balance,
                'deposit_slip'         => $this->input->post('deposit_slip'),
                'dis_code'             => $this->input->post('dis_code'),
                'deposit_type'         => $this->input->post('deposit_type'),
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $data2 = array(
                'balance'             => $balance,
                'update_date'         => date('Y-m-d H:i:s'),
            );

            $this->db->insert('bank_deposit', $data);

            $this->db->where('b_id', $b_id);
            $this->db->update('bank_details', $data2);

            // distributor ledger
            $this->db->order_by("dis_code", "DESC");
            $this->db->where('dis_code', $dis_code);
            $balance = $this->db->get("distributor")->row("balance");
            $this->db->where('dis_code', $dis_code);
            $credit = $this->db->get("distributor")->row("credit");
            $this->db->where('dis_code', $dis_code);
            $debit = $this->db->get("distributor")->row("debit");

            $update_credit = $credit - $deposit_amount;
            $update_debit = $debit + $deposit_amount;
            $balance = $update_credit - $update_debit;

            $data_dis_update = array(
                'credit'                     => $update_credit,
                'debit'                     => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'update_date'                 => date('Y-m-d H:i:s')
            );

            $this->db->where('dis_code', $dis_code);
            $this->db->update('distributor', $data_dis_update);

            $dis_ledger = array(
                'description'                 => $this->input->post('deposit_type'),
                'amount'                     => $this->input->post('deposit_amount'),
                'dis_code'                     => $dis_code,
                'credit'                     => $update_credit,
                'debit'                     => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'created_date'             => date('Y-m-d H:i:s')
            );

            $this->db->insert('dis_ledger', $dis_ledger);


            //$id = $this->db->insert_id();
            redirect("distributor/distributor_statement/" . $dis_code);
        }
    }

    function getonerow_bank_deposit() {
        $fw_id_no = $this->session->userdata('user_id');
        $this->db->where('fw_id_no', $fw_id_no);
        $query = $this->db->get("bank_deposit");
        return $query->result();
    }

    function get_bank_deposit() {
        $this->db->order_by("bd_id", "DESC");
        $query = $this->db->get("bank_deposit");
        return $query->result();
    }

    function search_bank_deposit() {
        $intotal = 0;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $this->db->order_by("bd_id", "DESC");
        $this->db->where('created_date >=', $start_date);
        $this->db->where('created_date <=', $end_date);

        $query = $this->db->get("bank_deposit");
        //return $query->result();

        redirect("super_admin/search_bank_deposit_list/" . $intotal);
    }
}
