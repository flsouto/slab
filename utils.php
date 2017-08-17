<?php

function recall($index){

    $dir = __DIR__."/step$index";

    if(!is_dir($dir)){
        die("No step to recall: $index");
    }

    $data = [];
    if(file_exists($dir."/data.json")){
        $data = json_decode($dir."/data.json", true);
    }

    foreach(glob($dir."/*.wav") as $wav){
        $data[str_replace(".wav","",basename($wav))] = $wav;
    }

    return $data;
}

function shiftlen($curlen){

    $config = require 'config.php';
    $lens = $config['lens'];
    shuffle($lens);

    foreach($lens as $len){
        if($len!=$curlen){
            return $len;
        }
    }

    return $curlen;

}

function dm(){
    $config = require 'config.php';
    return $config['dm']();
}