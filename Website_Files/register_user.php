<!DOCTYPE html>


<?php 
	$link =mysqli_connect("sql302.epizy.com","epiz_25734946","zXrB10z3oXbZ","epiz_25734946_icsd15133");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}
	

	
	
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	
	
	 
	
	$toDo ="insert into users(username,password,role)values ('$username','$password','user')";
	
	$query=mysqli_query($link,$toDo)or die("ERROR: Could not append user to the database! ".mysqli_connect_error());
	
	
	?>
	<html>
<body>



<p>User was succesfully submitted!</p>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>