<?php
// register a single navigation menu, to be constructed in the admin panel, and displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'		
));

function iblog_comment_form() {
global $post;
?>
<h4 id="commhead">Leave a Comment</h4>
<form id="comment" method="post" action="<?php bloginfo('url');?>/wp-comments-post.php">

<input name="comment_post_ID" type="hidden" value="<?php echo $post->ID;?>"/>
<input name="comment_parent" type="hidden" value="0"/>

<label for="author">Author <input type="text" name="author" placeholder="Required" class="span2"/></label>
<label for="email">Email <input type="text" name="email" placeholder="Required" class="span2"/></label>
<label for="website">Website <input type="text" name="website" placeholder="Optional" class="span2"/></label>

<textarea rows="5" cols="20" name="comment"></textarea>
<input type="submit" class="submit btn btn-primary" value="Post Comment"/>
</form>


<?php }?>