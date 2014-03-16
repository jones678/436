<?php
    include "includes/head.php";
?>

 <div data-role="page">
    <div data-role="header" id="header" data-id="header" data-position="fixed">
        <h1 id="logo"><span id="b">b</span><span id="rite">RITE</span></h1>
    </div>
    <div data-role="content">
       <h1 class="green">BRITE Development Clients</h1>
       <p>BRITE Development LLC began selling B.R.I.T.E. in 1st quarter 2010. Below is a sampling of our clients who have purchased B.R.I.T.E.:</p>
       <ul data-role="listview">
    <li> <a href="http://www.marshall.edu"> <img src="img/marshall.jpeg"/>Marshall University </a></li>
    <li> <a href="http://www.mctc.edu"> <img src="img/mountwest.jpg"/>Mountwest Community College </a></li>
    <li> <a href="http://www.kvctc.edu"> <img src="img/kanawha.jpg"/> Kanawha Valley College</a></li>
</ul>
    </div>
    
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
