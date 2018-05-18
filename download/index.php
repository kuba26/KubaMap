<?php

$mijnArray = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

echo $mijnArray[0];
$laatsteIndex = count($mijnArray) -1;
echo " ";
echo $mijnArray[$laatsteIndex];
?>

<?php

for($i=0; $i<count($mijnArray); ++$i)
{
  $Som = $mijnArray[$i] + $Som;
}

echo " ";
$gemiddelde= $Som/ count($mijnArray);

echo $gemiddelde;
$gemetentemperaturen = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
echo " ";  
echo max($gemetentemperaturen);

?>
<br>

<?php
$gemetentemperaturen = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$tmp = array_count_values($gemetentemperaturen);
$cnt = $tmp[62];

echo $cnt;
?>
<br>
<br>
<?php
$legeArray = array();
for($i=200; $i<=250; ++$i)
{
  
  if($i/4)
  {
  array_push($legeArray, $i);
  }
  
}

?>