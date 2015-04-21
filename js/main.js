(function() {
  $(function() {

$('body').on({
    'mousewheel': function(e) {
        if (e.target.id == 'el') return;
        e.preventDefault();
        e.stopPropagation();
    }
});

$(window).bind("load", function(){


    $('.section0').css('visibility','visible');
    $('.headnav').delay(5000 ).fadeIn(1000);
     $('.total').delay(5000).fadeIn(1000);
      $('.counter').delay(5000).fadeIn(1000);


 
    $(document).ready(function() {
        var obj = document.createElement("audio");
        obj.src="pressing-spacebar.wav";
        obj.volume=0.05;
        obj.autoPlay=false;
        obj.preLoad=true;       
 
        $(".playSound").click(function() {
            obj.play();
        });
 
    });
 

    

        $(".titleBgSub").typed({
            strings: ["Frontend Web Dev","HTML5 CSS JAVASCRIPT", "UX &amp; UI", "Press this key"],
            // typing speed
            typeSpeed: 100,
            // time before typing starts
            startDelay: 6000,
            // backspacing speed
            backSpeed: 0,
            // time before backspacing
            backDelay: 1000,
            // loop
            loop: false,
            // false = infinite
            loopCount: false,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
            // call when done callback function
            callback: function() {},
            // starting callback function before each string
            preStringTyped: function() {},
            //callback for every typed string
            onStringTyped: function() {},
            // callback for reset
            resetCallback: function() {}
        });
  
});



    // Fakes the loading setting a timeout & unbind mouswheel to allow scroll
    setTimeout(function() {
        $('body').addClass('loaded');
        $('.loading').fadeOut();

        $('body').unbind("mousewheel");
    }, 6000);




     var obj2 = document.createElement("audio");
        obj2.src="leb wohl edit.mp3";
        obj2.volume=0.3;
        obj2.autoPlay=false;
        obj2.preLoad=true;       
 
        
            
     $('.stop').on( "click", function() {
      obj2.load();
     }); 

     $('.play').on( "click", function() {
       obj2.play();
     }); 

     $('.fa-music').on("click",function() {
      if ( $('#neu').css('visibility') == 'hidden' )
    $('#neu').css('visibility','visible');
  else
    $('#neu').css('visibility','hidden');

     }); 



 



    $("#fullpage").fullpage({
      anchors: ["firstPage", "secondPage", "thirdPage", "fourthPage", "fifthPage", "sixthPage","seventhPage","eighthPage","ninthPage", "tenthPage", "eleventhPage", "twelfthPage"],
      sectionsColor: ["#fff","#fff", "#ebebeb", "#fff","#ebebeb", "#fff","#ebebeb", "#fff","#ebebeb","#fff","#ebebeb","#fff"],


     
       slidesNavigation: true,
        slidesNavPosition: 'bottom',

      scrollingSpeed: 1000,
      easing: 'easeInOutExpo',
      keyboardScrolling: true,
      responsive:1000,
      touchSensitivity: 10,

      animateAnchor: true,
      afterLoad: function(anchorLink) {


        if (anchorLink === "firstPage") {
          $(".counter").text("1");
           $(".arrow-down").css({'color': '#333'});
           $(".headnav").css('background-color','#F2F2F2');
           $('.Gl').css('visibility','hidden');
           $('.Gl').fadeOut();
           $('#home').addClass('pulse-link');

        }

        if(anchorLink!=='firstPage'){
           $('.Gl').css('visibility','visible');
          $('.Gl').fadeIn();
          $('.menuTip').fadeIn();
          $('#home').removeClass('pulse-link');

        }
        if (anchorLink === "secondPage") {
          $(".counter").text("2");
           $(".headnav").css('background-color','#fff');
         $('#wise').addClass('pulse-link');
        }
        if(anchorLink!=='secondPage'){
          $('#wise').removeClass('pulse-link');
        }


        if (anchorLink === "thirdPage") {
          $(".counter").text("3");

          $(".headnav").css('background-color','#ebebeb');
        $('#sine').addClass('pulse-link');
        }
         if(anchorLink!=='thirdPage'){
          $('#sine').removeClass('pulse-link');
        }


          if (anchorLink === "fourthPage") {
          $(".counter").text("4");
          $(".headnav").css('background-color','#fff');
        
         $('#styles').addClass('pulse-link');
        }
         if(anchorLink!=='fourthPage'){
          $('#styles').removeClass('pulse-link');
        }


          if (anchorLink === "fifthPage") { 
          $(".counter").text("5");
       
         $(".headnav").css('background-color','#ebebeb');
         $('#kraftwerk').addClass('pulse-link');
        }
         if(anchorLink!=='fifthPage'){
          $('#kraftwerk').removeClass('pulse-link');
        }


        if (anchorLink === "sixthPage") {
          $(".counter").text("6");
        
         $(".headnav").css('background-color','#fff');
        $('#his').addClass('pulse-link');
        }
         if(anchorLink!=='sixthPage'){
          $('#his').removeClass('pulse-link');
        }
      
        if (anchorLink === "seventhPage") {
          $(".counter").text("7");
        
         $(".headnav").css('background-color','#ebebeb');
         $('#misc').addClass('pulse-link');
        }
         if(anchorLink!== "seventhPage"){
          $('#misc').removeClass('pulse-link');
        }


        if (anchorLink === "eighthPage") {
          $(".counter").text("8");
        
         $(".headnav").css('background-color','#fff');
         $('#cncf').addClass('pulse-link');
        }
         if(anchorLink!=='eighthPage'){
          $('#cncf').removeClass('pulse-link');
        }

        if (anchorLink === "ninthPage") {
          $(".counter").text("9");
      
         $(".headnav").css('background-color','#ebebeb');
         $('#crowd').addClass('pulse-link');
        }
         if(anchorLink!=='ninthPage'){
          $('#crowd').removeClass('pulse-link');
        }


        if (anchorLink === "tenthPage"){
          $(".counter").text("10");
           $(".headnav").css('background-color','#fff');
          $(".magic").addClass("animated bounceInLeft");
          $(".trophy").addClass("animated bounceInUp");
          $('#animation').addClass('pulse-link');
          $('#fullBg').removeClass('pulse-link');
          return $(".users").addClass("animated bounceInRight");
         
        }
         if(anchorLink!=='tenthPage'){
          $('#animation').removeClass('pulse-link');
        }

        

        if (anchorLink === "eleventhPage") {
          $(".counter").text("11");
           $(".headnav").css('background-color','#ebebeb');
         $('#fullBg').addClass('pulse-link');
        }
         if(anchorLink!=='eleventhPage'){
          $('#fullBg').removeClass('pulse-link');
        }
        

        if (anchorLink === "twelfthPage") {
          obj2.play();
          $(".counter").text("12");
           $(".headnav").css('background-color','#fff');
          $('.nothing').fadeIn('slow').birdman({
                        speedup:false,
                        delay:0
                      });
          $('.birdman').fadeIn().birdman({
                        speedup:false,
                        delay:900
                      });
           $('.godard').fadeIn().birdman({
                        speedup:true,
                        delay:300
                      });    
          
          $('.author').fadeIn(6000);
          $('.music').fadeIn(1000);
          $('#nothing').addClass('pulse-link');
        }
         
          if (anchorLink !== "twelfthPage"){
            obj2.load();
             $('.nothing').fadeOut(100);
             $('.godard').fadeOut(100);
          $('.author').fadeOut(100);
          $('.music').fadeOut(100);
          $('#neu').css('visibility','hidden');
          $('.birdman').fadeOut(100);
          $('#nothing').removeClass('pulse-link');
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
