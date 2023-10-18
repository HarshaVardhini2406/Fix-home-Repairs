<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div style="text-align:center">
<img src="https://static.vecteezy.com/system/resources/previews/010/626/385/original/house-fix-logo-home-fixing-logo-house-repair-logo-vector.jpg" height="105" width="140">
</div>

<div>
<a href="index.php">
<button type="button" class="btn btn-info">Click to add Your Advertisement</button>
</a>
</div>
<?php
	require("include/connect.php");
	
	$query = mysqli_query($con, "SELECT * FROM content");
	while($row = mysqli_fetch_array($query)){
		echo "<div style='width:800px; height:380px; '>";
		echo 	$row['body'];
		echo "</div>";
	}
	
?>