<div id="submenu">
    <ul>
        <li <?php if($sub == "illustrations") {echo "class=\"selected\"";} ?>><a href="index.php?page=projects&sub=illustrations">Illustrations</a></li>
        <li <?php if($sub == "webpages") {echo "class=\"selected\"";} ?>><a href="index.php?page=projects&sub=webpages">Webpages</a></li>
        <li <?php if($sub == "covers") {echo "class=\"selected\"";} ?>><a href="index.php?page=projects&sub=covers">Cover designs</a></li>
        <li <?php if($sub == "posters") {echo "class=\"selected\"";} ?>><a href="index.php?page=projects&sub=posters">Posters</a></li>
        <li <?php if($sub == "misc") {echo "class=\"selected\"";} ?>><a href="index.php?page=projects&sub=misc">Misc & Fun</a></li>
    </ul>


</div>


<div id="content" class="clear">    
	

<div id="text">
	<?php
    
    	include_once("projects/".$sub.".php");
    
    ?>

</div>
</div>