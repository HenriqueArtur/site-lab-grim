function responsiveHome() {
	var width  = window.innerWidth;
	var height = window.innerHeight;

	adjustVideo( ".bg-video", width, height );
	adjustObjects( width, 478, 760 );
}

function adjustVideo( queryDivVideo, width, height ) {
	var video     = document.querySelector( queryDivVideo );

	if( width > height ) {
		video.style.width  = "100%";
		video.style.height = "unset";
	} else {
		video.style.width  = "unset";
		video.style.height = "100%";
	}
}

function adjustObjects( width, widthToAdjustFloor, widthToAdjustRoof ) {
	var cruz      = document.querySelector( '.cruz' );
	var triangulo = document.querySelector( '.triangulo' );
	var circulo   = document.querySelector( '.circulo' );
	var trema     = document.querySelector( '.trema' );
	var misc      = document.querySelector( '.misc-home' );

	if( width < widthToAdjustRoof && width >= widthToAdjustFloor ) {
		cruz.style.height      = "3rem";
		triangulo.style.height = "2rem";
		circulo.style.height   = "2rem";
		trema.style.height     = "5rem";
		misc.style.height      = "16rem";

	} else if( width < widthToAdjustFloor ) {
		cruz.style.height      = "2.5rem";
		triangulo.style.height = "1.5rem";
		circulo.style.height   = "1.5rem";
		trema.style.height     = "4rem";
		misc.style.height      = "11rem";
		
	} else {
		cruz.style.height      = "4.5rem";
		triangulo.style.height = "3rem";
		circulo.style.height   = "3rem";
		trema.style.height     = "6rem";
		misc.style.height      = "19rem";
	}

}