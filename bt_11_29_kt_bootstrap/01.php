<?php include 'header.php'; ?>


<h5>Nauja failų struktūra: index.php pirmiausiai iškviečia header.php, po to vykdo savo turinį ir galiausiai iškviečia footer.php)</h5>

<br>

<h5>index.php failas atrodo taip:</h5>

<p>
    <i>&lt;?php include 'header.php'; ?></i> (šiame faile turi būti visa HTML failo pradžia: html atidaromasis, head, body atidaromasis tagai, taip pat visas - header tagas)<br>
    ... turinys ...<br>
    &lt;?php include 'footer.php'; ?> (šiame faile turi būti visas footer tagas ir visa HTML failo pabaiga: html uždaromasis, body uždaromasis tagai)<br>
</p>

<br>

<p>
    ( šio puslapio failų struktūra: header.php -> 02.php -> footer.php )<br>
    header.php ir footer.php - galima kartot visuose puslapiuose</h5>


<?php include 'footer.php'; ?>










