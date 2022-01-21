<?php 


function StartofDavid($num){
    $disp='';

    $switch_ =1;
    $asterisk=1;
    for($y=1;$y<=$num-2;$y++){

        if($asterisk==($num-4)){
            for($x=1;$x<=$num;$x++){
                $disp.='*';
            }
        }
        else if($asterisk == ($num-2)){
            $disp.='_';
            for($x=1;$x<=$num-2;$x++){
                $disp.='*';
            }
            $disp.='_';
            $switch_ =2;

        }
        else{
            for($x=1;$x<=($num-$asterisk)/2;$x++){
                $disp.='_';
            }
            for($x=1;$x<=$asterisk;$x++){
                $disp.='*';
            }
            for($x=1;$x<=($num-$asterisk)/2;$x++){
                $disp.='_';
            }
        
        }
        $disp.='<br/>';

        if($switch_==1){
            $asterisk +=2;
        }
        else{
            $asterisk -=2;
        }
        
    }

   
    return $disp;
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
        <label> Enter an odd number greater than 6: </label>
        <div class="col-8 mb-2"> <input class="form-control" type="number" name="n" placeholder="number" /></div>
        <div class="col-4 mb-2"> <input class="btn btn-primary col-12" type="submit" name="submit" value="SUBMIT" /></div>
    </form>
    <div class="container">
        <h2>Result:</h2>
        <h3 class="mx-auto">
            <?php 
            
                if(isset($_POST['n'])){
                    if(is_numeric($_POST['n']) == TRUE && $_POST['n']%2 != 0 && $_POST['n'] >=7){
                      echo StartofDavid($_POST['n']);
                    }
                    
                }
            ?>
        </h3>
        
    </div>
    
    
</body>
</html>