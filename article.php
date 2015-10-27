<?php theme_include('header'); ?>

			<div id="main">
				<section id="one">
					<header class="major">
						<h1><?php echo article_title(); ?></h1>
						<p>Veröffentlicht am <?php echo article_date(); ?> von <?php echo article_author('real_name'); ?></p>
					</header>
					<?php echo article_markdown(); ?>
				</section>
				<!-- Comment Form -->
				<?php if(comments_open()): ?>
						<section>
							<h4>Kommentare</h4>
							<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
								<?php echo comment_form_notifications(); ?>
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<?php echo comment_form_input_name('placeholder="Dein Name"'); ?>
									</div>
									<div class="6u$ 12u$(xsmall)">
										<?php echo comment_form_input_email('placeholder="Deine Emailaddresse (wird nicht veröffentlicht)"'); ?>
									</div>
									<div class="12u$">
										<?php echo comment_form_input_text('placeholder="Dein Kommentar (Zeilenumbrüche werden entfernt)"'); ?>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Gib deinen Senf ab!" class="special" /></li>
										</ul>
									</div>
								</div>
							</form>

							<?php if(has_comments()): ?>
								<div class="comments-list">
									<?php $i = 0; while(comments()): $i++; ?>
									<span class="comment clearfix" id="comment-<?php echo comment_id(); ?>">
										<div class="comment__meta clearfix">
											<span class="comment__counter"><?php echo $i; ?></span>
											<h4 class="comment__name"><?php echo comment_name(); ?></h4>
											<time class="comment__date"><?php echo comment_date(); ?></time>
										</div>
										<div class="comment__content">
											<?php echo comment_text(); ?>
										</div>
									</span>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</section>
				<?php endif; ?>
				<div class="uberspace">
					<a href="https://uberspace.de" target="_blank">
						<img src="https://th3f.de/themes/Strata/images/uberspace.png" alt="Hosted on Asteroids!">
					</a>
					</div>
			</div>

<?php theme_include('footer'); ?>