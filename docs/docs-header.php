<?php do_action( 'bp_docs_before_doc_header' ) ?>

<?php do_action( 'bp_docs_before_doc_header_content' ) ?>

<?php if ( bp_docs_is_existing_doc() ) : ?>

	<div id="bp-docs-single-doc-header">
		<?php if ( ! bp_docs_is_theme_compat_active() ) : ?>
			<h2 class="doc-title"><?php the_title() ?><?php if ( bp_docs_is_doc_trashed() ) : ?> <span class="bp-docs-trashed-doc-notice" title="<?php esc_html_e( 'This Doc is in the Trash', 'bp-docs' ) ?>">Trash</span><?php endif ?></h2>
		<?php endif ?>
	</div>

	<div class="doc-tabs">
		<ul>
			<li<?php if ( bp_docs_is_doc_read() ) : ?> class="current"<?php endif ?>>
				<a href="<?php bp_docs_doc_link() ?>"><?php _e( 'Read', 'bp-docs' ) ?></a>
			</li>

			<?php if ( current_user_can( 'bp_docs_edit' ) ) : ?>
				<li<?php if ( bp_docs_is_doc_edit() ) : ?> class="current"<?php endif ?>>
					<a href="<?php bp_docs_doc_edit_link() ?>"><?php _e( 'Edit', 'bp-docs' ) ?></a>
				</li>
			<?php endif ?>

			<?php do_action( 'bp_docs_header_tabs' ) ?>
		</ul>
	</div>

<?php elseif ( bp_docs_is_doc_create() ) : ?>

	<h2><?php _e( 'New Doc', 'bp-docs' ); ?></h2>

<?php endif ?>

<?php do_action( 'bp_docs_after_doc_header_content' ) ?>
