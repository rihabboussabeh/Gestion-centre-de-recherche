<?php

if(isset($_GET["ajout"]))
					 
							 
							{
								$Destination=$_GET["Destination"];
								$Objectif=$_GET["Objectif"];
						
								
								 
		  $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
			  
			 	$bdd->exec("INSERT into mission (Dest_mission,Objectif_mission)
			 	VALUES ('$Destination','$Objectif')");
						
						;
							 header('location:responsableOO.php');
								}
								 
										  
											 
											
		 
						?>