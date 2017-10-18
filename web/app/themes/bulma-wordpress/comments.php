<?php if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="subtitle">
			<?php
			printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>

		<div class="media">
			<div class="media-content">
			<?php 
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
					'style' => 'div'
				) );
				?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p>Comments are closed.</p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div>