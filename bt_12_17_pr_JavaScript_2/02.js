// namų darbai

// Parašykite programą, kurioje masyve būtų saugomi mašinų objektai.
// Kiekvienoje mašinoje saugomi
//     nuvažiuoto kelio
//     ir laiko (kiek mašina užtruko kelyje) duomenys,
//     bei mašinos valstybiniai numeriai.
// Panaudodami ciklus atspausdinkite duotus mašinų duomenis,
// bei apskaičiuokite vidutinį kiekvienos mašinos greitį
// ir jį taip pat atspausdinkite.
//
// Jei vidutinis mašinos greitis viršija 60,
// atspausdinkite mašinos valstybinius numerius.
// todo

var cars = [
    {
        car_distance: 50, // km
        car_time: 0.5, // laikas val
        car_reg_number: 'KAU 123'
    },
    {
        car_distance: 150, // km
        car_time: 2, // laikas val
        car_reg_number: 'LTU 456'
    },
    {
        car_distance: 100, // km
        car_time: 1.8, // laikas val
        car_reg_number: 'GTA 789'
    },
]

var i = 0;
var speed;

while (i < cars.length) {
    speed = (cars[i].car_distance / cars[i].car_time);
    console.log
    (i + 1 + ' automobilis  nuvažiavo: ' + cars[i].car_distance + ' km, per ' + cars[i].car_time + ' val, vidutinis greitis ' + speed + ' km / val');

    if (speed > 60) {
        console.log('  automobilis: ' + cars[i].car_reg_number + ' važiavo didesniu nei 60 km/val greičiu')
    }

    i++;
}

// pirmas įterpimas į HTML
/*
var text = 'Mariaus automobiliai';
document.getElementById('demo').innerHTML = text;
*/

// keturi atspausdinimo būdai:
/*
console.log('  automobilis: ' + cars[i].car_reg_number + ' važiavo didesniu nei 60 km/val greičiu')
document.getElementById('demo').innerHTML = 'vsudhviu';
document.writeln('auto ' + cars[i].car_reg_number);
window.alert(speed);
*/

i = 0;
while (i < cars.length) {
    speed = (cars[i].car_distance / cars[i].car_time);

    var new_tag_text = i + 1 + ' automobilis  nuvažiavo: ' + cars[i].car_distance + ' km, per ' + cars[i].car_time + ' val, vidutinis greitis ' + speed + ' km / val';

    var para = document.createElement("h1");
    var node = document.createTextNode(new_tag_text);
    para.appendChild(node);
    var element = document.getElementById("new_tag");
    element.appendChild(para);

    if (speed > 60) {
        var bed_boy = '  automobilis: ' + cars[i].car_reg_number + ' važiavo didesniu nei 60 km/val greičiu';

        var para = document.createElement("p");
        var node = document.createTextNode(bed_boy);
        para.appendChild(node);
        var element = document.getElementById("new_tag");
        element.appendChild(para);
    }

    i++;
}






