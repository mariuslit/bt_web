// const alphabet = 'AĄBCČDEĘĖFGHIYĮJKLMNOPRSŠTVUŪŲZŽ';
const alphabet = 'aąbcčdeęėfghiyįjklmnoprsštvuūųzž';
const fileLoad = '02wordsLt15444.json';

let UI = {
    lettersRemainer: document.getElementById('lettersRemainer'),
    wordElement: document.getElementById('word'),
    progressBarElement: document.getElementById('progressBar'),
    messageElement: document.getElementById('message'),
    button1: document.getElementById('button1'),
    button2: document.getElementById('button2'),
    button3: document.getElementById('button3'),
    button4: document.getElementById('button4'),
    button5: document.getElementById('button5')
};

// todo ?? klausimas Gyčiui - kodėl nepaima wordsLT masyvo duomenų prieš sukuriant objektą?

var wordsLT = [];

console.log('wordsLT.length 1 ' + wordsLT.length);

let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {

        wordsLT = JSON.parse(xhttp.responseText);

        console.log('wordsLT.length 2 ' + wordsLT.length);
    }
};
xhttp.open("GET", fileLoad, true);
xhttp.send();
console.log('wordsLT.length 3 ' + wordsLT.length);

let wordsLT155 = [
    'aneksija',
    'angliavandeniai',
    'apgaudinėjimas',
    'apmokymas',
    'atgijimas',
    'atsakovas',
    'atsisveikinimas',
    'atvažiavėlė',
    'aukštupys',
    'baskas',
    'begalybė',
    'bejėgis',
    'biotelevizorius',
    'brahmanas',
    'brėžtuvas',
    'bulidė',
    'bundeslyga',
    'būrys',
    'carizmas',
    'ciklas',
    'čiulbesys',
    'daugelis',
    'deformacija',
    'dekoras',
    'dieglys',
    'dividendas',
    'draugužis',
    'durpynas',
    'egocentriškumas',
    'eretropoetinas',
    'esė',
    'estukas',
    'europarlamentas',
    'fleita',
    'furgonas',
    'genialumas',
    'gyvsidabris',
    'globulinas',
    'hemodializė',
    'hipokrizija',
    'imperija',
    'impulsas',
    'indonezietis',
    'inhaliacija',
    'intymumas',
    'išnaudotojas',
    'įsidarbinimas',
    'įsikūnijimas',
    'įsipjovimas',
    'įspaudas',
    'ypatybė',
    'jaunimas',
    'kaita',
    'kalbininkas',
    'karaitas',
    'kartografija',
    'kekė',
    'kiaulė',
    'kiaunė',
    'kiekis',
    'kirvarpa',
    'klaviatūra',
    'kontinentas',
    'kontradikcija',
    'koordinacija',
    'kraštas',
    'laikinumas',
    'laivas',
    'lapis',
    'logopedas',
    'lūšna',
    'mailius',
    'makalynė',
    'mecenatas',
    'mentalitetas',
    'mergelis',
    'mikrolygis',
    'minimas',
    'naudmena',
    'neturėjimas',
    'neurochirurgas',
    'niekalas',
    'nirimas',
    'nuomonė',
    'nuotykis',
    'nusistovėjimas',
    'nutraukėjas',
    'oportunistas',
    'paliudijimas',
    'pasinaudojimas',
    'paskaita',
    'paskatinimas',
    'patikėtinė',
    'pergamentas',
    'perlas',
    'pesimizmas',
    'piktasis',
    'piltuvėlis',
    'pokelis',
    'postulatorius',
    'pradžia',
    'pranašautoja',
    'priderinimas',
    'priežodis',
    'protezas',
    'pseudoreligija',
    'psichika',
    'puikumas',
    'refleksoterapija',
    'rinkinėlis',
    'robinija',
    'rokenrolas',
    'rusas',
    'sadizmas',
    'sanatorija',
    'sankcionavimas',
    'santara',
    'sąmonė',
    'sąryšis',
    'sekcija',
    'skėtis',
    'skyrimas',
    'skulptūrėlė',
    'skustuvas',
    'spingsulė',
    'stomatitas',
    'svarelis',
    'svarstymas',
    'šaltiena',
    'šašlykas',
    'širdperša',
    'šovinys',
    'šviesa',
    'tamsuolis',
    'tauta',
    'termofikacija',
    'tęstinumas',
    'tyrinėjimas',
    'trajektorija',
    'tremtinys',
    'tuberkuliozė',
    'ūpas',
    'urna',
    'užmetimas',
    'užtarimas',
    'vada',
    'vaivada',
    'varpas',
    'vertė',
    'vešėjimas',
    'vikrumas',
    'vunderkindas',
    'žagarvyšnė',
    'žetonas',
    'žodelis'
];

// todo
wordsLT = wordsLT155; // palengvintas masyvas, kol neveikia tikrasis

//wordsLT = ['asd']; // greitam testavimui

class Game {
    constructor() {
        this.lettersRemainer = alphabet;
        this.word = '';
        this.possibleWords = wordsLT;
        this.speed = 0.2;
        this.level = 1;
        this.reset();

        // todo ?? klausimas Gyčiui - kaip sukurti addEventListener kad būtų ir 'click' ir 'keydown'?
        document.addEventListener('keydown', this.onKeyDown.bind(this)); // kai norime iškvisti this funkciją su this parametru

        setInterval(() => {

            this.addProgress(this.speed);

            UI.button1.addEventListener('click', () => {
                this.setLevel(1);
            });

            UI.button2.addEventListener('click', () => {
                this.setLevel(2);
            });

            UI.button3.addEventListener('click', () => {
                this.setLevel(3);
            });

            UI.button4.addEventListener('click', () => {
                this.setLevel(4);
            });

            UI.button5.addEventListener('click', () => {
                this.setLevel(5);
            });

        }, 100);
    }

    // lygių tikrinimas
    setLevel(level) {

        console.log('prieš ' + this.level);

        this.level = level;

        if (level > 5) {
            this.level = 5;
        }
        if (level < 1) {
            this.level = 1;
        }


        console.log('po ' + this.level);
        switch (this.level) {
            case 1:
                this.speed = 0.2;
                UI.progressBarElement.style.backgroundColor = `#dddddd`;
                break;

            case 2:
                this.speed = 0.3;
                UI.progressBarElement.style.backgroundColor = `lime`;
                break;

            case 3:
                this.speed = 0.5;
                UI.progressBarElement.style.backgroundColor = `yellow`;
                break;

            case 4:
                this.speed = 0.8;
                UI.progressBarElement.style.backgroundColor = `orange`;
                break;

            case 5:
                this.speed = 1.5;
                UI.progressBarElement.style.backgroundColor = `red`;
                break;

            default:
                this.speed = 0.05;
                UI.progressBarElement.style.backgroundColor = `black`;
        }
    }

    drawWord() {

        UI.wordElement.innerHTML = '';
        UI.lettersRemainer.innerHTML = this.lettersRemainer;

        for (let i = 0; i < this.word.length; i++) {
            UI.wordElement.innerHTML += `<div class="letter"></div>`;
        }
    }

    onKeyDown(event) {
        let letter = event.key;

        this.checkLetter(letter);
    }

    checkLetter(letter) {
        let letterExists = false;

        for (let i = 0; i < this.word.length; i++) {
            if (letter === this.word.charAt(i)) {

                UI.wordElement.children[i].innerHTML = letter;
                letterExists = true;

                this.showMessage('WOW', 1000);

                if (this.lettersRemainer.includes(letter)) {

                    this.addProgress(-5);
                }
            }
        }

        if (!letterExists) {

            this.showMessage('Tokia raidė neegzistuoja', 1000);

            this.addProgress(3);
        }

        this.removeLetter(letter);
        this.checkWinCondition();
    }

    checkWinCondition() {
        for (let letterElement of UI.wordElement.children) {
            if (!letterElement.innerHTML)
                return false;
        }

        this.showMessage('Jūs laimėjote !!!', 3000);
        let audio = new Audio('zapsplat_multimedia_game_beep_generic_006_25860.mp3');
        audio.play();
        this.setLevel(++this.level);
        this.reset();
    }

    // tikrina ir atspausdina likusias nepaspaustas raides
    removeLetter(letter) {

        if (this.lettersRemainer.includes(letter)) {

            this.lettersRemainer = this.lettersRemainer.split(letter).join('_');
        }

        UI.lettersRemainer.innerHTML = this.lettersRemainer;
    }

    addProgress(amount) {

        this.progress += this.progress + amount < 0 ? 0 : amount;
        this.progress = Math.min(this.progress, 100);

        if (this.progress >= 100) {
            this.showMessage('Jūs pralaimėjote... Bandykite dar kartą', 3000);
            let audio = new Audio('zapsplat_multimedia_game_tone_error_001_25910.mp3');
            audio.play();

            this.setLevel(--this.level);
            this.reset();
        }

        this.drawProgress();
    }

    showMessage(message, time) {
        UI.messageElement.innerHTML = message;

        setTimeout(() => {
            UI.messageElement.innerHTML = '-';
        }, time);
    }

    drawProgress() {
        UI.progressBarElement.style.width = `${this.progress}%`;
    }

    reset() {
        // setTimeout(() => {
        UI.messageElement.innerHTML = '-';

        this.progress = 0;
        this.drawProgress();
        this.lettersRemainer = alphabet;

        let randomIndex = Math.floor(Math.random() * this.possibleWords.length);

        this.word = this.possibleWords[randomIndex];

        this.drawWord();
        // }, 1000);
    }
}

let game = new Game();













