function responsiveFooter() {
	var width = window.innerWidth;
    var height = window.innerHeight;

	var img = document.querySelectorAll( '.lg-orgs-img' );
	var divImgs = document.querySelector( '.lg-orgs' );
	var text = document.querySelector( '.lg-address' );

	changeImgSize( img, width, 768, 1200 );
	changeImgMargin( img, width, 400, 992, 1200 );
	changeImgPosition( divImgs, width, 992 );

	changeTextSize( text, width, 374, 992 );
	changeTextPosition( text, width, 992 );
}


// Img Functions
function changeImgSize( imgClass, windowCurrentSize, medSize, maxSize ) {
	if( windowCurrentSize >= maxSize ) {
		imgClass.forEach( function( element, index ) {imgClass[index].style.maxHeight = "3.5rem"} );

	} else if( windowCurrentSize < maxSize && windowCurrentSize >= medSize ) {
		imgClass.forEach( function( element, index ) {imgClass[index].style.maxHeight = "3.3rem"} );

	} else {
		imgClass.forEach( function( element, index ) {imgClass[index].style.maxHeight = "1.7rem"} );
	}
}

function changeImgMargin( imgClass, windowCurrentSize, medSize, maxSize ) {
	if( windowCurrentSize >= maxSize ) {
		imgClass.forEach( function( element, index ) {imgClass[index].style.margin = "0rem 1.6rem 0rem 0rem"} );

	} else if( windowCurrentSize < maxSize && windowCurrentSize >= medSize  ) {
		imgClass.forEach( function( element, index ) {imgClass[index].style.margin = "1rem 1.6rem 0rem 1.6rem"} );

	} else {
		imgClass.forEach( function( element, index ) {imgClass[index].style.margin = "1rem 1rem 0rem 1rem"} );
	}
}

function changeImgPosition( divImgsClass, windowCurrentSize, sizeToChange ) {
	if( windowCurrentSize < sizeToChange ) {
		divImgsClass.classList.remove( 'text-right' );
		divImgsClass.classList.add( 'text-center' );

	} else {
		divImgsClass.classList.remove( 'text-center' );
		divImgsClass.classList.add( 'text-right' );
	}
}


// Text Functions
function changeTextSize( textClass, windowCurrentSize, medSize, maxSize ) {
	if( windowCurrentSize >= maxSize ) {
		textClass.style.fontSize = "1.3rem";

	} else if( windowCurrentSize < maxSize && windowCurrentSize >= medSize ) {
		textClass.style.fontSize = "1.1rem";

	} else {
		textClass.style.fontSize = "1rem";
	}
}

function changeTextPosition( textClass, windowCurrentSize, sizeToChange ) {
	if( windowCurrentSize < sizeToChange ) {
		textClass.classList.remove( 'text-left' );
		textClass.classList.add( 'text-center' );

	} else {
		textClass.classList.remove( 'text-center' );
		textClass.classList.add( 'text-left' );
	}
}