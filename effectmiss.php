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
  <li style="float:right"><a href="index.html">About</a></li>
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
                   			    <form   action="effmiss.php"     method="GET" >
         
               
                   
                     
                    <h1 style="color:#5a91bf">Effecter mission<h1>
                     
                     <select id="select" name="miss" style="background-color:#c7d7ef ;border: inset ;padding:2%;width:90%;margin-top:5% " >

 <?php

 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
 
   
	  $resultats=$bdd->query("SELECT * FROM  mission");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		
	 
        while( $resultat = $resultats->fetch() ){
      echo"
		 <option value='$resultat->Num_mission'>$resultat->Objectif_mission__$resultat->Dest_mission</option>
		  
 	 
	";}
 
		 

?>
             
                  <input   style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%;margin-top:5% "   type="number"   placeholder="frai" name="frai" id="frai" /> 
             
                
                       
                        <input   style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%;margin-top:5% "   type="date"   placeholder="Date de depart" name="Dat_depart" id="Dat_depart" /> 
               
               <br>
			    <input   style="background-color:#c7d7ef ;border: inset ;padding:2%;width:85%;margin-top:5% "   type="date"   placeholder="Date de retour" name="Dat_retour" id="Dat_retour" /> 
                              <br>
<select id="select" name="cherch" style="background-color:#c7d7ef ;border: inset ;padding:2%;width:90%;margin-top:5% " >

 <?php

 $cnx[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_labo','root','',$cnx);
 
   
	  $resultats=$bdd->query("SELECT * FROM  chercheur");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
		
	 
        while( $resultat = $resultats->fetch() ){
      echo"
		 <option value='$resultat->Num_cherch'>$resultat->Nom_cherch</option>
		  
 	 
	";}
 
		 

?>
  
  </select>

               <br>
                   <br>
               
                   <input type="submit"    style="background-color:#5a91bf;border: 1px outset;padding:3%; margin-left:65% ;color:#e6e6e6 "  value="Ajouter mission"  name="effec" >
               
                  
                
                     
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
