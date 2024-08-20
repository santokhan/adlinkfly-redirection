<?php

if($_POST['ref']) { 
} else {
$ref=$_SERVER[HTTP_REFERER];
$do = parse_url($ref);
$refer = $do['host'];

if($refer=="ertyf.xyz" ) {
?>

<!--=== PAST YOUR view_banner.cpt CODE HERE ===--!>

<?php } else {

 header("Location: https://ertyf.xyz/?adlinkfly=$link->alias", true, 307);

exit(); 

} } ?>
