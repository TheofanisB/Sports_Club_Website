<!DOCTYPE html>



<?php 
	$link =mysqli_connect("sql302.epizy.com","epiz_25734946","zXrB10z3oXbZ","epiz_25734946_icsd15133");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}
	
	
	
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['msg'];
	
	 
	
	$toDo ="insert into contact(Name,email,subject,contact_input)values ($name,$email,$subject,$message)";
	
	$query=mysqli_query($link,$toDo)or die("ERROR: Could not append data to the database! ".mysqli_connect_error());
	
	
	?>
	<html>
<body>



<p>Your message was succesfully sent!</p>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>