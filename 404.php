<?php theme_include('header'); ?>

			<div id="main">
				<section id="one">
					<header class="major">
						<h1>404 - Not found!</h1>
					</header>
					<p>Unfortunately, the highly trained YouTube-monkeys were not able to find the file, you were looking for... Maybe, you can try a search?</p>
					<form class="site-search" action="<?php echo search_url(); ?>" method="post">
						<div class="row uniform 50%">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="term" id="demo-name" class="site-search__search-term" value="<?php echo search_term(); ?>" placeholder="Eingeben, entern, (vielleicht) finden!" />
							</div>
						</div>
					</form>
				</section>
			</div>

<?php theme_include('footer'); ?>
