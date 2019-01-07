let UI = {
    wordElement: document.getElementById('word'),
    progressBarElement: document.getElementById('progressBar'),
    messageElement: document.getElementById('message')
}

class Game {
    constructor() {
        this.word = '';
        this.possibleWords = ['naujieji', 'metai', 'balius', 'petarda', 'kalapuske'];

        this.reset();

        document.addEventListener('keydown', this.onKeyDown.bind(this));
        
        setInterval(() => {
            this.addProgress(1);
        }, 200);
    }

    drawWord() {
        UI.wordElement.innerHTML = '';

        for (let i = 0; i < this.word.length; i++) {
            UI.wordElement.innerHTML += `<div class="letter"></div>`;
        }
    }

    onKeyDown(event) {
        let letter = event.key;

        console.log('Paspaustas mygtukas!', letter);
        this.checkLetter(letter);
    }

    checkLetter(letter) {
        let letterExists = false;

        for (let i = 0; i < this.word.length; i++) {
            if (letter === this.word.charAt(i)) {
                console.log('Tokia raidė egzistuoja');
                UI.wordElement.children[i].innerHTML = letter;
                letterExists = true;
                
                this.showMessage('WOW', 1000);
            }
        }

        if (!letterExists) {
            console.log('Tokia raidė neegzistuoja');

            this.addProgress(10);
        }

        this.checkWinCondition();
    }

    checkWinCondition() {
        for (let letterElement of UI.wordElement.children) {
            if (!letterElement.innerHTML)
                return false;
        }

        // Jei visos raidės užpildytos
        console.log('Laimėjote žaidimą');
        this.reset();
    }

    addProgress(amount) {
        this.progress += amount;

        this.progress = Math.min(this.progress, 100);

        if (this.progress === 100) {
            console.log('Looser');
            this.reset();
            this.showMessage('Jūs pralaimėjote... Bandykite dar kartą');
        }

        this.drawProgress();
    }

    showMessage(message, time = 5000) {
        UI.messageElement.innerHTML = message;

        setTimeout(() => {
            UI.messageElement.innerHTML = '';
        }, time);
    }

    drawProgress() {
        UI.progressBarElement.style.width = `${this.progress}%`;
    }

    reset() {
        this.progress = 0;
        this.drawProgress();

        UI.messageElement.innerHTML = '';

        let randomIndex = Math.floor(Math.random() * this.possibleWords.length);

        this.word = this.possibleWords[randomIndex];
        this.drawWord();
    }
}

let game = new Game();






