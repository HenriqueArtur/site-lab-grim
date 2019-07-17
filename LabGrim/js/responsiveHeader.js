function responsiveHeader() {
    var header = document.querySelector( ".top-bar" );
    var logo = document.getElementById( "my-nav-logo" );
    var logoMobile = document.querySelector( ".logo-mobile" );
    var logoDesktop = document.querySelector( ".logo-desktop" );
    var space = document.getElementById( "space-in-mobile" );
    var navDesktop = document.getElementById( "my-pags-bar" );
    var socialIcons = document.getElementById( "my-social-media-icons" );

    var width = window.innerWidth;

    var cont = 0;

    if ( width <= 800 ) {
        space.style.display = "flex";
        socialIcons.style.display = "none";
        navDesktop.style.display = "none";
        header.style.paddingBottom = "1.6rem";

        space.className = "space-in-mobile col-sm-2 col-2";
        socialIcons.className = "";
        logo.className = "nav-logo col-md-10 col-10 text-right";

        logoDesktop.style.display = "none";
        logoMobile.style.display = "block";

    } else {
        space.style.display = "none";
        navDesktop.style.display = "block";
        socialIcons.style.display = "block";
        header.style.paddingBottom = "0rem";

        space.className = "";
        socialIcons.className = "social-media-icons col-2 text-center";
        logo.className = "nav-logo col-md-2 col-2 text-center";

        logoDesktop.style.display = "block";
        logoMobile.style.display = "none";

    }
}