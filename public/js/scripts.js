
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

};

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    function sololetras(e) {
        tecla = (document.all) ? e.keyCode : e.which; 
        if (tecla==8) return true; // backspace
            if (tecla==32) return true; // espacio
            if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
            if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
            if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
     
            patron = /^[a-zA-z\s\ñ\Ñ]+$/; //patron
     
            te = String.fromCharCode(tecla); 
            return patron.test(te); // prueba de patron
    }
};