<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta charset="ISO-8859-1">
<style>
ul { 
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #5a91bf;
}
.menu { 
    list-style-type: none;
    margin: 0;
       padding: -1px;
    overflow: hidden;
    background-color:#5A5E6B;
}


li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 30px 30px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #2b506e;
}
th, td {
    text-align: left;
    padding: 8px;
	    
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even){background-color: #BEBEBE}

th {
    background-color: #696969;
    color: white;
}

</style>
</head>
<body style="background-color:#edf3f8">
<div style="margin-top:2% ; margin-left:5%;margin-right:5%">
<ul >
  <li><a href="sujet.html">Sujets de recherche</a></li>
  <li><a href="event.html">evenements</a></li>
  <li><a href="">unite de recherche</a></li>
  <li style="float:right" ><a href="index.php">Deconnexion</a></li>
</ul>
<br> 
  <img id="im"  src="labo.jpg"  />
    
  
			<div style=" background: #e6e6e6;
     
    padding: 8%;
    margin-bottom: 50px;
	margin-right:5%;
	margin-top:5%;
	margin-left:5%;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
   box-shadow: 0px 0px 20px #888888;
	">
	<ul class="menu">
	  <li class="menu"><a href="responsableOO.php">Profil</a></li>
  <li class="menu"><a href="responsable1.php">Liste des chercheurs</a></li>
  <li class="menu"><a href="responsable2.php">liste des articles</a></li>
 
 
  <li class="menu"><a href="responsable3.php">Missions</a></li>
</ul>
                <section id="cestquoi">
                   			    <form  >
         
               
                   
                     
                    <h1 style="color:#5a91bf"> <h1>
                     
                       
                <table style="box-shadow: 0px 0px 0px  " >
				<tr ><td width="800">
				 <label style=" font-size:90%;
 color:#0B2161;
  font-family: Helvetica, Arial, sans-serif;">  profil   <br><br>
  
 	 
							 
							 
		 	<?php
	 
		session_start();
		$username=$_SESSION['chercheur'];
	 
		
	 		 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
  
	  $resultats=$bdd->query("select * from chercheur where username='".$username."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		$resultat = $resultats->fetch();
			if(!$resultat){
			  header('location:index.php');
		}
		else{
		echo"$resultat->Nom_cherch; <br>
		$resultat->Grade_cherch;<br>
		$resultat->Adress_cherch;<br>
		$resultat->Tel_cherch;<br>
		$resultat->Mail_cherch;";
		}
		
	?>
		
				</label>
				
				</td>
				
				
				<td width="400">
				 <h4 style="color:#5a91bf"> <h4>

				 
				  <img id="im"  src="images.PNG"  /> 
				 
				 <br> <br>

		 
              </td></tr></table>
			  
			  
                   <br>

			  
  <br>
  
  
 
  
 

 
 <table  style="box-shadow: 0px 0px 20px #888888;
    border-collapse: collapse;
    width: 100%;"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<th width="600">Listes des articles
          </th>
  <th>nom chercheur
          </th>
</tr>
<tr>

<?php

 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
 
   
	  $resultats=$bdd->query("SELECT Titr_articl,nom_cherch from article a , chercheur c
WHERE a.Num_cherch=c.Num_cherch;");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		
	 
        while( $resultat = $resultats->fetch() ){
      echo"<tr>  
		 <td style='font-size:70%;'>$resultat->Titr_articl</td>
		  <td style='font-size:70%;'>$resultat->nom_cherch</td>
		  </tr>
	 
	";}
		 

 
?>
</tr>
 

</table>
<br><br>
 <table  style="box-shadow: 0px 0px 20px #888888;
    border-collapse: collapse;
    width: 100%;"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<th>liste des articles 
        </th>
		<th>  nom de conférence </th>
			<?php 
		$username=$_SESSION['chercheur'];
echo"	 <a href='ajarticleOO.php?idcherch=$username'> 	 "; ?>
	 
   <button type="button"    style=" float:right ;border: outset; padding:2%;background-color:#D3D3D3 "  >Ajouter article + </button> </a>
</a>
<th> nombre de pages 
  </th>
</tr>

<tr>
 <?php

 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
 
 
   $resultats4=$bdd->query("select * from chercheur where username='".$username."'");
        $resultats4->setFetchMode(PDO::FETCH_OBJ);
		$resultat4 = $resultats4->fetch();
		
	 
   
	  $resultats=$bdd->query("SELECT * from article 
WHERE Num_cherch='".$resultat4->Num_cherch."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		
	 
        while( $resultat = $resultats->fetch() ){
      echo"<tr>  
		 <td style='font-size:70%;'>$resultat->Titr_articl</td>
		  <td style='font-size:70%;'>$resultat->Nom_conf_articl</td>
		   <td style='font-size:70%;'>$resultat->Nbr_page_articl</td>
		 
		  </tr>
	 
	";}
		 

 
?>
  
</tr>
 


</table>

  <br>
  </td>
  
</tr>
<tr>
 

</table>

               
                   
                
                     
                       </form>
                 
                </section>
            </div>
          <br><br><br>
        </div>  </div>
 
  </div>
  
  </td>
     </tr>

  
  
  
   </table>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <footer style="   width: 90%;
    float: left;
    text-align: center;
    background: #5a91bf;
    color: white;
    padding: 30px ; margin-left:2% ;margin-bottom:2%">
<table >
<tr> <td style="font-size:130%">ReDCAD</td><td style="font-size:130%">Contact</td><td style="font-size:130%">Address</td></tr>
<tr> <td style=" background: #5a91bf;">National School of Engineering of Sfax
www.enis.rnu.tn

University of Sfax, Tunisia
www.uss.rnu.tn
</td><td style=" background: #5a91bf;">Prof. Dr. Eng. Mohamed Jmaiel

Research Center for Computer Science, Multimedia and Digital Data Processing of Sfax, Send an Email 
Phone: +216 74 666 578</td><td style=" background: #5a91bf;border:"0">National School of Engineers of Sfax 
Department of Computer Science and Applied Mathematics 
ReDCAD Laboratory
B.P. 1173, 3038 Sfax, Tunisia</td></tr>
</table>
</footer>
</body>
</html>
