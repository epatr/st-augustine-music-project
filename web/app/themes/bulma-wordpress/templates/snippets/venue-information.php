<div class="message is-dark">
    <div class="message-header">Venue Information</div>
    <div class="message-body">
        <ul>
            <?php if (get_post_meta($post->ID, 'address', true)) : ?><li>Address: <?= get_post_meta($post->ID, 'address', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'phone', true)) : ?><li>Phone: <?= get_post_meta($post->ID, 'phone', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'website_url', true)) : ?><li><a href="<?= get_post_meta($post->ID, 'website_url', true); ?>" target="_blank">Website</a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'facebook_url', true)) : ?><li><a href="<?= get_post_meta($post->ID, 'facebook_url', true); ?>" target="_blank">Facebook</a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'twitter_url', true)) : ?><li><a href="<?= get_post_meta($post->ID, 'twitter_url', true); ?>" target="_blank">Twitter</a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'instagram_url', true)) : ?><li><a href="<?= get_post_meta($post->ID, 'instagram_url', true); ?>" target="_blank">Instagram</a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'email_address', true)) : ?><li><a href="mailto: <?= get_post_meta($post->ID, 'email_address', true); ?>">Email</a></li><?php endif; ?>
        </ul>

        <div class="has-text-centered map-embed">
        <iframe
        seamless=""
        width="100%"
        height="100%"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0CBPoeI2IO_ep6mJ6lGrtAjuVS-3nHcQ
            &q=<?= get_post_meta($post->ID, 'address', true); ?>" allowfullscreen>
        </iframe>
        </div>
    </div>
</div>

<?php 

//$eventQuery = include(TEMPLATEPATH . '/' . 'templates/queries/events.php');
$eventQuery = bulmawordpress_event_query('events-by-venue', $post->ID);

$the_query = new WP_Query($eventQuery);

if ($the_query->have_posts()) : ?>
<h3>Upcoming Events</h3>

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
    <?php while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/table-events', get_post_format());

    endwhile; 
    ?>
</table>
<?php
endif;

wp_reset_query();

?>