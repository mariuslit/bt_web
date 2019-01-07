<!DOCTYPE html>
<html>
    <head>
        <title>Namų  darbai</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			table, th, td{
				border: 0.5px solid darkgrey;
				border-collapse: collapse;
				border-radius: 10px;
			}
		</style>
    </head>
    <body>
        <h1>Pirmasis mano HTML namų darbas</h1>
		<h3 style='color:red'>Ką mokėmės???</h3>
		<ul class="fa-ul" style='color:red'>
			<li><i class="fa-li fa fa-spinner"></i>Tagai (div - block, span - inline)</li>
			<li><i class="fa-li fa fa-asterisk fa-spin"></i>Stiliai</li>
			<li><i class="fa-li fa fa-certificate fa-spin"></i>Nuorodos</li>
			<li><i class="fa-li fa fa-compass fa-spin"></i>Paveikslėliai</li>
			<li><i class="fa-li fa fa-cog fa-spin"></i>Mygtukai</li>
			<li><i class="fa-li fa fa-crosshairs fa-spin"></i>Atributai</li>
			<li><i class="fa-li fa fa-beer fa-spin"></i>List tipo elementų išdėstymas</li>
			<li><i class="fa-li fa fa-star fa-spin"></i>Lentelės tipo elementų išdėstymas</li>
			<li><i class="fa-li fa fa-circle fa-spin"></i>Lentelės elementų sujungimas</li>
		</ul>
		
		
		<h3 style="background:CadetBlue">Užsiėmimai Baltic Talents vyksta:</h3>
		<table style="background:LightBlue">
			<tr style="background:CadetBlue">
				<th></th>
				<th>Data</th>
				<th>Teorija<br>(val.)</th>
				<th>Praktika<br>(val.)</th>
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
				<td style="font-size:8px;">Užsiėmimai<br> nevyksta</td>
				<td style="font-size:8px;">Užsiėmimai<br> nevyksta</td>
			</tr>
			<tr>
				<td>Sekmadienis</td>
				<td>2018-11-25</td>
				<td style="font-size:8px;">Užsiėmimai<br> nevyksta</td>
				<td style="font-size:8px;">Užsiėmimai<br> nevyksta</td>
			</tr>
		</table>

		<div  style='background:lightpink; color:blue'>
			<h3>Register your interest:</h3>

			<span>Your name: </span><input type="tekstas" placeholder="Vrdas"><br>
			<span>Your email: </span><input type="tekstas" placeholder="el.paštas"><br><br>

			<span>Kuriame mieste mokotės:</span>
			<select>
				<option>Vilnius</option>
				<option>Kaunas</option>
				<option>Klaipėda</option>
			</select>
			<br><br>
			<form>
				<span>Jūsų lytis?</span>
				<input type="radio" name="member" value="V"> Vyras
				<input type="radio" name="member" value="M"> Moteris
				<input type="checkbox" name="member" value="M"> Hemofroditas
			</form>
			<button onclick="alert('Neveikiantis mygtukas (kol kas)')">Register</button><br>
		</div>
<!--		mano klausimai dėstytojui-->
		<p style="color:red;">
			Ar yra tagas, kuriame visi elementai būtų išdėtomi block arba inline, nepriklausomai nuo jų tipo? <br>
		</p>
		<div>
			<img src="images/PirmasNamuDarbas.png" alt="Pirmasis namų darbas">	
		</div>
		<br><br><br><br><br><br><br><br><br><br>
	</body>
</html>