<?php

function checkBrackets($s) {
    $stack_of_brackets = new SplStack();
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == '(' or $s[$i] == '[') {
            $stack_of_brackets->push($s[$i]);
        } elseif ($s[$i] == ')') {
            if ($stack_of_brackets->top() == '(') {
                $stack_of_brackets->pop();
            }
        } elseif ($s[$i] == ']') {
            if ($stack_of_brackets->top() == '[') {
                $stack_of_brackets->pop();
            }
        }
    }

    return $stack_of_brackets->isEmpty();
}
