<?php

  if(!isset($_GET['page'])) {
	  $page = "about";
  } else {
	  $page = $_GET['page'];
  }
  
  if(isset($_GET['page'])) {
	  if($_GET['page'] == "projects" && !isset($_GET['sub'])) {
		  $sub = "illustrations";
	  } else if(isset($_GET['sub'])) {
		  $sub = $_GET['sub'];
	  }
  }
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/lightbox.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="images/favico.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Igor Cervenka - personal webpage</title>
</head>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<body>

<div id="container">
	<div id="header">
    &nbsp;
    </div>
    
    <div id="menu">
    	<ul id="navigation" class="center">
        	<li><a href="index.php?page=news"><div id="menutop" <?php if($page == "news") {echo "class=\"active\"";} ?>>NEWS</div><div id="menubottom" <?php if($page == "news") {echo "class=\"selected\"";} ?>></div></a></li>
            <li><a href="index.php?page=projects"><div id="menutop" <?php if($page == "projects") {echo "class=\"active\"";} ?>>PROJECTS</div><div id="menubottom" <?php if($page == "projects") {echo "class=\"selected\"";} ?>></div></a></li>
            <li><a href="index.php?page=about"><div id="menutop" <?php if($page == "about") {echo "class=\"active\"";} ?>>ABOUT ME</div><div id="menubottom" <?php if($page == "about") {echo "class=\"selected\"";} ?>></div></a></li>
            <li><a href="index.php?page=contact"><div id="menutop" <?php if($page == "contact") {echo "class=\"active\"";} ?>>CONTACT</div><div id="menubottomright" <?php if($page == "contact") {echo "class=\"selected\"";} ?>></div></a></li>
        </ul>
        
        
    </div>

        
        <?php
		
			include_once($page.".php");
			
		?>
    


	<div id="footer">Created by - Igor Cervenka 2013 &copy; </div>

</div>







</body>
</html>