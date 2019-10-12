<?php

 
								$mission=$_GET["mission"];
								 
						
								
								 
		  $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
			  
			 	$bdd->exec("DELETE from mission where Num_mission='".$mission."'");
					$bdd->exec("DELETE from effectuer where Num_mission='".$mission."'");	
						;
							 header('location:responsable3.php');
							 
								 
										  
											 
											
		 
						?>