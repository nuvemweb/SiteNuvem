

<link rel="stylesheet" href="../slider/styleslide.css" type="text/css">
  
  <link rel="stylesheet" href="../slider/examples.css" type="text/css">

  
  <script type="text/javascript" src="../slider/js/examples.js"></script>
  
  <script type="text/javascript" src="../slider/js/lib/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="../slider/uncompressed/ScrollMagic.js"></script>
  <script type="text/javascript" src="../slider/uncompressed/plugins/animation.gsap.js"></script>
  

<section class="demo" id="section-wipes">
          <style type="text/css">
            #pinContainer {
              width: 100%;
              height: 100%;
              overflow: hidden;
            }
            .panel {
              height: 100%;
              width: 100%;
              position: absolute;
            }
          </style>
          <div id="pinContainer">
            <section class="panel blue">
              <b>SEJA</b>
            </section>
            <section class="panel turqoise">
              <b>BEM</b>
            </section>
            <section class="panel green">
              <b>VINDO À</b>
            </section>
            <section class="panel bordeaux">
              <!--<b>NUVEM</b>-->
              <img src="<?php echo $this -> webroot;?>/img/logo-nuvemcapa3.png" class="alinha-imagem">
            </section>
          </div>
          <script>
            $(function () { // wait for document ready
              // init
              var controller = new ScrollMagic.Controller();

              // define movement of panels
              var wipeAnimation = new TimelineMax()
                .fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
                .fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
                .fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

              // create scene to pin and link animation
              new ScrollMagic.Scene({
                  triggerElement: "#pinContainer",
                  triggerHook: "onLeave",
                  duration: "300%"
                })
                .setPin("#pinContainer")
                .setTween(wipeAnimation)
                .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
            });
          </script>
        </section>
        <script type="text/javascript" src="../slider/js/tracking.js"></script>