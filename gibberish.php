<?php
$backMode = rand(0, 11);
if ($backMode == 0) {
    $backColor = '5f677a';
} elseif ($backMode == 1) {
    $backColor = '939393';
} elseif ($backMode == 2) {
    $backColor = '2264c8';
} elseif ($backMode == 3) {
    $backColor = '009f4b';
} elseif ($backMode == 4) {
    $backColor = 'd83d48';
} elseif ($backMode == 5) {
    $backColor = 'ddab00';
} elseif ($backMode == 6) {
    $backColor = '009f8c';
} elseif ($backMode == 7) {
    $backColor = '8080c0';
} elseif ($backMode == 8) {
    $backColor = '8ab300';
} elseif ($backMode == 9) {
    $backColor = 'bb5e9a';
} elseif ($backMode == 10) {
    $backColor = 'ee7d33';
} elseif ($backMode == 11) {
    $backColor = 'dd4d76';
}
$min = ($_REQUEST['min']) ? $_REQUEST['min'] : 32;
$max = ($_REQUEST['max']) ? $_REQUEST['max'] : 127;
$all = ($_REQUEST['all']) ? $_REQUEST['all'] : 860;
for ($i = 0; $i < $all; $i++) {
    $text .= mb_chr(rand($min, $max), 'UTF-8');
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Gibberish</title>
<link rel="shortcut icon" href="sys.language.png?rev=<?=time();?>" type="image/x-icon">
<style>
@font-face {
    font-family: "arialuni";
    src: url("arialuni.ttf");
}
body {
    background-color: #<?=$backColor;?>;
    color: #fff;
    font-family: "arialuni";
    font-size: 20pt;
    overflow-wrap: anywhere;
}
</style>
</head>
<body>
<?=$text;?>
</body>
</html>
