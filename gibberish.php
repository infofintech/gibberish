<?php
$backColorGen = ['5f677a','939393','2264c8','009f4b','d83d48','ddab00','009f8c','8080c0','8ab300','bb5e9a','ee7d33','dd4d76','3681de','93796a','d58d56','9a3c51'];
if (file_exists('font')) {
    $fontFile = file_get_contents('font');
    if ($fontFile != '') {
        $font = $fontFile;
    } else {
        $font = 'arialuni.ttf';
    }
} else {
    $font = 'arialuni.ttf';
}
$backColor = $backColorGen[rand(0, 15)];
$min = ($_REQUEST['min']) ? $_REQUEST['min'] : 33;
$max = ($_REQUEST['max']) ? $_REQUEST['max'] : 126;
$count = ($_REQUEST['count']) ? $_REQUEST['count'] : 860;
$size = ($_REQUEST['size']) ? $_REQUEST['size'] : 20;
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
    font-family: "showfont";
    src: url("<?=$font;?>?rev=<?=time();?>");
}
body {
    background-color: #<?=$backColor;?>;
    color: #fff;
    font-family: "showfont";
    font-size: <?=$size;?>pt;
    overflow-wrap: anywhere;
}
</style>
</head>
<body>
<?=$text;?>
</body>
</html>