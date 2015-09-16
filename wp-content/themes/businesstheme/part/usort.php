<?php
/**
 * Created by PhpStorm.
 * User: jabran
 * Date: 9/9/2015
 * Time: 4:30 PM
 */
function file_sort($file1,$file2){
    global $desired_order;



    if($file1===$file2)
        return 0;

    $file1position=array_search($file1,$desired_order);
    $file2position=array_search($file2, $desired_order);
    return($file1position>$file2position)?1:-1;

}

?>