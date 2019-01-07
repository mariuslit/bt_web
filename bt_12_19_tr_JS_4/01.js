let trikampiai = [
    {
        a: 1,
        b: 2,
        c: 3
    },
    {
        a: 4,
        b: 5,
        c: 3
    },
    {
        a: 7,
        b: 8,
        c: 9
    },
    {
        a: 6,
        b: 10,
        c: 8
    },
    {
        a: 37,
        b: 8,
        c: 9
    }
];

function atspausdintiTrikampi(trikampis) {
    console.log(`Trikampio a kraštinė ${trikampis.a}`);
    console.log(`Trikampio b kraštinė ${trikampis.b}`);
    console.log(`Trikampio c kraštinė ${trikampis.c}`);
}

for (let trikampis of trikampiai) {
    atspausdintiTrikampi(trikampis)
    console.log(`---`);

}

function isTriangle(a, b, c) {
    return !(a + b <= c || b + c <= a || c + a <= b)
}

function isStatusis(a, b, c) {
    // return Math.pow(a, 2) + Math.pow(b, 2) == Math.pow(c, 2)
    return (a ** 2 + b ** 2) === c ** 2 || (c ** 2 + a ** 2) === b ** 2 || (b ** 2 + c ** 2) === (a ** 2);
}

console.log(`Parašyti ar trikampis egzistuoja`)
for (let trikampis of trikampiai) {
    if (isTriangle(trikampis.a, trikampis.b, trikampis.c)) {
        console.log(`  trikampis egzistuoja`)
        if (isStatusis(trikampis.a, trikampis.b, trikampis.c)) {
            console.log(`    trikampis statusis`)
        } else {
            console.log(`    trikampis nestatusis`)
        }
    } else {
        console.log(`  trikampis neegzistuoja`)
    }
}

// console.log(`Parašyti ar trikampis statusis`)
// for (let trikampis of trikampiai) {
// }

// *********************************************************************** klasės

var krepsisinkas = {
    vardas: 'Sabosnis',
    nueris: 11,
    taskai: 4,
    pasisveikinti: function () {
        console.log(`Labas pasauli!, mano numeris ${this.nueris}, sako ${this.vardas}`)
    },
    mestiTaska:function () {
        this.taskai++;
        console.log(this.taskai)
    }
}

krepsisinkas.pasisveikinti();
krepsisinkas.mestiTaska();














