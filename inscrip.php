<?php

if(isset($_GET["ins"]))
					 
							 
							{
								$Nom_cherch=$_GET["nomp"];
								$grade_cherch=$_GET["grade"];
								$Adress_cherch=$_GET["adress"];
								$Tel_cherch=$_GET["telephone"];
								$Mail_cherch=$_GET["email"];
								$username=$_GET["username"];
								$password=$_GET["password"];
								$Num_unite=$_GET["unite"];
								
								 
		  $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
			  
			 	$bdd->exec("INSERT into chercheur (Nom_cherch,grade_cherch,Adress_cherch,Tel_cherch,Mail_cherch,username,password,Num_unite)
			 	VALUES ('$Nom_cherch','$grade_cherch','$Adress_cherch','$Tel_cherch','$Mail_cherch','$username','$password','$Num_unite')");
							 ;
							 header('location:index.html');
								}
								 
										  
											 
											
		 
						?>