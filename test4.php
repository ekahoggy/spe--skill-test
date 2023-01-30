<?php

    function blueOcean($arr, $k){
        $ke = preg_replace('/[^0-9\.]/ui','',$k);
        $num = (int)$ke[0];
        

        if (in_array($num, $arr)){
            
            foreach (array_keys($arr, $num) as $key) {
                unset($arr[$key]);
            }

            return $arr;
        }
        else{
            return "Not Found In array";
        }
    }

    var_dump(blueOcean([1,2,3,4,6,10], [1]));
?>