// Configura a pag quando carrega
responsiveHeader();

window.onload = function() {
    // Evento para Responsividade do site
    window.addEventListener( 'resize', responsiveHeader );

    // Evento para o funcionamento do Menu Sanduiche
    var icon = document.querySelector(".icon");
    icon.addEventListener( 'click', clickNavBar );
}