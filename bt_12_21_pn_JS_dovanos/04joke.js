// Chuck Norris'o juokeliai

const urlDefault = 'http://api.icndb.com/jokes/$jokenumber'; // visi juokeliai
const urlStart = 'http://api.icndb.com/jokes/';
const urlRandom = 'random/';

let UI = {
    selectCtegory: document.getElementById('selectCtegory'),
    selectNumberOfJoke: document.getElementById('selectNumberOfJoke'),
    selectHowManyJokesShow: document.getElementById('selectHowManyJokesShow'),
    isCheckedRandomCheckBox: document.getElementById('randomCheckBox'),
    jokeList: document.getElementById('jokeList'),
    action: document.getElementById('action'),
};

// surenkama pirmin iformacija iš tinklapio
let urlCategories = [];
let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {

    if (this.readyState === 4 && this.status === 200) {

        let response = JSON.parse(xhttp.responseText);
        let value = response.value;

        for (let i = 0; i < value.length; i++) {

            UI.selectNumberOfJoke.innerHTML += `<option>${value[i].id}</option>`;

            if (value[i].categories.length > 0) {

                for (let j = 0; j < value[i].categories.length; j++) {

                    if (!urlCategories.includes(value[i].categories[j])) {

                        urlCategories.push(value[i].categories[j]);
                        UI.selectCtegory.innerHTML += `<option>${value[i].categories[j]}</option>`;
                    }
                }
            }
        }
    }
};

// xhttp.open("GET", '03chucknorris.json');
xhttp.open("GET", urlDefault);
xhttp.send();


// button ACTION >>
UI.action.addEventListener('click', () => {
    let output = '';
    let urlString = urlDefault;

    if (UI.isCheckedRandomCheckBox.checked) {
        urlString = urlStart + urlRandom + UI.selectHowManyJokesShow.value;
    }
    if (UI.selectNumberOfJoke.value > 0) {
        urlString = urlStart + UI.selectNumberOfJoke.value;
    }
    if (UI.selectCtegory.value.length > 0) {
        urlString = 'http://api.icndb.com/jokes/random?exclude=[nerdy,explicit]';
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {

            let response = JSON.parse(xhttp.responseText);
            let value = response.value;
            let sk = 0;

            if (UI.selectNumberOfJoke.value > 0) {

                urlString = urlStart + UI.selectNumberOfJoke.value;
                output += `<li>`;
                output += `<p class="left1"></p>`;
                output += `<p class="left2">(${value.id})</p>`;
                output += `<p class="left3">${value.joke}</p>`;
                output += `</li>`;
                // console.log('inside ' + urlString.length);
                // console.log('inside ' + value);
            }

            for (let i = 0; i < value.length; i++) {

                output += `<li>`;
                output += `<p class="left1">${++sk}.</p>`;
                output += `<p class="left2">(${value[i].id})</p>`;
                output += `<p class="left3">${value[i].joke}</p>`;
                output += `</li>`
            }

            UI.jokeList.innerHTML = output;
        }
    };
    xhttp.open("GET", urlString);
    xhttp.send();
});












