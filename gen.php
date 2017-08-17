<?php

if(INDEX==17){
    die('done');
}

$prev = null;

if(INDEX==1){
    $len = MIN_LEN;
    $pattern = $dm->mkseq(rand(2,7), '?');

} else {

    $prev = recall(INDEX-1);

    if(in_array(INDEX,[3,5,7,9,11,13,15])){
        $len = shiftlen($prev['len']);
    } else {
        $len = $prev['len'];
    }

    $pattern = $dm->alter($prev['pattern']);

}

if($len==MIN_LEN){

} else {

}


return [
    ''
];