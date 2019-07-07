window.onload = function() {
    
    responsiveHeader();

    window.addEventListener( 'resize', responsiveHeader );

    function responsiveHeader() {
        var header = document.querySelector( ".top-bar" );
        var navDesktop = document.getElementById( "my-pags-bar" );
        var navMobile = document.getElementById( "my-pags-bar-mobile" );
        var logo = document.getElementById( "my-nav-logo" );
        var socialIcons = document.getElementById( "my-social-media-icons" );
        var space = document.getElementById( "space-in-mobile" );
        var menuMobile = document.querySelector(".mobile-menu" );

        var width = window.innerWidth;
        var height = window.innerHeight;

        var cont = 0;

        if ( width <= 800 ) {
            space.style.display = "flex";
            socialIcons.style.display = "none";
            navDesktop.style.display = "none";
            header.style.paddingBottom = "1.6rem";

            space.className = "col-sm-2 col-2";
            socialIcons.className = "";
            logo.className = "nav-logo col-md-10 col-10 text-right";

        } else {
            space.style.display = "none";
            navDesktop.style.display = "block";
            socialIcons.style.display = "block";
            header.style.paddingBottom = "0rem";

            space.className = "";
            socialIcons.className = "social-media-icons col-2 text-center";
            logo.className = "nav-logo col-md-2 col-2 text-center";
        }
    }

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

    var icon = document.querySelector(".icon");
    icon.addEventListener( 'click', clickNavBar );

}