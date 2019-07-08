
function clickNavBar() {    
    var navClass = document.getElementById( "my-pags-bar-mobile" );
    var sandwichClass = document.querySelector( ".icon" );
    var rectClass = document.querySelector( ".rect" );

    if ( navClass.className === "pags-bar-mobile" ) {
        navClass.classList.add( 'responsive' );
        sandwichClass.classList.add( 'responsiveSandwich' );
        rectClass.classList.add( 'responsiveSandwichRect' );
    } else {
        navClass.classList.remove( 'responsive' );
        sandwichClass.classList.remove( 'responsiveSandwich' );
        rectClass.classList.remove( 'responsiveSandwichRect' );
    }
}