$(document).ready(function() {
  $(".selecting#star").multiselect({
    inheritClass: true,
    includeSelectAllOption: true,
    buttonWidth: '100%',
    enableHTML: true
  });
  $(".more-option-div").click(function(){
    $(".extra").toggle();
});

/** jQuery UI **/
loadScript(plugin_path + 'jquery/jquery-ui.min.js', function() {
  /** Enable Mobile Touch Slider **/
  loadScript(plugin_path + 'jquery/jquery.ui.touch-punch.min.js', function() {
    /** Slider Script **/
    loadScript(plugin_path + 'form.slidebar/jquery-ui-slider-pips.min.js', function() {

      /** Slider 0
      ******************** **/
      var classes 	= ["Eco", "Luxury", "Super-Luxury"];
      var $slidern 	= jQuery("#slider").slider({
        range: true,
        animate: true,
        min: 0,
        max: 2,
        values: [0,2]
      });

      $slidern.slider("pips", { rest: "label", labels: classes });
      $slidern.slider("float" , { labels: classes });
      // $slidern.on("slidechange", function(e,ui) {
      //   jQuery("#monthOutput").text(months[ui.value]);
      // });

      /** Slider 1
      ******************** **/
      var snork_classes 	= ["Normal", "Good", "Perfect"];
      var $slidern 	= jQuery("#snork-slider").slider({
        range: true,
        animate: true,
        min: 0,
        max: 2,
        values: [0,2]
      });

      $slidern.slider("pips", { rest: "label", labels: snork_classes });
      $slidern.slider("float" , { labels: snork_classes });

      /** Slider 2
      ******************** **/
      var snork_classes 	= ["Normal", "Good", "Perfect"];
      var $slidern 	= jQuery("#beach-slider").slider({
        range: true,
        animate: true,
        min: 0,
        max: 2,
        values: [0,2]
      });

      $slidern.slider("pips", { rest: "label", labels: snork_classes });
      $slidern.slider("float" , { labels: snork_classes });

    });
  });
});

});
