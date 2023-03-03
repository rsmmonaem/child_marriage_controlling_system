<?php
ob_start();
class Inventory_management_model  extends CI_Model {


    function create_sup_category() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("supc_name", "supc_name", "xss_clean");
        $this->form_validation->set_rules("supc_code", "supc_code", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_supplier');
        } else {

            //insert data to database
            $data = array(
                'supc_name'             => $this->input->post('supc_name'),
                'supc_code'             => $this->input->post('supc_code')
            );

            $this->db->insert('sup_category', $data);

            //$id = $this->db->insert_id();
            //$page_name = $this->uri->segment(3);

            //if($page_name=="create_supplier"){redirect("super_admin/create_supplier/");}
            //if($page_name=="create_unit_head"){redirect("super_admin/create_unit_head/");}
            //if($page_name=="create_common_user"){redirect("super_admin/create_common_user/");}

            redirect("super_admin/supply_category/");
        }
    }

    function check_supply_category($supc_name) {
        $this->db->where('supc_name', $supc_name);
        $query = $this->db->get("sup_category");
        if ($query->num_rows() > 0) {
            return "supply_category_exists";
        } else {
            return "success";
        }
    }

    function getsup_category() {
        $this->db->order_by("supc_id", "DESC");
        $query = $this->db->get("sup_category");
        return $query->result();
    }

    function supply_category_delete() {
        $supc_id = $this->uri->segment(3);
        $this->db->where('supc_id', $supc_id);
        $this->db->delete('sup_category');
        redirect("super_admin/supply_category");
    }

    function create_supplier() {

        $this->load->library("form_validation");
        // $this->form_validation->set_rules("sup_category", "sup_category", "xss_clean");
        $this->form_validation->set_rules("sup_name", "sup_name", "xss_clean");
        $this->form_validation->set_rules("cont_num", "cont_num", "xss_clean");
        $this->form_validation->set_rules("sup_email", "sup_email", "xss_clean");
        $this->form_validation->set_rules("sup_address", "sup_address", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/create_supplier/error');
        } else {

            //insert data to database
            $data = array(
                'sup_category'         => '',
                'sup_name'             => $this->input->post('sup_name'),
                'cont_num'             => $this->input->post('cont_num'),
                'created_date'         => date('Y-m-d H:i:s'),
                'update_date'         => date('Y-m-d H:i:s'),
                'sup_email'            => $this->input->post('sup_email'),
                'sup_address'        => $this->input->post('sup_address'),
                'balance'            => $this->input->post('balance'),
                'due'                => $this->input->post('due'),
            );

            $this->db->insert('supplier', $data);
            redirect("super_admin/supplier_list/");
        }
    }


    function getsupplier() {
        $this->db->order_by("sup_id", "DESC");
        $query = $this->db->get("supplier");
        return $query->result();
    }

    function getonerow_supplier() {
        $sup_id = $this->uri->segment(3);
        $this->db->where('sup_id', $sup_id);
        $query = $this->db->get("supplier");
        return $query->result();
    }

    function update_supplier() {

        $this->load->library("form_validation");
        // $this->form_validation->set_rules("sup_category", "sup_category", "xss_clean");
        $this->form_validation->set_rules("sup_name", "sup_name", "xss_clean");
        $this->form_validation->set_rules("cont_num", "cont_num", "xss_clean");
        $this->form_validation->set_rules("sup_email", "sup_email", "xss_clean");
        $this->form_validation->set_rules("sup_address", "sup_address", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/supplier_list/error');
        } else {
            $sup_id = $this->input->post('sup_id');

            //insert data to database
            $data = array(
                // 'sup_category'         => $this->input->post('sup_category'),
                'sup_name'             => $this->input->post('sup_name'),
                'cont_num'             => $this->input->post('cont_num'),
                'sup_email'            => $this->input->post('sup_email'),
                'sup_address'        => $this->input->post('sup_address'),
                'balance'            => $this->input->post('balance'),
                'due'                => $this->input->post('due'),
                'update_date'         => date('Y-m-d H:i:s')
            );

            $this->db->where('sup_id', $sup_id);
            $this->db->update('supplier', $data);

            redirect("super_admin/supplier_list");
        }
    }

    function search_supplier() {

        $cont_num = $this->input->post('cont_num');
        $page_name = $this->uri->segment(1);
        if ($page_name == "approval_officer") {
            redirect("approval_officer/supplier_list_search/" . $cont_num);
        }
        if ($page_name == "unit_head") {
            redirect("unit_head/supplier_list_search/" . $cont_num);
        }

        if ($page_name == "super_admin") {
            redirect("super_admin/supplier_list_search/" . $cont_num);
        }
        //redirect(base_url()."super_admin/fao_list_search/");

    }

    function search_supplier_result() {
        $cont_num = $this->uri->segment(3);

        $this->db->where('cont_num', $cont_num);
        $query = $this->db->get("supplier");
        return $query->result();
    }


    // SUPPLIER FUNCTIONS END

    function create_pro_category() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_cat_name", "pro_cat_name", "xss_clean");
        $this->form_validation->set_rules("pro_cat_code", "pro_cat_code", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_product');
        } else {

            //insert data to database
            $data = array(
                'pro_cat_name'             => $this->input->post('pro_cat_name'),
                'pro_cat_code'             => $this->input->post('pro_cat_code')
            );

            $this->db->insert('pro_category', $data);
            //$id = $this->db->insert_id();
            $page_name = $this->uri->segment(3);
            $panel = $this->uri->segment(1);

            redirect("super_admin/pro_category_list");

            // if ($panel == "super_admin" && $page_name == "create_inventory") {
            //     redirect("super_admin/create_inventory/");
            // }
            // if ($panel == "store_keeper" && $page_name == "create_inventory") {
            //     redirect("store_keeper/create_inventory/");
            // }
            // if ($page_name == "category_list") {
            //     redirect("super_admin/category_list/");
            // }
            // if ($page_name == "request_requisition") {
            //     redirect("common_user/request_requisition");
            // }
            // if ($page_name == "system_settings") {
            //     redirect("super_admin/system_settings");
            // }
        }
    }

    function check_product_unique_name($pro_name) {
        $this->db->where('pro_name', $pro_name);
        $query = $this->db->get("product_name");
        if ($query->num_rows() > 0) {
            return "product_name_exists";
        } else {
            return "success";
        }
    }

    function check_product_unique_category($pro_cat_name) {
        $this->db->where('pro_cat_name', $pro_cat_name);
        $query = $this->db->get("pro_category");
        if ($query->num_rows() > 0) {
            return "product_category_exists";
        } else {
            return "success";
        }
    }

    function check_product_brand($pro_brand) {
        $this->db->where('pro_brand', $pro_brand);
        $query = $this->db->get("pro_brand");
        if ($query->num_rows() > 0) {
            return "product_brand_exists";
        } else {
            return "success";
        }
    }

    function check_product_measure($measure_name) {
        $this->db->where('measure_name', $measure_name);
        $query = $this->db->get("measure");
        if ($query->num_rows() > 0) {
            return "product_measure_exists";
        } else {
            return "success";
        }
    }

    function getpro_category() {
        $this->db->order_by("procat_id", "DESC");
        $query = $this->db->get("pro_category");
        return $query->result();
    }

    function pro_cat_delete() {
        $procat_id = $this->uri->segment(3);
        $this->db->where('procat_id', $procat_id);
        $this->db->delete('pro_category');
        redirect("super_admin/category_list");
    }


    function create_pro_brand() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_brand", "pro_brand", "xss_clean");
        $this->form_validation->set_rules("pro_brand_code", "pro_brand_code", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_product');
        } else {

            //insert data to database
            $data = array(
                'pro_brand'             => $this->input->post('pro_brand'),
                'pro_brand_code'         => $this->input->post('pro_brand_code')
            );

            // print_r($data);
            $this->db->insert('pro_brand', $data);
            //$id = $this->db->insert_id();
            $page_name = $this->uri->segment(3);
            $panel = $this->uri->segment(1);

            if ($panel == "super_admin" && $page_name == "create_inventory") {
                redirect("super_admin/create_inventory/");
            }
            if ($panel == "store_keeper" && $page_name == "create_inventory") {
                redirect("store_keeper/create_inventory/");
            }

            if ($page_name == "create_product") {
                redirect("super_admin/create_product/");
            }
            if ($page_name == "category_list") {
                redirect("super_admin/category_list/");
            }
            if ($page_name == "request_requisition") {
                redirect("common_user/request_requisition");
            }
            if ($page_name == "pro_brand_list") {
                redirect("super_admin/pro_brand_list");
            }
        }
    }

    function getpro_brand() {
        $this->db->order_by("brand_id", "DESC");
        $query = $this->db->get("pro_brand");
        return $query->result();
    }

    function pro_brand_delete() {
        $brand_id = $this->uri->segment(3);
        $this->db->where('brand_id', $brand_id);
        $this->db->delete('pro_brand');
        redirect("super_admin/pro_brand_list");
    }


    function create_measure() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("measure_name", "measure_name", "xss_clean");
        $this->form_validation->set_rules("measure_code", "measure_code", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/measure_list');
        } else {

            //insert data to database
            $data = array(
                'measure_name'             => $this->input->post('measure_name'),
                'measure_code'             => $this->input->post('measure_code')
            );

            $this->db->insert('measure', $data);
            //$id = $this->db->insert_id();
            //$page_name=$this->uri->segment(3);

            redirect("super_admin/pro_measure_list/");
        }
    }

    function getmeasure() {
        $this->db->order_by("msr_id", "DESC");
        $query = $this->db->get("measure");
        return $query->result();
    }


    function measure_delete() {
        $msr_id = $this->uri->segment(3);
        $this->db->where('msr_id', $msr_id);
        $this->db->delete('measure');
        redirect("super_admin/pro_measure_list");
    }



    function getqnty_messure() {
        $this->db->order_by("qm_id", "DESC");
        $query = $this->db->get("qnty_messure");
        return $query->result();
    }

    // START OF PRODUCT ENTRY

    function insert_inventory() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_id", "pro_id", "xss_clean");
        $this->form_validation->set_rules("procat_id", "procat_id", "xss_clean");
        $this->form_validation->set_rules("pro_brand", "pro_brand", "xss_clean");
        $this->form_validation->set_rules("sup_id", "sup_id", "xss_clean");
        $this->form_validation->set_rules("invoice_no", "invoice_no", "xss_clean");
        $this->form_validation->set_rules("invoice_date", "invoice_date", "xss_clean");
        $this->form_validation->set_rules("pro_qnty", "pro_qnty", "xss_clean");
        $this->form_validation->set_rules("measure", "measure", "xss_clean");
        $this->form_validation->set_rules("qnty_price", "qnty_price", "xss_clean");
        $this->form_validation->set_rules("sell_price", "sell_price", "xss_clean");

        $this->form_validation->set_rules("total_price", "total_price", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_inventory');
        } else {

            $sup_id = $this->input->post('sup_id');
            $pro_qnty = $this->input->post('pro_qnty');
            $qnty_price = $this->input->post('qnty_price');
            $total_price = $pro_qnty * $qnty_price;

            $data = array(
                'pro_id'                     => $this->input->post('pro_id'),
                'procat_id'                 => $this->input->post('procat_id'),
                'pro_brand'                 => $this->input->post('pro_brand'),
                'sup_id'                     => $sup_id,
                'pro_qnty'                     => $pro_qnty,
                'measure'                     => $this->input->post('measure'),
                'qnty_price'                 => $qnty_price,
                'sell_price'                 => $this->input->post('sell_price'),

                'total_price'                 => $total_price,
                'created_date'                 => date('Y-m-d H:i:s'),
                'update_date'                 => date('Y-m-d H:i:s')
            );

            $this->db->insert('inventory_cart', $data);

            redirect("super_admin/create_inventory");
        }
    }

    function getinventory_cart() {
        $invoice_no = $this->uri->segment(5);
        $this->db->order_by("ivc_id", "DESC");
        $this->db->where('invoice_no', $invoice_no);
        $query = $this->db->get("inventory_cart");
        return $query->result();
    }

    function get_single_inventory_cart($ivc_id) {
        $this->db->where('ivc_id', $ivc_id);
        $query = $this->db->get("inventory_cart");
        return $query->row();
    }

    function get_product_name($pro_id) {
        $this->db->where('pro_id', $pro_id);
        $query = $this->db->get("product_name");
        $result = $query->row();
        return $result->pro_name;
    }

    function get_supplier_name($sup_id) {
        $this->db->where('sup_id', $sup_id);
        $query = $this->db->get("supplier");
        $result = $query->row();
        return $result->sup_name;
    }

    function get_inventory_cart_items() {
        // $invoice_no = $this->uri->segment(5);
        $this->db->order_by("sup_id", "DESC");
        $query = $this->db->get("inventory_cart");
        return $query->result();
    }

    function insert_inventory_checkout() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("invoice_no", "invoice_no", "xss_clean");
        $this->form_validation->set_rules("inventory_no", "inventory_no", "xss_clean");
        $this->form_validation->set_rules("invoice_date", "invoice_date", "xss_clean");
        $this->form_validation->set_rules("sup_id", "sup_id", "xss_clean");
        $this->form_validation->set_rules("intotal", "intotal", "xss_clean");
        $this->form_validation->set_rules("commission", "commission", "xss_clean");
        $this->form_validation->set_rules("payment", "payment", "xss_clean");
        $this->form_validation->set_rules("pay_sys", "pay_sys", "xss_clean");
        $this->form_validation->set_rules("inv_cart_itemids", "inv_cart_itemids", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/inventory_cart');
        } else {

            var_dump($_POST);

            //Getting post values
            $inv_cart_itemids = $_POST["inv_cart_itemids"];

            var_dump($inv_cart_itemids);

            $invoice_no = $this->input->post('invoice_no');
            $inventory_no = $this->input->post('inventory_no');
            $invoice_date = $this->input->post('invoice_date');
            $sup_id = $this->input->post('sup_id');
            $intotal = $this->input->post('intotal');
            $commission = $this->input->post('commission');
            $payment = $this->input->post('payment');
            $pay_sys = $this->input->post('pay_sys');
            $sub_total = $intotal - $commission;
            $due = $sub_total - $payment;

            $data_inventory = array(
                'inventory_no'                 => $inventory_no,
                'invoice_no'                 => $invoice_no,
                'sup_id'                     => $sup_id,
                'invoice_date'                 => $invoice_date,
                'intotal'                     => $intotal,
                'commission'                 => $commission,
                'payment'                     => $payment,
                'pay_sys'                     => $pay_sys,
                'sub_total'                 => $sub_total,
                'due'                         => $due,
                'created_date'                 => date('Y-m-d H:i:s'),
                'update_date'                 => date('Y-m-d H:i:s')
            );

            $this->db->insert('inventory_list', $data_inventory);

            //transfer inventory cart to inventory details
            foreach ($inv_cart_itemids as $ivc_id) {

                $this->db->where('ivc_id', $ivc_id);
                $ivc_row = $this->db->get("inventory_cart")->row();

                $pro_id = $ivc_row->pro_id;
                $procat_id = $ivc_row->procat_id;
                $pro_brand = $ivc_row->pro_brand;
                $sup_id = $sup_id;
                $pro_qnty = $ivc_row->pro_qnty;
                $measure = $ivc_row->measure;
                $qnty_price = $ivc_row->qnty_price;
                $sell_price = $ivc_row->sell_price;
                $total_price = $ivc_row->total_price;
                $created_date = $ivc_row->created_date;

                $data_iv_details = array(
                    'pro_id'                     => $pro_id,
                    'inventory_no'                 => $inventory_no,
                    'procat_id'                 => $procat_id,
                    'pro_brand'                 => $pro_brand,
                    'sup_id'                     => $sup_id,
                    'invoice_no'                 => $invoice_no,
                    'invoice_date'                 => $invoice_date,
                    'pro_qnty'                     => $pro_qnty,
                    'measure'                     => $measure,
                    'qnty_price'                 => $qnty_price,
                    'sell_price'                 => $sell_price,
                    'total_price'                 => $total_price,
                    'created_date'                 => $created_date,
                    'update_date'                 => date('Y-m-d H:i:s')
                );

                $this->db->insert('inventory_details', $data_iv_details);

                // product stock update
                $this->db->where('pro_id', $pro_id);
                $total_stock = $this->db->get("product_name")->row("total_stock");

                $this->db->where('pro_id', $pro_id);
                $instock = $this->db->get("product_name")->row("instock");

                $this->db->where('pro_id', $pro_id);
                $last_price = $this->db->get("product_name")->row("last_price");
                $stock_update = $instock + $pro_qnty;
                $update_total_stock = $total_stock + $pro_qnty;

                $this->db->where('pro_id', $pro_id);
                $pro_name = $this->db->get("product_name")->row("pro_name");

                $this->db->where('pro_id', $pro_id);
                $existing_sup_id = $this->db->get("product_name")->row("sup_id");

                if ($last_price == 0) {
                    $last_price = $qnty_price;
                }
                if ($last_price != $qnty_price) {
                    $last_price = $last_price;
                }

                $data_pro_update = array(
                    'procat_id'                 => $procat_id,
                    'pro_brand'                 => $pro_brand,
                    'pro_name'                     => $pro_name,
                    'sup_id'                     => $sup_id,
                    'total_stock'                 => $update_total_stock,
                    'instock'                     => $stock_update,
                    'measure'                     => $measure,
                    'last_price'                 => $last_price,
                    'latest_price'             => $qnty_price,
                    'sell_price'                 => $sell_price,
                    'update_date'                 => date('Y-m-d H:i:s')
                );

                if ($sup_id == $existing_sup_id) {
                    $this->db->where('pro_id', $pro_id);
                    $this->db->update('product_name', $data_pro_update);
                } else {
                    //Product with Different Supplier 
                    $pro_code = "PRO-" . mt_rand(100, 999);
                    $data_pro_update["pro_code"] = $pro_code;

                    $this->db->insert('product_name', $data_pro_update);
                }

                // delete from inventory_cart
                $this->db->where('ivc_id', $ivc_id);
                $this->db->delete('inventory_cart');
            }

            //supplier balance update
            $this->db->where('sup_id', $sup_id);
            $balance = $this->db->get("supplier")->row("balance");

            $this->db->where('sup_id', $sup_id);
            $last_bal = $this->db->get("supplier")->row("last_bal");

            $this->db->where('sup_id', $sup_id);
            $present_due = $this->db->get("supplier")->row("due");

            $this->db->where('sup_id', $sup_id);
            $present_commission = $this->db->get("supplier")->row("commission");

            $update_balance = $balance + $sub_total;
            $update_last_bal = $balance;
            $update_due = $present_due + $due;
            $update_commission = $present_commission + $commission;

            $data_supplier_update = array(
                'balance'                     => $update_balance,
                'last_bal'                     => $update_last_bal,
                'due'                         => $update_due,
                'commission'                 => $update_commission,
                'update_date'                 => date('Y-m-d H:i:s')
            );

            $this->db->where('sup_id', $sup_id);
            $this->db->update('supplier', $data_supplier_update);

            redirect("super_admin/inventory_list");
        }
    }

    function delete_inventory_cart_item() {
        $ivc_id = $this->uri->segment(3);
        $this->db->where('ivc_id', $ivc_id);
        $this->db->delete('inventory_cart');

        redirect("super_admin/inventory_cart");
    }


    function inventory_cart_delete() {

        $ivc_id = $this->uri->segment(3);
        $sup_id = $this->uri->segment(4);
        $invoice_no = $this->uri->segment(5);
        $invoice_date = $this->uri->segment(6);
        $this->db->where('ivc_id', $ivc_id);
        $this->db->delete('inventory_cart');

        $total_cart = $this->db->count_all('inventory_cart');
        if ($total_cart >= 1) {
            redirect("super_admin/create_inventory/return/" . $sup_id . "/" . $invoice_no . "/" . $invoice_date);
        } else {
            redirect("super_admin/create_inventory/");
        }
    }

    function deleteinventory() {
        $iv_id = $this->uri->segment(3);
        $this->db->where('iv_id', $iv_id);
        $this->db->delete('inventory');
        redirect("super_admin/inventory_list");
    }


    function inventory_submit() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("inventory_no", "inventory_no", "xss_clean");
        $this->form_validation->set_rules("invoice_no", "invoice_no", "xss_clean");
        $this->form_validation->set_rules("intotal", "intotal", "xss_clean");
        $this->form_validation->set_rules("commission", "commission", "xss_clean");
        $this->form_validation->set_rules("payment", "payment", "xss_clean");
        $this->form_validation->set_rules("pay_sys", "pay_sys", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/create_inventory');
        } else {
            $invoice_no = $this->input->post('invoice_no');
            //check invoice no exist or not
            $qry = "SELECT count(*) as cnt from inventory_list where invoice_no= '$invoice_no'";
            $res = $this->db->query($qry, array($invoice_no))->result();

            if ($res[0]->cnt >= 1) {
                $this->db->where('invoice_no', $invoice_no);
                $this->db->delete('inventory_cart');
                $page_name = $this->uri->segment(1);
                if ($page_name == "super_admin") {
                    redirect("super_admin/create_inventory/invoice_error");
                }
                if ($page_name == "store_keeper") {
                    redirect("store_keepers/create_inventory/invoice_error");
                }
            }

            $inventory_no = $this->input->post('inventory_no');
            $invoice_date = $this->input->post('invoice_date');
            $sup_id = $this->input->post('sup_id');
            $intotal = $this->input->post('intotal');
            $commission = $this->input->post('commission');
            $payment = $this->input->post('payment');
            $pay_sys = $this->input->post('pay_sys');
            $sub_total = $intotal - $commission;
            $due = $sub_total - $payment;

            $data_inventory = array(
                'inventory_no'                 => $inventory_no,
                'invoice_no'                 => $invoice_no,
                'sup_id'                     => $sup_id,
                'invoice_date'                 => $invoice_date,
                'intotal'                     => $intotal,
                'commission'                 => $commission,
                'payment'                     => $payment,
                'pay_sys'                     => $pay_sys,
                'sub_total'                 => $sub_total,
                'due'                         => $due,
                'created_date'                 => date('Y-m-d H:i:s'),
                'update_date'                 => date('Y-m-d H:i:s')
            );

            //print_r($data);

            $this->db->insert('inventory_list', $data_inventory);

            //redirect("super_admin/create_inventory/");
            //transfer invetory cart to inventory details
            $this->db->order_by("ivc_id", "DESC");
            $this->db->where('invoice_no', $invoice_no);
            $ivc_query = $this->db->get("inventory_cart")->result();
            foreach ($ivc_query as $ivc_row) {

                $pro_id = $ivc_row->pro_id;
                $procat_id = $ivc_row->procat_id;
                $pro_brand = $ivc_row->pro_brand;
                $sup_id = $ivc_row->sup_id;
                $invoice_no = $ivc_row->invoice_no;
                $invoice_date = $ivc_row->invoice_date;
                $pro_qnty = $ivc_row->pro_qnty;
                $measure = $ivc_row->measure;
                $qnty_price = $ivc_row->qnty_price;
                $sell_price = $ivc_row->sell_price;

                $total_price = $ivc_row->total_price;
                $created_date = $ivc_row->created_date;

                $data_iv_details = array(
                    'pro_id'                     => $pro_id,
                    'inventory_no'                 => $inventory_no,
                    'procat_id'                 => $procat_id,
                    'pro_brand'                 => $pro_brand,
                    'sup_id'                     => $sup_id,
                    'invoice_no'                 => $invoice_no,
                    'invoice_date'                 => $invoice_date,
                    'pro_qnty'                     => $pro_qnty,
                    'measure'                     => $measure,
                    'qnty_price'                 => $qnty_price,
                    'sell_price'                 => $sell_price,

                    'total_price'                 => $total_price,
                    'created_date'                 => $created_date,
                    'update_date'                 => date('Y-m-d H:i:s')
                );

                $this->db->insert('inventory_details', $data_iv_details);

                // product stock update
                $this->db->order_by("pro_id", "DESC");
                $this->db->where('pro_id', $pro_id);
                $total_stock = $this->db->get("product_name")->row("total_stock");
                $this->db->where('pro_id', $pro_id);
                $instock = $this->db->get("product_name")->row("instock");
                $this->db->where('pro_id', $pro_id);
                $last_price = $this->db->get("product_name")->row("last_price");
                $stock_update = $instock + $pro_qnty;
                $update_total_stock = $total_stock + $pro_qnty;
                $this->db->where('pro_id', $pro_id);
                $pro_name = $this->db->get("product_name")->row("pro_name");
                $this->db->where('pro_id', $pro_id);
                $existing_sup_id = $this->db->get("product_name")->row("sup_id");

                if ($last_price == 0) {
                    $last_price = $qnty_price;
                }
                if ($last_price != $qnty_price) {
                    $last_price = $last_price;
                }
                $data_pro_update = array(

                    'procat_id'                 => $procat_id,
                    'pro_brand'                 => $pro_brand,
                    'pro_name'                     => $pro_name,
                    'sup_id'                     => $sup_id,
                    'total_stock'                 => $update_total_stock,
                    'instock'                     => $stock_update,
                    'measure'                     => $measure,
                    'last_price'                 => $last_price,
                    'latest_price'             => $qnty_price,
                    'sell_price'                 => $sell_price,
                    'update_date'                 => date('Y-m-d H:i:s')

                );
                if ($sup_id == $existing_sup_id) {
                    $this->db->where('pro_id', $pro_id);
                    $this->db->update('product_name', $data_pro_update);
                } else {
                    $this->db->insert('product_name', $data_pro_update);
                }

                //supplyer balance update

                $this->db->order_by("sup_id", "DESC");
                $this->db->where('sup_id', $sup_id);
                $balance = $this->db->get("supplier")->row("balance");
                $this->db->where('sup_id', $sup_id);
                $last_bal = $this->db->get("supplier")->row("last_bal");
                $this->db->where('sup_id', $sup_id);
                $present_due = $this->db->get("supplier")->row("due");
                $this->db->where('sup_id', $sup_id);
                $present_commission = $this->db->get("supplier")->row("commission");

                $update_balance = $balance + $sub_total;
                $update_last_bal = $balance;
                $update_due = $present_due + $due;
                $update_commission = $present_commission + $commission;

                $data_supplier_update = array(

                    'balance'                     => $update_balance,
                    'last_bal'                     => $update_last_bal,
                    'due'                         => $update_due,
                    'commission'                 => $update_commission,
                    'update_date'                 => date('Y-m-d H:i:s')

                );

                $this->db->where('sup_id', $sup_id);
                $this->db->update('supplier', $data_supplier_update);
            }

            // delete inventory cart
            $this->db->where('invoice_no', $invoice_no);
            $this->db->delete('inventory_cart');
            $page_name = $this->uri->segment(1);
            if ($page_name == "super_admin") {
                redirect("super_admin/inventory_list/");
            }
            if ($page_name == "store_keeper") {
                redirect("store_keeper/inventory_list/");
            }
        }
    }

    function getinventory_list() {
        $this->db->order_by("ivl_id", "DESC");
        $query = $this->db->get("inventory_list");
        return $query->result();
    }

    function supplier_inventory_list() {
        $sup_id = $this->uri->segment(3);
        $this->db->order_by("ivl_id", "DESC");
        $this->db->where('sup_id', $sup_id);
        $query = $this->db->get("inventory_list");
        return $query->result();
    }

    function getonerow_inventory_list() {
        $inventory_no = $this->uri->segment(3);
        $this->db->where('inventory_no', $inventory_no);
        $query = $this->db->get("inventory_list");
        return $query->result();
    }

    function getonerow_inventory_details() {
        $inventory_no = $this->uri->segment(3);
        $this->db->where('inventory_no', $inventory_no);
        $query = $this->db->get("inventory_details");
        return $query->result();
    }

    function create_pro_name() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("sup_id", "sup_id", "xss_clean");
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
                redirect("super_admin/product_list/pro_name_error");
            } else {

                //insert data to database
                $data = array(
                    'sup_id'             => $this->input->post('sup_id'),
                    'pro_name'             => $this->input->post('pro_name'),
                    'pro_code'             => $this->input->post('pro_code'),
                    'sell_price'             => "0",
                    'instock'             => "0"
                );

                $this->db->insert('product_name', $data);

                redirect("super_admin/product_list/");
            }
        }
    }

    function getproduct_name() {
        $this->db->order_by("pro_id", "DESC");
        $query = $this->db->get("product_name");
        return $query->result();
    }

    function get_product_with_sales() {
        $query = $this->db->query("SELECT * FROM product_name WHERE  total_stock - instock != 0 ORDER BY update_date DESC");
        return $query->result();
    }

    function get_product_by_id($pro_id) {
        $this->db->order_by("pro_id", "DESC");
        $this->db->where('pro_id', $pro_id);
        $query = $this->db->get("product_name");
        return $query->result();
    }

    function getproduct_stock_exists() {
        $query = $this->db->query("SELECT * FROM product_name WHERE instock > 0 ORDER BY update_date DESC");
        return $query->result();
    }

    function get_product_sales_list() {
        $this->db->order_by("created_date", "DESC");
        $query = $this->db->get("customer_purchase");
        return $query->result();
    }


    function get_customer_purchase_product($cp_no) {
        $this->db->order_by("cp_no", "DESC");
        $this->db->where('cp_no', $cp_no);
        $query = $this->db->get("customer_purchase");
        return $query->result();
    }

    function getproduct_name_fw() {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id', $user_id);
        $dis_code = $this->db->get("field_worker")->row("dis_code");
        $this->db->order_by("ds_id", "DESC");
        $this->db->where('dis_code', $dis_code);
        $query = $this->db->get("distributor_stock");
        return $query->result();
    }

    function getdistributor_product() {
        $user_id = $this->session->userdata('user_id');
        $this->db->order_by("ds_id", "DESC");
        $this->db->where('dis_code', $user_id);
        $query = $this->db->get("distributor_stock");
        return $query->result();
    }

    function getdistributor_product_admin() {
        $dis_code = $this->uri->segment(3);
        $this->db->order_by("ds_id", "DESC");
        $this->db->where('dis_code', $dis_code);
        $query = $this->db->get("distributor_stock");
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

    function deleteproductbyid() {
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

    function create_product_requisition() {
        $page_name = $this->uri->segment(3);

        $user_id = $this->session->userdata('user_id');

        $this->db->where('user_id', $user_id);
        $field_worker = $this->db->get("field_worker")->row("field_worker");

        $this->load->library("form_validation");
        $this->form_validation->set_rules("pro_id", "pro_id", "xss_clean");
        $this->form_validation->set_rules("req_stock", "req_stock", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('field_worker/'.$page_name.'/error');
        } else {

            $req_stock = $this->input->post('req_stock');

            $pro_id = $this->input->post('pro_id');
            $this->db->where('pro_id', $pro_id);
            $query = $this->db->get("product_name")->result();

            foreach ($query as $row) {
                $pro_name = $row->pro_name;
                $latest_price = $row->latest_price;
                $sell_price = $row->sell_price;
                $instock = $row->instock;
                $sup_id = $row->sup_id;
            }

            $this->db->where('sup_id', $sup_id);
            $supplier_name = $this->db->get("supplier")->row('sup_name');

            if($latest_price == NULL){
                $latest_price = 0;
            }
            if($sell_price == NULL){
                $sell_price = 0;
            }

            //insert data to database
            $data = array(
                'pro_id'         => $pro_id,
                'pro_name'         => $pro_name,
                'sup_id'         => $sup_id,
                'supplier_name'         => $supplier_name,
                'latest_price'         => $latest_price,
                'sell_price'         => $sell_price,
                'instock'         => $instock,
                'req_stock'         => $req_stock,
                'field_worker'         => $field_worker,
                'fw_id_no'         => $user_id,
                'created_date'         => date('Y-m-d H:i:s'),
            );

            $this->db->insert('product_requisition', $data);
            redirect("field_worker/".$page_name."/");
        }
    }

    function get_all_product_requisition(){
        $this->db->order_by("created_date", "DESC");
        $query = $this->db->get("product_requisition");
        return $query->result();
    }

    function get_product_requisition_by_fieldworker(){
        $fw_id_no = $this->session->userdata('user_id');
        $this->db->where('fw_id_no', $fw_id_no);
        $query = $this->db->get('product_requisition');
        return $query->result();
    }
    
    function delete_product_requisition(){
        $req_id = $this->uri->segment(3);
        $page_name = $this->uri->segment(4);
        $this->db->where('req_id', $req_id);
        $this->db->delete('product_requisition');

        $user_type = $this->session->userdata('user_type');
        
        $redirect_to = "$user_type/$page_name";

        redirect($redirect_to);
    }

    // END OF PRODUCT ENTRY
}
