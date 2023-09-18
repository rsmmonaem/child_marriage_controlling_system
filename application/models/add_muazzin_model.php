<?php
ob_start();
class add_muazzin_model  extends CI_Model
{

// Create Notice
    function create_muazzin()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("muazzin_name", "muazzin_name", "xss_clean");
        $this->form_validation->set_rules("muazzin_division", "muazzin_division", "xss_clean");
        $this->form_validation->set_rules("muazzin_mosque_id", "muazzin_mosque_id", "xss_clean");
        $this->form_validation->set_rules("muazzin_district", "muazzin_district", "xss_clean");
        $this->form_validation->set_rules("muazzin_thana", "muazzin_thana", "xss_clean");
        $this->form_validation->set_rules("muazzin_union", "muazzin_union", "xss_clean");
        $this->form_validation->set_rules("muazzin_village", "muazzin_village", "xss_clean");
        $this->form_validation->set_rules("muazzin_address", "muazzin_address", "xss_clean");
        $this->form_validation->set_rules("muazzin_mobile", "muazzin_mobile", "xss_clean");
        $this->form_validation->set_rules("muazzin_nid", "muazzin_nid", "xss_clean");
        $this->form_validation->set_rules("muazzin_date_of_birth", "muazzin_date_of_birth", "xss_clean");
        $this->form_validation->set_rules("muazzin_father_name", "muazzin_father_name", "xss_clean");
        $this->form_validation->set_rules("muazzin_image", "muazzin_image", "xss_clean");
        $this->form_validation->set_rules("muazzin_username", "muazzin_username", "xss_clean");
        $this->form_validation->set_rules("muazzin_password", "muazzin_password", "xss_clean");



        if ($this->form_validation->run() == FALSE) {


        } else {

            $muazzin_image = $_FILES['muazzin_image']['name'];
            if ($muazzin_image != "") {
                $muazzin_image = random_string('alnum', 10) . '.jpg';

                //insert image
                $config['file_name'] = $muazzin_image;
                $config['upload_path'] = 'uploads/muazzin';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['encrypt_name'] = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('muazzin_image');

                $file_data = $this->upload->data();
            } else {
                $muazzin_image = "default.png";
            }


            //insert data to database

            $data = array(
                'muazzin_name' => $this->input->post('muazzin_name'),
                'muazzin_division' => $this->input->post('muazzin_division'),
                'muazzin_mosque_id' => $this->input->post('muazzin_mosque_id'),
                'muazzin_district' => $this->input->post('muazzin_district'),
                'muazzin_thana' => $this->input->post('muazzin_thana'),
                'muazzin_union' => $this->input->post('muazzin_union'),
                'muazzin_village' => $this->input->post('muazzin_village'),
                'muazzin_address' => $this->input->post('muazzin_address'),
                'muazzin_mobile' => $this->input->post('muazzin_mobile'),
                'muazzin_date_of_birth' => $this->input->post('muazzin_date_of_birth'),
                'muazzin_father_name' => $this->input->post('muazzin_father_name'),
                'muazzin_username' => $this->input->post('muazzin_username'),
                'muazzin_password' => $this->input->post('muazzin_password'),
                'muazzin_nid' => $this->input->post('muazzin_nid'),
                'muazzin_image' => $muazzin_image,
            );

            $this->db->insert('muazzin', $data);

            $data2 = array(
                'full_name'             => $this->input->post('muazzin_name'),
                'user_name' 		=> $this->input->post('muazzin_username'),
                'pass_word' 		=> $this->input->post('muazzin_password'),
                'user_type' 		=> 'marriage_admin',
                'marriage_type' 		=> 'Muazzin',
                'status' 		=> 'ENABLE',

            );

            $this->db->insert('admin_user', $data2);
            //$id = $this->db->insert_id();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');

        }
    }

    function get_muazzin() {
        $this->db->order_by("muazzin_id", "DESC");
        $query = $this->db->get("muazzin");
        return $query->result();
    }

    function get_khatib() {
        $this->db->order_by("khatib_id", "DESC");
        $query = $this->db->get("khatib");
        return $query->result();
    }
    function create_khatib()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("khatib_name", "khatib_name", "xss_clean");
        $this->form_validation->set_rules("khatib_division", "khatib_division", "xss_clean");
        $this->form_validation->set_rules("khatib_mosque_id", "khatib_mosque_id", "xss_clean");
        $this->form_validation->set_rules("khatib_district", "khatib_district", "xss_clean");
        $this->form_validation->set_rules("khatib_thana", "khatib_thana", "xss_clean");
        $this->form_validation->set_rules("khatib_union", "khatib_union", "xss_clean");
        $this->form_validation->set_rules("khatib_village", "khatib_village", "xss_clean");
        $this->form_validation->set_rules("khatib_address", "khatib_address", "xss_clean");
        $this->form_validation->set_rules("khatib_mobile", "khatib_mobile", "xss_clean");
        $this->form_validation->set_rules("khatib_nid", "khatib_nid", "xss_clean");
        $this->form_validation->set_rules("khatib_date_of_birth", "khatib_date_of_birth", "xss_clean");
        $this->form_validation->set_rules("khatib_father_name", "khatib_father_name", "xss_clean");
        $this->form_validation->set_rules("khatib_image", "khatib_image", "xss_clean");
        $this->form_validation->set_rules("khatib_username", "khatib_username", "xss_clean");
        $this->form_validation->set_rules("khatib_password", "khatib_password", "xss_clean");



        if ($this->form_validation->run() == FALSE) {


        } else {

            $khatib_image = $_FILES['khatib_image']['name'];
            if ($khatib_image != "") {
                $khatib_image = random_string('alnum', 10) . '.jpg';

                //insert image
                $config['file_name'] = $khatib_image;
                $config['upload_path'] = 'uploads/khatib';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['encrypt_name'] = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('khatib_image');

                $file_data = $this->upload->data();
            } else {
                $khatib_image = "default.png";
            }


            //insert data to database

            $data = array(
                'khatib_name' => $this->input->post('khatib_name'),
                'khatib_division' => $this->input->post('khatib_division'),
                'khatib_mosque_id' => $this->input->post('khatib_mosque_id'),
                'khatib_district' => $this->input->post('khatib_district'),
                'khatib_thana' => $this->input->post('khatib_thana'),
                'khatib_union' => $this->input->post('khatib_union'),
                'khatib_village' => $this->input->post('khatib_village'),
                'khatib_address' => $this->input->post('khatib_address'),
                'khatib_mobile' => $this->input->post('khatib_mobile'),
                'khatib_date_of_birth' => $this->input->post('khatib_date_of_birth'),
                'khatib_father_name' => $this->input->post('khatib_father_name'),
                'khatib_username' => $this->input->post('khatib_username'),
                'khatib_password' => $this->input->post('khatib_password'),
                'khatib_nid' => $this->input->post('khatib_nid'),
                'khatib_image' => $khatib_image,

            );

            $this->db->insert('khatib', $data);

            $data2 = array(
                'full_name'             => $this->input->post('khatib_name'),
                'user_name' 		=> $this->input->post('khatib_username'),
                'pass_word' 		=> $this->input->post('khatib_password'),
                'user_type' 		=> 'marriage_admin',
                'marriage_type' 		=> 'khatib',
                'status' 		=> 'ENABLE',

            );

            $this->db->insert('admin_user', $data2);
            //$id = $this->db->insert_id();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');

        }
    }

    function get_khatib_home() {
        $this->db->order_by("khatib_id", "DESC");
        $query = $this->db->get("khatib", 4);
        return $query->result();
    }
    function get_muazzin_home() {
        $this->db->order_by("muazzin_id", "DESC");
        $query = $this->db->get("muazzin", 4);
        return $query->result();
    }

    function kazi_delete($kazi_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('kazi_id', $kazi_id);
        $this->db->delete('kazi');
    }

    function get_khatib_id($table, $id)
    {
        $result = $this->db->get_where($table, ['khatib_id' => $id])->row();
        return $result;
    }
    function get_muazzin_id($table, $id)
    {
        $result = $this->db->get_where($table, ['muazzin_id' => $id])->row();
        return $result;
    }


    function update_muazzin() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("muazzin_name", "muazzin_name", "xss_clean");
        $this->form_validation->set_rules("muazzin_division", "muazzin_division", "xss_clean");
        $this->form_validation->set_rules("muazzin_mosque_id", "muazzin_mosque_id", "xss_clean");
        $this->form_validation->set_rules("muazzin_district", "muazzin_district", "xss_clean");
        $this->form_validation->set_rules("muazzin_thana", "muazzin_thana", "xss_clean");
        $this->form_validation->set_rules("muazzin_union", "muazzin_union", "xss_clean");
        $this->form_validation->set_rules("muazzin_village", "muazzin_village", "xss_clean");
        $this->form_validation->set_rules("muazzin_address", "muazzin_address", "xss_clean");
        $this->form_validation->set_rules("muazzin_mobile", "muazzin_mobile", "xss_clean");
        $this->form_validation->set_rules("muazzin_nid", "muazzin_nid", "xss_clean");
        $this->form_validation->set_rules("muazzin_date_of_birth", "muazzin_date_of_birth", "xss_clean");
        $this->form_validation->set_rules("muazzin_father_name", "muazzin_father_name", "xss_clean");
        $this->form_validation->set_rules("muazzin_image", "muazzin_image", "xss_clean");
        $this->form_validation->set_rules("muazzin_username", "muazzin_username", "xss_clean");
        $this->form_validation->set_rules("muazzin_password", "muazzin_password", "xss_clean");



        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
        } else {

            $muazzin_image = $_FILES['muazzin_image']['name'];

            //OLD IMAGE
            $prev_image = $this->input->post('old_image');


            if ($muazzin_image != "") {
                $muazzin_image = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $muazzin_image;
                $config['upload_path'] = 'uploads/muazzin';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('muazzin_image');

                $file_data = $this->upload->data();
            } else {
                $muazzin_image = $prev_image;
            }

            $muazzin_id = $this->uri->segment(3);

            //zone change

            // echo $company_code = $this->input->post('company_code');


            //insert data to database

            $data = array(
                'muazzin_name' => $this->input->post('muazzin_name'),
                'muazzin_division' => $this->input->post('muazzin_division'),
                'muazzin_mosque_id' => $this->input->post('muazzin_mosque_id'),
                'muazzin_district' => $this->input->post('muazzin_district'),
                'muazzin_thana' => $this->input->post('muazzin_thana'),
                'muazzin_union' => $this->input->post('muazzin_union'),
                'muazzin_village' => $this->input->post('muazzin_village'),
                'muazzin_address' => $this->input->post('muazzin_address'),
                'muazzin_mobile' => $this->input->post('muazzin_mobile'),
                'muazzin_date_of_birth' => $this->input->post('muazzin_date_of_birth'),
                'muazzin_father_name' => $this->input->post('muazzin_father_name'),
                'muazzin_username' => $this->input->post('muazzin_username'),
                'muazzin_password' => $this->input->post('muazzin_password'),
                'muazzin_nid' => $this->input->post('muazzin_nid'),
                'muazzin_image' => $muazzin_image,
            );


            $this->db->where('muazzin_id', $muazzin_id);
            $this->db->update('muazzin', $data);
        }
    }
    function update_khatib() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("khatib_name", "khatib_name", "xss_clean");
        $this->form_validation->set_rules("khatib_division", "khatib_division", "xss_clean");
        $this->form_validation->set_rules("khatib_mosque_id", "khatib_mosque_id", "xss_clean");
        $this->form_validation->set_rules("khatib_district", "khatib_district", "xss_clean");
        $this->form_validation->set_rules("khatib_thana", "khatib_thana", "xss_clean");
        $this->form_validation->set_rules("khatib_union", "khatib_union", "xss_clean");
        $this->form_validation->set_rules("khatib_village", "khatib_village", "xss_clean");
        $this->form_validation->set_rules("khatib_address", "khatib_address", "xss_clean");
        $this->form_validation->set_rules("khatib_mobile", "khatib_mobile", "xss_clean");
        $this->form_validation->set_rules("khatib_nid", "khatib_nid", "xss_clean");
        $this->form_validation->set_rules("khatib_date_of_birth", "khatib_date_of_birth", "xss_clean");
        $this->form_validation->set_rules("khatib_father_name", "khatib_father_name", "xss_clean");
        $this->form_validation->set_rules("khatib_image", "khatib_image", "xss_clean");
        $this->form_validation->set_rules("khatib_username", "khatib_username", "xss_clean");
        $this->form_validation->set_rules("khatib_password", "khatib_password", "xss_clean");



        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
        } else {

            $khatib_image = $_FILES['khatib_image']['name'];

            //OLD IMAGE
            $prev_image = $this->input->post('old_image');


            if ($khatib_image != "") {
                $khatib_image = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $khatib_image;
                $config['upload_path'] = 'uploads/khatib';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('khatib_image');

                $file_data = $this->upload->data();
            } else {
                $khatib_image = $prev_image;
            }

            $khatib_id = $this->uri->segment(3);

            //zone change

            // echo $company_code = $this->input->post('company_code');


            //insert data to database

            $data = array(
                'khatib_name' => $this->input->post('khatib_name'),
                'khatib_division' => $this->input->post('khatib_division'),
                'khatib_mosque_id' => $this->input->post('khatib_mosque_id'),
                'khatib_district' => $this->input->post('khatib_district'),
                'khatib_thana' => $this->input->post('khatib_thana'),
                'khatib_union' => $this->input->post('khatib_union'),
                'khatib_village' => $this->input->post('khatib_village'),
                'khatib_address' => $this->input->post('khatib_address'),
                'khatib_mobile' => $this->input->post('khatib_mobile'),
                'khatib_date_of_birth' => $this->input->post('khatib_date_of_birth'),
                'khatib_father_name' => $this->input->post('khatib_father_name'),
                'khatib_username' => $this->input->post('khatib_username'),
                'khatib_password' => $this->input->post('khatib_password'),
                'khatib_nid' => $this->input->post('khatib_nid'),
                'khatib_image' => $khatib_image,
            );


            $this->db->where('khatib_id', $khatib_id);
            $this->db->update('khatib', $data);
        }
    }


}
