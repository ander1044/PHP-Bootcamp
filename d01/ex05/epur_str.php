#!/usr/bin/php
<?php

$my_str = preg_replace('/[\s]+/', ' ', $argv[1]);
echo trim($my_str);
?>