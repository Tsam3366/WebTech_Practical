<?php
$num=0;
$num1=0;
$num2=1;
$n=(int)readline('Enter n:');
while($num<$n)
{
echo$num1.'  ';
$num3=$num1+$num2;
$num1=$num2;
$num2=$num3;
$num++;
}
?>