<?php
function remplace($som,$remplace,$momo){
    $remplace =str_replace($som,$remplace,$momo);
    return $remplace;
}
echo remplace("a faim"."n'a plus faim"."bamba a faim");

?>