<?php
	$pageTitle = 'Картинки';
	include 'header.php';
?>

		<!-- Jokes content -->	
		<div id="inner-content">
			<div class="wrap">
				<!-- Section .. or main part -->
				<nav class="jokes-selection">
					
					<h1>Изберете категория</h1>
					
					<ul>

						<li id="programmers">
							<a href="pics-programmers.php">
								<img src="img/icons/jokes.png" alt="Картинки за програмисти" />
								Програмисти
							</a>
						</li>

						<li id="programmers">
							<a href="pics-other.php">
								<img src="img/icons/jokes.png" alt="Други картинки" />
								Други
							</a>
						</li>
					</ul>

				</nav>
			</div>
		</div>

			
		<!-- Bottom part of the index -->
		<div id="page-bottom" style="position: absolute; bottom: 0px">
			<?php
				include 'footer.php';
			?>
		</div>
</body>
</html>
