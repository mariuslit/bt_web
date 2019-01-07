var car = {
    brand: 'Volkswagen',
    doors: 5,
    diesel: true,
    engine: {
        power: 66,
        volume: 0.9
    }

};

console.log('Automobilio markė: ' + car.brand);
console.log('Automobilio markė: ' + car.engine.power);
console.log('Automobilio variklio darbinis tūris: ' + car.engine.volume);

var krepsininkai = [
    {
        vardas: 'Paulius Jankūnas',
        numeris: 12
    },
    {
        numeris: 3,
        vardas: 'Artūras Mikalnis'
    }
];

krepsininkai [2] = {
    vardas: 'Antanas Kavaliauskas',
    numeris: 6,
}

komanda = [
    ['Paulius', 12],
    [3, 'Artūras'],
]

var koanda

console.log(krepsininkai[0]);
console.log(krepsininkai[1].numeris);
console.log(krepsininkai[5]);
console.log(krepsininkai[1].vardas + krepsininkai[0].numeris);
console.log(krepsininkai[1].vardas + krepsininkai[0].numeris);

console.log(krepsininkai.length);

console.log(komanda[0].vardas);


// while ir for


var x = 0;
while (x < 10) {
    console.log("Labas " + x);
    x++;
}

console.log('ciklas baigtas');

var x = 0;
while (x < krepsininkai.length) {
    console.log(krepsininkai[x].vardas);
    x++;
}
console.log('ciklas baigtas');


var amzius = 18;
var mokinys = prompt('Jūsų amzius')

if (amzius > 20) {
    console.log("alkoholį parduoti galima")
} else {
    console.log("Jaunuoli, pieno skyrius kitoje pusėje")
}


















