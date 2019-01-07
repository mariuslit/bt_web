<!DOCTYPE html>
<html>
    <head>
        <title>Labas šmėkla!</title>
        <meta charset="utf-8">
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>

    </head>
    <body>
        <h1>LABAS ŠMĖKLA</h1>
        <h2>h2 - Antraštė</h2>
        <h3>h3 - Antraštė</h3>
        <h4>h4 - Antraštė</h4>
        <h5>h5 - Antraštė</h5>
        <h6>h6 - Antraštė</h6>
        <!--		nuorodos-->
        <a href="//google.lt">Google</a><br>
        <a href="registracija.php">Registracija</a><br>	
        <a href="eksperimentinis.php">Eksperimentinis</a><br>
        <a href="NamuDarbai_11_20.php">Namų darbai</a>
        <p>p - paragafas, ilgas tekstas Lorem ipsum tandartinis tekstas pagal default</p>
        <div>div - šis elementas neturi prasmės, block tipo elementas - rašomas stulpeliu</div>
        <span>span - kaip ir div beprasmis, bet turi vieną savybę - inline stiliaus elementų išdėliojimas</span>
        <span>span 2 - kaip ir div beprasmis, bet turi vieną savybę</span>
        <br>	
        <img src="https://image.shutterstock.com/image-photo/porcelain-cup-tea-milk-isolated-260nw-380667880.jpg" alt="tekstas kuris aprašo paveikslėlį, ir kurį google paiešk analizuoja papildomai" style="width:100px;">
        <img src="images/MoterisSuKate.jpg" alt="Moteris su kate" style="width:100px;">
        <!--		
stulpeliu galima rašyti trimis skirtingais būdais:
1 <div></div>
2 style="display:block;"
3 <br>
-->
        <br>
        <b style="display:block;">b - bold tekstas, naudoja style="display:block;" atributa</b>
        <strong>strong - kaip ir b pastorintas tekstaas</strong>
        <br> <!-- čia yra komentaras -->
        <p>
            <br>&lt;br&gt; - tagas skirtas perkelti elementą į naują eilutę<br>
        </p>
        <i>i - italic pasviras tekstas</i><br>

        <!--		nenumeruojamas sąrašas-->
        <ul style="list-style-type:circle">
            <li>Duona</li>
            <li>Kiaušiniai</li>
            <li>Pienas</li>
        </ul>
        <!--		numruojamas sąrašo rašymas type atributas nurodo numeravimo tipą-->
        <ol type="a">
            <li>Jankūnas</li>
            <li>Davis</li>
            <li>Milaknis</li>
        </ol>

        <br>
        <table>
            <tr>
                <td colspan="2">Vardas, pavardė</td>
                <td>Telefono numeris</td>
            </tr>
            <tr>
                <td>Darius</td>
                <td>Petraitis</td>
                <td>+370 56556556</td>
            </tr>
            <tr>
                <td>xxx</td>
                <td rowspan="2">yyy</td>
                <td>+5884865645</td>
            </tr>
            <tr>
                <td>xxx</td>
                <td>+5884865645</td>
            </tr>
        </table>
        <br>
        <!--		galia įtraukti kito puslapio dalį-->
        <iframe width="547" height="410" src="https://www.youtube.com/embed/0QQi2lG_UFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <audio controls src="tone_positive.mp3"></audio>
    </body>
</html>










