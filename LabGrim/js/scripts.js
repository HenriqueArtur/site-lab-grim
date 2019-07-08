// Configura o header quando a pag carrega de acordo com o tamanho
responsiveHeader();

window.onload = function() {
    // Evento para Responsividade do Header
    window.addEventListener( 'resize', responsiveHeader );

    // Evento para o funcionamento do Menu Sanduiche
    var sandwich = document.querySelector(".sandwich");
    sandwich.addEventListener( 'click', clickSideBar );
    var arrow = document.querySelector(".arrow");
    arrow.addEventListener( 'click', clickSideBar );
}