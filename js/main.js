(function() {
  $(function() {
    $("#fullpage").fullpage({
      anchors: ["firstPage", "secondPage", "thirdPage", "fourthPage", "fifthPage", "sixthPage","seventhPage","eigthPage","ninthPage", "tenthPage", "eleventhPage"],
      slidesColor: ["#fff", "#ebebeb", "#fff","#ebebeb", "#fff","#ebebeb", "#fff","#ebebeb","#fff","#ebebeb","#fff"],
     
       slidesNavigation: true,
        slidesNavPosition: 'top',

      scrollingSpeed: 900,
      easing: 'easeInExpo',
      keyboardScrolling: true,
      touchSensitivity: 10,
      continuousVertical: false,
      animateAnchor: true,
      afterLoad: function(anchorLink) {
        if (anchorLink === "firstPage") {
          $(".counter").text("1");
       
        $(".arrow-down").css({'color': '#DD8F00', 'border':'1px solid #DD8F00'});
        }
        if (anchorLink === "secondPage") {
          $(".counter").text("2");
        $(".arrow-down").css({'color': '#333','border':'1px solid #333'});
        }
          if (anchorLink === "thirdPage") {
          $(".counter").text("3");
        $(".arrow-down").css({'color': '#FF7900','border':'1px solid #FF7900'});
        }
          if (anchorLink === "fourthPage") { 
          $(".counter").text("4");
        $(".arrow-down").css({'color': '#FD301B;','border':'1px solid #FD301B;'});
        }
        if (anchorLink === "fifthPage") {
          $(".counter").text("5");
        $(".arrow-down").css({'color': '#3F0B3F','border':'1px solid #3F0B3F'});
        }
      
        if (anchorLink === "sixthPage") {
          $(".counter").text("6");
        $(".arrow-down").css({'color': '#5e5e5e','border':'1px solid #5e5e5e'});
        }
        if (anchorLink === "seventhPage") {
          $(".counter").text("7");
        $(".arrow-down").css({'color': '#BA3126','border':'1px solid #BA3126'});
        }
        if (anchorLink === "eigthPage") {
          $(".counter").text("8");
        $(".arrow-down").css({'color': '#3285E7','border':'1px solid #3285E7'});
        }
        if (anchorLink === "ninthPage"){
          $(".counter").text("9");
          $(".magic").addClass("animated bounceInLeft");
          $(".trophy").addClass("animated bounceInUp");
          return $(".users").addClass("animated bounceInRight");
        }
      }
    });


    





    $("#menu").click(function() {
      $('.menu-bars').toggleClass("open");
      return $(".overlay").toggleClass("open");
    });
    return $(".overlay ul li a").click(function() {
      $(".overlay").removeClass("open");
      return $('.menu-bars').removeClass("open");
    });
  });

}).call(this);
