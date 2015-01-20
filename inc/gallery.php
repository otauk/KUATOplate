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
