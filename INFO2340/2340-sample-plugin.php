<?php
/* 

Plugin Name: 2340 Sample Plugin 
Plugin URL: https://faculty.mccneb.edy/grosas
Description: A sample plugin for INFO 2340.
Version: 1.0
Author: Guillermon J. Rosas
Authort URL: https://faculty.mccneb.edu/grosas/
Liscens: GPL
*/ 

add_shortcode("wittyquote", "get_quote");

function get_quote($atts) {
    $quotes = array (
        "A wise man once said nothing",
        "No one can make you feel inferior without your consent.",
        "We are what we repeatedly do.",
        "The only man who never makes mistakes is the man who never does anything.",
        "Whenever you find yourself on the side of the majority, it is time to pause and reflect.",
    );

    return $quotes[array_rand($quotes)];
}