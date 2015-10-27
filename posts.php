<?php theme_include('header'); ?>
			<div id="main">
				<?php if(has_posts()) : while(posts()) : ?>
					<section id="<?php echo article_id(); ?>">
						<header class="major">
							<h2><?php echo article_title(); ?></h2>
							<p>Published on <?php echo article_date(); ?> by <?php echo article_author('real_name'); ?></p>
						</header>
						<p><?php echo article_description(); ?></p>
						<ul class="actions">
							<li><a href="<?php echo article_url(); ?>" class="button">More...</a></li>
						</ul>
					</section>
				<?php endwhile; endif; ?>
		
				<?php if(has_pagination()): ?>
				<nav class="pagination">
					<?php echo posts_prev('<i class="fa fa-chevron-circle-left"></i><span> Older stuff</span>', '<a><i class="fa fa-chevron-circle-left"></i><span> Older Stuff</span></a>'); ?><?php echo posts_next('<span>Newer stuff </span><i class="fa fa-chevron-circle-right"></i>', '<a><span>Newer stuff </span><i class="fa fa-chevron-circle-right"></i></a>'); ?>
				</nav>
				<?php endif; ?>
<?php theme_include('footer'); ?>
