<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="<?= get_bloginfo( 'description' ) ?>" />
    <meta name="twitter:card" value="<?= get_bloginfo( 'description' ) ?>">
    <meta property="og:title" content="<?= get_bloginfo( 'name' ) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://stamusic.org/" />
<?php // <meta property="og:image" content="http://example.com/image.jpg" /> ?>
    <meta property="og:description" content="<?= get_bloginfo( 'description' ) ?>" />

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    
<!-- wp_head() -->
    <?php wp_head(); ?>
<!-- /wp_head() -->

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>

</head>
<body class="content">

<nav class="navbar is-mobile">
    <div class="navbar-brand">
        <a href="/" class="navbar-item navbar-title">St. Augustine Music Project</a>
        <a href="/event/" class="navbar-item">Shows</a>
        <div class="navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-menu" id="navMenu">
        <div class="navbar-start has-text-centered">
            <a href="/venue/" class="navbar-item">Venues</a>
            <a href="/artist/" class="navbar-item">Bands</a>
            <a href="/about/" class="navbar-item">About</a>
        </div>
        <div class="navbar-end">
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>

<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
