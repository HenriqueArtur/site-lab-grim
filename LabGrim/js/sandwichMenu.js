
function clickSideBar() {    
    var sideBar = document.querySelector( ".mobile-menu" );
    var sandwichClass = document.querySelector( ".icon" );

    if ( sideBar.className === "mobile-menu" ) {
        sideBar.classList.add( 'responsive' );
        sandwichClass.classList.add( 'responsive' );
    } else {
        sideBar.classList.remove( 'responsive' );
        sandwichClass.classList.remove( 'responsive' );
    }
}