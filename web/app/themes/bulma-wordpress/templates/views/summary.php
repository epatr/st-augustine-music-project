<article>

<?php 
if ( has_post_thumbnail() ) : ?>
<div class="has-text-centered image">
	<?php the_post_thumbnail('open-graph'); ?>
</div>
<?php endif; 
?>

<a href="<?php the_permalink(); ?>"><h3 class="title is-3"><?php the_title(); ?></h3></a>

<div class="article__metadata">Posted <span><?php echo get_the_date(); ?></span> by <?php the_author_posts_link(); ?> <?php if(get_the_category()): echo ' in ' , the_category(); endif; ?></div>
<div class="article__content">
    <?php the_content(); ?>
</div>

</article>
