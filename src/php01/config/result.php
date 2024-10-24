<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" . $goods . "<br>";
print "注文数は、" . $order . "<br>";