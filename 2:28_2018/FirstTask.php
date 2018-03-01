
<!DOCTYPE html>
<html>
<body>
	<p>
		<?php
		$FirstNum = 3;
		$SeconsNum = 2;

		echo  $FirstNum + $SeconsNum ;

		?>

	</p>
	<p>
		<?php
		$txt = "php"; // variable creation
		$truth="after I found the demo";

		echo $txt. " is so easy " . $truth;
		?>
	</p>

		<p>
		<?php

		$t = date("H");


		if ($t % 2 == 0) {
		    $time="Even";
		} else {
		  	$time="Odd";
		}

		$sentence = "The hour is "; // variable creation
		

		echo $sentence . $time;
		?>
	</p>

</body>
</html>