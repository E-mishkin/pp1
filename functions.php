<?php

    function printArr($numbers) {
        foreach($numbers as $number) {
            echo $number.'<br>';
        }
    }

    function largest($numbers) {
        return $largestNum = max($numbers);
    }

    function removeDups($numbers) {
        $newArray = array_unique($numbers);
        return $newArray;
    }

    function distribution($numbers) {
        $assocArray = array_count_values($numbers);
        ksort($assocArray);
        return $assocArray;
    }