<div class="">
<span><a href="?menu=home">Home</a> >> <a href="?menu=aboutus">About Us</a></span>
<div style="font-size:20pt;">About Us</div>
<br />
<br />
	<?php
		$about = mysql_query("select about from about");
		$rowabout = mysql_fetch_array($about);
		echo $rowabout['about'];
	?>
	
</div>