<?php

$server= "localhost";
$user= "root";
$password = "";
$db = "ProtectPets-master";

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
	?>
	<script >
		alert("");
	</script>
	<?php  
}else{
	?>
	<script >
		alert("");
	</script>
	<?php
}
?>
