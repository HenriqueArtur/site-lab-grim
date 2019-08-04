function responsiveHome() {
	var width  = window.innerWidth;
	var height = window.innerHeight;

	adjustVideo( ".bg-video", width, height );
}

function adjustVideo( queryDivVideo, width, height ) {
	var video     = document.querySelector( queryDivVideo );

	if( width*0.625 > height ) {
		video.style.width  = "100%";
		video.style.height = "unset";
	} else {
		video.style.width  = "unset";
		video.style.height = "100%";
	}
}