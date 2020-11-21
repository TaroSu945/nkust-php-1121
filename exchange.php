<!DOCTYPE html>
<html>
    <head>
        <title>ME 2B</title>
    </head>
</html>

<?php
//    for ($i=1;$i<=6;$i++)
//    {
//        echo "<h{$i}> My first PHP script!</h{$i}>\n ";
//    }
?>


<?php
//    $rate = 28.3;
//    $data = array(50000,30000,45000,80000,1200000);
//    for($i=0; $i<count($data);$i++)
//    {
//        echo "新台幣" . $data[$i] ."元換算成美金是" . round($data[$i] / $rate,2) ."元<br>";
//    }
   
?>

<?php
    $money = 100;
    $name = array("美金","港幣","英鎊","澳幣","加拿大幣");
    $rate = array(28.6,3.715,38.225,21.01,21.96);
    for($i=0;$i<count($rate);$i++)
    {
        echo "你的臺幣". $money . "元換算成".$name[$i]."為" . 
        ($money / $rate[$i])."元<br>";  
    }
?>

