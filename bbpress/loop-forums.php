<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>


<div class="bbp-breadcrumb"><?php bbp_breadcrumb(); ?></div>

<a href="#" class="btn btn-primary"><i class="fa fa-plus-square"></i> Nytt ämne</a>

<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums">
	<li class="forum-title-item">
		<div class="bbp-forum-title"><?php the_title(); ?></div>
	</li>

	<li class="bbp-header">

		<ul class="forum-titles">
			<li class="bbp-forum-info"><?php _e( 'Forum', 'bbpress' ); ?></li>
			<li class="bbp-forum-topic-count"><?php _e( 'Topics', 'bbpress' ); ?></li>
			<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic() ? _e( 'Replies', 'bbpress' ) : _e( 'Posts', 'bbpress' ); ?></li>
			<li class="bbp-forum-freshness"><?php _e( 'Freshness', 'bbpress' ); ?></li>
		</ul>

	</li><!-- .bbp-header -->

	<li class="bbp-body">

		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		<?php endwhile; ?>

	</li><!-- .bbp-body -->

	<li class="bbp-footer">

		<div class="tr">
			<p class="td colspan4">&nbsp;</p>
		</div><!-- .tr -->

	</li><!-- .bbp-footer -->

</ul><!-- .forums-directory -->

<a href="#" class="btn btn-primary"><i class="fa fa-plus-square"></i> Nytt ämne</a>

<?php do_action( 'bbp_template_after_forums_loop' ); ?>
