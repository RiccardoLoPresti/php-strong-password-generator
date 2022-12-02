<?php
function getRandom($userNumb,$letters,$numbers,$specials){

    $result = array_merge($specials,$letters,$numbers);
    
    shuffle($result);

    return implode('', array_slice($result, 0, $userNumb));
}
?>