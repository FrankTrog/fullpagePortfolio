<?php

if($_POST["submit"]) {
    $recipient="leonardger@gmail";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html>
  <head>
    <title>Full Page Portfolio</title>

  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="font-mfizz-1.2/font-mfizz.css" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" media="all" rel="stylesheet" type="text/css" />
    
        
     <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/font-awesome-animation.min.css">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <link href="css/styles.css" rel="stylesheet">
    

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">



  </head>
  
<body>
  
<!-- LOADER ------>

<div id="loader-wrapper">
  <div id="loader"></div>


  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  <div class="loading pulse-link">GL</div>
</div> <!-- loader-wrapper -->

<!-- FULLPAGE-PORTFOLIO --> 


  <div class="fullPage-portfolio">


  
 <!-- HEADNAV MENU -->

  <div class="headnav">
    <div id="menu">
      <div class="menu-bars">
     
        <span></span>
      </div> <!-- menu-bars -->
    </div> <!-- menu -->
      
     <a href="#firstPage"><span class="Gl">GL<span class="return">&#8626;</span></span></a>
     <!--<img src="images/GL.jpg" class="Gl">-->
    
       

       <div class="counter">1</div>
       <div class="total">15</div>
  

    <!--<div class="menuTip faa-float animated">&#9651;</div>REMOVE MENUTIP-->
    
  </div><!-- headnav -->


  <!-- FULLPAGE -->
  

  <div id="fullpage">


<!--**********SECTION0***********************-->
    

    <div class="section active"  id="section0" style="background-image: url('images/compicHint.jpg');  background-size: cover;">

        <div class="intro">
           <div class="container">
              <div class="row">
                
                <div class="center centered titleBg"><a href="#secondPage" class="playSound">GL
                <div class="titleBgSub"></div></a></div>
              
              </div> <!-- row -->
    
          </div>  <!-- container -->
  
          <div class="scroll-down">
            
            <div class="arrow-down1 faa-float animated">
              <a href="#secondPage" class="flash1">&#9660;</a>
            </div>
          </div><!-- scroll-down-->
        
        </div><!-- intro -->
      
    </div><!-- section0 -->

<!--**********SECTION1***********************-->


  <div class="section" id="section1">

        <div class="intro">
           <div class="container">
              <div class="row">
                <div class="col-md-6">
                
                  <img src="images/gerbw5.jpg" class="gerry img-responsive" />
              
                </div><!-- col-md-6 -->
    
              
                   <div class="col-md-1">
                   </div>
                    <div class="col-md-5 gerrytext">
                      <h1>GERRY LEONARD</h1>

                      <h2>Development &#43; Design</h2>
                      
                      <p>I am fascinated by the dialogue/interplay between creating art and developing design, how the former is about asking questions, and the latter about providing solutions.</p>

                      <p>My background is in film. I have written and directed award-winning films for the big screen. Now my work is focused on developing and designing for desktop and handheld screens.</p>

                      <p>Life is about learning. Seeking solutions and questioning the answers. Gaining experience and creating experiences.</p>

                      <p>I developed and designed this site where you can explore some more of my work.</p>

                      <a href="" class="btn homebtn btn-lg btn-warning text-center">DOWNLOAD CV</a>
                    
                    </div><!-- col-md-5 -->
              </div><!-- row -->
            </div><!-- container -->
                <div class="scroll-down">
                  
                  <div class="arrow-down faa-float animated faa-slow">
                    <a href="#thirdPage" class="flash">&#9660;</a>
                  </div>
                </div><!-- scroll-down -->
        </div><!-- intro -->
      
  </div> <!-- section1 -->

<!--**********SECTION2***********************-->

  <div class="section" id="section2">

        <div class="intro">
           <div class="container">
              <div class="row">
                <div class="col-md-6">

                  <div class="tcycle" data-speed="900" data-timeout="6000" data-scss='{"left":"0%"}'><!--NOTE CHNAGE HERE-->
                     <img src="images/wiseDesk.jpg" class="img-responsive" />
                    <img src="images/wiseMobile.jpg" class="img-responsive" />
                  </div>
    
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <h1>WISE WORDS</h1>

                  <h2>Responsive Quiz App</h2>
                  <h3><i class="space icon-mobile-device"></i><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><span><i class="git fa fa-github"></i></span></h3>
                  <p>A multiple choice quiz app where the user tries to match a quote with the perons who said it. The correct answer is revealed when the user submit their answer. Their score is calculated upon completion.</p>
                  
                  <a href="http://gerleone73.github.io/wise-words-quiz-app/" target="_blank" class="btn homebtn btn-lg btn-warning text-center">LAUNCH WEB APP</a>
                </div>

              </div><!-- row -->
            </div><!-- container -->
            <div class="scroll-down">
            
              <div class="arrow-down faa-float animated faa-slow">
                <a href="#fourthPage" class="flash">&#9660;</a>
              </div>
            </div><!-- scroll-down -->
        </div><!--intro-->
  </div><!-- section2-->


<!--**********SECTION3***********************-->


  <div class="section" id="section3">
        <div class="intro">
           <div class="container">
              <div class="row">
                <div class="col-md-6">

                  <div class="tcycle" data-timeout="6000" data-scss='{"left":"0%"}'>
                   <img src="images/sineDesktop.jpg" class="img-responsive" />
                   <img src="images/sineMobile.jpg" class="img-responsive" />
                  </div>
        
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5">
                  <h1>SINE MATIC</h1>
                  <h2>Bootstrap Website</h2>
                  <h3><i class="space icon-mobile-device"></i><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><span><i class="git fa fa-github"></i></span></h3>
                  <p>A fictious single page responsive website built with Bootstrap.</p>
                  
                  <a href="http://gerleone73.github.io/Bootstrap3site/template.html" target="_blank" class="btn homebtn btn-lg btn-warning text-center">LAUNCH WEBSITE</a>
                </div>
            
              </div>
            </div>
            <div class="scroll-down">
              <div class="arrow-down faa-float animated faa-slow">
                <a href="#fifthPage" class="flash">&#9660;</a>
              </div>
            </div>
        </div>
  </div>



<!--**********SECTION4***********************-->

  <div class="section" id="section4">
        <div class="intro">
           <div class="container">
              <div class="row">
                <div class="col-md-6">

                  <div class="tcycle" data-timeout="6000" data-scss='{"left":"0%"}'>
                   <img src="images/stylesconferenceDesktop.jpg" class="img-responsive" />
                   <img src="images/stylesMobile.jpg" class="img-responsive" />
                  </div>
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5">
                  <h1>STYLES CONF.</h1>
                  <h2>Responsive Website</h2>
                  <h3><i class="space icon-mobile-device"></i><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><span><i class="git fa fa-github"></i></span></h3>
                  <p>A ficticious responisve multi-page website for a Styles Conference.</p>
                  <p>Features include a light and dark styles switch.</p>
                  
                  <a href="http://gerleone73.github.io/styles-conference/" target="_blank" class="btn homebtn btn-lg btn-warning text-center">LAUNCH WEBSITE</a>
                </div>
            
              </div>
          </div>
          <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
              <a href="#sixthPage" class="flash">&#9660;</a>
            </div>
          </div>
      </div>
  </div>

<!--**********SECTION5***********************-->

  <div class="section" id="section5">
        <div class="intro">
           <div class="container">
              <div class="row">
                <div class="col-md-6">

                  <div class="tcycle" data-speed="100" data-timeout="6000" data-scss='{"left":"0%"}'>
                     <img src="images/kraftwerkDesk1.jpg" class="img-responsive" />
                    <img src="images/kraftwerkDesk2.jpg" class="img-responsive" />
                     <img src="images/kraftwerkDesk3.jpg" class="img-responsive" />
                    <img src="images/kraftwerkDesk4.jpg" class="img-responsive" />
                     <img src="images/kraftwerkDesk5.jpg" class="img-responsive" />
                    <img src="images/kraftwerkDesk6.jpg" class="img-responsive" />
                  </div>


                </div>
                <div class="col-md-1"></div>

                <div class="col-md-5">
                  <h1>KRAFTWERK</h1>
                  <h2>Responsive Website</h2>
                  <h3><i class="space icon-mobile-device"></i><i class="space icon-html"></i><i class="space icon-css"></i><span><i class="git fa fa-github"></i></span></h3>
                  <p>A multi-page fan site for Kraftwerk built as part of my Masters in Applied Digital Media 2013</p>
                  <a href="" class="btn homebtn btn-lg btn-warning text-center">LAUNCH WEBSITE</a>
                </div>
            
              </div>
          </div>
            <div class="scroll-down">
              
              <div class="arrow-down faa-float animated faa-slow">
                <a href="#seventhPage" class="flash">&#9660;</a>
              </div>
            </div>
        </div>
  </div>


<!--**********SECTION6***********************-->


  <div class="section" id="section6">
      <div class="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-6">

                 <div class="tcycle" data-speed="900" data-timeout="6000" data-scss='{"left":"0%"}'>
                  <img src="images/hisonlysonDesk1.jpg" class="img-responsive" />
                  <img src="images/hisonlysonDeskpool.jpg" class="img-responsive" />
                  <img src="images/hisonlysonDesksmoke.jpg" class="img-responsive" />
                  <img src="images/hisonlysonDeskvillage.jpg" class="img-responsive" />
                </div>
              </div>
              <div class="col-md-1"></div>

              <div class="col-md-5"><h1>HIS ONLY SON</h1>
                  <h2>Msc Dissertation Project</h2>
                  <h3><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><i class="space fa fa-camera"></i><i class="space fa fa-video-camera"></i></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quos ipsa accusamus ratione alias adipisci dicta veniam quis enim libero tempora architecto eveniet, amet sit. Minus fuga error officia deserunt.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                  <a href="" class="btn homebtn btn-lg btn-warning text-center">

                  <span class="strike"><span>LAUNCH WESBITE</span></span></a>
              </div>
            
            </div>
        </div>
          <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
              <a href="#eighthPage" class="flash">&#9660;</a>
            </div>
          </div>
      </div>
  </div>

 <!--**********SECTION7 SLIDESHOW***********************-->


  <div class="section" id="section7">

      <div class="fp-controlArrow fp-prev faa-horizontal animated faa-slow">&#9664; <span class="clickTip">CLICK PREV &nbsp; &#8943;&#8943;&#8943;&#8943;</span></div>

      <div class="fp-controlArrow fp-next faa-horizontal animated faa-slow"><span class="clickTip">&#8943;&#8943;&#8943;&#8943; &nbsp; CLICK NEXT</span> &#9654;</div>

        <div class="slide active">
          <div class="intro">
            <img src="images/LovecrimesDesign.jpg" class="img-responsive text-center">
            <p>
              CD Cover and inlay Design
            </p>
          </div>
        </div>

        <div class="slide">
          <img src="images/jazzposter.jpg" class="img-responsive">
          <p>
              Jazz Poster Typography
            </p>
        </div>

      
        <div class="slide">
          <img src="images/negspace.jpg" class="img-responsive">
          <p>
              Negative Space Magazine Front Cover and contents pages
            </p>
          
        </div>
         <div class="slide">
          <img src="images/maggie.jpg" class="img-responsive">
          <p>
              Generative Art Cover "Processing Maggie"
            </p>
          
        </div>
        <div class="slide">
          <img src="images/filmposter.jpg" class="img-responsive">
          <p>
              Film Poster Mockup
            </p>
          
        </div>
        <div class="slide">
          <img src="images/ADM.jpg" class="img-responsive">
          <p>
              Msc Applied Digital Media Logo
            </p>
          
        </div>

         <div class="slide">
          <img src="images/infographic1.jpg" class="img-responsive">
          <p>
              Sample Slide from Infrographic for VOCAL
            </p>
          
        </div>
       <div class="slide">
        <img src="images/BTbanner.jpg" class="img-responsive">
            <p>
                Frash banner ads for VOCAL
              </p>
          
        </div>

       <div class="slide">
        <img src="images/vocallogo.jpg" class="img-responsive">
          <p>
              Logo Re-design  
            </p>
        
       </div>

       <div class="slide">
        <img src="images/authenticity.jpg" class="img-responsive">
          <p>
              Spiritualized v Jarmusch Perscription
            </p>
        
      </div>

       <div class="slide">
       <img src="images/balsamiq.jpg" class="img-responsive">
          <p>
              Mobile Banking Wireframe Balsamiq
            </p>
        
      </div>

      <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
             <a href="#ninthPage" class="flash">&#9660;</a>
            </div>
      </div>

  </div>

<!--**********SECTION8***********************-->

  <div class="section" id="section7">
    <div class="intro">
        <div class="container">
          <div class="row">
              <div class="col-md-6">

                <div class="tcycle" data-speed="900" data-timeout="6000"<div class="tcycle" data-speed="900" data-timeout="6000" data-scss='{"left":"0%"}'> 
                  <img src="images/cncfhome.jpg" class="img-responsive" />
                  <img src="images/cncffund.jpg" class="img-responsive" />
                  <img src="images/cncffilm.jpg" class="img-responsive" />
                </div>
                
              </div>
              <div class="col-md-1"></div>

              <div class="col-md-5">
                <h1>CNCF IRELAND</h1>
                <h2>Wordpress Site</h2>
                <h3><i class="space icon-mobile-device"></i><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><i class="space icon-php-alt"></i><i class="git fa fa-github"></i></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quos ipsa accusamus ratione alias adipisci dicta veniam quis enim libero tempora architecto eveniet, amet sit. Minus fuga error officia deserunt.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>

                <a href="" class="btn homebtn btn-lg btn-warning text-center">

                <span class="strike"><span>LAUNCH WESBITE</span></span></a>
              </div>
            
            </div>
        </div>
          <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
             <a href="#tenthPage" class="flash">&#9660;</a>
            </div>
          </div>
    </div>
  </div>



<!--**********SECTION9***********************-->

    
  <div class="section" id="section9">
    <div class="intro">   
      <div class="container">
        <div class="row">
            <div class="col-md-6">

                 <div class="crowdsight tcycle" data-speed="900" data-timeout="6000" data-scss='{"left":"0%"}'>
                    <img src="images/crowdsplash.jpg" class="img-responsive" />
                    <img src="images/crowdsignup.jpg" class="img-responsive" />
                    <img src="images/crowdshare.jpg" class="img-responsive" /> 
                    <img src="images/crowdshare2.jpg" class="img-responsive" /> 
                    <img src="images/crowdshare3.jpg" class="img-responsive" /> 
                    <img src="images/crowdshare4.jpg" class="img-responsive" /> 
                    <img src="images/crowdshare5.jpg" class="img-responsive" />
                    <img src="images/crowdpermission.jpg" class="img-responsive" /> 
                    <img src="images/crowdrewards.jpg" class="img-responsive" /> 
                    <img src="images/crowdexplore.jpg" class="img-responsive" /> 
                    <img src="images/crowdfilter.jpg" class="img-responsive" /> 
                    <img src="images/crowdmenu.jpg" class="img-responsive" /> 
                 </div> 
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-5">
                <h1>CROWD SIGHT</h1>
                <h2>Mobile App UX/UI</h2>
                <h3><i class="icon-iphone"></i></h3>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quos ipsa accusamus ratione alias adipisci dicta veniam quis enim libero tempora architecto eveniet, amet sit. Minus fuga error officia deserunt.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                
                <a href="" class="btn homebtn btn-lg btn-warning text-center">

                <span class="strike"><span>LAUNCH WESBITE</span></span></a>
            </div>
         </div>
      </div>
          <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
             <a href="#eleventhPage" class="flash">&#9660;</a>
            </div>
          </div>
    </div>
  </div>

<!--**********SECTION10***********************-->

  <div class="section" id="section10">
      <div class="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-6">

                 <div class="crowdsight tcycle" data-speed="900" data-timeout="6000" data-scss='{"left":"0%"}'>
                    <img src="images/re-action1.jpg" class="img-responsive" />
                    <img src="images/re-action2.jpg" class="img-responsive" />
                    <img src="images/re-action3.jpg" class="img-responsive" /> 
                    <img src="images/re-action4.jpg" class="img-responsive" /> 
                 </div> 
              </div>
                
              <div class="col-md-1"></div>

              <div class="col-md-5"><h1>RE_ACTION JS GAME</h1>
                <h2>Javascript Game</h2>
                <h3><i class="space icon-html"></i><i class="space icon-css"></i><i class="space js icon-javascript"></i><span><i class="git fa fa-github"></i></span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quos ipsa accusamus ratione alias adipisci dicta veniam quis enim libero tempora architecto eveniet, amet sit. Minus fuga error officia deserunt.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi, aliquam nemo voluptatem fuga doloremque sapiente veniam dolores explicabo.</p>
                
                <a href="http://gerleone73.github.io/RE_ACTION/re_action.html#" target="_blank" class="btn homebtn disable btn-lg btn-warning text-center">LAUNCH GAME</a>
                </div>
            </div>
          </div>
           <div class="scroll-down">
            
            <div class="arrow-down faa-float animated faa-slow">
             <a href="#twelfthPage" class="flash">&#9660;</a>
            </div>
           </div>
      </div>
  </div>

<!--**********SECTION11***********************-->


      <div class="section" id="section11">

       <div class="intro">
          <h1>
            Animations
          </h1>
          <p>
            TO BE COMPLETED...
          </p>
          <ul class="services">
            <li class="magic">
              <div class="fa fa-magic"></div>
            </li>
            <li class="trophy">
              <div class="fa fa-trophy"></div>
            </li>
            <li class="users">
              <div class="fa fa-users"></div>
            </li>
          </ul>
        </div>
      </div>


<!--**********SECTION12***********************-->

  <div class="section" id="section12">

    <div class="pattern pulse"></div>
      <div class="intro">
       <div class="container">
         <div class="row">
          <div class="col-md-4 centered">
         
            <p class ="justify jarmusch">
              <span class="nothing"> Nothing is original.</span><span class="birdman"> Steal from anywhere that resonates with inspiration or fuels your imagination. Devour old films, new films, music &#44; books &#44; paintings&#44; photographs&#44; poems&#44; dreams&#44; random conversations&#44; architecture&#44; bridges&#44; street signs&#44; trees&#44; clouds&#44; bodies of water&#44; light and shadows. Select only things to steal from that speak directly to your soul. If you do this, your work &#40;and theft&#41; will be authentic. Authenticity is invaluable&#59; originality is non-existent. And dont bother concealing your thievery &#45; celebrate it if you feel like it. In any case&#44; always remember what Jean&#45;Luc Godard said - </span> <span class="godard">Its not where you take things from &#45; its where you take them to.</span></p><p class="author">&#126; Jim Jarmusch</p><p class="music"><i class="fa fa-music"></i><span class="stop">&#9609;</span><span class="play">&#9654;</span></p><p id="neu">&#126; Leb Wohl &#126; NEU&#33;</p>

          </div>
        </div>
      </div>
    </div>
  </div>
  

 <!--**********SECTION13***********************-->


  <div class="section" id="section13">
      <div class="intro">
        <div class="container">
           <div class="row">
            
        
              <div class="col-md-5 centered">

                <form action="" method="POST">
                  <h1 style="color: #A8FFEE; font-weight:300;">CONT<span><i class="fa fa-envelope-o"></i></span>CT</h1>
                  <br />
                   <input class="form-style" type="text" name="name" style="width: 100%" placeholder="Your name">
                   <input class="form-style" type="text" name="email" style="width: 100%" placeholder="Your email">
                  <textarea class="form-style" name="message" rows="10" cols="25" style="width: 100%" placeholder="What you want to say..."></textarea><br /><br />
                  <input class ="btn" type="reset" value="CLEAR"><input class="btn" type="submit" value="SEND">
                </form>

                

              <?=$thankYou ?>
             
           
                <div class="foot">
                  <p><a href="callto:00353 86 6021267">&#9990; (00353)86 6021267</a></p>
                  <p><a href="mailto:leonardger@gmail.com" class="myemail">&#9993; leonardger&#64;gmail.com</a></p>
                  <p>Designed &amp; Developed by Gerry Leonard &#169;</p>
                  <br />
                  <div class="col-xs-1 text-center"></div>
                  <div class="col-xs-2 text-center"><i class="fa fa-twitter"></i></div>
                  <div class="col-xs-2 text-center"><i class="fa fa-github"></i></div>
                  <div class="col-xs-2 text-center"><i class="fa fa-linkedin-square"></i></div>
                  <div class="col-xs-2 text-center"><i class="fa fa-tumblr-square"></i></div>
                  <div class="col-xs-2 text-center"><i class="fa fa-youtube-play"></i></div>
                  <div class="col-xs-1 text-center"></div>
                </div>
              </div>
           </div>
        </div>
      </div>
  </div>

        <!-- NOT IS USE YET
            
        <div class="section" id="section14">
        <div class="col-xs-1 text-center"></div>
          <div class="col-md-2 text-center"><i class="fa fa-twitter"></i></div>
                  <div class="col-md-2 text-center"><i class="fa fa-github"></i></div>
                  <div class="col-md-2 text-center"><i class="fa fa-linkedin-square"></i></div>
                  <div class="col-md-2 text-center"><i class="fa fa-tumblr-square"></i></div>
                  <div class="col-md-2 text-center"><i class="fa fa-youtube-play"></i></div>
                  <div class="col-md-1 text-center"></div>
        </div>
        -->


</div><!-- fullpage  -->

<!--**********MENU***********************-->

  <div class="section">
     <div class="container">
       <div class="row">
            <div class="overlay">
                <nav class="intro col-md-4 centered">
                  <ul>

                    <li>
                      <a href="#firstPage" id="home">&nbsp;Home&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#secondPage" id="about">&nbsp;About Me&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#thirdPage" id="wise">&nbsp;Wise Words&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#fourthPage" id ="sine">&nbsp;Sine Matic&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#fifthPage" id="styles">&nbsp;Styles Conference&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#sixthPage" id="kraftwerk">&nbsp;Kraftwerk&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#seventhPage" id="his">&nbsp;His Only Son&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#eighthPage" id="misc">&nbsp;Misc Design&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#ninethPage" id="cncf">&nbsp;CNCF Ireland&nbsp;</a>
                    </li>
                    <hr>
                    
                    <li>
                    <a href="#tenthPage" id="crowd">&nbsp;Crowdsight&nbsp;</a>
                    </li>
                     <hr>
                    <li>
                      <a href="#eleventhPage" id="re-act">&nbsp;Re_Action Game&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                    <a href="#twelfthPage" id="animation">&nbsp;Animation&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                    <a href="#twelfthPage" id="animation">&nbsp;Two Simple JS Apps&nbsp;</a>
                    </li>
                    <hr>
              
                    <li>
                    <a href="#twelfthPage" id="animation">&nbsp;API Hacks&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                    <a href="#thirteenthPage" id="nothing">&nbsp;Nothing is Original&nbsp;</a>
                    </li>
                    <hr>
                    <li>
                      <a href="#fourteenthPage" id="contact">&nbsp;Contact Me&nbsp;</a>
                    </li>
                     <hr>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>

<!-- JS SCRIPTS -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js" type="text/javascript"></script>
     <script src="js/jquery.tcycle.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/birdman.js"></script>
      <script src="js/main.js"></script>
    

   
</div> <!-- FULL PAGE PORTFOLIO -->
</body>
</html>