<?php

function add_excerpt_class( $excerpt )
{
    $excerpt = str_replace( "<p", "<p class=\"pBlack\"", $excerpt );
    return $excerpt;
}
 
add_filter( "the_excerpt", "add_excerpt_class" );
 
?>