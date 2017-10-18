<?php

get_header();

?>

<h3>Latest News</h3>

<?php

if (have_posts()) : ?>

<?php $loopCount = 0; ?>

<div>

<?php
    while (have_posts()) :
        the_post();

        get_template_part('templates/views/summary', get_post_format());

    endwhile;

    get_template_part('templates/snippets/pagination');

    ?>

</div> <!-- .columns -->

<?php

endif;

get_footer();

?>
