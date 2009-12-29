<div class="wrap">
	<h2>Your Plugin Page Title</h2>
	<form method="post" action="options.php">
		<?php 
			wp_nonce_field('update-options'); 
			settings_fields( 'lcp-options-group' );
		?>
		<table class="form-table">
			<tr valign="top">
			<th scope="row">Display:</th>
			<td><input type="text" name="list_category_posts_display" value="<?php echo get_option('list_category_posts_display'); ?>" /></td>
			</tr>
		</table>
		<input type="hidden" name="action" value="update" />
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
</div>
