<?php
/**
 * @param $bug
 * @return string
 */
public function solveBug($bug){
    $bug->getFixedPlz();

    return "Fixed";
}

public function anotherChange(){
    echo "a change";
}