<!-- New Post Form -->
<div id="postbox">
<form action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
<input type="hidden" name="action" value="add_foobar">
<!-- post name -->
<p><label for="title">Title</label><br />
<input type="text" id="title" value="" tabindex="1" size="20" name="title" />
</p>

<!-- post Category -->
<p><label for="Category">Category:</label><br />
<p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>


<!-- post Content -->
<p><label for="description">Content</label><br />
<textarea id="description" tabindex="3" name="description" cols="50" rows="6"></textarea>
</p>

<!-- post tags -->
<p><label for="post_tags">Tags:</label>
<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>
<p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

</form>
</div>