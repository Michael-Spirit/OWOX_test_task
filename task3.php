<?php

function arrayReverseKeys($a) {
    return array_combine(array_reverse(array_keys($a)), array_values($a));
}
