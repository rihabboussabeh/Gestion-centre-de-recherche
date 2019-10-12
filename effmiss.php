<?php

if(isset($_GET["effec"]))
					 
							 
							{
								 $mission=$_GET["miss"];
								$frai=$_GET["frai"];
								$Dat_depart=$_GET["Dat_depart"];
								$Dat_retour=$_GET["Dat_retour"];
								$cherch=$_GET["cherch"];
								 
								
								 
		  $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
			  
			 	$bdd->exec("INSERT into effectuer (Num_cherch,Frai_mission,Dat_depart,Dat_retour,Num_mission)
			 VALUES ('$cherch','$frai','$Dat_depart','$Dat_retour','$mission')");
						
						;
							 header('location:responsableOO.php');
								}
								 
										  
											 
											
		 
						?>