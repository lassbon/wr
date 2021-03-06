(function (a) {
  a(window).on("load", function () {
    a(".loader").fadeOut();
    a("#preloader").delay(350).fadeOut("slow");
    // scroll reveal header navbar
    window.sr = ScrollReveal({
      reset: true
    });
    sr.reveal('.fixed-top', {
      origin: 'top',
      duration: 500,
      distance: '20px',
      viewOffset: {
        top: 0,
        right: 0,
        bottom: 500,
        left: 0
      }
    });
    // show welcome modal for chat page
    a("#welcomeModal").modal("show");
    // randomize bird entry point
    var top = Math.floor(Math.random() * 80);
    console.log(top);
  /**  a(".bird-container").css("--enter-top", top + "%");
    setInterval(function () { // again every 15 seconds
      var top = Math.floor(Math.random() * 80);
      console.log(a(".bird-container").is(':hover'));
      if (!a(".bird-container").is(':hover')) { // bird is not being hovered on
        a(".bird-container").css("--enter-top", top + "%");
      }      
    }, 15000) **/
	
	 a(".bird-container").css("--enter-top", top + "%");
    setInterval(function () { // again every 15 seconds
      var top = Math.floor(Math.random() * 80);
      if (!a(".bird-container").is(':hover')) { // bird is not being hovered on
      if (a(".bird-container").length && !a(".bird-container").is(':hover')) { // bird is not being hovered on
        a(".bird-container").css("--enter-top", top + "%");
      }      
    }, 15000)

  });
  // search bar
  a("#find").keypress(function (e) {
    if (e.which == 13) {
      e.preventDefault();
      var value = a(this).val();
      if (value.trim().length > 0) {
        window.location.href = "chat.php";
        // $(location).attr('href',"https://workraven-launch.herokuapp.com/chat");
        // window.location.replace("https://workraven-launch.herokuapp.com/chat");
      }
    }
  });
  // search button
  a("#searchButton").click(function (e) {
    var value = a("#find").val();
    if (value.trim().length > 0) {
      e.preventDefault();
      window.location.href = "chat.php";
      // $(location).attr('href',"https://workraven-launch.herokuapp.com/chat");
      // window.location.replace("https://workraven-launch.herokuapp.com/chat");
    }
  });
  a("#toggle-btn").on("click", function (b) {
    b.preventDefault();
    a(this).toggleClass("active");
    a(".side-navbar").toggleClass("shrinked");
    a(".content-inner").toggleClass("active");
    if (a(window).outerWidth() > 1183) {
      if (a("#toggle-btn").hasClass("active")) {
        a(".navbar-header .brand-small").hide();
        a(".navbar-header .brand-big").show()
      } else {
        a(".navbar-header .brand-small").show();
        a(".navbar-header .brand-big").hide()
      }
    }
    if (a(window).outerWidth() < 1183) {
      a(".navbar-header .brand-small").show()
    }
  });
  a(function () {
    a(".side-navbar li a").click(function (b) {
      a(".collapse").collapse("hide")
    })
  });
  a(window).resize(function () {
    var b = a(this).height() - a(".header").height() + a(".main-footer").height();
    a(".d-scroll").height(b)
  });
  a(window).resize();
  a(window).resize(function () {
    a(".auto-scroll").height(a(window).height() - 130)
  });
  a(window).trigger("resize");
  a(function () {
    a(window).scroll(function () {
      if (a(this).scrollTop() > 350) {
        a(".go-top").fadeIn(100)
      } else {
        a(".go-top").fadeOut(200)
      }
    });
    a(".go-top").click(function (b) {
      b.preventDefault();
      a("html, body").animate({
        scrollTop: 0
      }, 800)
    })
  });
  a(".checkbox").click(function () {
    a(this).toggleClass("is-checked")
  });
  a("#check-all").change(function () {
    a("input:checkbox").prop("checked", a(this).prop("checked"))
  });
  a("a.remove").on("click", function (b) {
    b.preventDefault();
    a(this).parents(".col-remove").fadeOut(500)
  });
  a(".sidebar-scroll").niceScroll({
    cursorcolor: "transparent",
    cursorborder: "transparent",
    cursoropacitymax: 0,
    boxzoom: false,
    autohidemode: "hidden",
    cursorfixedheight: 80
  });
  a(".widget-scroll").niceScroll({
    railpadding: {
      top: 0,
      right: 3,
      left: 0,
      bottom: 0
    },
    scrollspeed: 100,
    zindex: "auto",
    autohidemode: "leave",
    cursorwidth: "4px",
    cursorcolor: "rgba(52, 40, 104, 0.1)",
    cursorborder: "rgba(52, 40, 104, 0.1)"
  });
  a(".table-scroll").niceScroll({
    railpadding: {
      top: 0,
      right: 0,
      left: 0,
      bottom: 0
    },
    scrollspeed: 100,
    zindex: "auto",
    autohidemode: "leave",
    cursorwidth: "4px",
    cursorcolor: "rgba(52, 40, 104, 0.1)",
    cursorborder: "rgba(52, 40, 104, 0.1)"
  });
  a(".offcanvas-scroll").niceScroll({
    railpadding: {
      top: 0,
      right: 2,
      left: 0,
      bottom: 0
    },
    scrollspeed: 100,
    zindex: "auto",
    hidecursordelay: 800,
    cursorwidth: "3px",
    cursorcolor: "rgba(52, 40, 104, 0.1)",
    cursorborder: "rgba(52, 40, 104, 0.1)",
    preservenativescrolling: true,
    boxzoom: false
  });
  a("#search").on("click", function (b) {
    b.preventDefault();
    a(".search-box").slideDown()
  });
  a(".dismiss").on("click", function () {
    a(".search-box").slideUp()
  });
  a(".dropdown").on("show.bs.dropdown", function (b) {
    a(this).find(".dropdown-menu").first().stop(true, true).slideDown(300)
  });
  a(".dropdown").on("hide.bs.dropdown", function (b) {
    a(this).find(".dropdown-menu").first().stop(true, true).slideUp(300)
  });
  a(".widget-options > .dropdown, .actions > .dropdown, .quick-actions > .dropdown").hover(function () {
    a(this).find(".dropdown-menu").stop(true, true).delay(100).fadeIn(350)
  }, function () {
    a(this).find(".dropdown-menu").stop(true, true).delay(100).fadeOut(350)
  });
  a(function () {
    a(".open-sidebar").on("click", function (b) {
      b.preventDefault();
      a(".off-sidebar").addClass("is-visible")
    });
    a(".off-sidebar").on("click", function (b) {
      if (a(b.target).is(".off-sidebar") || a(b.target).is(".off-sidebar-close")) {
        a(".off-sidebar").removeClass("is-visible");
        b.preventDefault()
      }
    })
  });
  a(function () {
    a("#delay-modal").on("show.bs.modal", function () {
      var b = a(this);
      clearTimeout(b.data("hideInterval"));
      b.data("hideInterval", setTimeout(function () {
        b.modal("hide")
      }, 2500))
    })
  })
})(jQuery);