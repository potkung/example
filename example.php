<?php error_reporting(0); ?>

<style type="text/css">
	.text-right { text-align: right; }
	.text-center { text-align: center; }
	.ans { width: 200px; height: auto; border: 1px solid; margin-bottom: 20px;}
</style>

<?php
/**----------- 1.1 -----------**/
for($i=0; $i<5; $i++){
	$rs .= "O";
	$br = "<br>";
	$fulltext .= $rs.$br;
}
?>
<div class="text-right ans"><?= $fulltext;?> </div>

<?php
/**----------- 1.2 -----------**/
for($i=0; $i<5; $i++){
	$r .= $i == 0 ? "O":"OO";
	$b = "<br>";
	$full .= $r.$b;
}
?>
<div class="text-center ans"><?= $full;?> </div>

<?php
/**----------- 2.1 -----------**/
$salary = 10000;
if($salary < 10000){
	$salary = $salary+200;
}else if($salary < 11000){
	$salary += 200;
}else if ($salary < 11000){
	$salary += 300;
}

echo "2.1 ตอบ ".$salary;

echo "<br>";
/**----------- 2.2.1 -----------**/

$bath = 100; 
echo "2.2.1 ตอบ ";
echo ($bath == 300 ? "300":"200");
echo "<br>";

/**----------- 2.2.2 -----------**/
$score=9; $age=10;
echo "2.2.2 ตอบ ";
echo "Your Score is :". $score > 10 ? ($age > 10 ? "Average":"Exceptional"):($age > 10 ? "Horribal":"Average");
echo "<br>";

/**----------- 3.1 -----------**/
echo "3.1 ตอบ <br>";
$data = array(
    10000 =>15000,
    15000 =>20000,
    10200 =>35000
);
foreach($data as $salary){
    if($salary < 10000){
    $salary = $salary+200;
    }else if($salary < 11000){
    $salary += 200;
    }else if ($salary < 11000){
    $salary += 300;
    }
    echo  $salary."<br>" ;
}
echo "<br>";

/**----------- 3.2.1 -----------**/
echo "3.2.1 ตอบ " ;
$mark = array(
    "mohammad"=>array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=>39
    ),
    "qadir"=>array(
        "physics"=>30,
        "maths"=>32,
        "chemistry"=>29
    ),
    "zara"=>array(
        "physics"=>31,
        "maths"=>22,
        "chemistry"=>39
    ),
);
echo  $mark ["mohammad"]["physics"] ;
echo "<br>";

/**----------- 3.2.2 -----------**/
echo "3.2.2 ตอบ " ;
foreach($mark as $row){
    foreach($row as $value){ 
        echo  $value." " ;
    }
}
echo "<br>";
echo "<br>";
/**----------- 4 -----------**/
?>

<style type="text/css">
	.square { width: 238px; height: 198px; border: 1px solid black;}
	.bl-square { display: inline-flex; }
	.magin-right { margin-right: 10px; }
</style>
<div class="bl-square">
<div class="square magin-right"></div>
<div class="square magin-right"></div>
<div class="square"></div>
</div>