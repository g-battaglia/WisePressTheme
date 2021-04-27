function toggler(openIconClass, overlayClass, closeIconClass, hideClassJustName) {
  const search = document.querySelector(openIconClass)
  const searchOverlay = document.querySelector(overlayClass)
  const closeOverlay = document.querySelector(closeIconClass)
  search.addEventListener("click", function () {
  
    document.body.classList.add('overflow-hiden')
    searchOverlay.classList.toggle(hideClassJustName);
  })

  closeOverlay.addEventListener("click", function () {
        searchOverlay.style.height = "auto"
        document.body.classList.remove('overflow-hiden')
        searchOverlay.classList.toggle(hideClassJustName);
      }
  )
}

toggler(".navbar-search",
    ".search-overlay",
    ".close-overlay",
    "hide-overlay"
)

toggler(".navbar-toggler",
    ".under-nav",
    ".close-nav-overlay",
    "hide-overlay-nav"
)

function toggleDropdownMenu(togleClass, iconClass, animatedClassName, menuClass, menuHide) {
  const t = document.querySelectorAll(togleClass)
  const i = document.querySelectorAll(iconClass)
  const mc = document.querySelectorAll(menuClass)
  const mh = menuHide
  const animateClassName = animatedClassName

  for (const [ind, val] of t.entries()) {
    val.addEventListener("click", function () {
      i[ind].classList.toggle("navbar-link__rotate");
    })

    val.addEventListener("click", function () {
      mc[ind].classList.toggle(mh);
    })
  }
}

toggleDropdownMenu(".menu-item-has-children > a",
    ".menu-item-has-children > a",
    "navbar-link__rotate",
    ".sub-menu",
    "toggled-on"
)

// Resize fix:

window.addEventListener('resize', function () {
  h = document.documentElement.scrollWidth;
  console.log(h);
  if (document.body.classList.contains('overflow-hiden')) {
    document.body.classList.remove('overflow-hiden');
  }

});


function setTopArrow() {
  const toTop = document.querySelector(".footer-arrow");

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
      toTop.classList.add("active");
    } else {
      toTop.classList.remove("active");
    }
  })
}

setTopArrow();


// Deactive href for has-children anchor:

const parentAnchorElement = document.querySelector('.menu-item-has-children > a');

parentAnchorElement.onclick = () => {
  parentAnchorElement.herf = "";
  return false;
}