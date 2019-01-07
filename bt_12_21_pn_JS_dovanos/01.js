const GiftCategory = {
    Zaislai: 'zaislai',
    Pinigai: 'pingai',
    Rubai: 'rubai'
};

let UI = {
    button:        document.getElementById('addButton'),
    nameInput:     document.getElementById('giftName'),
    tableBody:     document.getElementById('tableBody'),
    priceInput:    document.getElementById('giftPrice'),
    categoryInput: document.getElementById('giftCtegory'),
};


class Gift {

    constructor(name, price, category) {
        this.name = name;
        this.price = price;
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

//>>>>>>>>>>>>>>>>>>>>>>>>>>> start

let gift1 = new Gift('Lego', 50, GiftCategory.Zaislai);
let gift2 = new Gift('Kojinės', 50, GiftCategory.Rubai);

gift1.palygintiSuKitaDovana(gift2);
gift2.palygintiSuKitaDovana(gift1);

let gifts = [];

// imami duomenys iš localStorage ir JSON string verčiamas į objektą ir priskiria masyvui objektą
if (localStorage.getItem('gifts')) {
    gifts = JSON.parse(localStorage.getItem('gifts'));
    drawGifts();
}

// addEventListener funkcij kuri įvykdoma tam tikro įvykio metu
UI.button.addEventListener('click', () => {

    // crieating gift. Passing argiments form UI
    let gift = new Gift(UI.nameInput.value, Number(UI.priceInput.value), UI.categoryInput.value);

    // Adding gift to array
    gifts.push(gift);

    // sukuriamas JSO objektas, kuris gauna gifts objektą (masyvą) ir patalpinamas kompiuterio localStorage atmintyje
    let giftsJson = JSON.stringify(gifts);
    localStorage.setItem('gifts', giftsJson);

    // Drawing gifts
    drawGifts();

    console.log(gifts);
});

function drawGifts() {
    UI.tableBody.innerHTML = ''; // ištriname viska iš tbody (tr)

    for (let gift of gifts) {
        UI.tableBody.innerHTML +=
            `<tr><td>${gift.name}</td><td>${gift.price}</td><td>${gift.category}<button>Ištrinti</button></td><tr>`;
    }
}

// kas sekunde paleidžia naują funkciją
// setInterval(function () {
//     console.log(Math.random());
// }, 1000);


