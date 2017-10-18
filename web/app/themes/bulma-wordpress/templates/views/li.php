<li><?php

// Checks to see which date it should print in the list view

if (get_post_type() === 'event') :
    $postDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS');
else : 
    $postDate = get_the_date();
endif;

echo $postDate . ' - ';

// Print out the title
the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );

?></li>
