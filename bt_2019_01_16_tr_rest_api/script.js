let button = document.getElementById('button');
let input = document.getElementById('input');
let table = document.getElementById('table');

button.addEventListener('click', () => {
    // Sending request to API
    let request = new XMLHttpRequest();

    request.addEventListener('load', (response) => {
        console.log('GOT RESPONSE');

        let breweries = JSON.parse(response.target.responseText);

        table.innerHTML = '';

        for (let brewery of breweries) {
            table.innerHTML +=
                `<tr>
                    <td>${brewery.name}</td>
                    <td>${brewery.city}</td>
                    <td>${brewery.street}</td>
                    <td>`;
                        if(brewery.website){
                            table.innerHTML += `<a href="${brewery.website}">Link</a>
                    </td>
                </tr>`;}

            if (breweries.length === 0) {
                table.innerHTML =
                    `<tr>
                        <td colspan="4">No breweries found!</td>
                    </tr>`;
            }

            console.log(brewery.name);
        }
    });

    request.open('GET', `https://api.openbrewerydb.org/breweries/search?query=${input.value}`);
    request.send();
    console.log('REQUEST SENT');
})