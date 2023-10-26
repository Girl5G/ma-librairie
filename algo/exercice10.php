<?php
function email($email){

    $result = strstr($email,'@');
    
    return substr($result, 1,strlen($result));
    }
    echo email("bonjour@gmail.com");

?>