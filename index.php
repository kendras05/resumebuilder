<html>
	<head>
		<link rel="stylesheet" href="resume.css"/>

	<body>
		<?php $title = "Your Custom Resume"; 
		
		  function input($type, $holder, $name){
    	echo "<input type=$type placeholder=$holder value='' name=$name/>";
 }
			function label($label){
			echo "<label>$label</label>";
}
			function message($message){
			echo "<textarea rows='10'cols='50' placeholder=$message name='message'></textarea>";
}	
	
		
?>


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
		<h3>Employment History<h3>
		</div>



<fieldset>
<?php
		
		label("Employers Name");
		input("text", "Employer", "employer");
		label("Position");
		input("text", "Position", "position");
		
		label("Location");
		input("text", "City", "location");
?> 
<br>
<?php		
		message("Description of Job Duties");				
?>
<br>

      <h4>Number of Years Worked</h4>			
      <select name="years">
        <option value ="1_5">1 year or less</option>
        <option value ="2_5">2 to 5 years</option>
        <option value="5_10">5 to 10 years</option>
        <option value="10+">10 or more years</option>
      </select>
      <br />
</fieldset>

	</body>
</html>

