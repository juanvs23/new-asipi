<?php
function newasipi_trim_content($text, $length=90){
    $text = strlen($text)> $length ? substr($text, 0, $length) . '[...]' : $text;
    return $text;
}