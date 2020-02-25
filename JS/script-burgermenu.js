window.addEventListener('load', function (){

    var burger = document.querySelector('.burger-container'),
       header = document.querySelector('.header'),
       logo = document.getElementById('mobile-logo');
       
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened'); 
        logo.classList.toggle('logo-background')           
    }

    
});



