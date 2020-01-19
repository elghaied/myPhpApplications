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


<?php include 'include/menu.php'?>

  <!-- Le corps -->
  <div id="corps">
        <h1>Mon super site</h1>
        <?php 
        for($i=0; $i < 10; $i++){
            require 'include/body.php';
        }
        ?> 
    </div>
    <!-- Footer -->

<?php include 'include/footer.php'?>
    
