<?php
include "includes/head.php";
?>
<div data-role=page>
    <div data-role="header" id="header" data-id="header" data-position="fixed">
        <h1 id="logo"><span id="b">b</span><span id="rite">RITE</span></h1>
    </div>
    <div data-role="content">
        <!-- start content -->
        

        <a href="#popupCloseRight" data-rel="popup" data-role="button" data-inline="true">Right close button</a>

        <div data-role="popup" id="popupCloseRight" class="ui-content" style="max-width:280px">
            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
            <p>
                I have a close button at the top right corner with simple HTML markup.
            </p>
        </div>

    </div><!-- end content -->
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
        </div><!-- /navbar -->
    </div><!-- /footer -->
</div>
<?php
include "includes/tail.php";
?>

