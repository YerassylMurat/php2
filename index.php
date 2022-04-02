<?php
/*===========================*/
$a=5;
$b=7;
if($a>2 && $a<11 && $b>6 || $b<14){echo "True","<br>";}
else { echo "False ","<br>";}

echo $a+$b,"<br>";
/*===========================*/

echo "<br>";

/*===========================*/
$month=11;
if($month == 12 || $month<=2 && $month>0){echo "Winter","<br>";}
elseif($month >=3 && $month <=5){echo "Spring","<br>";}
elseif($month >=6 && $month <=8){echo "Summer","<br>";}
elseif($month >=9 && $month <=11){echo "Autumn","<br>";}
else {echo "Ошибка! Нельзя ввести число больше 12 и меньше 1.";}
/*===========================*/

echo "<br>";

/*===========================*/
$arr = [24, 47, 6, 13, 5, 89];
$result = $arr[6] - $arr[2] + $arr[1] - $arr[4] + $arr[2] - $arr[3];
echo $result;
?>