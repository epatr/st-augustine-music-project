<div class="card">

<?php 
if ( has_post_thumbnail() ) : ?>
  <div class="card-image">
    <figure class="image">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('open-graph-half'); ?></a>
    </figure>
  </div>
<?php endif; 
?>

<header class="card-header">
    <a href="<?php the_permalink() ?>">
        <p class="card-header-title"><?php the_title(); ?></p>
    </a>
</header>

  <div class="card-content">

    <div class="content">
        <?php the_excerpt(); ?>

      <small><?php echo get_the_date(); ?></small>
    </div>
  </div>

  <footer class="card-footer">
    <a href="<?php the_permalink() ?>" class="card-footer-item">Read More</a>
    <a href="<?php comments_link(); ?>" class="card-footer-item"><?php comments_number( '0 comments', '1 comment', '% responses' ); ?></a>
  </footer>

</div>