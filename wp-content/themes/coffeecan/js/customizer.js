/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header background colour
	wp.customize( 'header_background', function( value ) {
		value.bind( function( to ) {
			$( '.site-header, .site-header-basic' ).css( {
				'background-color': to
			} );
		} );
	} );

	wp.customize( 'footer_background', function( value ) {
		value.bind( function( to ) {
			$( '.site-info' ).css( {
				'background-color': to
			} );
		} );
	} );

	wp.customize( 'title_background', function( value ) {
		value.bind( function( to ) {
			$( '.title-bar' ).css( {
				'background-color': to
			} );
		} );
	} );

	wp.customize( 'title_text', function( value ) {
		value.bind( function( to ) {
			$( '.title-text' ).css( {
				'color': to
			} );
		} );
	} );

	wp.customize( 'social-icon', function( value ) {
		value.bind( function( to ) {
			$( '.site-info .social-media-container img' ).css( {
				'max-width': to
			} );
		} );
	} );


} )( jQuery );
