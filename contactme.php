<?php include 'includes/header.php';?>
 

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sebastianquintan@gmail.com";  //place your/your client's email address here
        $toName = "Sebastian Quintana"; //place your client's name here
        $website = "web120 contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside class="rightcolumn">
 <h3>Right Column</h3>
 <img src="images/mewithdog.jpg" class="tablet" alt="Sebastian with princces Leia" />
 <p>This is not my dog but always is good to show to the people to princces Leia</p>
 <p>she is amazing and love to take tea with the neighbor ,Anne 7 yers old </p>
</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>
