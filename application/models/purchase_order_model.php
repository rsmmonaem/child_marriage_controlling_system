<?php
ob_start();
class Purchase_order_model  extends CI_Model {


    function insert_purchase_order() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_name", "pro_name", "xss_clean");
        $this->form_validation->set_rules("procat_id", "procat_id", "xss_clean");
        $this->form_validation->set_rules("pro_brand", "pro_brand", "xss_clean");
        $this->form_validation->set_rules("pro_qnty", "pro_qnty", "xss_clean");
        $this->form_validation->set_rules("qnty_messure", "qnty_messure", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('store_keeper/purchase_order/xss_error');
        } else {

            $user_id = $this->session->userdata('user_id');
            $ip_add = $this->input->ip_address();
            $pro_name = $this->input->post('pro_name');

            $qry = "SELECT count(*) as cnt from product_name where pro_name= '$pro_name'";
            $res = $this->db->query($qry, array($pro_name))->result();

            /*if ($res[0]->cnt >= 1) {

        	redirect("store_keeper/request_purchase/pro_name_error");
        }*/

            //else{		
            //insert data to database

            $data = array(

                'pro_name'                 => $this->input->post('pro_name'),
                'procat_id'             => $this->input->post('procat_id'),
                'pro_brand'             => $this->input->post('pro_brand'),
                'pro_qnty'                 => $this->input->post('pro_qnty'),
                'qnty_messure'             => $this->input->post('qnty_messure'),
                'ip_add'                 => $ip_add,
                'user_id'                 => $user_id,
                'status'                 => "entry",
                'next_level'             => "admin",
                'created_date'             => date('Y-m-d H:i:s'),
                'update_date'             => date('Y-m-d H:i:s')


            );

            $this->db->insert('purchase_order_details', $data);
            //$id = $this->db->insert_id();
            //$page_name=$this->uri->segment(2);
            $page_name = $this->uri->segment(1);
            if ($page_name == "unit_head") {
                redirect("unit_head/request_requisition/");
            }
            redirect("store_keeper/purchase_order/");

            //} //last else close	
        } //first else close	
    }

    function getpurchase_order_entry() {

        $user_id = $this->session->userdata('user_id');
        //$ip_add= $this->input->ip_address();
        $this->db->order_by("po_id", "DESC");
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 'entry');
        $query = $this->db->get("purchase_order_details");
        return $query->result();
    }

    function purchase_order_delete() {
        $po_id = $this->uri->segment(3);
        $this->db->where('po_id', $po_id);
        $this->db->delete('purchase_order_details');
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/request_requisition/");
        }
        redirect("store_keeper/purchase_order");
    }


    function purchase_order_submit() {

        $user_id = $this->session->userdata('user_id');
        //$ip_add= $this->input->ip_address();

        //insert data to database

        $data = array(

            'po_no'             => $this->input->post('po_no'),
            'status'             => "approved",
            'update_date'         => date('Y-m-d H:i:s')
        );
        $this->db->where('user_id', $user_id);
        //$this->db->where('ip_add',$ip_add);
        $this->db->where('status', 'entry');
        $this->db->update('purchase_order_details', $data);
        //in-total calculation

        //user_level
        $page_name = $this->uri->segment(1);
        if ($page_name == "store_keeper") {
            $next_level = "admin";
        }

        if ($page_name == "unit_head") {
            $next_level = "admin";
        }


        $data2 = array(

            'po_no'             => $this->input->post('po_no'),
            'status'             => "pending",
            'next_level'         => $next_level,
            'user_id'             => $user_id,
            'created_date'         => date('Y-m-d H:i:s'),
            'update_date'         => date('Y-m-d H:i:s')
        );




        $this->db->insert('purchase_order_list', $data2);
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/requisition_list/");
        }
        redirect("store_keeper/purchase_order_list");
    }


    function getpurchase_order() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        //$this->db->where('status','entry');
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }

    function getpurchase_order_pending() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('status', 'pending');
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }

    function getpurchase_order_approved() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('status', 'approved');
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }

    function getpurchase_order_reject() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('status', 'reject');
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }

    function getpurchase_order_no() {
        $po_no = $this->uri->segment(3);
        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('po_no', $po_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }

    function getpurchase_order_details() {
        $po_no = $this->uri->segment(3);
        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("po_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('po_no', $po_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("purchase_order_details");
        return $query->result();
    }

    function getpurchase_order_limit() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("pol_id", "DESC");
        //$this->db->where('user_id',$user_id);
        $this->db->where('status', 'pending');
        $this->db->limit(5);
        $query = $this->db->get("purchase_order_list");
        return $query->result();
    }



    function purchase_order_reject() {


        //insert data to database
        $po_no = $this->input->post('po_no');
        $data = array(

            'status'             => "reject",
            'next_level'         => "reject",
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "reject",
            'next_level'         => "reject",
            'update_date'         => date('Y-m-d H:i:s')
        );


        $this->db->where('po_no', $po_no);
        $this->db->update('purchase_order_details', $data);
        $this->db->where('po_no', $po_no);
        $this->db->update('purchase_order_list', $data2);
        $page_name = $this->uri->segment(1);

        if ($page_name == "approval_officer") {
            redirect("approval_officer/purchase_order_list");
        }
        if ($page_name == "super_admin") {
            redirect("super_admin/purchase_order_list");
        }
    }


    function purchase_order_approved() {


        //insert data to database
        $po_no = $this->input->post('po_no');
        //$status=$this->input->post('status');

        $page_name = $this->uri->segment(1);
        if ($page_name == "approval_officer") {
            $next_level = "approved";
            //$status="approved";
        }

        if ($page_name == "super_admin") {
            $next_level = "fao";
            //$status="approved";
        }
        $data = array(

            //'status' 			=>$status,
            'next_level'         => $next_level,
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "approved",
            'next_level'         => $next_level,
            'update_date'         => date('Y-m-d H:i:s')
        );


        $this->db->where('po_no', $po_no);
        $this->db->update('purchase_order_details', $data);
        $this->db->where('po_no', $po_no);
        $this->db->update('purchase_order_list', $data2);


        if ($page_name == "approval_officer") {
            redirect("approval_officer/purchase_order_list");
        }
        if ($page_name == "super_admin") {
            redirect("super_admin/purchase_order_list");
        }
    }


    function purchase_order_view_update() {

        $po_id = $this->input->post('po_id');
        $po_no = $this->input->post('po_no');
        $pro_qnty = $this->input->post('pro_qnty');



        $data = array(

            'pro_qnty'             => $pro_qnty
        );

        $this->db->where('po_id', $po_id);
        $this->db->update('purchase_order_details', $data);

        $page_name = $this->uri->segment(1);
        if ($page_name == "approval_officer") {
            redirect("approval_officer/purchase_order_view/" . $po_no . "");
        }

        if ($page_name == "super_admin") {
            redirect("super_admin/purchase_order_view/" . $po_no . "");
        }
    }


    function purchase_order_view_reject() {

        $po_id = $this->input->post('po_id');
        $po_no = $this->input->post('po_no');


        $data = array(

            'status'             => "reject",
            'next_level'         => "admin"

        );

        $this->db->where('po_id', $po_id);
        $this->db->update('purchase_order_details', $data);

        $page_name = $this->uri->segment(1);
        if ($page_name == "approval_officer") {
            redirect("approval_officer/purchase_order_view/" . $po_no . "");
        }

        if ($page_name == "super_admin") {
            redirect("super_admin/purchase_order_view/" . $po_no . "");
        }
    }

    function purchase_order_view_approve() {

        $po_id = $this->input->post('po_id');
        $po_no = $this->input->post('po_no');
        $page_name = $this->uri->segment(1);
        if ($page_name == "approval_officer") {
            $next_level = "complited";
        }

        if ($page_name == "super_admin") {
            $next_level = "fao";
        }

        $data = array(

            'status'             => "approved"
            //'next_level' 		=>$next_level

        );

        $this->db->where('po_id', $po_id);
        $this->db->update('purchase_order_details', $data);


        if ($page_name == "approval_officer") {
            redirect("approval_officer/purchase_order_view/" . $po_no . "");
        }

        if ($page_name == "super_admin") {
            redirect("super_admin/purchase_order_view/" . $po_no . "");
        }
    }
}
