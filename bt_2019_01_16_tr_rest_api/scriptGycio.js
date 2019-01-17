let button = document.getElementById('button');
let input = document.getElementById('input');
let table = document.getElementById('table');
let loader = document.getElementById('loader');

button.addEventListener('click', () => {
    // Sending request to API
    let request = new XMLHttpRequest();
    
    loader.style.display = 'block';
    
    request.addEventListener('load', (response) => {
        console.log('GOT RESPONSE');
        loader.style.display = 'none';
        
        let breweries = JSON.parse(response.target.responseText);
        
        table.innerHTML = '';
        
        for (let brewery of breweries) {
            let htmlContent = '';
            
            htmlContent += 
            `<tr>
                <td>${brewery.name}</td>
                <td>${brewery.city}</td>
                <td>${brewery.street}</td>
                <td>`;
            
            if (brewery.website_url) {
                htmlContent += `<a href="${brewery.website_url}">Link</a>`;
            }

            htmlContent += `</td></tr>`;
            
            table.innerHTML += htmlContent;
        }
                
        if (breweries.length === 0) {
            table.innerHTML = 
                `<tr>
                    <td colspan="4">No breweries found!</td>
                </tr>`;
        }
    });
    
    request.open('GET', `https://api.openbrewerydb.org/breweries/search?query=${input.value}`);
    request.send();
    console.log('REQUEST SENT');
})