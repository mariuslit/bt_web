var section = document.querySelector('section');

//////////////////////////////////////////////////////////////////////////////////////////////////

class Students {

    constructor(firstName, lastName, ratings) {
        this.name = firstName;
        this.lastName = lastName;
        this.ratings = ratings;
    }

    averageRatings() {
        let average = this.ratings.reduce((a, b) => a + b, 0) / this.ratings.length;
        return average.toFixed(1);
    }

    addRatings(score) {
        this.ratings.push(score);
    }

    printStudents() {
        let text = `  ${this.fullName()} pažymių vidurkis: ${this.averageRatings()}`;

        console.log(text);

        let myH1 = document.createElement('h3');
        myH1.textContent = text;
        section.appendChild(myH1);

        if (this.averageRatings() >= 7) {
            console.log('  ŠAUNUOLIS !!!');
        } else {
            console.log('  bed student :(');
        }
    }

    fullName() {
        return this.name + ' ' + this.lastName[0] + '.';
    }

    compareStudents(object) {
        let rating = '';

        if (this.averageRatings() > object.averageRatings()) {

            rating = `  Studento ${this.name} pažymių vidurkis didesnis už ${object.name}`;
            console.log(rating);

            console.log('  !!!   šiam studentui skiriama 10 balų premija   !!!');
            this.addRatings(10);
            console.log(`  Studento ${this.name} pažymių vidurkis ${this.averageRatings()}`);

        } else if (this.averageRatings() < object.averageRatings()) {

            rating = `  Studento ${object.name} pažymių vidurkis didesnis už ${this.name}`;
            console.log(rating);

            console.log('  !!!   šiam studentui skiriama 10 balų premija   !!!');
            object.addRatings(10);
            console.log(`  Studento ${object.name} pažymių vidurkis ${object.averageRatings()}`);

        } else {

            rating = `  Studentų ${object.name} ir ${this.name} pažymių vidurkiai vienodi`;
            console.log(rating);

            this.addRatings(10);
            object.addRatings(10);
            console.log('  !!!   abiems studentams skiriama po 10 balų premija   !!!');
            console.log(`  studento ${object.name} pažymių vidurkis ${object.averageRatings()}`);
            console.log(`  studento ${this.name} pažymių vidurkis ${this.averageRatings()}`);
        }

        return rating;
    }
}

// tipo čia studentų DB
let javaNykstukai =
    [
        'Ugnius', 'Vaidila', [8, 8, 9],
        'Mindaugas', 'Strasauskas', [9, 5, 7],
        'Tomas', 'Vetlovas', [9, 9, 8],
        'Kamilė', 'Bykova', [8, 8, 8],
        'Marius', 'Litvinas', [4, 9, 7],
        'Tomas', 'Ravinskas', [6, 8, 9],
        'Aurimas', 'Klastauskas', [10, 8, 2],
        'Vilma', 'Zaveckienė', [9, 9, 5]
    ];

// sugeneruoti mūsų kurso grupę "Java nykštukai"
let studentsArray = [];
for (let i = 0; i < javaNykstukai.length;) {
    studentsArray.push(new Students(javaNykstukai[i++], javaNykstukai[i++], javaNykstukai[i++]));
}

// atspausdinti studentus
for (let i = 0; i < studentsArray.length; i++) {
    console.log(`${i + 1} studentas`);
    studentsArray[i].printStudents();
}

// imti du atsitiktinius studentus, palyginti jų pažymių vidurkius ir atspausdinti
let randomNumberFirst = Math.round(Math.random() * 7);
let randomStudentFirst = studentsArray[randomNumberFirst];

let randomNumberSecond = 0;
while (randomNumberFirst === randomNumberSecond) {
    randomNumberSecond = Math.round(Math.random() * 7);
}
let randomStudentSecond = studentsArray[randomNumberSecond];

console.log(``);
console.log(`Atsitiktinių studentų ${randomNumberFirst + 1} ir ${randomNumberSecond + 1} palyginimas:`);


//////////////////////////////////////////////////////////////////////////////////////////////////
// spausdinimas į HTML
let studentFirst = document.getElementById('studentFirst');
studentFirst.innerHTML = `${randomStudentFirst.fullName()}`;

let studentSecond = document.getElementById('studentSecond');
studentSecond.innerHTML = `${randomStudentSecond.fullName()}`;

let rating = document.getElementById('rating');
rating.innerHTML = `${randomStudentFirst.compareStudents(randomStudentSecond)}`;

//////////////////////////////////////////////////////////////////////////////////////////////////

// let cbatBox = document.getElementById('chatBox');
// let sendButton = document.getElementById('sendButton');
// let input = document.getElementById('input');
// let pleasureButton = document.getElementById('pleasureButton');
//
// chatBox.style.backgroundColor = '#f1c40f';
// chatBox.innerHTML = 'Hellow World!';
//
// // iškviečia funkciją susietą  su sendButton
// sendButton.addEventListener('click', () => {
//     console.log('pasupaudėte mygtuka');
//     chatBox.innerHTML += '<br>' + input.value;
//     input.value = '';
//
// });
//
//
// pleasureButton.onclick = function () {
//     console.log('Hellow!');
//
//     chatBox.innerHTML = '';
//
//     // chatBox.classList.add('shake'); // įterpia klasę į tagą
//     chatBox.classList.toggle('shake');// jeigu nėra klasės - įdeda, jeigu yra - išima
// };





