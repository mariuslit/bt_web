<!DOCTYPE html>
<html>
<head>

	<title>nd API</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/reset.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="04joke.css">
	<script src="04joke.js" defer></script>

</head>
<body>

<header>
	<a href="http://www.icndb.com/api/">
		<img src="http://icndb.com/wp-content/uploads/2011/01/icndb_logo2.png">
	</a>
	<h2>Chuck Norris'o juokeliai</h2>
</header>

<section>

	<div class="leftSide">
	<div class="fix">

		<h3>Valdymas</h3>

		<h4>Pasirinkite kategoriją</h4>
		<select id="selectCtegory">
			<option value="">All Categories</option>
<!--			<option value="random/">Random</option>-->
<!--			<option value="cat2">Cat 2</option>-->
<!--			<option value="cat3">Cat 3</option>-->
		</select>
		<h4>Pasirinkite juokelio numerį<br>(jei žinote)</h4>
		<select id="selectNumberOfJoke">
			<option value="0">All Jokes</option>
		</select>

		<h4>Kiek juokelių rodyti</h4>
		<select id="selectHowManyJokesShow">
			<option value="0">All Jokes</option>
			<option value="1">1</option>
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="50">50</option>
		</select>

		<label class="container">Rodyti atsitiktinius juokelius
			<input type="checkbox" id="randomCheckBox">
			<span class="checkmark"></span>
		</label>

		<button class="action" id="action"> ACTION >></button>
	</div>
	</div>


	<div class="rightSide">

		<h3>Juokeliai</h3>

		<ul id="jokeList">
<!--			<li>-->
<!--				<p class="left1" id="left1">1.</p>-->
<!--				<p class="left2" id="left2">(1)</p>-->
<!--				<p class="left3" id="left3">Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji-->
<!--					eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil.-->
<!--					Pirmoji eil. Pirmoji eil. Pirmoji eil. Pirmoji eil. </p>-->
<!--			</li>-->
<!--			<li>-->
<!--				<p class="left1" id="left1">2.</p>-->
<!--				<p class="left2" id="left2">(2)</p>-->
<!--				<p class="left3" id="left3">Antroji eil. Antroji eil. Antroji eil. Antroji eil. Antroji eil. Antroji-->
<!--					eil. Antroji eil. Antroji eil. </p>-->
<!--			</li>-->
		</ul>
	</div>
</section>


</body>
</html>

