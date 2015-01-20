<?php
include("inc/thumbnail_func.php");
// Verzeichnis auslesen, Thumbnails generieren und neu ablegen
$source_path = 'img/source';
$destination_path = 'img/thumbs';

if ($handle = opendir($source_path)) {
while (false !== ($filename = readdir($handle))) {
if($filename!='.' and $filename!='..') {
createthumb($source_path.'/'.$filename, $destination_path.'/'.$filename, 150, 150);
}
}
closedir($handle);
}
?>