<?php 
/**

* ecrire un programme qui génère une année et un mois 
* et affiche le nombre de jours du mois
*/

define("min_mois",1);
define("max_mois",20);
define("min_an",1800);
define("max_an",2021);
$an=rand(min_an,max_an);
$mois=rand(min_mois,max_mois);

if($mois>12){
   echo("le mois $mois n'existe pas");
}
else{
    switch($mois){
       case 4 :
       case 6 :       
       case 9 :
       case 11 :
           $jours=30;
           break;
       case 2 :
           if(($an%100==0 && $an%400==0)||($an%4==0 &&  $an%100!=0)){
               $jour=29;
           }
           else{
               $jour=28;
           }
           break;
       default:
           $jour=31;
    }
    echo("il y a $jour jours dans le $mois/$an");
}
?>