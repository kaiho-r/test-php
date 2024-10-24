<?php
$a=7;
$people="Saburo";

if($a ===5) {
    echo "\aは5です";
} elseif($a ===7) {
    echo "\aは7です";
}

switch ($people) {
    case "Taro":
        echo 'Taroです';
        break;
    case "Saburo":
        echo 'Saburoです';
        break;
}

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;

