<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOX</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
    <div class=" container mt-5"> 
    <?php 
    $colors = array("RED", "GREEN", "BLUE", "BLACK", "YELLOW", "WHITE");
    
    for($i=0;$i<=9;$i++):?>
        <div class=" col-12  d-flex justify-content-center"> 
        <?php for($y=0;$y<=9;$y++):?>
            <div style="background-color:<?= $colors[rand(0,5)]?>;height:10px; width:10px;" class="p-4 "></div>
        <?php endfor;?>
        </div>
    <?php endfor;?>
    </div>
    
</body>
</html>