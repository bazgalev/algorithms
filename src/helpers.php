<?php

function swap(int &$a, int &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
