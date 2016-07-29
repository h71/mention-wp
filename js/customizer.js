/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Site title text color
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to
				} );
			}
		} );
	} );
	// Header text
	wp.customize( 'mention_header_text', function( value ) {
		value.bind( function( to ) {
			$('.header-text').text( to );
		} );
	});

	// Header button text
	wp.customize( 'mention_header_btn_text', function( value ) {
		value.bind( function( to ) {
			$('.headerBtn').text( to );
		} );
	});

	// Site title color
	wp.customize( 'mention_title_color', function( value ) {
		value.bind( function( to ) {
			$('.site-title').css( 
			'color', to );
		} );
	});



} )( jQuery );
