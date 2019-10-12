#!/usr/bin/php
<?php
$my_str = trim(preg_replace('/[\s]+/', ' ', $argv[1]));
echo ($my_str."\n");
?>