
let themeBt = document.querySelector('button.theme-btn');
let themeLi = document.querySelector('p.theme-btn');
let logoL = document.querySelector(".logo-light");
let logoD = document.querySelector(".logo-dark");

if(localStorage.getItem('theme') !== null) {
    document.querySelector('body').dataset.theme = 'dark';
    document.querySelector('body').classList.add('dark');
        if(themeBt) {
                themeBt.textContent = "Светлая тема";
        }
        if(themeLi) {
            themeLi.textContent = "Светлая тема";
        }
    logoD.classList.add('hidden');
    logoL.classList.remove('hidden');
}


themeLi.addEventListener("click", function() {
    document.querySelector('body').classList.toggle('dark');
    if(document.querySelector('body').classList.contains('dark')) {
        document.querySelector('body').dataset.theme = 'dark';
        themeLi.textContent = "Светлая тема";
        localStorage.setItem('theme', 'dark');
        logoD.classList.add('hidden');
        logoL.classList.remove('hidden');
    } else {
        document.querySelector('body').dataset.theme = "";
        localStorage.removeItem('theme', 'dark');
        themeLi.textContent = "Темная тема";
        logoD.classList.remove('hidden');
        logoL.classList.add('hidden');
    }
}); 
    
themeBt.addEventListener("click", function() {
    document.querySelector('body').classList.toggle('dark');
    if(document.querySelector('body').classList.contains('dark')) {
        document.querySelector('body').dataset.theme = 'dark';
        themeBt.textContent = "Светлая тема";
        localStorage.setItem('theme', 'dark');
        logoD.classList.add('hidden');
        logoL.classList.remove('hidden');
    } else {
        document.querySelector('body').dataset.theme = "";
        localStorage.removeItem('theme', 'dark');
        themeBt.textContent = "Темная тема";
        logoD.classList.remove('hidden');
        logoL.classList.add('hidden');
    }
});
