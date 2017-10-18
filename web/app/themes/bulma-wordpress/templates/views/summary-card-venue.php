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
    </div>
  </div>

</div>