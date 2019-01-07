<!DOCTYPE html>
<html>
	<head>
		<title>Namų darbai</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styleNamuDarbai.css">
	</head>
	<body>
		<header>
			<h1>PUSLAPIO FORMATAVIMAS SU CSS</h1>
		</header>
		<h3 class="Antraste1">Ko mokėmės su CSS?</h3>
		<ul class="sarasas">
			<li>Tagaų modifikavimas p{...} </li>
			<li>Atributaų modifikvimas .klase{...} </li>
			<li>Paveikslėlių modifikavimas img{...} </li>
			<li>Fono spalvos - background-color: red</li>
			<li>Rėmeliai - border: 1px;</li>
			<li>Paragrafai - p</li>
			<li>Lentelės eilučių formatavimas</li>
			<li> 1 eilutė p:nth-of-type(1){...} </li>
			<li> 2 eilutė p:nth-of-type(2){...} </li>
		</ul>
		<h3 class="Antraste1">Užsiėmimai Baltic Talents vyksta:</h3>
		<table class="lentele">
			<tr class="antrste">
				<th class="thLeft"></th>
				<th class="thMid">Data</th>
				<th class="thMid">Teorija (val.)</th>
				<th class="thRight">Praktika (val.)</th>
			</tr>
			<tr>
				<td>Pirmadienis</td>
				<td>2018-11-19</td>
				<td> 9:00 - 11:15</td>
				<td>11:15 - 16:30</td>
			</tr>
			<tr>
				<td>Antradienis</td>
				<td>2018-11-20</td>
				<td> 9:00 - 11:15</td>
				<td>11:15 - 16:30</td>
			</tr>
			<tr>
				<td>Trečiadienis</td>
				<td>2018-11-21</td>
				<td> 9:00 - 11:15</td>
				<td>11:15 - 16:30</td>
			</tr>
			<tr>
				<td>Ketvirtadienis</td>
				<td>2018-11-22</td>
				<td> 9:00 - 11:15</td>
				<td>11:15 - 16:30</td>
			</tr>
			<tr>
				<td>Penktadienis</td>
				<td>2018-11-23</td>
				<td> 9:00 - 11:15</td>
				<td>11:15 - 16:30</td>
			</tr>
			<tr>
				<td>Šeštadienis</td>
				<td>2018-11-24</td>
				<td>Užsiėmimai nevyksta</td>
				<td>Užsiėmimai nevyksta</td>
			</tr>
			<tr>
				<td>Sekmadienis</td>
				<td>2018-11-25</td>
				<td>Užsiėmimai nevyksta</td>
				<td>Užsiėmimai nevyksta</td>
			</tr>
		</table>
		<br>
		
		<fieldset class="lentele">
			<legend>
				Register your interest:
			</legend>
			<table class="laukas">
				<tr>
					<td>
						<span>Your name: </span>
					</td>
					<td>
						<input type="tekstas" placeholder="Vardas">
					</td>
				</tr>
				<tr>
					<td>
						<span>Your email: </span>
					</td>
					<td>
						<input type="tekstas" placeholder="el.paštas">
					</td>
				</tr>
				<tr>
					<td>
						<span>Kuriame mieste mokotės:</span>
					</td>
					<td>
						<select>
							<option>Vilnius</option>
							<option>Kaunas</option>
							<option>Klaipėda</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<span>Jūsų lytis?</span>
					</td>
					<td>
						<form>
							<input type="radio" name="member" value="V"> Vyras
							<input type="radio" name="member" value="M"> Moteris
						</form>
					</td>
				</tr>
				<tr>
					<td>
						<span>Jūsų pomėgiai?</span>
					</td>
					<td>
						<form>
							<input type="checkbox" name="member" value="V"> Automobiliai
							<input type="checkbox" name="member" value="M"> Spotras
							<input type="checkbox" name="member" value="M"> Programavimas
						</form>
					</td>
				</tr>
			</table>
		</fieldset>
		<button type="button" onclick="alert('Neveikiantis mygtukas (kol kas)')"> Register </button><br>
		<br><br><br>
		<div>
			<img src="images/PirmasNamuDarbas.png" alt="Pirmasis namų darbas">	
		</div>
		<br><br><br>
		<footer>
			Kontaktai: Marius Litvinas, mariuslit@yahoo.com, +370 69139130.
		</footer>
	</body>
</html>