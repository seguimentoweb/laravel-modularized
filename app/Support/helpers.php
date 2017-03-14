<?php

function str_array_dot($str)
{
    $str = str_replace('[', '.', $str);
    $str = str_replace(']', '', $str);

    return $str;
}

/**
 * Write your helpers
 */