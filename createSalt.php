<?php
    function createSalt(){
        $string = md5(uniqid(rand(), true));
        return substr($string, 0, 3);
    }
?>