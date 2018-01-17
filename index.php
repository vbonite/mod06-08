<?php 

	require 'assets/lib/twelve_days.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">


	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

			
	<?php 

		echo getLyrics();

	 ?>

	 	
	 <button id="disableBtn" onclick="showLyrics()">Click Me!</button>
		




	<script type="text/javascript">

		var i = 0
		
			function showLyrics(){

			document.getElementById("day" + i).style.display = "block";
			document.getElementById("day" + i).classList.toggle("transform-click");
			document.getElementById("day" + i).scrollIntoView();
			i++;

			if(i==12) {
				document.getElementById("disableBtn").disabled = true;
			};
		}


	</script>

</body>
</html>