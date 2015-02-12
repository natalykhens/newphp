<?php
function print_mas($mas)
    {
    $i=1;
    foreach($mas as $value)
        {
            echo "$i. $value \n";
            $i++;
        }
    }

