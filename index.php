<html>
	<head>
		<link rel="stylesheet" href="resume2.css"/>

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

<fieldset class="fieldset-width">

		<form action="/submit.php" method="POST">
		<h1><?php echo $title; ?></h1>
		
		
		<h3> Who are you? </h3>
		<div class="border">
		<label>First Name</label>
		<input type="text" placeholder="Enter First Name" value ="" name ="firstname"/>
		<label>Last Name</label>
		<input type="text" placeholder="Enter Last Name" value ="" name ="lastname"/><br>
		<div class="a">
		<label>Email</label>
		<input type="email" placeholder="you@url.com" value="" name="emailadd"/>
		<label>Phone Number</label>
		<input type="tel" placeholder="888-888-8888" value="" name="telephone"/>
		<div class="a">
		</div>
		</div>
		

		<?php label("Education Level"); ?>
		<select name="education" size="4">
      <option value="High School Diploma">High School Diploma</option>
      <option value="Associates">Associates</option>
      <option value="Bachelors">Bachelors</option>
      <option value="Masters">Masters</option>
    </select>
		
		<h3>Employment History<h3>


<?php
		
		label("Employer's Name");
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
      <?php label("Number of Years Worked"); ?>			
      <select name="years">
        <option value ="1 year or less">1 year or less</option>
        <option value ="2 to 5 years">2 to 5 years</option>
        <option value="5 to 10 years">5 to 10 years</option>
        <option value="10 or more years">10 or more years</option>
      </select>
      <br />


			<button type="button">Add Another Job</button>
			
			<button type="submit" value ="Submit">Submit</button>


</fieldset>
			




	</body>
</html>

