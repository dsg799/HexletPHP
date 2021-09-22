<?php

function isPalindrome($word)
{
    $length = strlen($word);
    for ($i = 0; $i < $length; $i++) {
        if ($word[$i] != $word[-$i-1]) {
            return false;
        } else {
            continue;
        }
    }
    return true;
}

var_dump(isPalindrome('abba'));
