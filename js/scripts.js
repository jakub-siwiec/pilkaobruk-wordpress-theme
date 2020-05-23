var toggleopen = 0;


jQuery(".toggle-bar-icon").click(function(){
  if (jQuery(".navbar-item").css("display") == "none") {
    jQuery(".navbar-item").css("display", "block");
    jQuery(".toggle-bar").css("margin-bottom", "10px");
    jQuery(".navbar-logo-space").css("margin-bottom", "138px");
    jQuery(".navbar-icon-section").css("display", "block");
    toggleopen = 1;
  }
  else {
    jQuery(".navbar-item").css("display", "none");
    jQuery(".toggle-bar").css("margin-bottom", "0px");
    jQuery(".navbar-logo-space").css("margin-bottom", "0px");
    jQuery(".navbar-icon-section").css("display", "none");
    toggleopen = 0;
  }
});

jQuery(window).resize(function() {
  if(jQuery(".toggle-bar-icon").css("display") == "none") {
    jQuery(".navbar-item").css("display", "block");
    jQuery(".toggle-bar").css("margin-bottom", "0px");
    jQuery(".navbar-logo-space").css("margin-bottom", "0px");
    jQuery(".navbar-icon-section").css("display", "block");
  }
  else {
    if (toggleopen == 1) {
      jQuery(".navbar-item").css("display", "block");
      jQuery(".toggle-bar").css("margin-bottom", "10px");
      jQuery(".navbar-logo-space").css("margin-bottom", "138px");
      jQuery(".navbar-icon-section").css("display", "block");
    } else {
      jQuery(".navbar-item").css("display", "none");
      jQuery(".toggle-bar").css("margin-bottom", "0px");
      jQuery(".navbar-logo-space").css("margin-bottom", "0px");
      jQuery(".navbar-icon-section").css("display", "none");
    }
  }

});
