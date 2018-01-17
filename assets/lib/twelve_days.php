<?php 

	function getTitle() {
		return '12 Days of Christmas';
	};

	function getLyrics() {

		$days = array(
			'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth'
		);

		$gifts = array(
			'a partridge in a pear tree', 
			'Two turtle doves', 
			'Three french hens', 
			'Four calling birds', 
			'Five golden', 
			'Six geese a-laying', 
			'Seven swans a-swimming', 
			'Eight maids a-milking', 
			'Nine ladies', 
			'Ten lords a-leaping', 
			'Eleven pipers piping', 
			'Twelve drummers drumming'
		);

		for($i = 0; $i < count($days); $i++) {

			echo "<div id='day".$i."'>";
			echo "On the " . $days[$i] . " day of Christmas my true love gave to me...<br>";

			if ($i==0) {
				echo $gifts[$i] . "<br><br>";
			}
			else {
				for ($j=$i; $j >= 0 ; $j--) { 
					if ($j==0) {
						echo "And " . $gifts[$j] . "<br><br>";
					}
					else {
						echo $gifts[$j] . "<br>";
					}

				}
			};

			echo "</div>";

		};
		// $lyrics = "";

		// foreach ($days as $value => $day) {

		// 	$lyrics = " $gifts[$value] <br>$lyrics";
		// 	echo "On the $day day of Christmas, my true love gave to me <br>$lyrics<br>";
		// };



	};

 ?>