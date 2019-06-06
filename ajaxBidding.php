<?php

include("includes/db.php");
include("functions/functions.php");

$arr = json_decode($_POST['arr']);

foreach($arr as $arr1){

    $query = "INSERT INTO bid
    (customer_id, dealer_id, product_id) 
    VALUES ('".$arr1->customer_id."',
    '".$arr1->dealer_id."',
    '".$arr1->product_id."')";

    $run_query = mysqli_query($con,$query);

    $ip_add = getRealIpUser();

    $query1 = "DELETE FROM cart
     WHERE ip_add= '$ip_add'";

    $run_query1 = mysqli_query($con,$query1);

    
}
if($run_query1){
        echo json_encode("success");

    }
    else{
        echo json_encode("failed");
    }
?>