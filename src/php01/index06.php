<?php
function text($score1,$score2,$score3)
{
  $sum = $score1+$score2+$score3;
  if($sum > 210) {
    $echo = "合計点は".$sum."なので合格です";
  } else {
    $echo = "合計点は".$sum."なので不合格です";
  }
  return $echo;
}
echo ( text(1,100,100));

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

