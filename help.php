<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
    
    $active='Help';
    include("includes/header.php");

?>
  
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       About Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
    <h2>Hello. What can we help you with?</h2>
    <a href="orderdet.php" >Your Orders</a>
    <p>
        * Track packages
        <br>
        * Edit or cancel orders
    </p>
    
    <a href="orderdet.php" >Returns & Refunds</a>
    <p>
        * Return or exchange items
        <br>
        * Print return mailing labels
    </p>
    
    <a href="orderdet.php" >Digital Services and Device Support</a>
    <p>
        * Find device help & support
        <br>
        * Troubleshoot device issues
    </p>
    
    <a href="orderdet.php" >Manage Prime</a>
    <p>
        * Learn about Prime benefits
        <br>
        * Cancel Prime membership
    </p>
    
    <a href="orderdet.php" >Payments & Gift Cards</a>
    <p>
        * Add or edit payment methods
        <br>
        * View, reload gift card balance
    </p>
    
    <a href="log.php" >Account Settings</a>
    <p>
        * Change email or password
      <br>
        * Update login information
    </p>
      <h2>Find more solutions</h2>
    <br>
                       </center>
                   </div>
               </div>
           </div>
       </div>
</div>
<?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>