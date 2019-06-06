<?php 
    
    $active='About';
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
                           
                           <h2>Welcome</h2>
    <p>At BuildCart.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our  goal is to remove any technical or financial barriers that can prevent business owners from making their own business. We're excited to help you on your journey!
                
    <h3>Our Story</h3> 
    <p>BuildCart.com began in 2018. After years in the construction industry, we realized that with modernization builders face lots of challeges in construction of a house or building to complete projects in time. It was near impossible for the average businesses to expose and grow their business to larger scale. Traditional services were simply too complicated, manual supply, time consuming, no tracking and sellers reviews assurancance involved and also delivery system which are usually non-reliable,hectic and expensive to manage.Since the business works on credit basis suppliers are beyond the reach of most first time buyers.

    We created the BuildCart.com Site Builder with the user's perspective in mind. We wanted to offer a platform that would require no hatic and time consuming experience in search of builders. We keep it simple, so builders can focus on creating an amazing business that reflects their brand. Best of all - it's free. You can get online, showcase your brand, or start selling products right away.

   After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders, allowing new business owners to launch their online business.

   Today, we're proud to empower individuals and small business owners around the world. Everyone deserves a exposure, and we're excited to see what you business grow through BuildCart</p>
    <h4>Our Values</h4>
    <p>
*Every Individual Deserves a exposure to grow his business<br>
 We believe every individual should have the power to create their online store. <br><br>

*Our Customers Mean the World<br>
 At BuildCart.com, we strive to provide exactly what our customers are looking for. A huge part of our brainstorming process is looking at our client feedback to make sure you're well taken care of.<br><br>

*In-House Made<br>
 We are personally committed to delivering the very best. Everything, from customer support to product delivery, is provided by our dedicated (and adorable) team in beautiful Goa, INDIA.<br>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "mugianto4th@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Welcome to my website";
                           
                           $msg = "Thanks for sending us message. ASAP we will reply your message";
                           
                           $from = "raveenashinde97@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                           
                       }
                       
                       ?>
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>