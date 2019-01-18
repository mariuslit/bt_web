let UI = {
    canvas: document.getElementById('canvas'),
    collected: document.getElementById('collected'),
    missed: document.getElementById('missed')
};

let SOUND = {
    lose: 'files/beep-lose.mp3',
    receive: 'files/beep-receive.mp3',
};

const cnvasSizeX = 500;
const cnvasSizeY = 500;

const playerSizeX = 35;
const playerSizeY = 50;

const enemySizeX = 50;
const enemySizeY = 30;

let keysDown = {};
// kai įspaudžiame mygtuką
document.addEventListener('keydown', (e) => {
    let keyCode = e.key;
    // [] šiuos skliaustuose galim peduoti reikšmę kaip kintamajį
    keysDown[keyCode] = true; //  keysDown[keyCode]=true;
});
// kai atleidžiame mygtuką
document.addEventListener('keyup', (e) => {
    let keyCode = e.key;
    delete keysDown[keyCode]; // ištriname atributą iš objekto
});

class Game {

    constructor() {
        this.canvas = UI.canvas;
        this.ctx = this.canvas.getContext('2d');

        this.player = new Player(this.ctx);
        this.enemy = new Enemy(this.ctx); // this.player

        this.previousFrameTime = Date.now();
        // setInterval(this.update.bind(this), 30); // bus kartojama 30 kadrų per sekundę
        window.requestAnimationFrame(this.update.bind(this)); // bus kartojame maksimaliu skaičiumi per sekundę
    }

    update() {
        let currentFrameTime = Date.now();
        let deltaTime = currentFrameTime - this.previousFrameTime;

        this.player.update(deltaTime);
        this.enemy.update(deltaTime);

        this.draw();

        this.previousFrameTime = currentFrameTime;
        window.requestAnimationFrame(this.update.bind(this)); // rekursija
    }

    draw() {
        this.ctx.clearRect(0, 0, cnvasSizeX, cnvasSizeY);
        this.player.draw();
        this.enemy.draw(this.player);

        if (this.enemy.x <= -enemySizeX) {
            this.enemy.x = cnvasSizeX;
            this.enemy.y = this.enemy.getRandom();
        }

        // kontrolinės linijos
        // this.ctx.fillStyle = 'red';
        // this.ctx.fillRect(this.player.x, this.player.y - playerSizeY / 2, 100, 1);
        // this.ctx.fillRect(this.player.x, this.player.y + playerSizeY / 2, 100, 1);

        // kai pagauna raketą
        if (this.player.x < this.enemy.x &&
            this.player.x + playerSizeX > this.enemy.x &&
            this.player.y - playerSizeY / 2 < this.enemy.y &&
            this.player.y + playerSizeY / 2 > this.enemy.y) {

            console.log(this.enemy.x, ' x ', this.player.x);
            this.enemy.beep(SOUND.receive);
            this.enemy.reset();

            UI.collected.textContent = ++this.player.collected;
        }
    }
}

class Player {

    constructor(ctx) {
        this.ctx = ctx;
        this.img = new Image();
        this.img.src = "images/player.png";
        this.x = 100;
        this.y = 250;
        this.speed = 200;
        this.collected = 0;
        this.missed = 0;
    }

    update(deltaTime) {
        // up
        if (keysDown.w) {
            this.y -= this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        // down
        if (keysDown.s) {
            this.y += this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        // right
        if (keysDown.d) {
            this.x += this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        // left
        if (keysDown.a) {
            this.x -= this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        if (this.x < 0) {
            this.x = 0
        }
        if (this.x > cnvasSizeX - playerSizeX) {
            this.x = cnvasSizeX - playerSizeX
        }
        if (this.y < + playerSizeY/2) {
            this.y = + playerSizeY/2
        }
        if (this.y > cnvasSizeY - playerSizeY/2) {
            this.y = cnvasSizeY - playerSizeY/2
        }
    }

    draw() {
        this.ctx.drawImage(this.img, this.x, this.y - playerSizeY / 2, playerSizeX, playerSizeY);

    }
}

class Enemy {

    constructor(ctx) {
        this.ctx = ctx;
        this.img = new Image();
        this.img.src = "images/enemy.png";
        this.x = cnvasSizeX;
        this.y = this.getRandom();
        this.speed = 150;
        // this.missed = 0;
    }

    update(deltaTime) {
        if (this.x > -enemySizeX) {
            this.x -= this.speed * deltaTime / 1000;
            // } else {
            // this.x += this.speed * deltaTime / 1000;
        }
    }

    getRandom() {
        for (let i = 0; i < 10; i++) {
            console.log(Math.round(Math.random() * (cnvasSizeY - enemySizeY)))
        }
        return Math.round(Math.random() * (cnvasSizeY - enemySizeY));
    }

    draw(player) {
        this.ctx.drawImage(this.img, this.x, this.y - enemySizeY / 2, enemySizeX, enemySizeY);

        // kontrolinės linijos
        // this.ctx.fillStyle = 'blue';
        // this.ctx.fillRect(this.x, this.y, 100, 1);

        if (this.x < -enemySizeX) {
            this.ctx.clearRect(0, 0, cnvasSizeX, cnvasSizeY);
            this.reset();
            this.beep(SOUND.lose);
            // player.missed = ++this.missed;
            UI.missed.textContent = ++player.missed;
        }
    }

    reset() {
        this.ctx.clearRect(0, 0, cnvasSizeX, cnvasSizeY);
        this.x = cnvasSizeX;
        this.y = this.getRandom();
    }

    beep(soundPath) {
        let snd = new Audio();
        snd.src = soundPath;
        snd.volume = 0.5;
        let promise = snd.play();
    }
}

let game = new Game();




