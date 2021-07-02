let themeBtn = document.getElementById('theme-btn');
let logoL = document.querySelector(".logo-light");
let logoD = document.querySelector(".logo-dark");

if(localStorage.getItem('theme') !== null) {
    document.querySelector('body').dataset.theme = 'dark';
    document.querySelector('body').classList.add('dark');
    themeBtn.textContent = "Светлая тема";
    logoD.classList.add('hidden');
    logoL.classList.remove('hidden');
}

themeBtn.onclick = function() {
    document.querySelector('body').classList.toggle('dark');
    if(document.querySelector('body').classList.contains('dark')) {
        document.querySelector('body').dataset.theme = 'dark';
        themeBtn.textContent = "Светлая тема";
        localStorage.setItem('theme', 'dark');
        logoD.classList.add('hidden');
        logoL.classList.remove('hidden');
    } else {
        document.querySelector('body').dataset.theme = "";
        localStorage.removeItem('theme', 'dark');
        themeBtn.textContent = "Темная тема";
        logoD.classList.remove('hidden');
        logoL.classList.add('hidden');
    }
    
    
}