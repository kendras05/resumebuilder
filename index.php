<?php
$title = "Your Custom Resume";

function employment() {
		
	return <html><label>Phone Number</label></html>;
	return <html><input type="tel" placeholder="888-888-8888" value="" name="telphone"/></html>;
	
}


?>

<html>
	<head>
		<link rel="stylesheet" href="resume.css"/>
	<body>
		<form action="/submit.php" method="POST">
		<h1><?php echo $title; ?></h1>
		<h3> Who are you? </h3>
		<label>First Name</label>
		<input type="text" placeholder="Enter First Name" value ="" name ="firstname"/>
		<label>Last Name</label>
		<input type="text" placeholder="Enter Last Name" value ="" name ="lastname"/><br>
		<div class="a">
		<label>Email</label>
		<input type="email" placeholder="you@url.com" value="" name="emailadd"/>
		<label>Phone Number</label>
		<input type="tel" placeholder="888-888-8888" value="" name="telphone"/>
		
		<div class="a">
		
		<h3>Employment History<h3></div>
		<label>Name of Employer</label>
		<?php> employment(); ?>

		
		

	</body>
</html>

