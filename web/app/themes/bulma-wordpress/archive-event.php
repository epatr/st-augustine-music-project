<?php

    get_header();


    $todaysDate = date('Ymd', strtotime("-6 months"));
    $eventQuery = array(
        'posts_per_page' => -1,
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

    $the_query = new WP_Query($eventQuery);

    if ($the_query->have_posts()) : 
?>

<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Bands</th>
            <th>Venue</th>
            <th>Cost</th>
            <th>Flyer</th>
        </tr>
    </thead>

    <?php
        while ($the_query->have_posts()) :
            $the_query->the_post();

            get_template_part('templates/views/table-events', get_post_format());

        endwhile;
    ?>

</table>

<?php endif; ?>

<div class="has-text-centered"><a href="/event-history/">View Older Events</a></div>

<?php 
    get_footer();
?>