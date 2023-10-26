<?php
function removehtml($text){
return strip_tag($text);
}
echo removehtml(p);
?>