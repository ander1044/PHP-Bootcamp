#!/usr/bin/php
<?php
 $counter = 0;
// $my_str = trim($argv[1], " ");
if($argc > 1)
{
    while($argv[$counter])
    {
        echo trim($argv[$counter]);
        $counter++;
    }
}


// while($counter < count($my_str))
// {
//     echo "$my_str[$counter]";
//     $counter++;
//     if($counter != count($my_str))
//         echo " ";
//     else
//         echo "\n";
// }
?>