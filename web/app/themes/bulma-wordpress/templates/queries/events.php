<?php

// YYYYMMDD format, to compare with the event_date field
$todaysDate = date('Ymd');

// This file should have been called in a function with $variables as an integer
return array(
    'posts_per_page' => $variables,
    'post_type' => 'event',
	'order' => 'ASC',
	'orderby' => 'event_date',
    'meta_key' => 'event_date',
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'value' => $todaysDate,
            'type' => 'NUMERIC',
            'compare' => '>='
        )
    )
);