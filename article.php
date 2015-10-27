<?php theme_include('header'); ?>

			<div id="main">
				<section id="one">
					<header class="major">
						<h1><?php echo article_title(); ?></h1>
						<p>Published on <?php echo article_date(); ?> by <?php echo article_author('real_name'); ?></p>
					</header>
					<?php echo article_markdown(); ?>
				</section>
				<!-- Comment Form -->
				<?php if(comments_open()): ?>
						<section>
							<h4>Comments</h4>
							<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
								<?php echo comment_form_notifications(); ?>
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<?php echo comment_form_input_name('placeholder="Name"'); ?>
									</div>
									<div class="6u$ 12u$(xsmall)">
										<?php echo comment_form_input_email('placeholder="E-Mail adress"'); ?>
									</div>
									<div class="12u$">
										<?php echo comment_form_input_text('placeholder="Comment"'); ?>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Lets go!" class="special" /></li>
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
			</div>

<?php theme_include('footer'); ?>
