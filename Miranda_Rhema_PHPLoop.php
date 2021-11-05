
<!--
  Submitted by: Rhema Miranda
  BSIT-4B
  PHP: Shape Drawing
-->
<?php
  $input =5;

  function DrawLine($num){
      $disp='';
    for($x=1;$x<=$num;$x++){
      $disp.=' *';
    }
      $disp.='<br/>';
      return $disp;
  }

  function DrawStripedLine($num){
    $disp='';
    for($y=1;$y<=$num;$y++){
      if($y % 2 == 0){
          $disp.='_ ';
      }
      else{
          $disp.='* ';
      }
    }
    $disp.='<br/>';
    return $disp;
  }

  function DrawSquare($num){
      $disp='';
      for($y=1;$y<=$num;$y++){
        for($x=1;$x<=$num;$x++){
          $disp.='* ';
        }
        $disp.='<br/>';
      }
      return $disp;
  }

  function DrawParallelogram($num){
    $disp='';
    $n=0;
    $k = $num-1;

    for($y=1;$y<=$num;$y++){
        for($x=1;$x<=$k;$x++){
            $disp.='_ ';
        }
        for($x=1;$x<=$num;$x++){
            $disp.='* ';
        }
        for($x=1;$x<=$n;$x++){
            $disp.='_ ';
        }
        $k--;
        $n++;

      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawTriangle($num){
    $disp='';
    $n=0;
    $k = $num;

    for($y=1;$y<=$num;$y++){
        for($x=1;$x<=$k;$x++){
            $disp.='* ';
        }
        for($x=1;$x<=$n;$x++){
            $disp.='_ ';
        }
        $k--;
        $n++;

      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawReverseTriangle($num){
    $disp='';
    $n=1;
    $k = $num-1;

    for($y=1;$y<=$num;$y++){
      for($x=1;$x<=$n;$x++){
        $disp.='* ';
        }
        for($x=1;$x<=$k;$x++){
            $disp.='_ ';
        }
        
        $k--;
        $n++;

      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawIsocelesTriangle($num){
    $disp='';
    $n=1;
    $k = $num/2;
    for($y=1;$n<=$num;$y++){
        for($x=1;$x<=$k;$x++){
            $disp.= '_ ';
        }
        for($x=1;$x<=$n;$x++){
            $disp.='* ';
        }
        for($x=1;$x<=$k;$x++){
            $disp.='_ ';
            
        }
        $k--;
        $n+=2;
    
      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawReverseIsocelesTriangle($num){
    $disp='';
    $n=0;
    $k = $num;
    for($y=$num;$k>=0;$y--){

        for($x=$n;$x>=1;$x--){
            $disp.= '_ ';
        }
        for($x=$k;$x>=1;$x--){
            $disp.='* ';
        }
        for($x=$n;$x>=1;$x--){
            $disp.= '_ ';
        }
        $k-=2;
        $n++;

      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawHourGlass($num){
    $disp='';
    $l=0;

    $c=$num;
    $s=1;
    for($y=$num;$y>=1;$y--){

      for($x=1;$x<=$l;$x++){
        $disp.='_ ';  
      }
      
      for($i=1;$i<=$c;$i++){
        $disp.='* ';
      }

      for($x=1;$x<=$l;$x++){
        $disp.='_ ';
      }

        if($s!=2){
          $l++;
          $c=$c-2;}
        else{
          $l--;
          $c=$c+2;
        }

        if($l==round(($num/2), 0, PHP_ROUND_HALF_UP)){
          $s=2;
          $c=1;
          $c=$c+2;
          $l=$l-2;
        }
        $disp.='<br/>';
    }

    return $disp;
  }

  function DrawDiamond($num){
    $disp='';

    $l=$num/2;
    $c=1;
    $s=1;
    for($y=1;$y<=$num;$y++){
      for($x=1;$x<=$l;$x++){
          $disp.= '_ ';
      }
      for($x=1;$x<=$c;$x++){
          $disp.='* ';
      }
      for($x=1;$x<=$l;$x++){
          $disp.='_ ';
          
      }

      if($s!=2){
        $l--;
        $c+=2;
      }
      else{
        $l++;
        $c-=2;
      }
      if($c==$num){
        $s=2;
      }

    $disp.='<br/>';
  }

   
    return $disp;
  }

  function DrawZero($num){
    $disp='';
    $n=$num-2;
    $k = $num;

    for($y=1;$y<=$num;$y++){
        if($y==1 ||$y == $num ){
          for($x=1;$x<=$num;$x++){
            $disp.='* ';
          }
        }
        else{
          $disp.='* ';
          for($x=1;$x<=$n;$x++){
            $disp.= '_ ';
          }
          $disp.='* ';
        }
      $disp.='<br/>';
    }
    return $disp;
  }

  function DrawArrowUp($num){
    $disp='';

    $n=1;
    $k = $num/2;
    for($y=1;$n<=$num;$y++){
        for($x=1;$x<=$k;$x++){
            $disp.= '_ ';
        }
        for($x=1;$x<=$n;$x++){
            $disp.='* ';
        }
        for($x=1;$x<=$k;$x++){
            $disp.='_ ';
            
        }
        $k--;
        $n+=2;
      $disp.='<br/>';
    }


    $k = round($num/2, 0, PHP_ROUND_HALF_ODD);
    $n = round(($num/2)/2, 0, PHP_ROUND_HALF_ODD);
  
    for($y=1;$y<=($num/2);$y++){
      for($x=1;$x<=$n;$x++){
        $disp.= '_ ';
      }
      for($x=1;$x<=$k;$x++){
          $disp.='* ';
      }
      for($x=1;$x<=$n;$x++){
          $disp.='_ ';
      }
      
      $disp.='<br/>';
    }

    return $disp;
  }

  function DrawArrowDown($num){
    $disp='';

    
    $k = round($num/2, 0, PHP_ROUND_HALF_ODD);
    $n = round(($num/2)/2, 0, PHP_ROUND_HALF_ODD);
  
    for($y=1;$y<=($num/2);$y++){
      for($x=1;$x<=$n;$x++){
        $disp.= '_ ';
      }
      for($x=1;$x<=$k;$x++){
          $disp.='* ';
      }
      for($x=1;$x<=$n;$x++){
          $disp.='_ ';
      }
      
      $disp.='<br/>';
    }

    $n=1;
    $k = $num/2;
    $n=0;
    $k = $num;
    for($y=$num;$k>=0;$y--){

        for($x=$n;$x>=1;$x--){
            $disp.= '_ ';
        }
        for($x=$k;$x>=1;$x--){
            $disp.='* ';
        }
        for($x=$n;$x>=1;$x--){
            $disp.= '_ ';
        }
        $k-=2;
        $n++;

      $disp.='<br/>';
    }



    return $disp;
  }

  function DrawX($num){
    $disp='';

    
    $l= 1;
    $r= $num;

    for($y=1;$y<=$num;$y++){
      
      for($x=1;$x<=$num;$x++){
        if($x==$l || $x==$r){
          $disp.='* ';
        }
        else{
          $disp.='_ ';
        }
      }
      $l++;
      $r--;

      $disp.='<br/>';
    }



    return $disp;
  }

  function DrawBowTie($num){
    $disp='';

    $l=1;
    $r=$num;
    $c=$num-2;
    $s=1;
    for($y=$num;$y>1;$y--){

      for($x=1;$x<=$l;$x++){
        $disp.='* ';  
      }
      
      for($i=1;$i<=$c;$i++){
        $disp.='_ ';
      }

      for($x=1;$x<=$l;$x++){
        $disp.='* ';
      }


        
        if($s!=2){
          $l++;
          $c=$c-2;
         
        }
        else{
          
          $l--;
          $c=$c+2;
        }

        if($l==round(($num/2), 0, PHP_ROUND_HALF_UP)){
          
          $s=2;
          $c=1;
          $disp.='<br/>';

          for($x=1;$x<=$num;$x++){
            $disp.='* ';
          }
          $l=($num/2);
        }

        $disp.='<br/>';
    }

  return $disp;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <body style="background-color:#5F689F;">
 <p style="color:white; font-size:16px; font-style:motserrat;"><?php
  echo 'Submitted by: Rhema Miranda<br/>';
  echo 'Line <br/>'. DrawLine($input).'<br/>';
  echo 'Striped Line <br/>'. DrawStripedLine($input).'<br/>';
  echo 'Square <br/>'. DrawSquare($input).'<br/>';
  echo 'Parallelogram <br/>'. DrawParallelogram($input).'<br/>';
  echo 'Triangle <br/>'.  DrawTriangle($input).'<br/>';
  echo 'Reverse Triangle <br/>'.  DrawReverseTriangle($input).'<br/>';
  echo 'Isoceles Triangle <br/>'.  DrawIsocelesTriangle($input).'<br/>';
  echo 'Reverse Isoceles Triangle <br/>'.  DrawReverseIsocelesTriangle($input).'<br/>';
  echo 'Hour Glass <br/>'.  DrawHourGlass($input).'<br/>';
  echo 'Diamond <br/>'.  DrawDiamond($input).'<br/>';
  echo 'Zero <br/>'.  DrawZero($input).'<br/>';
  echo 'Arrow Up <br/>'.  DrawArrowUp($input).'<br/>';
  echo 'Arrow Down <br/>'.  DrawArrowDown($input).'<br/>';
  echo 'X <br/>'.  DrawX($input).'<br/>';
  echo 'Bow Tie <br/>'.  DrawBowTie($input).'<br/>';
  ?>
  </p> 
  </body>
</html>