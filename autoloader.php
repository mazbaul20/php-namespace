<?php
//namespace project
spl_autoload_register(function($className){
    $path = strtolower(str_replace("CloudStorage\\","",$className)).".php";
    $path = str_replace("\\","/",$path);//convert forwart slash
    include_once($path);
});

