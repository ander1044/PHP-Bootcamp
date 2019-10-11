#!/usr/bin/php
<?php
$counter = 1;

if(count($argv) > 2)
{
    $my_var = preg_replace('/[\s]+/', ' ', $argv[1]);
    $my_val = explode(' ', $my_var);
    $my_str = $my_val[0];
    unset($my_val[0]);
    array_push($my_val, $my_str);
    $my_val = array_values($my_val);
    foreach($my_val as $new_str)
    echo("$new_str ");
    echo("\n");
}
return ;
?>