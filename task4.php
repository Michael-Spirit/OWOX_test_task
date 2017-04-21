<?php

function myStrRev($s) {
    $reversed = "";
    for ($i = strlen($s) - 1; $i >= 0; $i--) {
        $reversed = $reversed . $s[$i];
    }

    return $reversed;
}
