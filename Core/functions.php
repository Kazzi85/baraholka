<?php
include_once 'KazzEngine.php';

use core\KazzEngine;

if($_SERVER['REQUEST_URI']){
    $query = explode('?', $_SERVER['REQUEST_URI']);
    if (ispageexist($query[0])) {
        KazzEngine::getContent($query[0]);
    }
}

function ispageexist ($query) {
    if(count(explode('/', $query)) > 1) {
        return true;
    } else {
        return false;
    }
}



