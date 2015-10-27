<?php theme_include('header'); ?>

			<div id="main">
				<section id="one">
					<header class="major">
						<h1>Suchergebnisse für &ldquo;<?php echo search_term(); ?>&rdquo;</h1>
					</header>
						<?php if(has_search_results()): ?>
						<ul class="items">
							<?php $i = 0; while(search_results()): $i++; ?>
							<li>
								<article class="wrap">
									<h2>
										<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
									</h2>
								</article>
							</li>
							<?php endwhile; ?>
						</ul>
					
					<?php else: ?>
						<p>Leider konnten die hochtrainierten, von YouTube geleasten Affen nichts zum Begriff &ldquo;<?php echo search_term(); ?>&rdquo; finden... :/</p>
					<?php endif; ?>
				</section>
			</div>

<?php theme_include('footer'); ?>