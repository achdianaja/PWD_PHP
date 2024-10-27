let isDark = localStorage.getItem('isDark') === 'true';

function setMode() {
    let body = document.body;
    let text = document.getElementById('text');
    let textColor = document.getElementsByClassName("text-color");
    let card = document.querySelectorAll(".card");
    let header = document.getElementById("header");
    let navbar = document.getElementById('navbar');
    let footer = document.getElementById('footer');
    let activeLink = document.querySelector('.menu-item a.active');

    if (isDark) {
        localStorage.setItem('color', '#fff');
        localStorage.setItem('dark', '#070F2B');
        localStorage.setItem('navbar', '#1B1A55');
        localStorage.setItem('footer', '#1B1A54');
        localStorage.setItem('activeColor', '#AA77FF');
        localStorage.setItem('card', '#535C91');

        if (header) header.style.background = localStorage.getItem('dark');
        card.forEach((e) => e.style.backgroundColor = localStorage.getItem('card'));
        navbar.style.background = localStorage.getItem('navbar');
        footer.style.background = localStorage.getItem('footer');
        body.style.background = localStorage.getItem('dark');
        body.style.color = localStorage.getItem('color');
        text.innerHTML = "light";

        for (let i = 0; i < textColor.length; i++) {
            textColor[i].style.color = "#EBD3F8";
        }

        if (activeLink) {
            activeLink.style.color = localStorage.getItem('activeColor');
        }
    } else {
        localStorage.setItem('footer', 'azure');
        localStorage.setItem('color', '#000');
        localStorage.setItem('white', '#fff');
        localStorage.setItem('navbar', 'azure');

        footer.style.background = localStorage.getItem('footer');
        if (header) header.style.background = localStorage.getItem('white');
        card.forEach((e) => e.style.backgroundColor = localStorage.getItem('white'));
        navbar.style.background = localStorage.getItem('navbar');
        body.style.background = localStorage.getItem('white');
        body.style.color = localStorage.getItem('color');
        text.innerHTML = "dark";

        for (let i = 0; i < textColor.length; i++) {
            textColor[i].style.color = "#fff";
        }

        if (activeLink) {
            activeLink.style.color = localStorage.getItem('activeColor');
        }
    }
}

setMode(isDark);

function mode() {
    isDark = !isDark;
    localStorage.setItem('isDark', isDark);
    setMode(isDark);
}