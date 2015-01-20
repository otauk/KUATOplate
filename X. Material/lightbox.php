<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP - Ordner auslesen und anzeigen</title>
<style type="text/css">

</style>
<link href="css/jquery.lightbox.css" rel="stylesheet" type="text/css"/>
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox.min.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
	// ID der Galerie aufrufen und lightbox Funktion ausführen
	$('#galerie a').lightBox();
});
</script>
</head>

<body>
<ul id="galerie">
<?php
// Breite der Thumbnails
$thumbWidth = "150";
// Höhe der Thumbnails
$thumbHeight = "150";
// ZoomCrop ja(1) oder nein (0)?
$thumbCrop = "1";
// Ordner mit images
$ordner = "img";
// Ordner für Vorschau auslesen
$allebilder = scandir($ordner);
foreach ($allebilder as $bild) {
	// Pfad zum Original
	$ordnerinfo = pathinfo($ordner."/".$bild);
	// bestimmte Dateien von der Anzeige ausschließen
	if ($bild != "." && $bild != ".."  && $bild != "_notes" && $ordnerinfo['basename'] != "Thumbs.db" && $bild != ".DS_Store") {
	// Ausgabe der Bilder
	?>
    <li>
    <a title="<?php echo $ordnerinfo['filename']; ?>" href="<?php echo $ordnerinfo['dirname']."/".$ordnerinfo['basename'];?>">
	    <img src="inc/timthumb.php?src=<?php echo $ordnerinfo['dirname']."/".$ordnerinfo['basename'];?>&w=<?=$thumbWidth;?>&h=<?=$thumbHeight;?>&zc=<?=$thumbCrop;?>" alt="<?php echo $ordnerinfo['filename']; ?>" />
	</a>
	</li>
<?php
	};
 };
?>
</ul>
</body>
</html>
