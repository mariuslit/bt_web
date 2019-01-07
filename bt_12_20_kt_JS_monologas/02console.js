class Students {

    constructor(firstName, lastName, ratings) {
        this.name = firstName;
        this.lastName = lastName;
        this.ratings = ratings;
    }

    averageRatings() {
        let average = this.ratings.reduce((a, b) => a + b) / this.ratings.length;
        return average.toFixed(1);
    }

    addRatings(score) {
        this.ratings.push(score);
    }

    printStudents() {
        let text = `  ${this.fullName()} pažymių vidurkis: ${this.averageRatings()}`;

        console.log(text);

        if (this.averageRatings() >= 7) {
            console.log('  ŠAUNUOLIS !!!');
        } else {
            console.log('  bed student :(');
        }
    }

    fullName() {
        return this.name + ' ' + this.lastName[0] + '.';
    }

    palygintiStudentus(object) {

        if (this.averageRatings() > object.averageRatings()) {

            console.log(`  studento ${this.name} pažymių vidurkis didesnis už ${object.name}`);
            console.log('  !!!   šiam studentui skiriama 10 balų premija   !!!');
            this.addRatings(10);
            console.log(`  studento ${this.name} pažymių vidurkis ${this.averageRatings()}`);

        } else if (this.averageRatings() < object.averageRatings()) {

            console.log(`  studento ${object.name} pažymių vidurkis didesnis už ${this.name}`);
            console.log('  !!!   šiam studentui skiriama 10 balų premija   !!!');
            object.addRatings(10);
            console.log(`  studento ${object.name} pažymių vidurkis ${object.averageRatings()}`);

        } else {
            console.log(`  studentų ${object.name} ir ${this.name} pažymių vidurkiai vienodi`);
            this.addRatings(10);
            object.addRatings(10);
            console.log('  !!!   abiems studentams skiriama po 10 balų premija   !!!');
            console.log(`  studento ${object.name} pažymių vidurkis ${object.averageRatings()}`);
            console.log(`  studento ${this.name} pažymių vidurkis ${this.averageRatings()}`);
        }
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
randomStudentFirst.compareStudents(randomStudentSecond);

