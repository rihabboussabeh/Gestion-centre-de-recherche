<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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


</style>
</head>
<body style="background-color:#edf3f8">
<div style="margin-top:2% ; margin-left:5%;margin-right:5%">
<ul> <li><a  href="index.html">Home</a></li>
  <li><a href="sujet.html">Sujets de recherche</a></li>
  <li><a href="event.html">Événements</a></li>
  <li><a href="">unité de recherche</a></li>
   <li style="float:right" href="index.html"><a href="index.html">Deconnexion</a></li>
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
  <li class="menu"><a href="sujet.html">Liste des chercheurs</a></li>
  <li class="menu"><a href="event.html">liste des articles</a></li>
  <li class="menu"><a href="">Mes articles</a></li>
 
  <li class="menu"><a href="">Missions</a></li>
</ul>
                <section id="cestquoi">
                   			    <form  >
         
               
                   
                     
                    <h1 style="color:#5a91bf">  <h1>
                     
                       
                <table  >
				<tr ><td width="800">
				 <label style=" font-size:90%;
 color:#0B2161;
  font-family: Helvetica, Arial, sans-serif;">   
			
							 
							 					   	<?php
	 
		session_start();
		$username=$_SESSION['chercheur'];
	 
		
	 		 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
  
	  $resultats=$bdd->query("select * from chercheur where username='".$username."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		$resultat = $resultats->fetch();
		
		echo"$resultat->Nom_cherch; <br>
		$resultat->Grade_cherch;<br>
		$resultat->Adress_cherch;<br>
		$resultat->Tel_cherch;<br>
		$resultat->Mail_cherch;";
		
		
	?>
				</label>
				
				
				</td>
				
				
				<td width="400">
				  <img id="im"  src="contact.PNG"  /> 
				 
	
<br> <br>

		 
              </td></tr></table>
			  
			  
                  

	<br>
				 <h3 style="color:#5a91bf">Mission<h3>
<table border="1"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<td>destination</td>
<td>objectif</td>
<td>date depart</td>
<td>retour</td>
</tr>
<tr>
<td>....</td>
<td>....</td>
<td>....</td>
<td>....</td>
</tr>

</table> 	
  <br>
   <br>
 <table border="1"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<th>liste des articles  
<a href="ajarticleOO.html">
<button type="button"    style="background-color:#5a91bf;border: 1px outset;padding:1%; margin-left:65% ;color:#e6e6e6 "   >Ajouter article + </button> </a>
          </th>
  
</tr>
<tr>
<td>....</td>
  
</tr>
<tr>
<td>....</td>
 
</tr>

</table>
 <table border="1"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<th>Liste des chercheurs  
          </th>
  
</tr>
<tr>
<td>....</td>
  
</tr>
<tr>
<td>....</td>
 
</tr>

</table>

  <br>
 <table border="1"  width="890">
<tr style="background-color:#c7d7ef ;border: inset ;padding:2% ">
<th width="600">autres mission
          </th>
  <th>nom chercheur
          </th>
</tr>
<tr>
<td>....</td>
 <td>....</td> 
</tr>
 

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
<table>
<tr> <th style="font-size:130%">ReDCAD</th><th style="font-size:130%">Contact</th><th style="font-size:130%">Address</th></tr>
<tr> <td>National School of Engineering of Sfax
www.enis.rnu.tn

University of Sfax, Tunisia
www.uss.rnu.tn
</td><td>Prof. Dr. Eng. Mohamed Jmaiel

Research Center for Computer Science, Multimedia and Digital Data Processing of Sfax, Send an Email 
Phone: +216 74 666 578</td><td>National School of Engineers of Sfax 
Department of Computer Science and Applied Mathematics 
ReDCAD Laboratory
B.P. 1173, 3038 Sfax, Tunisia</td></tr>
</table>
</footer>
</body>
</html>
