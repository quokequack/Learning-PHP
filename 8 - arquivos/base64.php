<?php

$filename = "tbdm.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);


echo "data:".$mimetype.";base64,".$base64;
?>
<a href="<?=$base64encode?>" target="_blank">Link</a>
<img src="<?=$base64encode?>"></img>