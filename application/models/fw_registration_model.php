<?php
ob_start();
class Fw_registration_model  extends CI_Model {


    //start ZONAL MANAGER Functions

    //start FIELD WORKER Functions

    function create_field_worker() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("status", "status", "xss_clean");
        $this->form_validation->set_rules("dis_code", "dis_code", "xss_clean");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("branch_office", "branch_office", "xss_clean");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");

        $this->form_validation->set_rules("field_worker", "field_worker", "xss_clean");
        $this->form_validation->set_rules("fw_id_no", "fw_id_no", "xss_clean");
        $this->form_validation->set_rules("designation", "designation", "xss_clean");
        $this->form_validation->set_rules("cont_num", "cont_num", "xss_clean");
        $this->form_validation->set_rules("email", "email", "xss_clean");
        $this->form_validation->set_rules("target", "target", "xss_clean");
        $this->form_validation->set_rules("image", "fw_image", "xss_clean");
        $this->form_validation->set_rules("user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("pass_word", "pass_word", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('fw_registration/create_field_worker/error');
        } else {
            $image = $_FILES['image']['name'];
            if ($image != "") {
                $image = random_string('alnum', 10) . '.jpg';
                
                //insert image
                $config['file_name'] = $image;
                $config['upload_path'] = 'uploads/photos';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('image');

                $file_data = $this->upload->data();
            } else {
                $image = "default.png";
            }

            $fw_cv = $_FILES['fw_cv']['name'];
            if ($fw_cv != "") {
                $fw_cv = random_string('alnum', 10) . '.pdf';
                //insert image
                $config['file_name'] = $fw_cv;
                $config['upload_path'] = 'uploads/cv';
                $config['allowed_types'] = 'pdf|doc';
                $config['max_size']         = '500000';
                $config['encrypt_name']     = false;
                //$config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('fw_cv');

                $file_data = $this->upload->data();
            } else {
                $fw_cv = "cv_not_found.jpg";
            }

            //branch name select

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

            $dis_code = $this->input->post('dis_code');

            $this->db->where('dis_code', $dis_code);
            $query = $this->db->get("distributor")->result();
            foreach ($query as $row) {
                $company_code = $row->company_code;
            }

            $fw_id_no = mt_rand(100000, 999999);
            $user_name = mt_rand(100000, 999999);
            $status = "DISABLE";
            $pass_word = "CF1234";



            //insert data to database

            $data = array(
                'status'             => $status,
                'dis_code'             => $this->input->post('dis_code'),
                'target'             => '0',
                'achieve'             => '0',
                'company_code'         => $company_code,
                'zonal_office'         => $zonal_office,
                'zonal_code'         => $zonal_code,
                'branch_office'     => $branch_office,
                'branch_code'         => $this->input->post('branch_code'),
                'field_worker'         => $this->input->post('field_worker'),
                'fw_id_no'             => $fw_id_no,
                'user_id'             => $fw_id_no,
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
                'designation'        => 'field_worker',
                'cont_num'            => $this->input->post('cont_num'),
                'email'             => $this->input->post('email'),
                'fw_image'             => $image,
                'fw_cv'             => $fw_cv,
                'user_name'         => $user_name,
                'pass_word'         => "CF1234"
            );

            $data2 = array(
                'status'             => $status,
                'user_name'         => $user_name,
                'user_id'             => $fw_id_no,
                'pass_word'         => $pass_word,
                'user_type'         => "field_worker",
                'full_name'         => $this->input->post('field_worker'),
                'update_date'         => date('Y-m-d H:i:s')
            );
            print_r($data);
            $this->db->insert('field_worker', $data);
            $this->db->insert('admin_user', $data2);

            //$id = $this->db->insert_id();

            redirect("fw_registration/success/" . $fw_id_no . "/" . $user_name . "/" . $pass_word);
        }
    }


    function getfield_worker() {
        $this->db->order_by("fw_id", "DESC");
        $query = $this->db->get("field_worker");
        return $query->result();
    }

    function getonerow_field_worker() {
        $user_id = $this->uri->segment(3);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get("field_worker");
        return $query->result();
    }

    function update_field_worker() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("status", "status", "xss_clean");
        $this->form_validation->set_rules("zonal_office", "zonal_office", "xss_clean");
        $this->form_validation->set_rules("zonal_code", "zonal_code", "xss_clean");
        $this->form_validation->set_rules("branch_office", "branch_office", "xss_clean");
        $this->form_validation->set_rules("branch_code", "branch_code", "xss_clean");

        $this->form_validation->set_rules("field_worker", "field_worker", "xss_clean");
        $this->form_validation->set_rules("fw_id_no", "fw_id_no", "xss_clean");
        $this->form_validation->set_rules("designation", "designation", "xss_clean");
        $this->form_validation->set_rules("cont_num", "cont_num", "xss_clean");
        $this->form_validation->set_rules("email", "email", "xss_clean");
        $this->form_validation->set_rules("image", "fw_image", "xss_clean");
        $this->form_validation->set_rules("user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("pass_word", "pass_word", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/field_worker_list/error');
        } else {
            $image = $_FILES['image']['name'];
            if ($image != "") {
                $image = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $image;
                $config['upload_path'] = 'uploads/photos';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('image');

                $file_data = $this->upload->data();
            } else {
                $image = $this->input->post('image');
            }

            $fw_cv = $_FILES['fw_cv']['name'];
            if ($fw_cv != "") {
                $fw_cv = random_string('alnum', 10) . '.pdf';
                //insert image
                $config['file_name'] = $fw_cv;
                $config['upload_path'] = 'uploads/cv';
                $config['allowed_types'] = 'pdf|doc';
                $config['max_size']         = '500000';
                $config['encrypt_name']     = false;
                //$config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('zm_cv');

                $file_data = $this->upload->data();
            } else {
                $fw_cv = $this->input->post('fw_cv');
            }
            $page_name = $this->uri->segment(1);
            $user_id = $this->input->post('user_id');
            $user_name = $this->input->post('user_name');
            $new_user_name = $this->input->post('new_user_name');
            $new_pass_word = $this->input->post('new_pass_word');

            // find out user name
            if ($user_name != $new_user_name) {

                if (preg_match('/\s/', $new_user_name)) {
                    if ($page_name == "field_worker") {
                        redirect("field_worker/edit_field_worker/" . $user_id . "/username_invalid");
                    }
                    redirect("super_admin/edit_field_worker/" . $user_id . "/username_invalid");
                }
                $qry = "SELECT count(*) as cnt from admin_user where user_name= '$new_user_name'";
                $res = $this->db->query($qry, array($new_user_name))->result();

                if ($res[0]->cnt >= 1) {
                    if ($page_name == "field_worker") {
                        redirect("field_worker/edit_field_worker/" . $user_id . "/username_invalid");
                    }
                    if ($page_name == "super_admin") {
                        redirect("super_admin/edit_field_worker/" . $user_id . "/username_error");
                    }
                }
            }


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

            echo    $dis_code = $this->input->post('dis_code');

            $this->db->where('dis_code', $dis_code);
            $query = $this->db->get("distributor")->result();
            foreach ($query as $row) {
                $company_code = $row->company_code;
            }

            //insert data to database

            $data = array(
                'status'             => $this->input->post('status'),
                'dis_code'             => $this->input->post('dis_code'),
                'target'             => $this->input->post('target'),
                'company_code'         => $company_code,
                'branch_office'     => $branch_office,
                'branch_code'         => $branch_code,
                'zonal_office'         => $zonal_office,
                'zonal_code'         => $zonal_code,

                'field_worker'         => $this->input->post('field_worker'),
                //'fao_id_no' 		=>$this->input->post('fao_id_no'),
                //'user_id' 			=>$this->input->post('fao_id_no'),
                'update_date'         => date('Y-m-d H:i:s'),
                'cont_num'            => $this->input->post('cont_num'),
                'email'             => $this->input->post('email'),
                'fw_image'             => $image,
                'fw_cv'             => $fw_cv,


                'user_name'         => $this->input->post('new_user_name'),
                'pass_word'         => $this->input->post('new_pass_word')



            );

            $data2 = array(
                //'user_id' 			=>$this->input->post('fao_id_no'),
                'user_name'         => $this->input->post('new_user_name'),
                'status'             => $this->input->post('status'),
                'pass_word'         => $this->input->post('new_pass_word')

            );

            $this->db->where('user_id', $user_id);
            $this->db->update('field_worker', $data);
            $this->db->where('user_id', $user_id);
            $this->db->update('admin_user', $data2);

            if ($page_name == "field_worker") {
                redirect("field_worker/edit_field_worker");
            }
            redirect("super_admin/field_worker_list");
        }
    }

    function search_field_worker() {

        $user_id = $this->input->post('user_id');

        redirect("super_admin/field_worker_list_search/" . $user_id);
        //redirect(base_url()."super_admin/fao_list_search/");

    }

    function search_field_worker_result() {
        $user_id = $this->uri->segment(3);

        $this->db->where('user_id', $user_id);
        $query = $this->db->get("field_worker");
        return $query->result();
    }


    // end of field worker Functions








}
