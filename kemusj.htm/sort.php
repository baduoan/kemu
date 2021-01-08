
<?php




echo "<br>";


 $array_name2=array_rand($result2,1);   //array_rand()随机出1个是字符串，
 
 //array_rand()随机出2个是数组对，
 


sort($array_name2);


$age2=array("Peter"=>$array_name2);
//把单个字符串转换成单个数组


$y2=join("",$age2);

//把单个数组转换成单个字符串


//echo $y2;


echo  "<br>";


//在两单个字符串之间随机



//$s=mt_rand($xy,$y2);


//在两单个字符串之间随机




if ($xy<$y2)
{
      $s=mt_rand($xy,$y2);
}
else
{
      $s=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s2=mt_rand($xy,$y2);
}
else
{
    $s2=mt_rand($y2,$xy);


  }


if ($xy<$y2)
{
    $s3=mt_rand($xy,$y2);
}
else
{
    $s3=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s4=mt_rand($xy,$y2);
}
else
{
    $s4=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s5=mt_rand($xy,$y2);
}
else
{
    $s5=mt_rand($y2,$xy);


  }
  
  
if ($xy<$y2)
{
    $s6=mt_rand($xy,$y2);
}
else
{
    $s6=mt_rand($y2,$xy);


  }
  
  
$ag2=array("a"=>$s,"b"=>$s2,"c"=>$s3

,"d"=>$s4,"e"=>$s5,"f"=>$s6);

$ag3=array_unique($ag2);


sort($ag3);


$arrlength=count($ag3);


for($x=0;$x<$arrlength;$x++)
   {
   echo $ag3[$x];
   echo "+";
   }



?>  
