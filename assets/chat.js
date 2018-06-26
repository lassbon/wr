(function (a) {
  a(".friends-scroll").niceScroll({
    railpadding: {
      top: 0,
      right: 0,
      left: 0,
      bottom: 0
    },
    scrollspeed: 100,
    zindex: "999",
    autohidemode: "leave",
    cursorwidth: "0px",
    cursorcolor: "transparent",
    cursorborder: "transparent"
  });
  a(".messages-scroll").niceScroll({
    railpadding: {
      top: 10,
      right: 2,
      left: 0,
      bottom: 0
    },
    scrollspeed: 100,
    zindex: "999",
    autohidemode: "leave",
    cursorwidth: "4px",
    cursorcolor: "rgba(148, 164, 176, 0.3)",
    cursorborder: "rgba(148, 164, 176, 0.3)"
  })
  a("#nyraIsTyping").hide();
  a("#talkToNyra").keypress(function (e) {
    if (e.which == 13) {
      var value = a(this).val();
      if (value.trim().length > 0) {
        a("#chatWindow").append('<div class="row m-0 justify-content-end"><div class="message-card"><div class="card-body receiver-background"><span>' + value + '</span></div><span class="receiver-time"><small>' + new Date().toLocaleTimeString() + '</small></span></div><img src="./assets/profile_picture.png" class="avatar-bubble rounded-circle" alt="..."></div>');
        a("#nyraIsTyping").show();
        setTimeout(function () {
          a("#chatWindow").append('<div class="row mb-5 mt-0 ml-0 mr-0"><img src="./assets/nyra-2.png" style="margin-left:0px; margin-right:15px;" class="avatar-bubble rounded-circle" alt="..."><div class="message-card"><div class="card-body sender-background"><span>This is a response from Nyra</span></div><span class="sender-time"><small>' + new Date().toLocaleTimeString() + '</small></span></div></div>');
          a("#nyraIsTyping").hide();
          a('#mainTab').scrollTo("max", 500);
        }, 500)
        a(this).val('');
      }
    }
  })
  // chat button
  a("#submitChat").click(function (e) {
    var value = a("#talkToNyra").val();
    if (value.trim().length > 0) {
      e.preventDefault();
      a("#chatWindow").append('<div class="row m-0 justify-content-end"><div class="message-card"><div class="card-body receiver-background"><span>' + value + '</span></div><span class="receiver-time"><small>' + new Date().toLocaleTimeString() + '</small></span></div><img src="./assets/profile_picture.png" class="avatar-bubble rounded-circle" alt="..."></div>');
      a("#nyraIsTyping").show();
      setTimeout(function () {
        a("#chatWindow").append('<div class="row mb-5 mt-0 ml-0 mr-0"><img src="./assets/nyra-2.png" style="margin-left:0px; margin-right:15px;" class="avatar-bubble rounded-circle" alt="..."><div class="message-card"><div class="card-body sender-background"><span>This is a response from Nyra</span></div><span class="sender-time"><small>' + new Date().toLocaleTimeString() + '</small></span></div></div>');
        a("#nyraIsTyping").hide();
        a('#mainTab').scrollTo("max", 500);
      }, 500)
      a('#talkToNyra').val('');
    }
  });
  // Disable click on outside the modal
  	$('.modal-popup').modal({
    backdrop: 'static',
    keyboard: false,
	show: true	
});
})(jQuery);