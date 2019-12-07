<html>
<body>

<?php
		  function input($type, $holder, $name){
    	echo "<input type=$type placeholder=$holder value='' name=$name/>";
 }
			function label($label){
			echo "<label>$label</label>";
}
			function message($message){
			echo "<textarea rows='10'cols='50' placeholder=$message name='message'></textarea>";
}	


		
		label("Employer's Name");
		input("text", "Employer", "employer");
		label("Position");
		input("text", "Position", "position");
		
		label("Location");
		input("text", "City", "location");


?>
</body>
</html>
	


