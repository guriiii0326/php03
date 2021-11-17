<?php 
$name="Tomoka";
if($name="Tomoka"){
    echo "私は".$name."です";
}else{
    echo $name."ではありません";
}

$number=0;
for($x=0;$x<=10000;$x++){
    $number+=$x;
}
echo "\n".$number;

$fruits=array("Apple","Pineapple","Banana","Grape","Peach");
foreach($fruits as $fruit){
    echo "\n".$fruit." ";
}

$start=1;
$end=100;
for($i=$start;$i<=$end;$i++){
    if($i%5==0){
        echo "\n".$i."\n";
    }
}