<?php theme_include('header'); ?>
			<div id="main">
				<?php if(has_posts()) : while(posts()) : ?>
					<section id="<?php echo article_id(); ?>">
						<header class="major">
							<h2><?php echo article_title(); ?></h2>
							<p>Veröffentlicht am <?php echo article_date(); ?> von <?php echo article_author('real_name'); ?></p>
						</header>
						<p><?php echo article_description(); ?></p>
						<ul class="actions">
							<li><a href="<?php echo article_url(); ?>" class="button">Weiterlesen...</a></li>
						</ul>
					</section>
				<?php endwhile; endif; ?>
		
				<?php if(has_pagination()): ?>
				<nav class="pagination">
					<?php echo posts_prev('<i class="fa fa-chevron-circle-left"></i><span> Ältere Posts</span>', '<a><i class="fa fa-chevron-circle-left"></i><span> Ältere Posts</span></a>'); ?><?php echo posts_next('<span>Neuere Posts </span><i class="fa fa-chevron-circle-right"></i>', '<a><span>Neuere Posts </span><i class="fa fa-chevron-circle-right"></i></a>'); ?>
				</nav>
				<?php endif; ?>
			<div class="uberspace">
			<a href="https://uberspace.de" target="_blank">
				<img src="https://th3f.de/themes/Strata/images/uberspace.png" alt="Hosted on Asteroids!">
			</a>
		</div>

<?php theme_include('footer'); ?>