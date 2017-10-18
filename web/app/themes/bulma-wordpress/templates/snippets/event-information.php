
<div class="message is-dark">
    <div class="message-header">Event Information</div>
    <div class="message-body">
        <ul>
            <li>When: <?php if ($post->event_date) : $eventDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS'); ?><?= $eventDate ?> <?php endif; ?> <? if (get_post_meta($post->ID, 'start_time', true)) : echo ' at ' . get_post_meta($post->ID, 'start_time', true); endif; ?></li>
            <?php if (get_post_meta($post->ID, 'venue', true)) : $eventVenueID = $post->venue[0]; ?><li>Where: <a href="<?= get_the_permalink($eventVenueID); ?>" title="<?= get_post_meta($eventVenueID, 'address', true); ?>"><?= get_the_title($eventVenueID); ?></a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'cost', true)) : ?><li>Cost: <?= get_post_meta($post->ID, 'cost', true); ?></li><?php endif; ?>
            <?php if ($post->website_url) : ?><li><a href="<?php echo get_post_meta(get_the_ID(), 'website_url', true); ?>" target="_blank">Website</a></li> <?php endif; ?>
        </ul>

        <?php if (get_post_meta($post->ID, 'flyer')) : ?>
        
        <div class="has-text-centered"><a href="<?= get_attachment_link($post->flyer); ?>"><?= wp_get_attachment_image($post->flyer, 'large'); ?></a></div>
        
        <?php endif; ?>

    </div>
</div>