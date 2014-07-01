<?php
	$pageTitle = 'Вицове';
	include 'header.php';
?>			

		<!-- Jokes content -->	
		<div id="inner-content">
			<div class="wrap">
				
				<nav class="jokes-selection">
					
					<h1>Изберете категория</h1>
					
					<ul>

						<li id="programmers">
							<a href="jokes-programmers.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Програмисти
							</a>
						</li>

						<li id="programmers">
							<a href="jokes-animals.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Животни
							</a>
						</li>

						<li id="programmers">
							<a href="jokes-drank.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Пияни
							</a>
						</li>
						
						<li id="programmers">
							<a href="jokes-dirty.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Мръсни
							</a>
						</li>
						
						<li id="programmers">
							<a href="jokes-blondy.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Блондинки
							</a>
						</li>
						
						<li id="programmers">
							<a href="jokes-students.php">
								<img src="img/icons/jokes.png" alt="Home" />
								Студенти
							</a>
						</li>
					</ul>

				</nav>
				
			</div>
		</div>
		<section id="joke-of-day">
			<h1>Виц на деня</h1>
			<script type="text/javascript">
				var currentTime = new Date();
				var month = currentTime.getMonth() + 1;
				var day = currentTime.getDate();
				var year = currentTime.getFullYear();
				document.write(day + "/" + month + "/" + year + "г.");
			</script>

			<article>
				<p class="cat-joke">Категория: <strong>Програмисти</strong></p>
				<p><pre>Вървял си един програмист по пътя и изведнъж гледа някаква странна жаба, 
която му проговаря с човешки глас:
- Моля те, целуни ме, и ще се превърна в принцеса!
Навел се програмистът и я вдигнал. Разгледал я внимателно, и си я прибрал в джоба.
Продължил да върви, и след малко я извадил да я види пак. 
Жабата пак проговорила с момичешки нежен глас:
- Моля те, целуни ме, ще се превърна в прекрасна принцеса с много богатства, 
и ще се оженя за теб!
Програмистът си я разгледал пак, и си я прибрал отново.
Повторило се това няколко пъти и накрая жабата не издържала:
- Ама ако ме целунеш, освен богата принцеса, за която да се ожениш, 
аз ще мога да изпълня всичките ти желания…
- А, не ща!!! Говоряща жаба по-ме кефи – отговорил програмистът.</pre></p>

			</article>
		</section>	
			
		<!-- Bottom part of the index -->
		<div id="page-bottom">
			<?php
				include 'footer.php';
			?>
		</div>
</body>
</html>
