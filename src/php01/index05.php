<?php
for ($i = 1; $i < 6; $i++) {
  echo $i*2;
  echo  "<br />";
}

$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }elseif($count%6 ===0) {
    $count++;
    continue;
  } else {
    echo $count."<br />";
    $count++;
  }
}

$num = 0;
do {
  echo "num = " . $num . '<br />';
  $num++;
} while ($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz. '<br />';
  } else if ($i % 3 == 0) {
    echo $Fizz. '<br />';
  } else if ($i % 5 == 0) {
    echo $Buzz. '<br />';
  } else {
    echo $i. '<br />';
  }
}

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />"; 
}