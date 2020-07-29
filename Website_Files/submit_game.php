<!DOCTYPE html>


<?php 
	$link =mysqli_connect("sql302.epizy.com","epiz_25734946","zXrB10z3oXbZ","epiz_25734946_icsd15133");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}
	

	
	
	$team1=$_REQUEST['team1'];
	$team2=$_REQUEST['team2'];
	$score1=$_REQUEST['score1'];
	$score2=$_REQUEST['score2'];
	$date=$_REQUEST['date'];
	
	 
	
	$toDo ="insert into game(team1,team2,score1,score2,date)values ('$team1','$team2',$score1,$score2,'$date')";
	
	$query=mysqli_query($link,$toDo)or die("ERROR: Could not append data to the database! ".mysqli_connect_error());
	
	
	?>
	<html>
<body>



<p>Game was succesfully submitted!</p>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>