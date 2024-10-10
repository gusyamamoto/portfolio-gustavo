/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
// ( function() {
// 	const siteNavigation = document.getElementById( 'site-navigation' );

// 	// Return early if the navigation doesn't exist.
// 	if ( ! siteNavigation ) {
// 		return;
// 	}

// 	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

// 	// Return early if the button doesn't exist.
// 	if ( 'undefined' === typeof button ) {
// 		return;
// 	}

// 	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

// 	// Hide menu toggle button if menu is empty and return early.
// 	if ( 'undefined' === typeof menu ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	if ( ! menu.classList.contains( 'nav-menu' ) ) {
// 		menu.classList.add( 'nav-menu' );
// 	}

// 	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
// 	button.addEventListener( 'click', function() {
// 		siteNavigation.classList.toggle( 'toggled' );

// 		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
// 			button.setAttribute( 'aria-expanded', 'false' );
// 		} else {
// 			button.setAttribute( 'aria-expanded', 'true' );
// 		}
// 	} );

// 	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
// 	document.addEventListener( 'click', function( event ) {
// 		const isClickInside = siteNavigation.contains( event.target );

// 		if ( ! isClickInside ) {
// 			siteNavigation.classList.remove( 'toggled' );
// 			button.setAttribute( 'aria-expanded', 'false' );
// 		}
// 	} );

// 	// Get all the link elements within the menu.
// 	const links = menu.getElementsByTagName( 'a' );

// 	// Get all the link elements with children within the menu.
// 	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

// 	// Toggle focus each time a menu link is focused or blurred.
// 	for ( const link of links ) {
// 		link.addEventListener( 'focus', toggleFocus, true );
// 		link.addEventListener( 'blur', toggleFocus, true );
// 	}

// 	// Toggle focus each time a menu link with children receive a touch event.
// 	for ( const link of linksWithChildren ) {
// 		link.addEventListener( 'touchstart', toggleFocus, false );
// 	}

// 	/**
// 	 * Sets or removes .focus class on an element.
// 	 */
// 	function toggleFocus() {
// 		if ( event.type === 'focus' || event.type === 'blur' ) {
// 			let self = this;
// 			// Move up through the ancestors of the current link until we hit .nav-menu.
// 			while ( ! self.classList.contains( 'nav-menu' ) ) {
// 				// On li elements toggle the class .focus.
// 				if ( 'li' === self.tagName.toLowerCase() ) {
// 					self.classList.toggle( 'focus' );
// 				}
// 				self = self.parentNode;
// 			}
// 		}

// 		if ( event.type === 'touchstart' ) {
// 			const menuItem = this.parentNode;
// 			event.preventDefault();
// 			for ( const link of menuItem.parentNode.children ) {
// 				if ( menuItem !== link ) {
// 					link.classList.remove( 'focus' );
// 				}
// 			}
// 			menuItem.classList.toggle( 'focus' );
// 		}
// 	}
// }() );

// Select all the section elements by their IDs
const sections = document.querySelectorAll("#projects, #about, #contact");

// Select all the nav links
const navLinks = document.querySelectorAll("nav a");

// Function to detect which section is in view
function highlightCurrentSection() {
  let currentSection = "";

  // Check if the user has scrolled to the top of the page
  if (scrollY === 0) {
    // Remove 'clicked' class from all links
    navLinks.forEach(link => {
      link.classList.remove("clicked");
    });
    return; // Exit the function as we're at the top of the page
  }

  // Loop through all sections to find the one in view
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;

    // Only change the highlight if the section is fully reached (at the top of the viewport)
    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
      currentSection = section.getAttribute("id");
    }
  });

  // Remove 'clicked' class from all links and highlight the correct one if currentSection is set
  navLinks.forEach(link => {
    link.classList.remove("clicked");
    if (currentSection && link.getAttribute("href").includes(currentSection)) {
      link.classList.add("clicked");
    }
  });
}

// Add event listener to track scroll position
window.addEventListener("scroll", highlightCurrentSection);

