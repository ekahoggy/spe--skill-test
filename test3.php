<?php

    function findNeedle($arr, $needle){
        if (in_array($needle, $arr))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    var_dump(findNeedle(["red", "blue", "yellow", "black", "grey"], "blue"));
?>