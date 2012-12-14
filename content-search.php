<?php extract($_GET)?>
<div class="search-results">
<?php if(have_posts()) :?>
	<?php while(have_posts()) : the_post() ?>
		<table class="table table-hover">
		<th><a href="<?php the_permalink()?>"><?php the_title()?></a></th>
		</table>
	<?php endwhile?>
	<?php else:?>
	<p class="alert">Sorry there are no pages matching <?php echo $s?></p>
	<?php endif?>
</div>