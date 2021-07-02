
let selectServ = document.getElementById("sc");
let infoInput = document.getElementById("desc");
let spanDesc = document.getElementById("restr-val");
let restrType = document.getElementById('restriction');
let number = 0;
selectServ.addEventListener("change", function() {
    spanDesc.textContent = selectServ.children[selectServ.selectedIndex].dataset.restrValue;
    restrType.textContent = selectServ.children[selectServ.selectedIndex].dataset.restriction;
    
});

let showBtn = document.getElementById("show-all");
let hidden1 = document.querySelectorAll(".hidden1");
let readyBtn = document.getElementById("ready");
showBtn.addEventListener("click", function(e) {
    e.preventDefault();
    for(let hiddenitem of hidden1) {
        hiddenitem.classList.remove("hidden");
    }
    showBtn.classList.add("hidden");
});

let template = document.querySelector('#new-tariff-template').content;
let element = template.querySelector('p');
let par = document.querySelector("#your-tariff");
let addElBtn = document.querySelector("#add-serv");
let saveElBtn = document.querySelector("#save-changes");
let outputCost = document.getElementById('output');
let amount = 0;

function setElAttr(el, sum) {
    el.value = selectServ.value + " " + infoInput.value + " " + spanDesc.textContent;
    el.dataset.restriction = restrType.textContent;
    el.dataset.restrValue = spanDesc.textContent;
    el.dataset.service = selectServ.value;
    el.dataset.number = infoInput.value;
    el.dataset.cost = sum;

}
function godefault() {
    infoInput.value = "";
    spanDesc.textContent = "";
    restrType.textContent = "Условия";
    selectServ.selectedIndex = "";
}

addElBtn.onclick = function(e) {
    e.preventDefault();
    infoInput.value = infoInput.value.replace( /\s/g, "");
    if(infoInput.value && selectServ.selectedIndex) {
        let newElement = element.cloneNode(true);
        setElAttr(newElement.children[0], (Number(selectServ.children[selectServ.selectedIndex].dataset.cost) + 0.1 * Number(infoInput.value)));
        amount += Number(newElement.children[0].dataset.cost);
        outputCost.value = amount + " ₽ / мес" ;
        number++;
        newElement.children[0].name = "service-des" + number;
        par.appendChild(newElement);
        outputCost.classList.remove("hidden");
        readyBtn.classList.remove("hidden");
        godefault();
        let editBtns = par.querySelectorAll('.edit');
        for(let edbtn of editBtns) {
            edbtn.onclick = function(e) {
                e.preventDefault();
                saveElBtn.classList.remove("hidden");
                addElBtn.classList.add("hidden");
                restrType.textContent = this.parentNode.children[0].dataset.restriction;
                selectServ.value = this.parentNode.children[0].dataset.service;
                infoInput.value = this.parentNode.children[0].dataset.number;
                spanDesc.textContent = this.parentNode.children[0].dataset.restrValue;
                amount -= Number(this.parentNode.children[0].dataset.cost);
                outputCost.value = amount + " ₽ / мес" ;
                saveElBtn.onclick = function(e) {
                    e.preventDefault();
                    infoInput.value = infoInput.value.replace( /\s/g, "");
                    if(infoInput.value && selectServ.selectedIndex) {
                        setElAttr(edbtn.parentNode.children[0], (Number(selectServ.children[selectServ.selectedIndex].dataset.cost) + 0.1 * Number(infoInput.value)));
                        amount += Number(edbtn.parentNode.children[0].dataset.cost);
                        outputCost.value = amount + " ₽ / мес" ;
                        saveElBtn.classList.add("hidden");
                        addElBtn.classList.remove("hidden");
                        godefault();
                    }
                }
            }
        }
        let delBtns = par.querySelectorAll('.del');
        for(let dlbt of delBtns) {
            dlbt.onclick = function(e) {
                e.preventDefault();
                amount -= Number(dlbt.parentNode.children[0].dataset.cost);
                outputCost.value = amount + " ₽ / мес" ;
                this.parentNode.remove();
                if(!par.querySelector('p')) {
                    readyBtn.classList.add("hidden");
                    outputCost.classList.add("hidden");
                }
            }
        }
    }
   
}