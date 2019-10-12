<?php

 

	$log=$_GET["username"];
	 
		$pass=$_GET["password"];
	 	 
	
	
 
	  if (($pass=='responsable')||($pass=='responsable'))
	 { 
		header('location:responsableOO.html');
	}
 
	else

  if (($pass=='chercheur')||($pass=='chercheur'))
	 { 
		header('location:chercheurOO.html');
	}
else
	{header('location:index.html');}
	 
 ?>