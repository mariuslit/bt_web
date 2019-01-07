let cars = [{a: "ok", b: 55}, {s: "blogai", b: 3}];
localStorage.setItem('cars', JSON.stringify(cars));


let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
        // Typical action to be performed when the document is ready:
        let response = JSON.parse(xhttp.responseText);
        let value = response.value;
        let output = '';

        let categories2 = ["explicit"];

        // todo gauti visų kategorijų sąrašą: categories2 = ['explicit', 'bele kokia', 'nerdy']
        for (let item of value) {
            output += `<li>${item.id}: ${item.joke}</li>`

            for (let i = 0; i < item.categories.length; i++) {

                if (item.categories.length > 0 && !categories2.includes(item.categories[i])) {
                    categories2.join(item.categories);
                    console.log(i+' '+categories2);
                }
            }
        }

        console.log('how much different categories is there?');
        console.log(categories2.length + ' ' + categories2);

        // let sk = 0;
        // for (let i = 0; i < value.length; i++) {
        //     if (value[i].categories === 'explicit') {
        //
        //     }
        //     output += `<li>${++sk}. ${value[i].id}: ${value[i].categories}</li>`
        // }

        document.getElementById('demo').innerHTML = output;

        // document.getElementById("demo").innerHTML = response.people;
    }
};
xhttp.open("GET", 'http://api.icndb.com/jokes/random/10');
// xhttp.open("GET", "03chucknorris.json", true);
// xhttp.open("GET", "03people.json", true);
xhttp.send();
















