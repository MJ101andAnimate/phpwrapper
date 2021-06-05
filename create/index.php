<?php

$content = $_POST["themeId"];
$fp = fopen("myText.txt","wb");
fwrite($fp,$content);
fclose($fp);

?>