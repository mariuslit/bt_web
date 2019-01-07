let keysDown = {};

document.addEventListener('keydown', (e) => {
    let keyCode = e.key;    
    keysDown[keyCode] = true;
});

document.addEventListener('keyup', (e) =>  {
    let keyCode = e.key;
    delete keysDown[keyCode];
});

class Game {
    constructor() {
        this.canvas = document.getElementById('canvas');
        this.ctx = canvas.getContext('2d');
        
        this.player = new Player();
        this.stalker = new Stalker(this.player);
        
        this.previousFrameTime = Date.now();
        
        window.requestAnimationFrame(this.update.bind(this));
    }
    
    draw() {
        this.ctx.clearRect(0, 0, 800, 600);
        this.player.draw(this.ctx);
        this.stalker.draw(this.ctx);
    }
    
    update() {
        let currentFrameTime = Date.now();
        let deltaTime = currentFrameTime - this.previousFrameTime;

        this.player.update(deltaTime);
        this.stalker.update(deltaTime);

        this.draw();
        
        this.previousFrameTime = currentFrameTime;
        window.requestAnimationFrame(this.update.bind(this));
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
        if (keysDown.d)
            this.x += this.speed * deltaTime / 1000;
        
        if (keysDown.a)
            this.x -= this.speed * deltaTime / 1000;
        
        if (keysDown.w)
            this.y -= this.speed * deltaTime / 1000;
        
        if (keysDown.s)
            this.y += this.speed * deltaTime / 1000;
    }
    
    draw(context) {
        context.fillStyle = '#16a085';
        context.fillRect(this.x, this.y, this.size, this.size);
    }
}

class Stalker {
    constructor(player) {
        this.x = 450;
        this.y = 270;
        this.size = 30;
        this.speed = 150;
        this.playerToStalk = player;
    }
    
    update(deltaTime) {        
        if (this.x > this.playerToStalk.x)
            this.x -= this.speed * deltaTime / 1000;
        else 
            this.x += this.speed * deltaTime / 1000;
        
        if (this.y > this.playerToStalk.y)
            this.y -= this.speed * deltaTime / 1000;
        else 
            this.y += this.speed * deltaTime / 1000;
    }
    
    draw(context) {
        context.fillStyle = '#e74c3c';
        context.fillRect(this.x, this.y, this.size, this.size);
    }
}

let game = new Game();





