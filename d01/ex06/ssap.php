#!/usr/bin/php
<?php

$counter = 1;
 $my_str = array();
    while($counter < count($argv))
    {
        $my_val = explode(' ', $argv[$counter]);
        $my_str = array_merge($my_str, $my_val);
        $counter++;
    }
    sort ($my_str);
    foreach($my_str as $new_str)
    echo($new_str."\n");
?>