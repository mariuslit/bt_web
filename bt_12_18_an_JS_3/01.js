// if, operatoriai

var zmogus = {
    vardas: 'Petriukas Petrauskas',
    amzius: 16, //prompt('Amžius'), // prompt - išmeta įvedimo langą
    isMale: true, // prompt('Ar Jūs vyras?'),

};

if (zmogus.amzius >= 18) {
    console.log('Žmogus yra pilnametis');

    if (zmogus.isMale) {
        console.log('Alaus dėžę');
    } else {
        console.log('Auskarai');
    }
    if (zmogus.amzius % 10 === 0) {
        console.log('Žmogus papildomai gaus automobilį');
    }
} else {
    console.log('Žmogus nėra pilnametis');

    if (!zmogus.isMale) {
        console.log('Lėlė');
    } else if (zmogus.amzius >= 14) {
        console.log('Programavimo vadovėlis');

    } else {
        console.log('Lego konstruktorius');
    }
}

switch (zmogus.isMale) {
    case true:
        break;
}

var trikampis = [
    {
        a: 1,
        b: 2,
        c: 3
    },
    {
        a: 4,
        b: 5,
        c: 6
    },
    {
        a: 7,
        b: 8,
        c: 9
    }
]

console.log()
for (var i = 0; i < trikampis.length; i++) {
    console.log(i)
}

for (var krastine of trikampis) {
    console.log(krastine.a);
}

// geroji prktika - aprašyti funkciją prieš panaudojimą
function pasisveikinti() {
    console.log('Labas pasauli !!!');
    console.log('Labas pasauli !!!');
    console.log('Labas pasauli !!!');

}

console.log(pasisveikinti());
console.log(pasisveikinti());

function pasisveikintiArgument(vardas, pavarde) {
    console.log('Su jumis sveikinasi ' + vardas + ' ' + pavarde);

}

console.log(pasisveikintiArgument('Marius', 'Litvinas'));


// pvz
// switch (expression) {
//     case x:
//
//         break;
//     case y:
//
//         break;
//     default:
//
// }

"use strict";












