<!DOCTYPE html>
<html>
<head>
<style>
ul { 
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #5a91bf;
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
  <li style="float:right"><a href="#about">About</a></li>
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
                <section id="cestquoi">
                   			    <form  action="ajart2.php"     method="GET">
         
               
                   
                     
                    <h1 style="color:#5a91bf">Ajouter article<h1>
                     
                        <input style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%  "  type="text"  pattern='[A-Za-z]{3,}' required title="au moins 3 caractères!"  placeholder="Titre article " name="Titre" id="Titre"/> 
              
                <input   style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%;margin-top:5% "   type="text"  pattern='[A-Za-z]{3,}' required title="au moins 3 caractères!"   placeholder="Nom de conférence" name="Nom_conf" id="Nom_conf" /> 
             
                  <input   style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%;margin-top:5% "   type="number"   placeholder="nombres de page" name="nb_page" id="nb_page" /> 
             
                	<?php 
				
				 $numcherch=$_GET['idcherch'];
				 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
 
   
	  $resultats=$bdd->query("select num_cherch from chercheur where username='".$numcherch."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		
	  $resultat = $resultats->fetch() ;
	  
		
		
	 
	 
                      
                   echo"     <input     type='hidden' value='$resultat->num_cherch' name='num_cherch' id='num_cherch' /> ";?>
               
               <br>
               
                     <br>
                 <input type="submit" name="ajout"   style="background-color:#5a91bf;border: 1px outset;padding:3%; margin-left:65% ;color:#e6e6e6 "   >
               
                  
                
                     
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
