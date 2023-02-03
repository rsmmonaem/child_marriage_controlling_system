<?php
ob_start();
class Order_management_model  extends CI_Model {

    // START OF ORDER ENTRY

    function insert_order() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("fw_id_no", "fw_id_no", "xss_clean");
        $this->form_validation->set_rules("pro_id", "pro_id", "xss_clean");
        $this->form_validation->set_rules("order_no", "order_no", "xss_clean");
        $this->form_validation->set_rules("order_date", "order_date", "xss_clean");
        $this->form_validation->set_rules("pro_qnty", "pro_qnty", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_order/error');
        } else {

            $fw_id_no = $this->input->post('fw_id_no');
            $this->db->where('fw_id_no', $fw_id_no);
            $field_worker = $this->db->get("field_worker")->row("field_worker");
            $this->db->where('fw_id_no', $fw_id_no);
            $company_code = $this->db->get("field_worker")->row("company_code");
            $this->db->where('fw_id_no', $fw_id_no);
            $dis_code = $this->db->get("field_worker")->row("dis_code");
            $pro_id = $this->input->post('pro_id');
            $this->db->where('pro_id', $pro_id);
            $pro_name = $this->db->get("product_name")->row("pro_name");
            $this->db->where('pro_id', $pro_id);
            $latest_price = $this->db->get("product_name")->row("latest_price");
            $this->db->where('pro_id', $pro_id);
            $sell_price = $this->db->get("product_name")->row("sell_price");
            $instock = $this->db->get("product_name")->row("instock");
            $pro_qnty = $this->input->post('pro_qnty');
            $total_price = $pro_qnty * $sell_price;
            $this->db->where('pro_id', $pro_id);
            $measure = $this->db->get("product_name")->row("measure");
            $order_no = $this->input->post('order_no');
            $order_date = $this->input->post('order_date');



            $data = array(

                'order_no'                     => $order_no,
                'order_date'                 => $order_date,
                'fw_id_no'                     => $fw_id_no,
                'company_code'                 => $company_code,
                'dis_code'                     => $dis_code,
                'pro_id'                     => $pro_id,
                'pro_name'                     => $pro_name,
                'pro_qnty'                     => $pro_qnty,
                'instock'                     => $instock,
                'measure'                     => $measure,
                'sell_price'                 => $sell_price,
                'total_price'                 => $total_price,
                'distribute_price'             => $total_price,

                'created_date'                 => date('Y-m-d H:i:s'),
                'update_date'                 => date('Y-m-d H:i:s')

            );

            //print_r($data);

            $this->db->insert('order_cart', $data);
            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/create_order/return/" . $fw_id_no . "/" . $order_no . "/" . $order_date);
            }
            if ($page_name == "field_worker") {
                redirect("field_worker/create_order/return/" . $fw_id_no . "/" . $order_no . "/" . $order_date);
            }

            //redirect("super_admin/create_inventory/return/".$sup_id. "/".$invoice_no. "/" .$invoice_date);



        }
    }

    function getorder_cart() {
        $order_no = $this->uri->segment(5);
        $this->db->order_by("or_id", "DESC");
        $this->db->where('order_no', $order_no);
        $query = $this->db->get("order_cart");
        return $query->result();
    }


    function order_cart_delete() {

        $or_id = $this->uri->segment(3);
        $fw_id_no = $this->uri->segment(4);
        $order_no = $this->uri->segment(5);
        $order_date = $this->uri->segment(6);
        $this->db->where('or_id', $or_id);
        $this->db->delete('order_cart');

        $total_cart = $this->db->count_all('order_cart');
        if ($total_cart >= 1) {
            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/create_order/return/" . $fw_id_no . "/" . $order_no . "/" . $order_date);
            }
            if ($page_name == "field_worker") {
                redirect("field_worker/create_order/return/" . $fw_id_no . "/" . $order_no . "/" . $order_date);
            }
        } else {
            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/create_order/return/");
            }
            if ($page_name == "field_worker") {
                redirect("field_worker/create_order/");
            }
        }
    }

    function deleteinventory() {
        $iv_id = $this->uri->segment(3);
        $this->db->where('iv_id', $iv_id);
        $this->db->delete('inventory');
        redirect("super_admin/inventory_list");
    }


    function order_submit() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("order_no", "order_no", "xss_clean");
        $this->form_validation->set_rules("intotal", "intotal", "xss_clean");
        $this->form_validation->set_rules("commission", "commission", "xss_clean");
        $this->form_validation->set_rules("payment", "payment", "xss_clean");
        $this->form_validation->set_rules("pay_sys", "pay_sys", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_order/error');
        } else {
            $order_no = $this->input->post('order_no');
            //check invoice no exist or not
            $qry = "SELECT count(*) as cnt from order_list where order_no= '$order_no'";
            $res = $this->db->query($qry, array($order_no))->result();

            if ($res[0]->cnt >= 1) {
                $this->db->where('order_no', $order_no);
                $this->db->delete('order_cart');
                $page_name = $this->uri->segment(1);
                if ($page_name == "super_admin") {
                    redirect("super_admin/create_order/order_error");
                }
                if ($page_name == "field_worker") {
                    redirect("field_worker/create_order/order_error");
                }
            }

            $order_no = $this->input->post('order_no');
            $order_date = $this->input->post('order_date');
            $fw_id_no = $this->input->post('fw_id_no');
            $company_code = $this->input->post('company_code');
            $dis_code = $this->input->post('dis_code');
            $intotal = $this->input->post('intotal');
            $commission_per = $this->input->post('commission');
            $commission = $intotal * $commission_per / 100;
            $payment = $this->input->post('payment');
            $pay_sys = $this->input->post('pay_sys');
            $sub_total = $intotal - $commission;
            $due = $sub_total - $payment;

            $data_order = array(

                'order_no'                 => $order_no,
                'order_date'             => $order_date,
                'fw_id_no'                 => $fw_id_no,
                'company_code'             => $company_code,
                'dis_code'                 => $dis_code,
                'intotal'                     => $intotal,
                'commission_per'             => $commission_per,
                'commission'                 => $commission,
                'payment'                     => $payment,
                'pay_sys'                     => $pay_sys,
                'sub_total'                 => $sub_total,
                'due'                         => $due,
                'status'                     => "pending",
                'created_date'             => date('Y-m-d H:i:s'),
                'update_date'                 => date('Y-m-d H:i:s')

            );

            //print_r($data);

            $this->db->insert('order_list', $data_order);



            $this->db->order_by("or_id", "DESC");
            $this->db->where('order_no', $order_no);
            $or_query = $this->db->get("order_cart")->result();
            foreach ($or_query as $or_row) {

                $order_no = $or_row->order_no;
                $order_date = $or_row->order_date;
                $fw_id_no = $or_row->fw_id_no;
                $company_code = $or_row->company_code;
                $dis_code = $or_row->dis_code;
                $pro_id = $or_row->pro_id;
                $pro_name = $or_row->pro_name;
                $pro_qnty = $or_row->pro_qnty;
                $instock = $or_row->instock;
                $distribute = $or_row->pro_qnty;


                $measure = $or_row->measure;
                $sell_price = $or_row->sell_price;

                $total_price = $or_row->total_price;
                $distribute_price = $or_row->distribute_price;
                $status = "pending";


                $created_date = $or_row->created_date;

                $data_or_details = array(

                    'order_no'                     => $order_no,
                    'order_date'             => $order_date,
                    'fw_id_no'                 => $fw_id_no,
                    'company_code'                 => $company_code,
                    'dis_code'                     => $dis_code,
                    'pro_id'                 => $pro_id,
                    'pro_name'                 => $pro_name,
                    'pro_qnty'                     => $pro_qnty,
                    'instock'                     => $instock,
                    'distribute'                 => $distribute,


                    'measure'                     => $measure,
                    'sell_price'                 => $sell_price,
                    'total_price'                 => $total_price,
                    'distribute_price'             => $distribute_price,
                    'status'                 => $status,


                    'created_date'             => $created_date,
                    'update_date'                 => date('Y-m-d H:i:s')

                );

                $this->db->insert('order_details', $data_or_details);

                // product stock update
                /*$this->db->order_by("pro_id", "DESC");
			$this->db->where('pro_id',$pro_id);
			 $total_stock = $this->db->get("product_name")->row("total_stock");
			 $this->db->where('pro_id',$pro_id);
			 $instock = $this->db->get("product_name")->row("instock");
			$this->db->where('pro_id',$pro_id);
			 $last_price = $this->db->get("product_name")->row("last_price");
			 $stock_update=$instock-$pro_qnty;
			 $update_total_stock=$total_stock-$pro_qnty;
			 $this->db->where('pro_id',$pro_id);
			 $pro_name = $this->db->get("product_name")->row("pro_name");
			 $this->db->where('pro_id',$pro_id);
			 $existing_sup_id = $this->db->get("product_name")->row("sup_id");

			if($last_price==0){$last_price=$qnty_price;}
			if($last_price!=$qnty_price){$last_price=$last_price;}
			$data_pro_update = array(

				'procat_id' 				=>$procat_id,
				'pro_brand' 				=>$pro_brand,
				'pro_name' 					=>$pro_name,
				'sup_id' 					=>$sup_id,
				'total_stock' 				=>$update_total_stock,
				'instock' 					=>$stock_update,
				'measure' 					=>$measure,
				'last_price' 				=>$last_price,
				'latest_price' 				=>$qnty_price,
				'sell_price' 				=>$sell_price,
				'update_date' 				=>date('Y-m-d H:i:s')
							
			);
				if($sup_id==$existing_sup_id){
				$this->db->where('pro_id',$pro_id);
				$this->db->update('product_name', $data_pro_update);
				}
				else{$this->db->insert('product_name', $data_pro_update);}*/
            }
            //Distributor balance update

            $this->db->order_by("dis_code", "DESC");
            $this->db->where('dis_code', $dis_code);
            $balance = $this->db->get("distributor")->row("balance");
            $this->db->where('dis_code', $dis_code);
            $credit = $this->db->get("distributor")->row("credit");
            $this->db->where('dis_code', $dis_code);
            $debit = $this->db->get("distributor")->row("debit");

            $update_credit = $credit + $due;
            $update_debit = $debit + $payment;
            $balance = $update_credit - $update_debit;
            $data_dis_update = array(

                'credit'                     => $update_credit,
                'debit'                     => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'update_date'                 => date('Y-m-d H:i:s')

            );

            $this->db->where('dis_code', $dis_code);
            $this->db->update('distributor', $data_dis_update);


            // distributor ledger

            $dis_ledger = array(


                'description'                 => "Purchase Order/" . $order_no,
                'dis_code'                     => $dis_code,
                'amount'                     => $payment,
                'credit'                     => $update_credit,
                'debit'                         => $update_debit,
                'balance'                     => $update_credit - $update_debit,
                'created_date'             => date('Y-m-d H:i:s')

            );

            $this->db->insert('dis_ledger', $dis_ledger);


            // delete inventory cart
            $this->db->where('order_no', $order_no);
            $this->db->delete('order_cart');
            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/order_list/");
            }
            if ($page_name == "field_worker") {
                redirect("field_worker/order_list/");
            }
        }
    }

    function getorder_list() {
        $this->db->order_by("ol_id", "DESC");
        $query = $this->db->get("order_list");
        return $query->result();
    }

    function getorder_list_pending() {
        $this->db->order_by("ol_id", "DESC");
        $this->db->where('status', "pending");
        $query = $this->db->get("order_list");
        return $query->result();
    }



    function getorder_list_fw() {
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("ol_id", "DESC");
        $this->db->where('fw_id_no', $user_id);
        $query = $this->db->get("order_list");
        return $query->result();
    }

    function distributor_order_list() {
        $dis_code = $this->uri->segment(3);
        $this->db->order_by("dis_code", "DESC");
        $this->db->where('dis_code', $dis_code);
        $query = $this->db->get("order_list");
        return $query->result();
    }

    function fw_order_list() {
        $fw_id_no = $this->uri->segment(3);
        $this->db->order_by("fw_id_no", "DESC");
        $this->db->where('fw_id_no', $fw_id_no);
        $query = $this->db->get("order_list");
        return $query->result();
    }

    function distributor_statement() {
        $dis_code = $this->uri->segment(3);
        $this->db->order_by("dl_id", "DESC");
        $this->db->where('dis_code', $dis_code);
        $query = $this->db->get("dis_ledger");
        return $query->result();
    }

    function getonerow_order_list() {
        $order_no = $this->uri->segment(3);
        $this->db->where('order_no', $order_no);
        $query = $this->db->get("order_list");
        return $query->result();
    }

    function getonerow_order_details() {
        $order_no = $this->uri->segment(3);
        $this->db->where('order_no', $order_no);
        $query = $this->db->get("order_details");
        return $query->result();
    }



    function create_pro_name() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_name", "pro_name", "xss_clean");
        $this->form_validation->set_rules("pro_code", "pro_code", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_product');
        } else {

            //product name check

            $pro_name = $this->input->post('pro_name');
            $qry = "SELECT count(*) as cnt from product_name where pro_name= '$pro_name'";
            $res = $this->db->query($qry, array($pro_name))->result();

            if ($res[0]->cnt == 1) {

                $page_name = $this->uri->segment(1);
                if ($page_name == "super_admin") {
                    redirect("super_admin/create_inventory/pro_name_error");
                }
                if ($page_name == "store_keeper") {
                    redirect("store_keeper/create_inventory/pro_name_error");
                }
            } else {

                //$sup_id=$this->uri->segment(3);
                //$invoice_no=$this->uri->segment(4);
                //$invoice_date=$this->uri->segment(5);

                //insert data to database

                $data = array(

                    'pro_name'             => $this->input->post('pro_name'),
                    'pro_code'             => $this->input->post('pro_code'),
                    'instock'             => "0"

                );

                $this->db->insert('product_name', $data);
                //$id = $this->db->insert_id();
                //$page_name=$this->uri->segment(3);
                //if($sup_id!=""){
                //redirect("super_admin/create_inventory/return/".$sup_id. "/".$invoice_no. "/" .$invoice_date);
                //}

                $page_name = $this->uri->segment(1);
                if ($page_name == "super_admin") {
                    redirect("super_admin/create_inventory/");
                }
                if ($page_name == "store_keeper") {
                    redirect("store_keeper/create_inventory/");
                }
                redirect("super_admin/create_inventory/");

                //if($page_name=="create_inventory"){redirect("super_admin/create_inventory/");}
                //if($page_name=="request_requisition"){redirect("common_user/request_requisition");}
                //if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}
                //redirect("super_admin/create_inventory/");

            }  //if pro name not match close

        }
    }

    function getproduct_name() {
        $this->db->order_by("pro_id", "DESC");
        $query = $this->db->get("product_name");
        return $query->result();
    }

    function pro_name_req() {
        $this->db->order_by("pro_id", "DESC");
        $this->db->where('instock !=', 0);
        $query = $this->db->get("product_name");
        return $query->result();
    }

    function deleteproduct() {
        $pro_id = $this->uri->segment(3);
        $this->db->where('pro_id', $pro_id);
        $this->db->delete('product_name');
        redirect("super_admin/stock_check");
    }


    function outof_stock() {

        $this->db->where('instock', 0);
        //$this->db->where('sup_id !=',0);
        $query = $this->db->get("product_name");
        return $query->result();
        //}

    }

    function deleteoutofstock() {
        $pro_id = $this->uri->segment(3);
        $this->db->where('pro_id', $pro_id);
        $this->db->delete('product_name');
        redirect("super_admin/outof_stock_check");
    }


    // END OF PRODUCT ENTRY

    function order_approved_super_admin() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("order_no", "order_no", "xss_clean");
        $this->form_validation->set_rules("intotal", "intotal", "xss_clean");
        $this->form_validation->set_rules("commission", "commission", "xss_clean");
        $this->form_validation->set_rules("payment", "payment", "xss_clean");
        $this->form_validation->set_rules("pay_sys", "pay_sys", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_order/error');
        } else {


            $order_no = $this->input->post('order_no');
            $company_code = $this->input->post('company_code');
            $dis_code = $this->input->post('dis_code');

            $this->db->order_by("od_id", "DESC");
            $this->db->where('order_no', $order_no);
            $this->db->where('company_code', $company_code);
            $this->db->where('dis_code', $dis_code);

            $or_query = $this->db->get("order_details")->result();
            foreach ($or_query as $or_row) {

                $order_no = $or_row->order_no;
                $company_code = $or_row->company_code;
                $dis_code = $or_row->dis_code;
                $pro_id = $or_row->pro_id;
                $pro_name = $or_row->pro_name;
                $pro_qnty = $or_row->pro_qnty;
                $distribute = $or_row->pro_qnty;
                $measure = $or_row->measure;
                $buy_price = $or_row->sell_price;
                $distribute_price = $or_row->distribute_price;
                $created_date = $or_row->created_date;

                $data_dis_stock = array(

                    'company_code'                 => $company_code,
                    'dis_code'                     => $dis_code,
                    'pro_id'                     => $pro_id,
                    'pro_name'                     => $pro_name,
                    'total_stock'                 => $pro_qnty,
                    'instock'                     => $pro_qnty,
                    'measure'                     => $measure,
                    'buy_price'                 => $buy_price,
                    'created_date'                 => $created_date,
                    'update_date'                 => date('Y-m-d H:i:s')

                );

                $qry = "SELECT count(*) as cnt from distributor_stock where dis_code= '$dis_code' AND pro_id='$pro_id'";
                $res = $this->db->query($qry, array($dis_code and $pro_id))->result();

                if ($res[0]->cnt == 0) {

                    $this->db->insert('distributor_stock', $data_dis_stock);
                } else {

                    $this->db->order_by("pro_id", "DESC");
                    $this->db->where('pro_id', $pro_id);
                    $this->db->where('dis_code', $dis_code);

                    $total_stock = $this->db->get("distributor_stock")->row("total_stock");
                    $update_total_stock = $total_stock + $pro_qnty;
                    $instock = $this->db->get("distributor_stock")->row("instock");
                    $update_instock = $instock + $pro_qnty;

                    $data_pro_update = array(

                        'total_stock'                 => $update_total_stock,
                        'instock'                     => $update_instock,
                        'update_date'                 => date('Y-m-d H:i:s')

                    );

                    $this->db->where('pro_id', $pro_id);
                    $this->db->where('dis_code', $dis_code);
                    $this->db->update('distributor_stock', $data_pro_update);
                }


                $this->db->order_by("pro_id", "DESC");
                $this->db->where('pro_id', $pro_id);
                $instock = $this->db->get("product_name")->row("instock");
                $update_instock = $instock - $pro_qnty;

                $data_pro_update2 = array(

                    'instock'                     => $update_instock,
                    'update_date'                 => date('Y-m-d H:i:s')

                );

                $this->db->where('pro_id', $pro_id);
                $this->db->update('product_name', $data_pro_update2);

                //update product order status

                $update_status = array(

                    'status'                     => "approved",
                    'update_date'                 => date('Y-m-d H:i:s')

                );

                $this->db->where('order_no', $order_no);
                $this->db->update('order_details', $update_status);
                $this->db->where('order_no', $order_no);
                $this->db->update('order_list', $update_status);
            }

            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/order_list/");
            }
            if ($page_name == "field_worker") {
                redirect("field_worker/order_list/");
            }
        }
    }
}
