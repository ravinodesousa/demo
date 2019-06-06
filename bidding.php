

<div class="box"><!-- box Begin -->
   
    <h1 class="text-center">Bidding</h1>  
    <label>Dealers Added To Bid</label>
    
<script>
    arr = [];
 </script>
   <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    

                       
    $ip_add = getRealIpUser();
    
    $select_cart = "select * from cart where ip_add='$ip_add'";
    
    $run_cart = mysqli_query($con,$select_cart);
    
    
    while($row = mysqli_fetch_array($run_cart)){

        $product = "select * from products where product_id=".$row['p_id'];

        $run_prod = mysqli_query($con,$product);
       
        $row_customer = mysqli_fetch_array($run_prod);
    
        $product_title = $row_customer['product_title'];
  
        $product1 = "select products.product_id,
        products.product_title,
        products.product_price,
        dealers.dealer_company,
        dealers.dealer_id from
         products INNER JOIN dealers ON 
         products.added_by = dealers.dealer_id
           where products.product_title='".$product_title."'";

        $run_prod1 = mysqli_query($con,$product1);

        echo "<br/><hr/><label>Product Name :</label>".$product_title;

        echo "<table class='table text-center'>
        <tr> 
            <td>Company</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        ";

        $arr = [];

        while($row_products = mysqli_fetch_array($run_prod1)){
            $row_products["customer_id"] = $_SESSION['customer_id'];
            array_push($arr,$row_products);

            echo "<tr id='".$row_products['0']."'>
                <td>".$row_products['dealer_company']."</td>
                <td>".$row_products['product_price']."</td>
                <td><button class='btn btn-danger btn-md' onclick='removeElement(".$row_products['0'].")'>Delete</button></td>
                </tr>
            ";


        }

        echo "</table>
        <label class='text-center'>Bid will expire in 24 Hrs</label>
        <button class='btn btn-primary btn-block btn-md text-center' onclick='startBid()'>Start Bid</button>
        <hr/>
        <br/>
        ";

       
    }
    ?>

<script>
function removeElement(id){
    //alert(id);
    $("#"+id).remove();
    arr.forEach((val,index) => {
        if(val["0"] == id){
            arr.splice(index,1);
        }
    });
    console.log(arr);
}

function startBid(){
    $.ajax({
        url:"ajaxBidding.php",
        type:"POST",
        dataType:"json",
        data:{
            arr : JSON.stringify(arr)
        },
        async:false,
        success:function(res){
            alert("Successfull Placed Bid");
        }
    })

}

arr = <?php echo json_encode($arr); ?>;

</script>

       
   


    
</div><!-- box Finish -->