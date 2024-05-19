/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = document.getElementById('menu-button');
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			$(menu).slideUp();
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			$(menu).slideDown();
		}
	};

	// Close small menu when user clicks outside
	document.addEventListener( 'click', function( event ) {

		// Only dismiss the menu if it has been toggled on.
		if ( -1 === container.className.indexOf( 'toggled' ) ) {
			return;
		}

		var isClickInside = container.contains( event.target );
		var isClickInsideButton = button.contains( event.target );
		if ( ! isClickInside && !isClickInsideButton) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			$(menu).slideUp();
		}
	} );

	// Get all the link elements within the menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {
			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function() {
		var touchStartFn,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
}() );



$(document).ready(function() {


	// Setting the "current" link on the nav bar.
	let urlPath = window.location.pathname + $(location).attr('hash');
	$(".nav-item").each(function(){
		if($(this).attr("href") === urlPath){
			$(this).addClass("current");
		}
	})

    // Handling the filter
    $(".category-filter").on("click", function(e) {

        e.preventDefault();
        let category = $(this).data("category")

        if(category){

          // Set opacities and borders.
          $('.small-session-card').filter(`[data-category!="${category}"]`).addClass("filtered");
          $('.small-session-card').filter(`[data-category="${category}"]`).removeClass("filtered");


          // Set the filtered to text.
          $("#sessionFilterDropdown").html(category)

        } else {
          $('.small-session-card').removeClass("filtered");
          $("#sessionFilterDropdown").html("Filter Sessions by Stage ")
        }

    })
});
