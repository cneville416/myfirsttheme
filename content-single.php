<?php if(have_posts()) :?>
	<?php while(have_posts()) : the_post() ?>
		<h2><?php the_title()?></h2>
		<div class="story-content">
			<?php the_content() ?>
		</div>
		<div class="story-content">
		<?php if(comments_open()) :
				//display comments
				$comments = get_comments(array('post_id'=>$post->ID));
				wp_list_comments(null,$comments);
				
				iblog_comment_form();
			?>
		</div>
	<?php endif?>
	<?php endwhile?>
	<?php endif?>