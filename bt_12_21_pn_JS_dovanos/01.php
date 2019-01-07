<!DOCTYPE html>
<html>
<head>

	<title>Klasės d.</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/reset.css">
	<link rel="stylesheet" type="text/css" href="01.css">

	<script src="01.js" defer></script>

	<!--	<script src="03html.js" defer></script>-->

</head>
<body>
<!--<header>-->
<!--	<h1>Klasės darbas</h1>-->
<!--</header>-->

<div class="form">
	<input placeholder="Pavadinimas" id="giftName">
	<input placeholder="Kaina" id="giftPrice">

	<select id="giftCtegory">
		<option value="zaislai">Žaislai</option>
		<option value="rubai">Rūbai</option>
		<option value="pinigai">Kvepalai</option>
	</select>

	<button id="addButton">Pridėti</button>
</div>
<table>
	<tr>
		<th>Pavadinimas</th>
		<th>Kategorija</th>
		<th>Kaina</th>
	</tr>
	<tbody id="tableBody">

	<!--
			šie tagai nereikalingi,
			nes bus sukurti nauji tagai su JS
			ir įterpti į tableBody tagą
-->

	<!--	<tr>-->
	<!--		<td>Lėlė</td>-->
	<!--		<td>Žaislai</td>-->
	<!--		<td>50</td>-->
	<!--	</tr>-->
	<!--	<tr>-->
	<!--		<td>Megstinis</td>-->
	<!--		<td>Rūbai</td>-->
	<!--		<td>20</td>-->
	<!--	</tr>-->
	</tbody>
</table>

</body>
</html>










