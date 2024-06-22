function updateScroll() {
  var scroll = jQuery(window).scrollTop();
  //>=, not <=
  if (scroll >= 100) {
    //clearHeader, not clearheader - caps H
    jQuery(".cud-header").addClass("cud-scroll");
  }
  else {
    jQuery(".cud-header").removeClass("cud-scroll");
  }
} //missing );
jQuery(function () {
  jQuery(window).scroll(updateScroll);
  updateScroll();
});

//After login password
jQuery(".cud-trigger").click(function () {
  jQuery(".cud-navigation-drawer-mainMenu,.cud-overly").addClass("cud-open");
  jQuery("body").addClass("cud-menu-open");
});
//close drawer
jQuery(document).on('click', ".cud-overly,.cud-navigation-drawer-close", function (e) {
  setTimeout(function () {
    jQuery(".cud-navigation-drawer-mainMenu,.cud-overly").removeClass("cud-open");
  }, 50);
  setTimeout(function () {
    jQuery("body").removeClass("cud-menu-open");
  }, 400);
});

//menu transfer in responsive mode after 991px
jQuery(document).ready(function () {
  jQuery(window).resize(function () {
    if (Modernizr.mq('(max-width: 1199.98px)')) {
      jQuery(".cud-header .cud-nav").detach().appendTo(".cud-navigation-drawer-mainMenu .cud-navigation-drawer-body");
    } else {
      jQuery(".cud-navigation-drawer-mainMenu .cud-navigation-drawer-body .cud-nav").detach().insertAfter(".cud-header .cud-logo");
    }
  }).resize();
});

//light dark mode
(() => {
  'use strict'
  const storedTheme = localStorage.getItem('theme')
  const getPreferredTheme = () => {
    if (storedTheme) {
      return storedTheme
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }
  const setTheme = function (theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }
  setTheme(getPreferredTheme())
  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')
    if (!themeSwitcher) {
      return
    }
    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (storedTheme !== 'light' || storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          localStorage.setItem('theme', theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()
//end light dark mode
//cursor effects
window.addEventListener('mousemove', (event) => {
  // console.log(event);
  let s = document.querySelector(".cursor-inner"),
    l = document.querySelector(".cursor-outer");
  s && l && (l.style.transform = "translate(".concat(event.clientX, "px, ").concat(event.clientY, "px)"), s.style.transform = "translate(".concat(event.clientX, "px, ").concat(event.clientY, "px)"))
})
let s = () => {
  let e = document.querySelector(".cursor-inner"),
    s = document.querySelector(".cursor-outer");
  e && s && (e.classList.add("cursor-hover"), s.classList.add("cursor-hover"))
},
  l = e => {
    let s = document.querySelector(".cursor-inner"),
      l = document.querySelector(".cursor-outer");
    s && l && (e.target.closest(".cursor-pointer") || (s.classList.remove("cursor-hover"), l.classList.remove("cursor-hover")))
  };
document.querySelectorAll("button, a, .cursor-pointer").forEach(e => {
  e.addEventListener("mouseenter", s), e.addEventListener("mouseleave", l)
})
document.querySelectorAll("button, a, .cursor-pointer").forEach(e => {
  e.removeEventListener("mouseenter", s), e.removeEventListener("mouseleave", l)
})
//end cursor effect
//aos
AOS.init({
  easing: 'ease-out-back',
  once: true,
});
//end aos
var offset = 12;
jQuery(document).on('click', '.load-more-posts', function (e) {
  jQuery('.load-more-posts').prop('disabled','disabled');
  var cat_id = document.getElementById('cat_id').value;
  var all_post_count = document.getElementById('all_post_count').value;
  all_post_count -= offset;
  jQuery.ajax({
    url: customAjax.ajaxurl,
    type: 'post',
	async: false,  
    data: { action: 'get_more_posts', cat_id: cat_id, offset: offset },
    beforeSend: function () {
	  jQuery('.load-more-posts').prop('disabled', false);
      jQuery(".button_title").addClass("d-none");
      jQuery(".loding_class").removeClass("d-none");
    },
    success: function (rdata) {
      if (rdata != null) {
        jQuery('.set_more_posts').append(rdata);
      }
      offset += 4;
    },
    complete: function () {
	  jQuery('.load-more-posts').prop('disabled',false);
      jQuery(".loding_class").addClass("d-none");
      jQuery(".button_title").removeClass("d-none");
      if (all_post_count <= 4) {
        jQuery(".button_title").html('No more Shots');
      }
    },
    error: function () {

    },
  });
})