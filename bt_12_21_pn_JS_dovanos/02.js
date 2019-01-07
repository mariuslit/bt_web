const ferrariName = 'Ferrari Enzo', ferrariSpeed = 355;
const bugattiName = 'Bugatti Veyron EB 16.4', bugattiSpeed = 431;
let repeatRace; // kartojimo objektas

let tags_ID = {
    masinosVardas: document.getElementById('inputName'),
    masinosGreitis: document.getElementById('inputSpeed'),
    masinosLaikas: document.getElementById('inputTime'),

    buttonAddCar: document.getElementById('addCar'),
    buttonRemoveCar: document.getElementsByClassName('removeCar'), // by class
    buttonRace: document.getElementById('race'),
    buttonStopRace: document.getElementById('stopRace'),
    incrDecrSpeed: document.getElementsByClassName('incrDecrSpeed'), // by class

    tableBody: document.getElementById('tableBody'),
    racingCars: document.getElementById('racingCars'),

    ferrari: document.getElementById('ferrari'),
    bugatti: document.getElementById('bugatti'),

    backgroundImage: document.getElementById('backgroundImage'),

    clearLocalStorage: document.getElementById('clearLocalStorage'),
    isSoundCheckBox: document.getElementById('isSoundCheckBox'),
    nonStopCheckBox: document.getElementById('nonStopCheckBox'),
    resetRace: document.getElementById('resetRace')
};

tags_ID.isSoundCheckBox.checked = false;
tags_ID.nonStopCheckBox.checked = false;

class Car {

    constructor(name, speed) {
        this.name = name;
        this.speed = speed; // km/h
        this.distance = 0;
        this.time = 0; // sec
    }

    setDistance(value) {
        this.distance = value / 60 / 60;
    }

    ride(time) {
        this.distance += this.speed * time / 60 / 60;
        this.time += time;
    }

    printData() {
        console.log(`auto: ${this.name}, speed: ${this.speed}, distance: ${this.distance}`)
    }
}

let cars = [];

// IMAME DUOMENIS IŠ LOCAL ATMINTIES
// jeigu localStorage yra cars masyvas, tai paimti tą masyvą localStorage.getItem() ir priskirti cars masyvui cars = JSON.parse()
if (localStorage.getItem('cars')) {

    let temporaryCars = JSON.parse(localStorage.getItem('cars'));

    // tarpinis veiksmas, sutvarko cars objektų masyvą psimtą iš localStorage
    for (let car of temporaryCars) {

        cars.push(new Car(car.name, car.speed));
        cars[cars.length - 1].setDistance(car.distance);
    }

    spausdintiTable();
}


// ============== ADD CAR
// Paspaudus mygtuką "Pridėti mašiną" addEventListener
tags_ID.buttonAddCar.addEventListener('click', () => {

    // validacijų alert'ai
    if (tags_ID.masinosVardas.value.length === 0) {
        alert('Neteisingai užpildytas laukas Automobilis');
        return;
    }
    if (isExistingCar(tags_ID.masinosVardas.value)) {
        tags_ID.masinosVardas.value = '';
        tags_ID.masinosGreitis.value = '';
        alert('Toks automobilis jau yra.');
        return;
    }
    if (Number(tags_ID.masinosGreitis.value) <= 0 || !Number(tags_ID.masinosGreitis.value)) {
        tags_ID.masinosGreitis.value = '';
        alert('Neteisingai užpildytas laukas Greitis, turi būti skaičius didesnis už nulį');
        return;
    }

    tags_ID.backgroundImage.style.backgroundImage = 'url(images/nfs/intro.jpg)';

    // sukuriamas naujas mašinos objektas, (get Pavadinimas, get Greitis)
    //     o jo greičio ir pavadinimo reikšmės lygios input laukelių "Pavadinimas" ir "Greitis" reikšmėms.
    let car = new Car(tags_ID.masinosVardas.value, tags_ID.masinosGreitis.value);

    tags_ID.racingCars.innerHTML += `<option id="optionCar">${car.name} (${car.speed} km/h)</option>`;

    cars.push(car);

    tags_ID.masinosVardas.value = '';
    tags_ID.masinosGreitis.value = '';

    spausdintiTable();
});
tags_ID.ferrari.addEventListener('click', () => {
    tags_ID.masinosVardas.value = ferrariName;
    tags_ID.masinosGreitis.value = ferrariSpeed;
});
tags_ID.bugatti.addEventListener('click', () => {
    tags_ID.masinosVardas.value = bugattiName;
    tags_ID.masinosGreitis.value = bugattiSpeed;
});


// ============== RACE
tags_ID.buttonRace.addEventListener('click', () => {

    // validacijų alert'ai
    if (cars.length === 0) {
        alert('Nėra lenktyniaujančių mašinų');
        tags_ID.masinosLaikas.value = '';
        return;
    }
    if (Number(tags_ID.masinosLaikas.value) <= 0 || !Number(tags_ID.masinosLaikas.value)) {
        tags_ID.masinosLaikas.value = 1;
    }

    tags_ID.backgroundImage.style.backgroundImage = 'url(images/nfs/rice-track-car.jpg)';

    tags_ID.buttonRace.disabled = true;

    let timeInterval = 0;

    // if [nonStopCheckBox]+
    if (tags_ID.nonStopCheckBox.checked) {
        tags_ID.buttonRace.disabled = true;
        timeInterval = 1000;
    }
    // if [nonStopCheckBox]-
    else {
        tags_ID.buttonRace.disabled = false;
        timeInterval = 0;
    }

    repeatRace = setInterval(function () {

        if (!tags_ID.nonStopCheckBox.checked) {
            clearInterval(repeatRace);
            tags_ID.buttonRace.disabled = false;
        }

        // jeigu Ferrari ir Bugatti dalyvauja lenktynėse leisti garsą
        if (tags_ID.isSoundCheckBox.checked && cars.find(car => car.name === ferrariName) && cars.find(car => car.name === bugattiName)) {
            let audio = new Audio('sounds/audio_hero_AutoFerrari_DIGID16_35_321.mp3');
            audio.play();
        }

        // vykdoma uždavinio sąlyga
        for (let car of cars) {
            car.ride(Number(tags_ID.masinosLaikas.value));
            car.printData();
        }

        // automobiliai rūšiuojami mažėjimo tvarka pagal nuvažiuotą atstumą
        cars.sort((a, b) => b.distance - a.distance);

        // ĮRAŠOME DUOMENIS Į LOCAL ATMINTĮ
        // sukuriamas JSO objektas, kuris gauna cars objektą (masyvą) ir patalpinamas kompiuterio localStorage atmintyje
        localStorage.setItem('cars', JSON.stringify(cars));

        spausdintiTable();

    }, timeInterval);


});


// ============== PRINT

function spausdintiTable() {

    tags_ID.tableBody.innerHTML = '';

    let i = 0;
    for (let car of cars) {
        i++;

        // sukuriamas naujas tagas ir atspausdinamas ekrane
        tags_ID.tableBody.innerHTML +=
            `<tr>` +
            `<td id="firstColumn">${i}.<button class="removeCar">X</button>${car.name}</td>
            <td><input class="incrDecrSpeed" type="number" name="a" value="${car.speed}"/></td>
            <td>${car.time} sec  /  ${car.distance.toFixed(3)} km</td>` +
            `</tr>`;
    }

    buttonRemove(); // button [x]
    changeSpeedValue(); // input (up / down)
    localStorage.setItem('cars', JSON.stringify(cars));
}

// ============== [X]
function buttonRemove() {

    for (let i = 0; i < tags_ID.buttonRemoveCar.length; i++) {

        tags_ID.buttonRemoveCar[i].addEventListener('click', () => {
            cars.splice(i, 1); // pašalina automobilį iš masyvo
            spausdintiTable();
        }, false);
    }
}

// ============== SPEED VALUE
function changeSpeedValue() {

    for (let i = 0; i < tags_ID.incrDecrSpeed.length; i++) {

        tags_ID.incrDecrSpeed[i].addEventListener('click', () => {
            cars[i].speed = tags_ID.incrDecrSpeed[i].value;
            spausdintiTable();
        }, false);
    }
}

// tikrinti vienodus automobilius, neradau metodo, tai parašiau pats
function isExistingCar(name) {
    for (let car of cars) {
        if (car.name === name) {
            return true;
        }
    }
    return false;
}

// ============== (Clear Local Storage)
tags_ID.clearLocalStorage.addEventListener('click', () => {

    tags_ID.backgroundImage.style.backgroundImage = 'url(images/nfs/maxresdefault2.jpg)';
    window.localStorage.clear();
    cars = [];
    tags_ID.racingCars.innerHTML += ``;

    resetRace();
    spausdintiTable();

});

// ============== (Reset Race)
tags_ID.resetRace.addEventListener('click', () => {

    tags_ID.backgroundImage.style.backgroundImage = 'url(images/nfs/F23A77A7-B4D3-4841-B499-592A79A0DBCF.jpeg)';
    resetRace();
});

// pagalbinė funkcija
function resetRace() {

    tags_ID.masinosVardas.value = '';
    tags_ID.masinosGreitis.value = '';
    tags_ID.masinosLaikas.value = '';
    tags_ID.masinosLaikas.value = '';
    tags_ID.nonStopCheckBox.checked = false;

    clearInterval(repeatRace);

    for (let car of cars) {
        car.setDistance(0);
        car.time = 0;
    }
    spausdintiTable();
}

// ============== (Stop)
tags_ID.buttonStopRace.addEventListener('click', () => {

    tags_ID.buttonRace.disabled = false;

    clearInterval(repeatRace);

    let audio = new Audio('sounds/zapsplat_sport_referee_whistle_001_14667.mp3');
    audio.play();

    tags_ID.backgroundImage.style.backgroundImage = 'url(images/nfs/maxresdefault1.jpg)';

    spausdintiTable();
});



