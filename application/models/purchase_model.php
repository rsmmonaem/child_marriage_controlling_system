<?php
ob_start();
class Purchase_model  extends CI_Model {


    function insert_request_purchase() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_name", "pro_name", "xss_clean");
        $this->form_validation->set_rules("procat_id", "procat_id", "xss_clean");
        $this->form_validation->set_rules("pro_brand", "pro_brand", "xss_clean");
        $this->form_validation->set_rules("pro_qnty", "pro_qnty", "xss_clean");
        $this->form_validation->set_rules("qnty_messure", "qnty_messure", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('common_user/request_purchase');
        } else {

            $user_id = $this->session->userdata('user_id');
            $ip_add = $this->input->ip_address();
            $pro_name = $this->input->post('pro_name');

            $qry = "SELECT count(*) as cnt from product_name where pro_name= '$pro_name'";
            $res = $this->db->query($qry, array($pro_name))->result();

            if ($res[0]->cnt >= 1) {

                redirect("common_user/request_purchase/pro_name_error");
            } else {
                //insert data to database

                $data = array(

                    'pro_name'                 => $this->input->post('pro_name'),
                    'procat_id'             => $this->input->post('pro_name'),
                    'pro_brand'             => $this->input->post('pro_name'),
                    'pro_qnty'                 => $this->input->post('pro_qnty'),
                    'qnty_messure'             => $this->input->post('qnty_messure'),
                    'ip_add'                 => $ip_add,
                    'user_id'                 => $user_id,
                    'status'                 => "entry",
                    'next_level'             => "admin",
                    'created_date'             => date('Y-m-d H:i:s'),
                    'update_date'             => date('Y-m-d H:i:s')


                );

                $this->db->insert('request_purchase_entry', $data);
                //$id = $this->db->insert_id();
                //$page_name=$this->uri->segment(2);
                $page_name = $this->uri->segment(1);
                if ($page_name == "unit_head") {
                    redirect("unit_head/request_requisition/");
                }
                redirect("common_user/request_purchase/");
            } //last else close	
        } //first else close	
    }

    function getrequest_purchase() {

        $user_id = $this->session->userdata('user_id');
        //$ip_add= $this->input->ip_address();
        $this->db->order_by("rp_id", "DESC");
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 'entry');
        $query = $this->db->get("request_purchase_entry");
        return $query->result();
    }

    function request_purchase_delete() {
        $rp_id = $this->uri->segment(3);
        $this->db->where('rp_id', $rp_id);
        $this->db->delete('request_purchase_entry');
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/request_requisition/");
        }
        redirect("common_user/request_purchase");
    }


    function request_purchase_submit() {

        $user_id = $this->session->userdata('user_id');
        //$ip_add= $this->input->ip_address();

        //insert data to database

        $data = array(

            'rp_no'             => $this->input->post('rp_no'),
            'status'             => "pending",
            'update_date'         => date('Y-m-d H:i:s')
        );
        $this->db->where('user_id', $user_id);
        //$this->db->where('ip_add',$ip_add);
        $this->db->where('status', 'entry');
        $this->db->update('request_purchase_entry', $data);
        //in-total calculation

        //user_level
        $page_name = $this->uri->segment(1);
        if ($page_name == "common_user") {
            $next_level = "admin";
        }

        if ($page_name == "unit_head") {
            $next_level = "admin";
        }


        $data2 = array(

            'rp_no'             => $this->input->post('rp_no'),
            'status'             => "pending",
            'next_level'         => $next_level,
            'user_id'             => $user_id,
            'created_date'         => date('Y-m-d H:i:s'),
            'update_date'         => date('Y-m-d H:i:s')
        );




        $this->db->insert('request_purchase_list', $data2);
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/requisition_list/");
        }
        redirect("common_user/request_purchase");
    }


    function getuser_purchase_request() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("rpl_id", "DESC");
        $this->db->where('user_id', $user_id);
        //$this->db->where('status','entry');
        $query = $this->db->get("request_purchase_list");
        return $query->result();
    }

    function getpurchase_reqno() {
        $rp_no = $this->uri->segment(3);
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("rpl_id", "DESC");
        $this->db->where('user_id', $user_id);
        $this->db->where('rp_no', $rp_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("request_purchase_list");
        return $query->result();
    }

    function getpurchase_reqno_details() {
        $rp_no = $this->uri->segment(3);
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("rp_id", "DESC");
        $this->db->where('user_id', $user_id);
        $this->db->where('rp_no', $rp_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("request_purchase_entry");
        return $query->result();
    }

    function getuser_purchase_request_limit() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("rpl_id", "DESC");
        $this->db->where('user_id', $user_id);
        //$this->db->where('status','entry');
        $this->db->limit(5);
        $query = $this->db->get("request_purchase_list");
        return $query->result();
    }

    function getdistribution_requisition_limit() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('next_level', "distribution");
        //$this->db->where('status','entry');
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }



    function getstore_keeper_requisition_all() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('status', "approved");
        //$this->db->where('status','entry');
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getstore_keeper_requisition_pending() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('next_level', "distribution");
        //$this->db->where('status','entry');
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getstore_keeper_requisition_approved() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('next_level', "complited");
        //$this->db->where('status','entry');
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getfao_requisition_limit() {

        //$user_id= $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        //$this->db->where('user_name',$user_id);
        $this->db->where('status', 'pending');
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function requisition_limit_admin() {

        $this->db->order_by("sr_id", "DESC");
        $this->db->limit(5);
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getunit_head_requisition() {


        $this->db->order_by("sr_id", "DESC");
        //$this->db->where('user_name',$user_name);
        //$this->db->where('next_level','unit_head');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getunit_head_requisition_own() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        //$this->db->where('next_level','unit_head');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getunit_head_requisition_user() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('next_level', "unit_head");
        //$this->db->where('next_level','unit_head');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getrequisition_reqno() {
        $req_no = $this->uri->segment(3);
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('req_no', $req_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getrequisition_reqno_admin() {
        $req_no = $this->uri->segment(3);

        $this->db->where('req_no', $req_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getrequisition_reqno_unit_head() {
        $req_no = $this->uri->segment(3);
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('req_no', $req_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getrequisition_reqno_details() {
        $req_no = $this->uri->segment(3);
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("rr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('req_no', $req_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("request_requisition");
        return $query->result();
    }

    function getrequisition_reqno_details_unit_head() {
        $req_no = $this->uri->segment(3);

        $this->db->order_by("rr_id", "DESC");

        $this->db->where('req_no', $req_no);

        //$this->db->where('status','entry');
        $query = $this->db->get("request_requisition");
        return $query->result();
    }

    function getuser_requisition_pending() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('status', 'pending');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function user_requisition_pending_unit_head() {


        $this->db->order_by("sr_id", "DESC");
        $this->db->where('next_level', "unit_head");
        $this->db->where('status', 'pending');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function unit_head_requisition_pending() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('status', 'pending');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function requisition_pending_admin() {

        $this->db->order_by("sr_id", "DESC");
        $this->db->where('status', 'pending');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getuser_requisition_approved() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('status', 'approved');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getuser_requisition_approved_admin() {

        $this->db->order_by("sr_id", "DESC");
        $this->db->where('status', 'approved');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }


    function getuser_requisition_reject() {

        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("sr_id", "DESC");
        $this->db->where('user_name', $user_id);
        $this->db->where('status', 'reject');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }

    function getuser_requisition_reject_admin() {

        $this->db->order_by("sr_id", "DESC");
        $this->db->where('status', 'reject');
        $query = $this->db->get("submit_requisition");
        return $query->result();
    }


    function requisition_reject() {


        //insert data to database
        $req_no = $this->input->post('req_no');
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


        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/requisition_list");
        }
        if ($page_name == "approval_officer") {
            redirect("approval_officer/requisition_list");
        }
        if ($page_name == "super_admin") {
            redirect("super_admin/requisition_list");
        }
    }


    function requisition_approved() {


        //insert data to database
        $req_no = $this->input->post('req_no');
        $data = array(

            'status'             => "processing",
            'next_level'         => "fao",
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "processing",
            'next_level'         => "fao",
            'update_date'         => date('Y-m-d H:i:s')
        );


        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        redirect("unit_head/requisition_list");
    }


    function requisition_approved_fao() {


        //insert data to database
        $req_no = $this->input->post('req_no');
        $data = array(

            'status'             => "processing",
            'next_level'         => "admin",
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "processing",
            'next_level'         => "admin",
            'update_date'         => date('Y-m-d H:i:s')
        );


        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        redirect("approval_officer/requisition_list");
    }



    function requisition_approved_super_admin() {


        //insert data to database
        $req_no = $this->input->post('req_no');
        $data = array(

            'status'             => "approved",
            'next_level'         => "distribution",
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "approved",
            'next_level'         => "distribution",
            'update_date'         => date('Y-m-d H:i:s')
        );


        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        redirect("super_admin/requisition_list");
    }


    function requisition_view_update() {

        $pro_id = $this->input->post('pro_id');
        $qnty_price = $this->input->post('qnty_price');
        $req_no = $this->input->post('req_no');
        $pro_qnty = $this->input->post('pro_qnty');
        $total_price = $pro_qnty * $qnty_price;
        $data = array(

            'pro_qnty'             => $pro_qnty,
            'total_price'         => $total_price
        );
        $this->db->where('pro_id', $pro_id);
        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $query = $this->db->select_sum('total_price', 'intotal');
        $this->db->where('req_no', $req_no);
        $query = $this->db->get('request_requisition');
        $result = $query->result();
        $intotal_price = $result[0]->intotal;


        $data2 = array(

            'intotal_price'     => $intotal_price
        );
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        $page_name = $this->uri->segment(1);
        if ($page_name == "unit_head") {
            redirect("unit_head/user_requisition_view/" . $req_no . "");
        }

        if ($page_name == "approval_officer") {
            redirect("approval_officer/requisition_view/" . $req_no . "");
        }
        redirect("super_admin/requisition_view/" . $req_no . "");
    }


    function requisition_distribute() {


        //insert data to database
        $req_no = $this->input->post('req_no');
        $user_name = $this->input->post('user_name');
        $intotal_price = $this->input->post('intotal_price');

        $data = array(

            'status'             => "approved",
            'next_level'         => "complited",
            'update_date'         => date('Y-m-d H:i:s')
        );

        $data2 = array(

            'status'             => "approved",
            'next_level'         => "complited",
            'update_date'         => date('Y-m-d H:i:s')
        );

        //distibution
        $db_no = 'DB-' . mt_rand(1000, 9999);
        $this->db->order_by("rr_id", "DESC");
        $this->db->where('req_no', $req_no);
        $req_query = $this->db->get("request_requisition")->result();
        foreach ($req_query as $req_row) {
            $user_name = $req_row->user_name;
            $pro_id = $req_row->pro_id;
            $pro_qnty = $req_row->pro_qnty;
            $measure = $req_row->qnty_messure;
            $qnty_price = $req_row->qnty_price;
            $total_price = $req_row->total_price;
            $this->db->where('pro_id', $pro_id);
            $instock = $this->db->get("product_name")->row("instock");
            $after_db_stock = $instock - $pro_qnty;

            //submit distribution details
            $db_details = array(

                'user_name'         => $user_name,
                'db_no'             => $db_no,
                'req_no'             => $req_no,
                'pro_id'             => $pro_id,
                'pro_qnty'             => $pro_qnty,
                'measure'             => $measure,
                'qnty_price'         => $qnty_price,
                'total_price'         => $total_price,
                'instock'             => $instock,
                'after_db_stock'     => $after_db_stock,
                'update_date'         => date('Y-m-d H:i:s')
            );
            $this->db->insert('distribution_details', $db_details);

            $update_pro = array(

                'instock'             => $after_db_stock,
                'update_date'         => date('Y-m-d H:i:s')
            );

            $this->db->where('pro_id', $pro_id);
            $this->db->update('product_name', $update_pro);
        }



        $insert_db_list = array(

            'db_no'             => $db_no,
            'req_no'             => $req_no,
            'user_name'         => $user_name,
            'intotal_price'     => $intotal_price,
            'update_date'         => date('Y-m-d H:i:s')
        );

        $this->db->insert('distribution_list', $insert_db_list);



        $this->db->where('req_no', $req_no);
        $this->db->update('request_requisition', $data);
        $this->db->where('req_no', $req_no);
        $this->db->update('submit_requisition', $data2);
        redirect("store_keeper/requisition_list");
    }

    function getstore_keeper_distribution_all() {


        $this->db->order_by("dbl_id", "DESC");
        //$this->db->where('status',"approved");
        //$this->db->where('status','entry');
        //$this->db->limit(5);
        $query = $this->db->get("distribution_list");
        return $query->result();
    }
}
