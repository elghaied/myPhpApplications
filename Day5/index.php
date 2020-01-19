<?php  

$mois1 = $mois2 = array( 'février' ,'mars', 'avril', 'mai' , 'juin' , 'juillet', 'aout', 'septembre' , 'octobre', 'nomvembre' );
array_push($mois1, "décembre");
array_unshift($mois1, "janvier");
echo "<pre>  <h2> array mois1 after PUSH</h2> ";
    print_r ($mois1);
    echo "/<pre>";

$moisa1 = $moisa2 = array(
    'février' => 29,
    'mars' => 31,
    'avril' => 30,
    'mai' => 31,
    'juin' => 30,
    'juillet' => 31,
    'aout' => 31,
    'septembre' => 30,
    'octobre' => 31,
    'novembre' => 30,
    );
    $janvier = array(
    'janvier' => 31
    );
    $decembre = array(
    'décembre' => 31
    );

    echo "<pre> <h2> array moisa2 </h2>";
    print_r ($moisa2);
    echo "/<pre>";
    
    echo "<pre> <h2> array decembre </h2> ";
    print_r ($decembre);
    echo "/<pre>";
    $moisa2 = $janvier + $moisa2 + $decembre;
    
    echo "<pre>  <h2> array moisa2 after PUSH</h2> ";
    print_r ($moisa2);
    echo "/<pre>";


?>