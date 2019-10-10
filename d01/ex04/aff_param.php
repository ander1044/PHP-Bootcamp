#!/usr/bin/php
<?php
$counter = 1;
if($argc > 1)
{
    while($argv[$counter])
    {
        echo($argv[$counter]."\n");
        $counter++;
    }
}
?>