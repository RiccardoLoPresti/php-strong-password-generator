<?php
function getRandom($userNumb,$letters,$numbers,$specials){
    $result=[];

    shuffle($letters) ;
    //print_r($letters);

    shuffle($numbers);
    //print_r($numbers);

    shuffle($specials);
    //print_r($specials);

    $temp_result = array_merge($specials,$letters,$numbers);

    shuffle($temp_result);
    //print_r($temp_result);

    $results = array_slice($temp_result, 0, $userNumb);
    //print_r($results);

    return implode('',$results);

}
?>