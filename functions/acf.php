<?php

// Advanced Custom Fields

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
    	'page_title' => __('Global Options'),
    ));
}