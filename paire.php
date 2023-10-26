<?php
//$tab=[];
//for($a=0;$a<=100;$a++);
   //if($a%2==0){
       // $tab[] =$a;
  // }
//for($a=0;$a<=count($a)-1;$a++){
    //echo$tab[$a]."/n";
//}   
   //$som=[1,2,3,5,100,12,13,9];
  // $calcule=0;
   //for($a=0;$a<count($som) ;$a++){
   // $calcule+=$som[$a];
   //}
   //echo $calcule;
    //$tab=[];
    //$tab1=[ 1, 2, 3, 4, 5, 6, 7, 8, 100, 12, 13, 9];
   //$tab2 = ["bonjour", "Tapis", 23, "Calamar", 2.4, 45, 1000, "Hello", "rien", 0.2, 0, -1]; 
    
   //for($a=0;$a<count($tab1);$a++){
    //$tab[]=$a; 
   //}

   //for($a=0;$a<count($tab2);$a++){
    //$tab[]=$a; 
   //}
   //print_r($tab1);
   $tab1=[1, 2, 3, 4,12, 5, 6, 7, 8, 100, 12, 13, 9];
   $tab=readline ("entrer une valeur: ") ;
   for($a=0;$a<count($tab1); $a++){
    if($tab1[$a]==$tab){
      echo "le nombre existe " ; 
        break;
    }else{
        echo "le nombre n'existe pas";
    }
  
   }

?>