<?php

if(isset($_GET["ajout"]))
					 
							 
							{
							 
								$Titre=$_GET["Titre"];
								$Nom_conf=$_GET["Nom_conf"];
								$nb_page=$_GET["nb_page"];
								$num_cherch=$_GET["num_cherch"];
						
								
								 
		  $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
			  
			 	$bdd->exec("INSERT into article (Titr_articl,Nom_conf_articl,Nbr_page_articl,Num_cherch)
			 	VALUES ('$Titre','$Nom_conf','$nb_page','$num_cherch')");
						
						;
							 header('location:chercheurOO2.php');
								}
								 
										  
											 
											
		 
						?>