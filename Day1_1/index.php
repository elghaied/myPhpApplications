<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

<div class="container">
<div class="row">
<?php
for ($i=1; $i <= 10; $i++){
    echo '<div class="line">';
    for($y=1; $y <= 10; $y++){
        echo "<span>";
        echo nl2br($i*$y);
        echo "</span>";
    }
    echo "</div>";

}
?>
</div>
<div class="row">
    <!-- Créer un tableau numéroté appelé alphabet, le remplir, afficher sa longueur, afficher chaque caractère un a un -->
    <?php 
    
    $abc = range('a', 'z');
    $a = 'A';
    $z = 'Z';
    // echo implode($abc);
    for ($i=0; $a<$z;$a++){
        echo $a." ";
        

    }

    echo "<br>",count($abc);


?>

</div>

<div class="row">
<!-- Créer tableau indexé appelé mois, le remplir, afficher pour chaque mois son nom et le nombre de jour -->
    <?php 
    $months = array(
        'January' => '31 days',
        'February' => '28 days',
        'March' => '31 days',
        'April' => '30 days',
        'May' => '31 days',
        'June' => '30 days',
        'July' => '31 days',
        'August' => '31 days',
        'September' => '30 days',
        'October' => ' 31 days',
        'November' => '30 days',
        'December' => '31 days',
    );
    ?>
    <pre>
   <?php print_r ($months);?>

    </pre>

</div>

<div class="row">

<?php

$ascii = 0;
$ind=0;
while ($ascii<300){
    $ascii += ord($abc[$ind]);
    echo $abc[$ind], ' has the value', $ascii,'<br>';
    $ind++;
}

?>

</div>

<div class="row">
    <?php
    $zerocounter= 1;
    $impair = 0;
    $pair = 0;
    foreach($months as $x => $x_value) {
        if($zerocounter%2==1){
            echo "The Month " . $x . ", is impair";
            $impair++;
        }
        else {
            echo "The Month " . $x . ", is pair";
            $pair++;
        }
        echo "<br>";
        $zerocounter++;
    }
    echo " there are $pair months and $impair months";

    ?>
   
</div>
<div class="row">
        <?php
    echo date("j-n-Y ");
    ?>
    </div>
</div>

</body>
</html>