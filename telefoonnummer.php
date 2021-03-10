<?php

$tel_regex = "/^[\d]{10}$/";

if (preg_match($tel_regex, $argv[1])) {
    echo "Match";
} else {
    echo "No Match";
}