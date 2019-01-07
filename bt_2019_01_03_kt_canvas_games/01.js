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
        this.canvas = document.getElementById('canvas');
        this.ctx = canvas.getContext('2d');

        this.player = new Player();
        this.stalker = new Stalker(this.player);

        this.previousFrameTime = Date.now();
        // setInterval(this.update.bind(this), 30); // bus kartojama 30 kadrų per sekundę
        window.requestAnimationFrame(this.update.bind(this)); // bus kartojame meksimaliu skaičiumi per sekundę
    }

    draw() {
        this.ctx.clearRect(0, 0, 800, 600);
        this.player.draw(this.ctx);
        this.stalker.draw(this.ctx);
    };

    update() {
        let currentFrameTime = Date.now();
        let deltaTime = currentFrameTime - this.previousFrameTime;

        this.player.update(deltaTime);
        this.stalker.update(deltaTime);

        this.draw();

        this.previousFrameTime = currentFrameTime;
        window.requestAnimationFrame(this.update.bind(this)); // rekursija
    }

}

class Player {
    constructor() {
        this.x = 0;
        this.y = 0;
        this.size = 20;
        this.speed = 200;
    }

    update(deltaTime) {
        if (keysDown.d) {
            this.x += this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        if (keysDown.a) {
            this.x -= this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        if (keysDown.w) {
            this.y -= this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
        if (keysDown.s) {
            this.y += this.speed * (deltaTime / 1000); // kiek pajuda pikselių per sekundę
        }
    }

    draw(context) {
        context.fillStyle = '#16a085';
        context.fillRect(this.x, this.y, this.size, this.size);
    }
}

class Stalker {
    constructor(player) {
        this.x = 450;
        this.y = 370;
        this.size = 30;
        this.speed = 150;
        this.playerToStalk = player;
    }

    update(deltaTime) {
        if (this.x > this.playerToStalk.x) {
            this.x -= this.speed * deltaTime / 1000;
        }else {
            this.x += this.speed * deltaTime / 1000;
        }

        if (this.y > this.playerToStalk.y) {
            this.y -= this.speed * deltaTime / 1000;
        }else {
            this.y += this.speed * deltaTime / 1000;
        }

    }

    draw(context) {
        context.fillStyle = 'red';
        context.fillRect(this.x, this.y, this.size, this.size);
    };


}


let game = new Game();






