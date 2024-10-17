
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

