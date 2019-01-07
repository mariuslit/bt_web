<!DOCTYPE html>
<html>
<head>

	<title>Namų d.</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/reset.css">
	<link rel="stylesheet" type="text/css" href="02.css">

	<script src="02.js" defer></script>

</head>
<body>

<div class="backgroundImage" id="backgroundImage"></div>
<div class="darkGlassEffect"></div>

<section>
	<button class="grup3" id="clearLocalStorage">Clear Local Storage</button>
	<button class="grup3" id="resetRace">Reset Race</button>
	<label class="soundLabel" for="isSoundCheckBox">is Ferrari sound</label>
	<input type="checkbox" name="sound" id="isSoundCheckBox" >
	<select id="racingCars">
		<!-- JS insert <option> there -->
	</select>
	<label class="anebleNonStop" for="nonStopCheckBox">Non Stop x1sec</label>
	<input type="checkbox" name="nonStop" id="nonStopCheckBox" >
</section>


<!-- TEAMS FERRARI-VS-BUGATTI-->
<section class="teams">

	<button id="ferrari">
		<div class="imgLeft"></div>
	</button>

	<div class="ferrariVSbugatti">Ferrari vs Bugatti</div>

	<button id="bugatti">
		<div class="imgRight"></div>
	</button>

</section>

<div class="inner">

	<section class="placeHolders">
		<input class="grup1" placeholder="Automobilis" id="inputName">
		<input class="grup1" placeholder="Greitis (km/h)" id="inputSpeed">
		<button class="grup1" id="addCar">Pridėti mašiną</button>
	</section>

	<section class="placeHolders">
		<input class="grup2" placeholder="Laikas (sec)" id="inputTime">
		<button class="grup2 start" id="race">Lenktyniauti</button>
		<button class="grup2 stop" id="stopRace">Stop</button>
	</section>

	<table>
		<tr>
			<th>Automobilis<span>markė, modelis</span></th>
			<th>Greitis<span>km/val</span></th>
			<th>Laikas / Atstumas<span>važiavo sec / nuvažiavo km</span></th>
		</tr>
		<tbody id="tableBody">
<!--		<tr>-->
<!--			<td id="firstColumn">-->
<!--				<button class="removeCar">X</button>-->
<!--				Audi-->
<!--			</td>-->
<!--			<td><input class="incrDecrSpeed" type="number" name="a" value="100"/></td>-->
<!--			<td>0</td>-->
<!--		</tr>-->
		</tbody>
	</table>
</div>
</body>
</html>

