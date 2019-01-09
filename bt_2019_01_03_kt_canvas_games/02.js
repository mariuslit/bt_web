// var ctx = document.getElementById('canvas2').getContext("2d");
// var img = new Image();
// img.onload = function () {
//     ctx.drawImage(img, 0, 100, 50, 50);
// };
// img.src = "images/player.png";


let UI = {
    canvas: document.getElementById('canvas'),
    canvas1: document.getElementById('canvas1'),
    collected: document.getElementById('collected'),
    missed: document.getElementById('missed')
};

let SOUND = {
    beep: 'tone_error.mp3',
    positive: 'beep.mp3',
};

const cnvasSizeX = 500;
const cnvasSizeY = 500;

const playerSizeX = 20;
const playerSizeY = 50;

const enemySizeX = 50;
const enemySizeY = 30;

let keysDown = {};
// kai paspaudžiame mygtuką
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
        this.player.draw(this.ctx);
        this.enemy.draw(this.ctx);

        if (this.enemy.x <= -enemySizeX) {
            this.enemy.x = cnvasSizeX;
            this.enemy.y = this.enemy.getRandom();
        }


        // kai pagauna raketą
        if (this.player.x < this.enemy.x &&
            this.player.x + playerSizeX > this.enemy.x &&
            this.player.y < this.enemy.y &&
            this.player.y + playerSizeY > this.enemy.y) {

            console.log(this.enemy.x, ' x ', this.player.x);
            this.enemy.beep(SOUND.positive);
            this.enemy.reset();
            UI.collected.textContent = ++this.player.collected;
        }
    }
}

class Player {

    constructor(ctx) {
        this.ctx = ctx;
        this.x = 100;
        this.y = 250;
        this.speed = 200;
        this.img = new Image();
        this.img.src = 'images/player.png';
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
        if (keysDown.d) {
            this.x += this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        if (keysDown.a) {
            this.x -= this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
    }

    draw(ctx) {
        var ctx2 = this.ctx;
        var x = this.x + 100;
        var y = this.y;
        var img = this.img;
        // img.src = this.img.src;
        this.ctx.drawImage(this.img, this.x, this.y, playerSizeX, playerSizeY);
        this.img.src = "images/player.png";

        ctx.fillStyle = '#16a085';
        ctx.fillRect(this.x, this.y, playerSizeX, playerSizeY);
    }
}

class Enemy {

    constructor(ctx) {
        this.ctx = ctx;
        this.img = new Image();
        this.x = cnvasSizeX;
        this.y = this.getRandom();
        this.speed = 150;
        this.missed = 0;
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

    draw(context) {
        // context.fillStyle = 'red';
        // context.fillRect(this.x, this.y, this.size, this.constSizeY);
    //     this.drawEnemyPicture(this.x, this.y, this.ctx, this.img);
    // };
    //
    // drawEnemyPicture(x, y, ctx, img) {
        this.ctx.drawImage(this.img, this.x, this.y, enemySizeX, enemySizeY);
        // this.img.onload = function () {
        // };
        this.img.src = "images/enemy.png";
        if (this.x < -enemySizeX) {
            this.ctx.clearRect(0, 0, cnvasSizeX, cnvasSizeY);
            this.reset();
            this.beep(SOUND.beep);
            UI.missed.textContent = ++this.missed;
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




