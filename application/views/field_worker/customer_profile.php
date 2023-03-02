<?php

//include "inc/head_links.php";
include "inc/form_header_links.php";
include "inc/left_sidebar.php";
include "inc/top_bar.php";
include "inc/customer_profile_content.php";
include "inc/footer.php";
include "inc/dashboard_footer_js.php";
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#product_dropdown').on('change', function() {
            var pro_id = this.value;
            $.ajax({
                url: "<?= base_url() ?>super_admin/get_product_by_id_ajax",
                type: "POST",
                data: {
                    pro_id: pro_id
                },
                cache: false,
                success: function(result) {
                    $("#product_dropdown_info").html(result);
                }
            });
        });

        $(document).on('change', '#product_dropdown_info #purchase_qty', function() {
            var purchase_qty = parseFloat($("#purchase_qty").val());
            var instock = parseFloat($("#pro_instock").val());

            console.log("Purchase Qty Value: " + purchase_qty);
            console.log("Instock Value: " + instock);

            if (purchase_qty < instock) {
                var product_price = parseFloat($("#pro_price").val());
                var purchase_total = purchase_qty * product_price;
                $("#purchase_total").val(purchase_total);
                console.log("Purchase Total Value: " + purchase_total);
            } else {
                $("#purchase_qty").val("");
                $("#purchase_total").val("");
            }
        });

        $(document).on('change', '#product_dropdown_info #down_payment', function() {
            var down_payment = parseFloat($("#down_payment").val());
            var purchase_total = parseFloat($("#purchase_total").val());

            if (down_payment <= purchase_total) {
                // installment_plan = parseInt($("#installment_plan").val());
                pay_due = purchase_total - down_payment;

                // if (installment_plan != 0) {
                //     per_installment = Math.round(pay_due / installment_plan);
                // } else {
                //     per_installment = Math.round(pay_due / 4);
                // }
                // console.log("Down Payment Value: " + down_payment);
                // console.log("Purchase Total Value: " + purchase_total);
                // console.log("Per Installment Value: " + per_installment);
                // console.log("Pay Due Value: " + pay_due);

                $("#pay_due").val(pay_due);
                // $("#per_installment").val(per_installment);
            } else {
                $("#down_payment").val("");
                $("#pay_due").val("");
                $("#per_installment").val("");
                $("#installment_plan").prop('selectedIndex',0);
            }

        });

        $(document).on('change', '#product_dropdown_info #installment_plan', function() {
            var installment_plan = parseInt($("#installment_plan").val());
            var pay_due = parseInt($("#pay_due").val());

            if (installment_plan != 0 && pay_due !=0) {
                per_installment = Math.round(pay_due / installment_plan);
                $("#per_installment").val(per_installment);
            }
        });

        $(document).on('change', '#product_dropdown_info #installment_plan', function() {
            var installment_plan = parseInt($("#installment_plan").val());
            var pay_due = parseInt($("#pay_due").val());

            if (installment_plan != 0 && pay_due !=0) {
                per_installment = Math.round(pay_due / installment_plan);
                $("#per_installment").val(per_installment);
            }
        });

        //cp_payment Model Ajax Request
        $("#modal_cp_payment #modal_cp_no").on('change', function() {
            var cp_no = this.value;
            console.log("Customer Purchase Code :" + cp_no);
            $.ajax({
                url: "<?= base_url() ?>super_admin/get_customer_purchase_product_ajx",
                type: "POST",
                data: {
                    cp_no: cp_no
                },
                cache: false,
                success: function(result) {
                    $("#product_instl_payment_details").html(result);
                    // console.log("Entered into the success");
                    // console.log(result);
                    
                }
            });
        });

        //cp_payment Model Ajax Request
        $(document).on('change', '#modal_cp_payment #pay_installment', function() {
            let pay_installment = parseFloat(this.value);
            let pay_due = parseFloat($("#modal_pay_due").val());
            
            // if ((pay_due - pay_installment) == 0){
            //     $("#modal_cp_payment #next_payment_date").removeAttr("required");
            //     console.log('Due is zero');
            // }
            if ((pay_due - pay_installment) < 0){
                $("#modal_cp_payment #pay_installment").val("");
                // $("#modal_cp_payment #next_payment_date").val("");
                // $("#modal_cp_payment #next_payment_date").attr("required", "true");
            }
            
        });

    }); 
</script>