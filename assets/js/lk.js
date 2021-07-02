let hiddenItem = document.querySelector('#traffic .hidden');
let form = document.querySelector('#traffic form');
let showTrafficBtn = document.querySelector('#traffic form button');
let select = document.querySelector('#traffic form select');

select.onchange = function() {
    form.submit();
}
showTrafficBtn.onclick = function(e) {
    e.preventDefault();
    hiddenItem.classList.toggle('shown'); 
}

let changeUserDataBtn = document.getElementById('change-user-data');
let dataInputs = changeUserDataBtn.closest('form').querySelectorAll('input');
let buttons = changeUserDataBtn.closest('form').querySelector('figure.buttons');
let confFieldset = document.querySelector('#personal-data .conf-fieldset');
let saveBtn = document.querySelector('#save-user-data');
let canselBtn = document.querySelector('#cansel-user-data');

changeUserDataBtn.onclick = function(e) {
    e.preventDefault();
    for(let dinput of dataInputs) {
        dinput.removeAttribute('readonly');
        buttons.classList.remove('hidden'); 
        changeUserDataBtn.classList.add('hidden');
        
    }
    confFieldset.classList.remove('hidden');
}
canselBtn.onclick = function(e) {
    e.preventDefault();
    document.location.reload();
}