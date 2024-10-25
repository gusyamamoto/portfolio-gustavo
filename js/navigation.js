const sections = document.querySelectorAll("#projects, #about, #contact");

const navLinks = document.querySelectorAll("nav a");

function highlightCurrentSection() {
  let currentSection = "";
  if (scrollY === 0) {
    navLinks.forEach(link => {
      link.classList.remove("clicked");
    });

    history.replaceState(null, null, window.location.pathname);
    return;
  }

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;

    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
      currentSection = section.getAttribute("id");
    }
  });

  navLinks.forEach(link => {
    link.classList.remove("clicked");
    if (currentSection && link.getAttribute("href").includes(currentSection)) {
      link.classList.add("clicked");

      history.replaceState(null, null, `#${currentSection}`);
    }
  });
}

window.addEventListener("scroll", highlightCurrentSection);




document.addEventListener("scroll", function() {
  const scrollToTopArrow = document.getElementById("scrollToTop");

  const scrollThreshold = document.documentElement.scrollHeight * 0.1;

  if (window.scrollY > scrollThreshold) {
      scrollToTopArrow.style.display = "block";
  } else {
      scrollToTopArrow.style.display = "none";
  }
});

