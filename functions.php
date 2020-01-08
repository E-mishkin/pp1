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