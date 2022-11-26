<?php
function info($arr){
    foreach ($arr as $key => $value) {
        empty($value) ? $value = "-" : $value = $value;
        echo "$key: $value\n";
    }
}
info([
    "Name" => "The Lord of the Rings",
    "Creator" => "J. R. R. Tolkien",
    "Year" => 1955,
    "Publishing office" => ""
]);