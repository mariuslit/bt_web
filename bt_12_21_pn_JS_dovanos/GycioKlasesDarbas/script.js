const GiftCategory = {
    Zaislai: 'zaislai',
    Pinigai: 'pinigai',
    Rubai: 'rubai'
}

let UI = {
    button:        document.getElementById('addButton'),
    nameInput:     document.getElementById('giftName'),
    tableBody:     document.getElementById('tableBody'),
    priceInput:    document.getElementById('giftPrice'),
    categoryInput: document.getElementById('giftCategory'),
};

class Gift {
    constructor(name, price, category) {
        this.price = price;
        this.name = name;
        this.category = category;
    }

    palygintiSuKitaDovana(kitaDovana) {
        if (this.price > kitaDovana.price) {
            console.log(`${this.name} yra brangesne uz ${kitaDovana.name}`);
        } else {
            console.log(`${this.name} nėra brangesne uz ${kitaDovana.name}`); 
        }
    }
}

//let gift1 = new Gift('Lego', 50, GiftCategory.Zaislai);
//let gift2 = new Gift('Kojines', 10, GiftCategory.Rubai);
//
//gift1.palygintiSuKitaDovana(gift2);
//gift2.palygintiSuKitaDovana(gift1);

let gifts = [];

if (localStorage.getItem('gifts')) {
    gifts = JSON.parse(localStorage.getItem('gifts'));
    drawGifts();
}

UI.button.addEventListener('click', () => {
    // Creating gift. Passing arguments from UI
    let gift = new Gift(UI.nameInput.value, Number(UI.priceInput.value), UI.categoryInput.value);

    // Adding gift to array
    gifts.push(gift);
    
    let giftsJson = JSON.stringify(gifts);
    localStorage.setItem('gifts', giftsJson);

    // Drqwing gifts
    drawGifts();

    console.log(gifts);
});

function drawGifts() {
    UI.tableBody.innerHTML = '';
    
    for (let gift of gifts) {
        UI.tableBody.innerHTML += 
        `<tr>
            <td>${gift.name}</td>
            <td>${gift.price}</td>
            <td>${gift.category}<button>Ištrinti</button></td>
        </tr>`;
    }
}

//setInterval(function() {
//    console.log(Math.random());
//}, 100);








