<?php

function eb_bls_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'data' => '',
    ), $atts);

    return "data = {$a['data']}";
}

add_shortcode( 'bls-data', 'eb_bls_shortcode' );