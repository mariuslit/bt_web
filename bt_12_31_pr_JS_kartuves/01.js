let uI = {
    wordElement: document.getElementById('word'),
    wordElement: document.getElementById('word'),
    progressBarElement: document.getElementById('progressBar'),
    messageElement: document.getElementById('message'),
};

let gameData = {
    word: 'balius'
};

class Game {
    constructor() {
        this.word = 'balius';
        this.drawWord();

        document.addEventListener('keydown',this.onKeyDown)
    }

    drawWord() {
        uI.wordElement.innerHTML = '';

        for (let i = 0; i < this.word.length; i++) {
            uI.wordElement.innerHTML+=`<div class="letter"></div>`
        }
    }

    onKeyDown(event){
        let letter = event.key;
        console.log('paspaustas mygtukas',letter)
    }

    checkLetter(letter){

    }

}

let game = new  Game();


