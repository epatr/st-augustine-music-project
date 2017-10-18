<?php
    $eventQuery = bulmawordpress_event_query('events', 5);

    $the_query = new WP_Query($eventQuery);

    if ($the_query->have_posts()) : 
        while ($the_query->have_posts()) :
            $the_query->the_post();

            get_template_part('templates/views/li-small', get_post_format());

        endwhile;

    endif;

    wp_reset_query();