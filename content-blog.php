<?php if(have_posts()) :?>
	<?php while(have_posts()) : the_post() ?>
		<h2><?php the_title()?></h2>
		<div class="meta">
			<span class="author"> by <?php the_author()?> </span>
			<span class="date"><?php the_time(get_option('date_format'))?> </span>
			<span class="num-comments"><?php comments_number('no comments', 'one comment', '% comments')?> </span>
		</div>
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
