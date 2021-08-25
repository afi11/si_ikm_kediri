<?php

function ThousandSeparator($number)
{
    return number_format($number,0,'.',',' );
}