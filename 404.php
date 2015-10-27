<?php theme_include('header'); ?>

			<div id="main">
				<section id="one">
					<header class="major">
						<h1>404 - Nicht gefunden!</h1>
					</header>
					<p>Die mittlerweile todmüden aber immernoch hochtrainierten YouTube-Affen konnten den von Dir angeforderten Inhalt leider nirgends auftreiben... Du kannst allerdings mal danach suchen, wenn Du magst:</p>
					<form class="site-search" action="<?php echo search_url(); ?>" method="post">
						<div class="row uniform 50%">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="term" id="demo-name" class="site-search__search-term" value="<?php echo search_term(); ?>" placeholder="Eingeben, entern, (vielleicht) finden!" />
							</div>
						</div>
					</form>
				</section>
				<div class="uberspace">
					<a href="https://uberspace.de" target="_blank">
						<img src="https://th3f.de/themes/Strata/images/uberspace.png" alt="Hosted on Asteroids!">
					</a>
				</div>
			</div>

<?php theme_include('footer'); ?>