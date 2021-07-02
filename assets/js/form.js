let selectForm = document.querySelector("#tariff-cat");
let selectTariff = document.querySelector("#cat");
let filters = document.querySelectorAll(".filter-for-tariffs a");

if(selectForm) {
    for(let filt of filters) {
        filt.onclick= function() {
            selectTariff.value = filt.dataset.filter; 
            selectForm.submit();
        }
    }
    selectTariff.onchange = function() {
        selectForm.submit();
    }
}



let regionBtn = document.querySelector('#reg-parent span');
let closeBtn = document.querySelector('#our-regions svg');
let regionList = document.querySelector('#our-regions');
let regions = regionList.querySelectorAll('li');

regionBtn.onclick = function() {
    regionList.classList.toggle('shown');
}
closeBtn.onclick = function() {
    regionList.classList.remove('shown');
}
for(let region of regions) {
    region.onclick = function() {
        regionBtn.textContent = region.textContent;
        regionList.classList.remove('shown');
    }
}


let typeBtns = document.querySelectorAll('.facetype li');
let typeInput = document.querySelector('.facetype input');

for(let btn of typeBtns) {
    btn.onclick = function() {
        typeInput.value = btn.textContent;
        typeInput.closest("form").submit();
    }
}


let burger = document.getElementById('burger');
let items = document.querySelector('.burger-links');
burger.onclick = function() {
    
    items.classList.toggle('shown');
    burger.classList.toggle('shown');
}




