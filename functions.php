<?php
// register a single navigation menu, to be constructed in the admin panel, and displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'		
));

function iblog_comment_form() {
global $post;
?>
<form method="post" action="<?php bloginfo('url');?>/wp-comments-post.php">

<input name="comment_post_ID" type="hidden" value="<?php bloginfo('id');?>"/>
<input name="comment_parent" type="hidden"/>

<input type="text" name="author" placeholder="Author-Required" class="span2"/> 
<input type="text" name="email" placeholder="Email-Required" class="span2"/>
<input type="text" name="website" placeholder="Website-Optional" class="span2"/>

<textarea rows="10" cols="60"></textarea>
<input type="submit" class="submit" value="Post Comment"/>
</form>

<?php }?>