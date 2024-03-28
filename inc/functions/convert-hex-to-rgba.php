<?php

function hex2rgba($hexColor, $alpha = 1) {
    $hexColor = ltrim($hexColor, '#');
    $rgb = str_split($hexColor, 2);
    $red = hexdec($rgb[0]);
    $green = hexdec($rgb[1]);
    $blue = hexdec($rgb[2]);
    return "rgba({$red}, {$green}, {$blue}, {$alpha})";
}
function degradate_color($color,$slug){
    $css_line = '';
    for ($i=0; $i < 11 ; $i++) { 
        if($i==0){
            $rgba = hex2rgba($color, $i);
            $css_line.= $slug.'rgba-0: '.$rgba.';';
        }else{
            $rgba = hex2rgba($color, $i * 0.1);
            $css_line.= $slug.'rgba-'.($i).'0: '. $rgba .';';
        }
        $css_line.= "\n";
    }
    return $css_line;
}