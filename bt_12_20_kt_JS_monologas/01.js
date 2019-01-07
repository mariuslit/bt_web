// JS HTML DOM

let chatBox = document.getElementById('chatBox');
let sendButton = document.getElementById('sendButton');
let input = document.getElementById('input');
let pleasureButton = document.getElementById('pleasureButton');

chatBox.style.backgroundColor = '#f1c40f';
chatBox.innerHTML = 'Hellow World!';

// iškviečia funkciją susietą  su sendButton
sendButton.addEventListener('click', () => {
    console.log('pasupaudėte mygtuka');
    chatBox.innerHTML += '<br>' + input.value;
    input.value = '';

});


pleasureButton.onclick = function () {
    console.log('Hellow!');

    chatBox.innerHTML = '';

    // chatBox.classList.add('shake'); // įterpia klasę į tagą
    chatBox.classList.toggle('shake');// jeigu nėra klasės - įdeda, jeigu yra - išima
};





