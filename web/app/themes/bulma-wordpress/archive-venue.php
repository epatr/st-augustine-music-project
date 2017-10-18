<?php

get_header();

$venueQuery = array(
    'posts_per_page' => -1,
    'post_type' => 'venue',
	'order' => 'ASC',
    'orderby' => 'post_name'
);

$the_query = new WP_Query($venueQuery);

if ($the_query->have_posts()) : 

?>

<div class="summary columns is-multiline">

<?php
    while ($the_query->have_posts()) :
        $the_query->the_post();
?>

<div class="column is-one-third">

<?php

        get_template_part('templates/views/summary-card-venue', get_post_format());

?>

</div>

<?php

    endwhile;

?>

</div> <!-- .columns -->

<?php
endif;

get_footer();
