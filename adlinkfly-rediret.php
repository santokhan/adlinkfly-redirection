<?php

if ($_POST['ref']) {
    // Maybe do not have any route for https://teraboxfan.com/alias POST method
} else {
    // For GET requests
    $ref = $_SERVER[HTTP_REFERER];
    $do = parse_url($ref);
    $refer = $do['host'];

    if ($refer == "ertyf.xyz") {
        ?>

        <!--=== PAST YOUR view_banner.cpt CODE HERE ===--!>

<?php
    } else {

        header("Location: https://ertyf.xyz/?adlinkfly=$link->alias", true, 307);

        exit();

    }
}
?>
