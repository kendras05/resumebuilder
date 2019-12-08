<html>
	<head>
			<link rel="stylesheet" href="submit.css"/>
	</head>

	<body>

	
	<h1><?php echo "{$_POST["firstname"]} {$_POST["lastname"]}"; ?></h1> 
	<h4>	<?php echo  "Email address: {$_POST["emailadd"]}\n";
					echo	"Phone number: {$_POST["telephone"]}\n";?><h4>
	
	<div class="a">
	</div>
	<div class="a">
	</div>
		
		<?php echo "Education: {$_POST["education"]}"; ?><br>
		
		<?php echo "Employment History";?> <br>

		<?php  echo  "{$_POST["employer"]}"; ?><br>
    <?php  echo  "{$_POST["position"]}"; ?><br>
		<textarea><?php echo  "{$_POST["message"]}";?></textarea>
		<?php  echo  "{$_POST["years"]}";?>

	
		
</body>
</html
