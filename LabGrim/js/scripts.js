// Configura o header e o Footer quando a pag carrega de acordo com o tamanho
responsiveHeader();
responsiveFooter();

window.onload = function() {
    // Evento para Responsividade do Header
    window.addEventListener( 'resize', responsiveHeader );

    // Evento para Responsividade do Footer
    window.addEventListener( 'resize', responsiveFooter );

    // Evento para o funcionamento do Menu Sanduiche
    var sandwich = document.querySelector(".sandwich");
    sandwich.addEventListener( 'click', clickSideBar );
    var arrow = document.querySelector(".arrow");
    arrow.addEventListener( 'click', clickSideBar );
}