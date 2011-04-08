<?php

require_once 'colorize.php';
//new instance with src images
$c =  new colorize(array(
    'src/red_arrow.png',
    'src/red_star.png'

));
//replace colors in the src
$c->replace(
	array('ED1C24', '000', 'e8d3d5'),
	array('7ADC4B', '4A4A4A'), 
    'green'
);
?>