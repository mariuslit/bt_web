// namų darbas:
//Parašykite programą, kuri turėtų stačiakampių masyvą, kuriame saugotų jų aukščio ir pločio duomenis.
//Aprašykite funkcijas, kurios apskaičiuoja stačiakampio plotą, perimetrą ir įstrižainę.
//Panaudodami aprašytas funkcijas atvaizduokite visus stačiakampius ir jų savybės (NAUDOKITE CIKLĄ).
//
// todo
//Papildomai į ekraną išveskite didžiausią stačiakampį
// (užuomina - apsirašykite papildomą kintamajį, kuris saugo esamo didžiausio stačiakampio reikšmę,
// o ją keiskite ciklo metu jei [i] stačiakampis dedesnis už esamą).


// var plotis = 40;
// var aukstis = 30;

var staciakampiai = [
    {
        plotis: 3,
        aukstis: 4
    },
    {
        plotis: 30,
        aukstis: 40
    },
    {
        plotis: 50,
        aukstis: 40
    },
    {
        plotis: 30,
        aukstis: 50
    },
    {
        plotis: 40,
        aukstis: 50
    }
];


function staciakampioPlotas(staciakampis) {
    return staciakampis.plotis * staciakampis.aukstis;
}

function staciakampioPerimetras(staciakampis) {
    return staciakampis.plotis * 2 + staciakampis.aukstis * 2;
}

function staciakampioIstrizaine(staciakampis) {
    return Math.sqrt(staciakampis.plotis ** 2 + staciakampis.aukstis ** 2);
}

function spausdintiStaciakampi(staciakampis) {
    console.log('  plotis: ' + staciakampis.plotis);
    console.log('  aukštis: ' + staciakampis.aukstis);
    console.log('     plotas: ' + staciakampioPlotas(staciakampis));
    console.log('     perimetras: ' + staciakampioPerimetras(staciakampis));
    console.log('     įstrižainė: ' + staciakampioIstrizaine(staciakampis));
}

var max = {
    nr: 0,
    plotas: 0
};

var i = 1;

var maxMas = []; // didžiausio vienodo ploto stačiakampių masyvas
var stacPlotas;

for (var staciakampis of staciakampiai) {

    console.log(i + ' stačiakampis: ');
    spausdintiStaciakampi(staciakampis);

    stacPlotas = staciakampioPlotas(staciakampis);

    if (stacPlotas === max.plotas) {
        maxMas.push(staciakampis);
        //     console.log('xxxxxxxxxxxxxxxxxxxxx'+i);
    }

    if (stacPlotas > max.plotas) {
        maxMas = [];
        maxMas.push(staciakampis);
        max.nr = i;
        max.plotas = stacPlotas;
    }

    i++;
}

console.log(' * didžiausias stačiakampis yra Nr.' + max.nr + ', jo plotas - ' + max.plotas);
console.log(' * vienodų didžiausių staciakampių skaičius : ' + maxMas.length);

for (var x = 0; x < maxMas.length; x++) {
    console.log('   ' + (x + 1) + '. ' + maxMas[x].plotis + ' x ' + maxMas[x].aukstis);
}






