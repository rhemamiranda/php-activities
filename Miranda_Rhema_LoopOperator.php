<?php 

function Product($num1,$num2){
    $disp=0;
   
    while($num1 !=0){
        $disp += $num2;
        $num1--;
    }
    return $disp;
}

function Quotient($num1,$num2){
    $disp=$num1;
    $quotient=0;
    $n = $num2;
    while($disp >= 0){
        $disp -= $num2; 
        if($disp >= 0 ){
            $quotient++;
        }
    }

    return  $quotient;
}

function Remainder($num1,$num2){

    $disp=$num1;
    $remainder=0;

    while($disp >= 0){
        $disp -= $num2;
        if($disp >= 0 ){
            $remainder= $disp;
        }
    }

    return  $remainder;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartofDavid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>

    <form name="number" method="post" class="container my-5 form-group row mx-auto p-0 bordered">
    
    <div class="col-8 mb-2 mx-auto">
        <label> First Number: </label>
        <input class="form-control" type="number" min="0" name="n1" placeholder="number" /> </div>
    
    <div class="col-8 mb-2 mx-auto">
        <label> Second Number: </label>  
         <input class="form-control" type="number" min="0" name="n2" placeholder="number" /> </div>
    <div class="col-8 mb-2 mx-auto">    <input class="btn btn-primary col-12" type="submit" name="submit" value="SUBMIT" /> </div>
    </form>

    <div  class="container">
        <h2 class="col-8 mx-auto">Result:</h2>
        <h3 class="col-8 mx-auto">
            <?php 
            
                if(isset($_POST['n1'])){
                    if(is_numeric($_POST['n1']) == TRUE && is_numeric($_POST['n2']) == TRUE){
                        echo'Product: '.Product($_POST['n1'], $_POST['n2']).'<br/>';
                        echo'Quotient: '.Quotient($_POST['n1'], $_POST['n2']).'<br/>';
                        echo'Remainder:'.Remainder($_POST['n1'], $_POST['n2']).'<br/>';

                    }
                    
                }
            ?>
        </h3>
    </div>
    
</body>
</html>