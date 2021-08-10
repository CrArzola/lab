<?php

	$nombres=$_POST['nombres'];
	$mail=$_POST['email'];
	$mensaje=$_POST['mensaje'];
	


	require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM citas WHERE cit='$mail'");
		if($nombres){
			if($checkemail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe la  Cita");</script> ';
				echo "<script>location.href='../index.php'</script>";
			}else{
				
				mysqli_query($mysqli,"INSERT INTO citas VALUES('','$nombres','$mail','$mensaje')");
				echo ' <script language="javascript">alert("Cita registrada con éxito");</script> ';
				echo "<script>location.href='../index.php'</script>";
				
			}
			
		}else{
			echo 'Cita no registrada';
			echo "<script>location.href='../index.php'</script>";
		}

	
?>