<?php

 
 if(isset($_POST["login"]))
	 
			{ 
			$pseudo=$_POST["username"];
			$motpass=$_POST['password'];
			
			 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
  
	  $resultats=$bdd->query("select username,password from chercheur where username='".$pseudo."' and password='".$motpass."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		$resultat = $resultats->fetch();
		 
			if ($resultat)
				
			{  
			 $resultats2=$bdd->query("select Num_cherch from chercheur where username='".$pseudo."' and password='".$motpass."'");
        $resultats2->setFetchMode(PDO::FETCH_OBJ);
		$resultat2 = $resultats2->fetch();
		
	 
	   $resultats3=$bdd->query("select cod_lab from laboratoire where Num_cherch='".$resultat2->Num_cherch."'");
        $resultats3->setFetchMode(PDO::FETCH_OBJ);
		$resultat3= $resultats3->fetch();
	 
	 
	 	if ($resultat3)
		{
			 session_start();
			 $_SESSION['chercheur']=$pseudo;
			  header('location:responsableOO.php');
			 	exit;
				
				
		}
		else	
		{ session_start();
			 $_SESSION['chercheur']=$pseudo;
			  header('location:chercheurOO.php');}
		
			}
				else  
				header('location:index.html');
			}
	 
 ?>