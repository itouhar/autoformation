<?php
$dettes= [    
    "Karim" => 100 ,
    "Salim" => 80 ,
    "Manal" => 140 ,
    "Amine" => 180 ,
    "Kamal" => 70 ,
    
    ] ;

 $total = 0;
 foreach ($dettes as $nom => $prix )  {
     $total += $prix ;
    

 if ($prix>100) {

    echo "****" . $nom . " doit "  . $prix . " DH " . "****<br>" ;
 } else {

    echo $nom . " doit " . $prix . " DH <br>" ; 
    

}

 }

echo "----------------<br>";
echo "Total : " . $total . " DH<br>";



?>
