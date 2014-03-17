<?php
include "includes/head.php";
?>
<div data-role="page">
    <div data-role="header" id="header" data-id="header" data-position="fixed">
        <h1 id="logo"><span id="b">b</span><span id="rite">RITE</span></h1>
    </div>
    <div data-role="content">
    	<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Contact Brite</li>
			<li><a href="mailto:brian@britedevelopment.com"><img src="img/grEmail.jpg" class="ui-li-icon"/>Email</a></li>
			<li><a href="tel:304-634-6736"><img src="img/grPhone.jpg" class="ui-li-icon">Call</a></li>
			<li><a href="https://www.facebook.com/britedevelopment"><img src="img/facebook.jpg" class="ui-li-icon"/>FaceBook</a></li> 
			<li><a href="https://twitter.com/BRITEDev/"><img src="img/twitter.jpg" class="ui-li-icon"/>Twitter</a></li>
			<li><img src="img/mailing.jpg" class="ui-li-icon"/>Mailing Address:<br /> BRITE Development <br /> PO Box 4437 <br />Proctorville, OH 45669</li>
		</ul>
    
	    



   
   
    </div><!--end content -->
    <div data-role="footer" data-id="navigation" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
                 <li>
                    <a href="software.php">software</a>
                </li>
				<li>
               		<a href="clients.php">Clients</a>
               </li>
            </ul>
        </div><!-- /navbar -->
    </div><!-- /footer -->
</div>
<?php
include "includes/tail.php";
?>
