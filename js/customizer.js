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

	// Header button URL
	wp.customize( 'mention_header_btn_url', function( value ) {
		value.bind( function( to ) {
			$('.headerBtn').attr( 'href', to );
		} );
	});

	// Site title color
	wp.customize( 'mention_title_color', function( value ) {
		value.bind( function( to ) {
			$('.site-title').css( 
			'color', to );
		} );
	});

	// Text before social icons
	wp.customize( 'mention_share_text', function( value ) {
		value.bind( function( to ) {
			$('.connect span').text( to );
		} );
	});

	// Font Icons in footer social icons
	wp.customize( 'mention_share_icon_1', function( value ) {
		value.bind( function( to ) {
			$('.lastfooterSocial.social-icon-1 i').toggleClass( to );
		} );
	});

	// Font Icons in footer social icons
	wp.customize( 'mention_share_icon_2', function( value ) {
		value.bind( function( to ) {
			$('.lastfooterSocial.social-icon-2 i').toggleClass( to );
		} );
	});

	// Font Icons in footer social icons
	wp.customize( 'mention_share_icon_3', function( value ) {
		value.bind( function( to ) {
			$('.lastfooterSocial.social-icon-3 i').toggleClass( to );
		} );
	});



} )( jQuery );
