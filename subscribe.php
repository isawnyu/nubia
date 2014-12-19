<?php

if($_POST){


		// create line for csv
		// this replace works b/c we don't want to spend the time cleaning every field of ','s and we can pretty safely assume nobody will enter
		// 'DELIMITER' in their form - much more so than we can assume nobody will enter a ',' at any rate

		$notes = str_replace("\r\n,", " ", $_POST['notes']);

		$line = $_POST['fname'].' DELIMITER '.$_POST['lname'].' DELIMITER '.$_POST['email'].' DELIMITER '.$_POST['street1'].' DELIMITER '.$_POST['street2'].' DELIMITER '.$_POST['city'].' DELIMITER '.$_POST['country'].' DELIMITER '.$_POST['state'].' DELIMITER '.$_POST['postal_code'].' DELIMITER '.$_POST['affiliation'].' DELIMITER '.$_POST['phd_program'].' DELIMITER '.$_POST['exhibitions'].' DELIMITER '.$_POST['public_programs'].' DELIMITER '.$_POST['research'].' DELIMITER '.$_POST['employment'].' DELIMITER '.$notes."\n";

		$line = str_replace(",", "", $line);
		
		$line = str_replace("DELIMITER", ",", $line);

//echo $line;

		// write data to our file
		$file = "./subscribers/list.csv";
		$handle = fopen($file, 'a');
		$data = $line;
		fwrite($handle, $data);
		fclose($handle);
	
		$page = '<p>Your information has been submitted.  Thank you.</p>';
} else {
		$page = '<p>Please fill out the form <a href="./subscribe_form.htm">here</a>.';
}		
?>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xsi:schemaLocation="http://www.w3.org/1999/xhtml http://www.w3.org/MarkUp/SCHEMA/xhtml-rdfa-1.xsd" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>Nubia: Ancient Kingdoms of Africa</title><style type="text/css"> @import url("./default.css"); </style>
<script type="text/javascript" xml:space="preserve">
              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-3702316-4']);
              _gaq.push(['_trackPageview']);
            
              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();
        </script>	
</head>

<body class="(none)">
<div id="wrapper">
<div id="content">
<div id="header">
<div id="heading">
                <img id="hathor" src="images/hathor-thumb.jpg" alt="Hathor-headed pendant"/>
                <h1><a href="intro.html" shape="rect">Nubia</a></h1>
                <h2><a href="intro.html" shape="rect">Ancient Kingdoms of Africa</a></h2>
                <h3><a href="intro.html" shape="rect">March 11 - June 12, 2011</a></h3>
            </div>
            <div id="menu"><ul id="topnav"><li><a href="intro.html">introduction</a></li><li><a href="map.html">map/timeline</a></li><li><a href="#">objects</a><span><a href="highlights.html">highlights</a><a href="checklist.html">checklist of objects on display</a></span></li><li><a href="curators.html">curators</a></li><li><a href="where.html">location/hours</a></li><li><a href="">resources</a><span><a href="bibliography.html">select bibliography</a><a href="links.html">links to lenders and related websites</a></span></li><li class="open"><a href="">more</a><span><a href="programs.html">public programs and education</a><a href="press.html">press</a><a href="previous.html">previous exhibitions</a><a id="here" href="email.html">email list</a></span></li></ul></div>
            </div>
            <div id="body">
<?php echo $page; ?>

</div>
<div id="footer">
            <div id="left-footer">
                <div id="logo-footer"><a onclick="window.open(this.href);return false;" href="http://www.nyu.edu/isaw/" shape="rect"><img src="images/isaw-logo.png" alt="ISAW logo" title="Visit the home page of the Institute for the Study of the Ancient World"/></a></div>
                <p><a onclick="window.open(this.href);return false;" href="http://www.nyu.edu/isaw/" shape="rect">Institute for the Study of the
                    Ancient World</a><br/> New York University<br/><a href="where.html" shape="rect">15 East 84th Street, New York City</a></p>
                <p><a href="where.html" shape="rect">FREE ADMISSION</a><br/><a href="where.html" shape="rect">FREE GUIDED TOURS FRIDAYS, 6PM</a></p>
            </div>
            <div id="right-footer">
                <p>Unless otherwise indicated, all content is<br/>Copyright New York
                    University.<br/>All rights reserved.</p>
                <p><a href="http://www.addthis.com/bookmark.php" style="text-decoration:none;" class="addthis_button" shape="rect">Click to bookmark or share</a></p>
                <script type="text/javascript" xml:space="preserve">var addthis_config = {"data_track_clickback":true};</script>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=paregoriosisaw" xml:space="preserve"/>
            </div>
        </div>
        </div>
        </div>

</body>
	
</html>