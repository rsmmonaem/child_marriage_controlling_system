<?php

//include "inc/head_links.php";
include "inc/form_header_links.php";
include "inc/left_sidebar.php";
include "inc/top_bar.php";
include "inc/edit_field_worker_content.php";
include "inc/footer.php";
include "inc/form_footer_js.php";
?>
<script>
    $(document).ready(function() {
        $('#zonal_dropdown').on('change', function() {
            let zonal_code = this.value;
            console.log("Zonal Code: " + zonal_code);
            $.ajax({
                url: "<?= base_url() ?>super_admin/get_branch_ajax",
                type: "POST",
                data: {
                    zonal_code: zonal_code
                },
                cache: false,
                success: function(result) {
                    $("#branch_dropdown").html(result);
                    $('#pickpoint_dropdown').html("<option value='' selected disabled hidden>Choose here</option>");
                }
            });
        });
        $('#branch_dropdown').on('change', function() {
            var branch_code = this.value;
            console.log("Branch Code: " + branch_code);
            $.ajax({
                url: "<?= base_url() ?>super_admin/get_pickpoint_ajax",
                type: "POST",
                data: {
                    branch_code: branch_code
                },
                cache: false,
                success: function(result) {
                    $("#pickpoint_dropdown").html(result);
                }
            });
        });
    });
</script>