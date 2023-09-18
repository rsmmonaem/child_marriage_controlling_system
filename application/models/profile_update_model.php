<?php
ob_start();
class profile_update_model  extends CI_Model
{



    function get_profile_update_id($table, $user_name)
    {
        $result = $this->db->get_where($table, ['user_name' => $user_name])->row();
        return $result;
    }
    function update_profile(){

        $data = array(
            'full_name' => $this->input->post('full_name'),
            'user_name' => $this->input->post('user_name'),
            'pass_word' => $this->input->post('pass_word'),
        );
        $u_id = $this->input->post('u_id');

        $this->db->where('u_id', $u_id);
        $this->db->update('admin_user', $data);
    }
    function update_profile_trainee(){
//admin panel
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'pass_word' => $this->input->post('pass_word'),
        );
        $u_id = $this->input->post('u_id');
        $this->db->where('u_id', $u_id);
        $this->db->update('admin_user', $data);
//trainee panel

        $data2 = array(
            'trainee_name' => $this->input->post('full_name'),
            'trainee_password' => $this->input->post('pass_word'),
        );
        $trainee_username = $this->input->post('user_name');
        $this->db->where('trainee_username', $trainee_username);
        $this->db->update('trainee', $data2);
    }
	function update_profile_marriage_admin(){

        $u_id = $this->input->post('u_id');
        $marriage_type = $this->input->post('marriage_type');
        $user_name = $this->session->userdata('user_name');

        $data = array(
            'full_name' => $this->input->post('full_name'),
            'pass_word' => $this->input->post('pass_word'),
        );

        $this->db->where('u_id', $u_id);
        $this->db->update('admin_user', $data);

        $data2 = array(
            $marriage_type.'_name' => $this->input->post('full_name'),
            $marriage_type.'_password' => $this->input->post('pass_word'),
        );

        $this->db->where($marriage_type.'_username', $user_name);
        $this->db->update($marriage_type, $data2);
    }

	function update_profile_inst(){

        $data = array(
            'full_name' => $this->input->post('full_name'),
            'pass_word' => $this->input->post('pass_word'),
        );
        $u_id = $this->input->post('u_id');

        $this->db->where('u_id', $u_id);
        $this->db->update('admin_user', $data);

		$data2 = array(
            'inst_name' => $this->input->post('full_name'),
            'inst_password' => $this->input->post('pass_word'),
        );
        $user_name = $this->input->post('user_name');
        $this->db->where('inst_username', $user_name);
        $this->db->update('institute', $data2);
    }




}
