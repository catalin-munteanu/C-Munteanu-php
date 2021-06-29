document.addEventListener('DOMContentLoaded', function() {

const burgerMenuBtn = document.querySelector('#burger-menu-toggler');
const menuItems = document.querySelectorAll('.menuItems');

function navResponsive() {

    burgerMenuBtn.addEventListener( 'click', function() {
        document.body.classList.toggle('mobile-menu-active');

        });

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('click', function () {
            document.body.classList.remove('mobile-menu-active');
            let currentItem = document.querySelector('.active');
            currentItem.classList.remove('active');
            this.classList.add('active');
        })
    });
}

navResponsive();

} )

let pathname = window.location.pathname;

switch (pathname) {
    case "/index.html":
        document.querySelector("#home").classList.add('active');
    break;
    case "/bio.html":
    document.querySelector("#about").classList.add('active');
    break;
    case "/contacto.html":
        document.querySelector("#projects").classList.add('active');
    break;
    case "/musica.html":
    document.querySelector("#contact").classList.add('active');
    break;
    case "/participaciones.html":
        document.querySelector("#contact").classList.add('active');
        break;
    case "/videos.html":
        document.querySelector("#contact").classList.add('active');
    break;
    case "/vivo.html":
        document.querySelector("#contact").classList.add('active');
    break;        
} 