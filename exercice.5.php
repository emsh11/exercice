<?php
/**
 * ecrire un programme qui génère une année et un mois 
 * et affiche le nombre de jours du mois
 */

 define("min_mois",1);
 define("max_mois",20);
 define("min_an",1800);
 define("max_an",2021);
 define("MIN_JOUR",1);
 define("MAX_JOUR",31);
 $jour=rand(MIN_JOUR,MAX_JOUR);
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
            $nbJours=30;
            break;
        case 2 :
            if(($an%100==0 && $an%400==0)||($an%4==0 &&  $an%100!=0)){
                $nbJours=29;
            }
            else{
                $nbJours=28;
            }
            break;
        default:
            $nbJours=31;
     }
     if($jour<=$nbJours){
         echo("la date $jour/$mois/$an est valide");
     }
     else{
        echo("la date $jour/$mois/$an est invalide");
     }
 }
 ?>