<?php

$filename = "/1.mp3";
$contents = file_get_contents($filename);
echo $contents;



$f = fopen('/1.mp3', 'rb');
rewind($f);
fseek($f, -128, SEEK_END);
$tmp = fread($f,128);
if ($tmp[125] == Chr(0) and $tmp[126] != Chr(0)) {
    // ID3 v1.1
    $format = 'a3TAG/a30NAME/a30ARTISTS/a30ALBUM/a4YEAR/a28COMMENT/x1/C1TRACK/C1GENRENO';
} else {
    // ID3 v1
    $format = 'a3TAG/a30NAME/a30ARTISTS/a30ALBUM/a4YEAR/a30COMMENT/C1GENRENO';
}

$id3tag = unpack($format, $tmp);
?>
