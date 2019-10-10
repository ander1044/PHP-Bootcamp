#!/usr/bin/php
<?php

echo "Enter a number: ";
 $num = rtrim(fgets(STDIN));
{
if(is_numeric($num))
{
    if($num == 0){
        echo "The Number $num is even\n";
    }
    else if($num % 2 != 0){
    echo "The Number $num is odd\n";
    }
    else{
    echo "The Number $num is even\n";
    }
}
else{
    echo "'$num' is not a number\n";
}
}
?>