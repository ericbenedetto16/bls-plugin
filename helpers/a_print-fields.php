<?php

$data_types = new ArrayIterator(array(
"Hourly 25th percentile wage",
"Hourly median wage",
"Hourly 75th percentile wage",
"Hourly 90th percentile wage",
"Annual 10th percentile wage",
"Annual 25th percentile wage",
"Annual median wage",
"Annual 75th percentile wage",
"Annual 90th percentile wage",
"Employment per 1,000 jobs",
"Location Quotient",
));

$survey = "oe";

function convertToStr(Iterator $iterator) {
    $title = $iterator->current();
    $key = $iterator->key()+7;
    global $survey;
    $name = preg_replace('/[^A-Za-z0-9\-]/', '_', str_replace('  ', ' ',preg_replace('/[^A-Za-z0-9 \-]/','',strtolower($title))));

     print_r("array (
        'key' => 'field_".$survey."_".$key."',
        'label' => $title,
        'name' => $name,
        'type' => 'checkbox',
        'prefix' => '',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
        'readonly' => 0,
        'disabled' => 0,
    ),\n");
    
    return TRUE;
}

iterator_apply($data_types, 'convertToStr', array($data_types));