<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Let’s Share Gratitude to Our Healthcare & Essential Workers | Grateful KC</title>
  <meta name="description" content="Blue KC is on a mission to show gratitude to healthcare and essential workers during this COVID-19 crisis. Share #GratefulKC to show support for one another during these times.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" 
      type="image/png" 
      href="favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="//db.onlinewebfonts.com/c/ce5b4abe001c9e0fe604f753e1d6ebab?family=Univers" rel="stylesheet" type="text/css"/>

  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="styles.css">

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '668771940605236',
      xfbml      : true,
      version    : 'v6.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</head>

<body>

  <?php
    $site_url = 'http://gratefulkc.com';
    if($_SERVER['SERVER_NAME'] == 'dev-bluekc-grateful.chemistry.digital') {
      $site_url = 'http://dev-bluekc-grateful.chemistry.digital';
    }
  ?>

  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<!-- <div class="fb-share-button" 
    data-href="https://www.your-domain.com/your-page.html" 
    data-layout="button_count">
  </div> -->

  <header>
    <div class="inner">
      <a href="http://bluekc.com" title="Blue KC Homepage" class="logo"><img src="images/logo.svg" alt="Blue KC Here for Good logo"></a>
    </div>
  </header>

  <section class="hero u-relative">
    <div class="hero-bg-color u-absolute100"></div>
    <div class="hero-bg js-hero-bg-swiper swiper-container u-absolute100">
      <div class="swiper-wrapper">
        <div class="hero-bg-slide hero-bg-slide--3 u-bgImage swiper-slide" style="background-image: url('images/hero-bg3.jpg');"></div>
        <div class="hero-bg-slide hero-bg-slide--1 u-bgImage swiper-slide" style="background-image: url('images/hero-bg1.jpg');"></div>
        <div class="hero-bg-slide hero-bg-slide--2 u-bgImage swiper-slide" style="background-image: url('images/hero-bg2.jpg');"></div>
      </div>
    </div>
    <div class="inner">
      <div class="hero-content">
        <h2>We are forever</h2>
        <h1>#Grateful<span class="color">KC</span></h1>
        <p>Show your gratitude to all our healthcare and essential workers. Every time you share a message using <strong>#GratefulKC</strong>, Blue KC will donate <strong>$1</strong> to the <strong>Royals Respond Fund</strong>.</p>
      </div>
    </div>
  </section>

  <section class="share u-relative">
    <div class="share-bg u-absolute100 u-bgImage" style="background-image:url('images/share-bg.png');"></div>
    <div class="inner">
      <img src="images/here-for-good.svg" alt="Blue KC Here for You" class="share-here-img">
      <svg class="share-dots" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.04 388.83"><title>Asset 4</title><g style="isolation:isolate"><g style="mix-blend-mode:multiply"><path class="path" d="M89.53,381A47,47,0,0,1,47,334.19v-280A47,47,0,0,0,7.52,7.78" style="fill:none;stroke:#ccc;stroke-miterlimit:10;stroke-width:7px;stroke-dasharray:12,12"/><path d="M89.4,373a7.89,7.89,0,1,1-8.15,7.64A7.9,7.9,0,0,1,89.4,373Z" style="fill:#ccc"/><path d="M8.61,0a7.9,7.9,0,1,0,7.15,8.58A7.9,7.9,0,0,0,8.61,0Z" style="fill:#ccc"/></g></g></svg>
      <div class="share-content-wrapper">
        <div class="share-content">
          <h2>Put your feelings into words. Then share them.</h2>
          <img src="images/share-icon.svg" alt="Share Icon" class="share-content-icon">
          <p>Take a moment to craft a personal thank you. Then post it on social media. Let’s come together to show the whole world how it feels to be <strong>#GratefulKC</strong>. </p>
          <div class="share-box row">
            <div class="share-box-img"><img src="images/share-box.png" alt="Thank You Share Image"></div>
            <div class="share-box-content"><p>That mask can’t hide your bravery!<br>#GratefulKC.</p></div>
          </div>
          <div class="share-btns row">
            <a href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>&hashtag=#GratefulKC" class="btn btn--facebook share-btn" target="_blank">Facebook</a>
            <a href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&ref_src=twsrc%5Etfw" target="_blank" class="btn btn--twitter share-btn">Twitter</a>
          </div>
        </div>
        <div class="share-counts">
          <h3>Every time you say thank you, it counts.</h3>
          <p>For every gratitude shared using #GratefulKC, Blue KC will donate $1 to the Royals Respond Fund. This community donation is helping to fight local food insecurity caused by the COVID-19 crisis. </p>
          <p class="note">* Blue KC will donate up to $25,000 to Royals Respond by May 31, 2020. </p>
          <a href="https://royals.mlblogs.com/royals-charities-announces-the-royals-respond-fund-bed428e12f25" target="_blank" class="btn">Learn More</a>
        </div>
      </div>
      <a href="https://royals.mlblogs.com/royals-charities-announces-the-royals-respond-fund-bed428e12f25" target="_blank">
        <img src="images/royal-responds-logo.png" alt="Royal Responds Logo" class="share-royal-logo">
      </a>
    </div>
  </section>

  <section class="signs">
    <div class="inner">
      <img src="images/dots-signs.svg" alt="Dots for Signs" class="signs-dots">
      <img src="images/signs-bubble.png" alt="Thank you for taking our trash sign" class="signs-bubble">
      <img src="images/signs-dots-bottom.svg" alt="Dots for Signs" class="signs-dots-bottom">
      <div class="signs-box">
        <div class="row">
          <div class="col col-2 signs-box-left">
            <h2>Put <span style="color:#2ac0d5;">#GratefulKC</span> on proud display.</h2>
            <img src="images/signs-icon.svg" alt="Signs Icon" class="signs-box-icon">
            <p>Want to show an essential worker how much you appreciate what they do every day? Put a sign in the window, hang a message in the car, or leave a thank you card in the mailbox.</p>
          </div>
          <div class="col col-2 signs-box-right">
            <div class="signs-box-right-wrapper">
              <p class="signs-box-right-p">Choose a gratitude message to print or display on your tablet.</p>

              <div class="sign-slider u-relative">

                <div class="sign-slider-top js-sign-slider-top swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide sign-slide u-relative">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-firstresponders-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>First Responders</strong></p>
                        <a href="images/grateful-firstresponders-sign.jpg" target="_blank" class="btn" title="Download Grateful Healthcare Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-everyone-sign.html" target="_blank" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful Healthcare sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-firstresponders-sign_facebook.png&hashtag=#GratefulKC" target="_blank" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful Healthcare sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-sanitation.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Sanitation</strong> Workers</p>
                        <a href="images/grateful-sanitation.jpg" target="_blank" class="btn" title="Download Grateful Sanitation Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-sanitation-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful Sanitation sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-sanitation_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful Sanitation sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-grocery-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Grocery</strong> Workers</p>
                        <a target="_blank" href="images/grateful-grocery-sign.jpg" class="btn" title="Download Grateful Grocery Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-grocery-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful Grocery sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-grocery-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful Grocery sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-healthcare-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Healthcare</strong> Workers</p>
                        <a target="_blank" href="images/grateful-healthcare-sign.jpg" class="btn" title="Download Grocery Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-healthcare-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Healthcare Grocery sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-healthcare-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Healthcare Grocery sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-childcare-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Childcare</strong> Workers</p>
                        <a target="_blank" href="images/grateful-childcare-sign.jpg" class="btn" title="Download Childcare Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-childcare-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Childcare Workers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-childcare-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Childcare Workers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-municipal-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Municipal</strong> Workers</p>
                        <a target="_blank" href="images/grateful-municipal-sign.jpg" class="btn" title="Download Municipal Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-municipal-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Municipal Workers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-municipal-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Municipal Workers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-manufacturers-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Manufacturers</strong></p>
                        <a target="_blank" href="images/grateful-manufacturers-sign.jpg" class="btn" title="Download Manufactures Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-manufacturers-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Manufactures Workers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-manufacturers-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Manufactures Workers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-foodservice-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Food Service </strong>Workers</p>
                        <a target="_blank" href="images/grateful-foodservice-sign.jpg" class="btn" title="Download Food Service Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-foodservice-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Food Service Workers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-foodservice-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Food Service Workers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-teachers-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Teachers </strong></p>
                        <a target="_blank" href="images/grateful-teachers-sign.jpg" class="btn" title="Download Teachers Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-teachers-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Teachers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-teachers-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Teachers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-truckdrivers-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Truck Drivers</strong></p>
                        <a target="_blank" href="images/grateful-truckdrivers-sign.jpg" class="btn" title="Download Truck Drivers Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-truckdrivers-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Truck Drivers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-truckdrivers-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Truck Drivers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-cleaning-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Cleaning</strong> Crews</p>
                        <a target="_blank" href="images/grateful-cleaning-sign.jpg" class="btn" title="Download Cleaning Crews Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-cleaning-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Cleaning Crews sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-cleaning-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Cleaning Crews sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide sign-slide">
                      <div class="u-bgImage sign-slide-img u-absolute100" style="background-image:url('images/grateful-airline-sign.jpg');"></div>
                      <div class="sign-slide-hover u-absolute100">
                        <p><strong>Airline</strong> Workers</p>
                        <a target="_blank" href="images/grateful-airline-sign.jpg" class="btn" title="Download Airline Workers Sign">Download</a>
                        <div class="sign-slide-hover-social">
                          <p>Share:</p>
                          <a target="_blank" href="https://twitter.com/intent/tweet?button_hashtag=GratefulKC&text=<?php echo $site_url; ?>/twitter-cards/grateful-airline-sign.html" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--twitter" title="Share Grateful for Airline Workers sign on Twitter"><img src="images/icon-twitter.png" alt="Share on Twitter"></a>
                          <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=668771940605236&display=popup&href=<?php echo $site_url; ?>/images/grateful-airline-sign_facebook.png&hashtag=#GratefulKC" class="sign-slide-hover-social-icon sign-slide-hover-social-icon--facebook" title="Share Grateful for Airline Workers sign on Facebook"><img src="images/icon-fb.png" alt="Share on Facebook"></a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="sign-thumb-slider-wrapper u-relative">
                <div class="sign-thumb-slider js-sign-thumb-slider swiper-container">
                  <div class="swiper-wrapper">
                    <div class="sign-thumb-slide sign-thumb-slide--one-line swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-firstresponders-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>First Responders</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-sanitation.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Sanitation <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-grocery-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Grocery <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-healthcare-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Healthcare <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-childcare-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Childcare <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-municipal-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Municipal <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide sign-thumb-slide--one-line swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-manufacturers-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Manufacturers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-foodservice-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Food Service <br>Workers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide sign-thumb-slide--one-line swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-teachers-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Teachers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-truckdrivers-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Truck<br>Drivers</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-cleaning-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Cleaning<br>Crews</p>
                      </div>
                    </div>
                    <div class="sign-thumb-slide swiper-slide">
                      <div class="u-bgImage sign-thumb-slider-img u-absolute100" style="background-image:url('images/grateful-airline-sign.jpg');"></div>
                      <div class="sign-thumb-slider-hover u-absolute100">
                        <p>Airline<br>Workers</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next swiper-button-white js-sign-thumb-slider-next"></div>
                <div class="swiper-button-prev swiper-button-white js-sign-thumb-slider-prev"></div>
              </div>

            <div class="swiper-pagination js-sign-slider-pagination"></div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="articles">
    <div class="inner">
      <h2>Fight the COVID-19 crisis. With knowledge.</h2>
      <img src="images/articles-icon.svg" class="articles-icon" alt="Articles Icon">
      <p class="articles-intro-p">We’re here to keep you up-to-date on the emerging health crisis and its impact on the region. Stay informed through our dedicated COVID-19 response website, blog and media resources.</p>
      
      <div class="articles-slider-wrapper u-relative">
        <div class="articles-slider js-articles-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="article-slide swiper-slide">
              <div class="article-slide-wrapper">
                <div class="article-slide-alert">
                  <img src="images/icon-megaphone.svg" alt="MegaPhone Alert Icon" class="article-slide-alert-icon">
                  <h4>LATEST UPDATES ON COVID-19</h4>
                  <p>Blue Cross and Blue Shield of Kansas City (Blue KC) is actively monitoring developments of COVID-19 and what it means for the Kansas City community and those who are insured by Blue KC.</p>
                  <p>We will continue to update this page with the new information as it becomes available.</p>
                </div>
              </div>
              <a target="_blank" href="https://www.bluekc.com/consumer/covid-19.html" class="btn" title="Visit site to learn about the latest updates on COVID-19">Visit Site Now</a>
            </div>
            <div class="article-slide swiper-slide">
              <div class="article-slide-wrapper">
                <div class="article-slide-img u-bgImage" style="background-image:url(https://www.bluekcblog.com/wp-content/uploads/2020/04/GettyImages-1134461939.jpg);"></div>
                <h4>How to Practice Self Care When Working From Home</h4>
                <p>The COVID-19 outbreak has shaken up the ways in which we live, work and play. For many of us, remote work is part of our new reality. For me, working from home right now means...</p>
              </div>
              <a target="_blank" href="https://www.bluekc.com/blog/self-care-while-working-remote-tips-from-dr-becky-gernon/" class="btn" title="Click here to read more about the article Managing Anxiety During Times of Social Isolation">Read More</a>
          </div>
            <div class="article-slide swiper-slide">
              <div class="article-slide-wrapper">
                <div class="article-slide-img u-bgImage" style="background-image:url(https://www.bluekcblog.com/wp-content/uploads/2020/03/GettyImages-1146420072.jpg);"></div>
                <h4>Managing Anxiety During Times of Social Isolation</h4>
                <p>With the current state of the world, physical health is top of mind for most people, as we make concentrated efforts to protect ourselves and those around us from the threat of COVID-19...</p>
              </div>
              <a target="_blank" href="https://www.bluekc.com/blog/managing-anxiety-during-times-of-social-isolation/" class="btn" title="Click here to read more about the article Managing Anxiety During Times of Social Isolation">Read More</a>
          </div>
          <div class="article-slide swiper-slide">
            <div class="article-slide-wrapper">
              <div class="article-slide-img u-bgImage" style="background-image:url(https://www.bluekcblog.com/wp-content/uploads/2020/03/GettyImages-927892156.jpg);"></div>
              <h4>COVID-19 (Coronavirus) and What You Need to Know About It</h4>
              <p>You may be experiencing information overload from the influx of conversation and news coverage about the novel coronavirus, or COVID-19. It can be hard to get a clear picture of ...</p>
            </div>
            <a target="_blank" href="https://www.bluekc.com/blog/coronavirus-health-safety-resources-with-blue-kc/" class="btn" title="Click here to read more about the article COVID-19 (Coronavirus) and What You Need to Know About It">Read More</a>
          </div>
          <!-- <div class="article-slide swiper-slide">
              <div class="article-slide-img u-bgImage" style="background-image:url(https://www.bluekcblog.com/wp-content/uploads/2020/03/GettyImages-927892156.jpg);"></div>
              <h4>COVID-19 (Coronavirus) and What You Need to Know About It</h4>
              <p>You may be experiencing information overload from the influx of conversation and news coverage about the novel coronavirus, or COVID-19. It can be hard to get a clear picture of ...</p>
              <a target="_blank" href="https://www.bluekc.com/blog/coronavirus-health-safety-resources-with-blue-kc" class="btn" title="Click here to read more about the article COVID-19 (Coronavirus) and What You Need to Know About It">Read More</a>
          </div> -->
        </div>
      </div>
      <div class="swiper-button-next swiper-button js-articles-slider-next js-articles-slider-arrow"></div>
      <div class="swiper-button-prev swiper-button js-articles-slider-prev js-articles-slider-arrow"></div>
      </div>
  </section>

  <footer>
<!--   <div class="social-bar">
    <div class="inner">
        <div class="social-left">
            <div>Connect with us</div>
        </div>
        <div class="social-right">
            <a href="tel:888-989-8842" title="Call Us" data-track="call" class="gClick">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16" height="22" viewBox="0 0 16.41 22.4">
                    <path class="footer-svg" id="phone" fill="#b6c2c8" d="M15.41,0H1A1,1,0,0,0,0,1V21.4a1,1,0,0,0,1,1H15.41a1,1,0,0,0,1-1V1A1,1,0,0,0,15.41,0ZM8.2,20.07A1.59,1.59,0,1,1,9.8,18.48,1.59,1.59,0,0,1,8.2,20.07Zm5.2-5.34H3V3H13.41Z"></path>
                </svg>
                &nbsp;&nbsp;888-989-8842
            </a>
            <a href="http://bluekc.com/consumer/blue-kc/live-blue.html" title="Find a Location" data-track="find location" class="gClick">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16" height="21" viewBox="0 0 15.87 21.22">
                    <path class="footer-svg" id="location" fill="#b6c2c8" d="M7.93,0A7.93,7.93,0,0,0,0,7.93c0,4.38,3.65,9.61,7.93,13.29,4.28-3.68,7.93-8.91,7.93-13.29A7.93,7.93,0,0,0,7.93,0Zm0,10.73a3.55,3.55,0,1,1,3.55-3.55A3.55,3.55,0,0,1,7.93,10.73Z"></path>
                </svg>
                &nbsp;&nbsp;Find a Location
            </a>
            <span class="mobile-hr"></span>
            <a href="https://www.facebook.com/BlueCrossBlueShieldKC" title="Facebook" data-track="social view" class="gClick">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="11" height="23" viewBox="0 0 11.18 23">
                    <path class="footer-svg" id="facebook" fill="#b6c2c8" d="M2.85,23V12.21H0V8.32H2.85V5c0-2.61,1.69-5,5.57-5a23.49,23.49,0,0,1,2.74.15l-.09,3.63H8.59C7.19,3.77,7,4.41,7,5.48V8.32h4.22L11,12.21H7V23Z"></path>
                </svg>
            </a>
            <a href="https://twitter.com/bluekc" title="Twitter" data-track="social view" class="gClick">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="22" height="17" viewBox="0 0 22.07 17.43">
                    <path class="footer-svg" id="twitter" fill="#b6c2c8" d="M22.07,2.27a8.91,8.91,0,0,1-2.58.63,4.47,4.47,0,0,0,2-2.41,8.85,8.85,0,0,1-2.86,1A4.46,4.46,0,0,0,11,5.35,12.63,12.63,0,0,1,1.91.46a4.46,4.46,0,0,0,1.22,6,4.42,4.42,0,0,1-2-.61v.06a4.46,4.46,0,0,0,3.46,4.46,4.54,4.54,0,0,1-1.18.12,4.44,4.44,0,0,1-.84-.1,4.46,4.46,0,0,0,4.08,3.2,8.94,8.94,0,0,1-5.58,1.76A8.78,8.78,0,0,1,0,15.24a12.61,12.61,0,0,0,6.77,2.18,12.59,12.59,0,0,0,13-12.33c0-.19,0-.38,0-.58A9.08,9.08,0,0,0,22.07,2.27Z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/bluecrossblueshieldkc/" title="Instagram" data-track="social view" class="gClick">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="20" height="20" viewBox="0 0 20.6 20.6">
                    <path class="footer-svg" id="instagram" fill="#b6c2c8" d="M2.64,0H18A2.65,2.65,0,0,1,20.6,2.64V18A2.65,2.65,0,0,1,18,20.6H2.64A2.65,2.65,0,0,1,0,18V2.64A2.65,2.65,0,0,1,2.64,0ZM15,2.29a.93.93,0,0,0-.93.93V5.44a.93.93,0,0,0,.93.93h2.33a.93.93,0,0,0,.93-.93V3.22a.93.93,0,0,0-.93-.93Zm3.27,6.42H16.46a6,6,0,0,1,.26,1.77,6.31,6.31,0,0,1-6.4,6.2,6.31,6.31,0,0,1-6.4-6.2,6,6,0,0,1,.26-1.77H2.29v8.7a.82.82,0,0,0,.82.82H17.45a.82.82,0,0,0,.82-.82V8.71Zm-8-2.46a4.07,4.07,0,0,0-4.14,4,4.08,4.08,0,0,0,4.14,4,4.08,4.08,0,0,0,4.14-4A4.07,4.07,0,0,0,10.32,6.25Z"></path>
                </svg>
            </a>
            <a href="http://bluekc.com/consumer/contact.html#contact-form" title="Email Us" data-track="social view" class="gClick">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="22" height="20" viewBox="0 0 22.48 20.33">
                    <path class="footer-svg" id="email" fill="#b6c2c8" d="M16.42,14.2a.51.51,0,0,1,.73,0l5.2,5.2a1.59,1.59,0,0,0,.14-.65V8.19a2.42,2.42,0,0,0-.08-.61,3.26,3.26,0,0,1-.94,1l-8.64,5.77a3.12,3.12,0,0,1-3.16,0L1,8.57a3.24,3.24,0,0,1-.94-1A2.42,2.42,0,0,0,0,8.19V18.75a1.58,1.58,0,0,0,.14.65l5.2-5.2a.51.51,0,0,1,.73.72L.84,20.15a1.5,1.5,0,0,0,.7.18h19.4a1.5,1.5,0,0,0,.7-.18l-5.22-5.23A.51.51,0,0,1,16.42,14.2Z"></path>
                    <path class="footer-svg" id="email" fill="#b6c2c8" d="M21.18,6,12.54.35a2.62,2.62,0,0,0-2.61,0L1.3,6c-.24.15-.54.41-.47.55a2.44,2.44,0,0,0,.75.87L3.89,8.91V7.14A1.54,1.54,0,0,1,5.43,5.6H17.05a1.54,1.54,0,0,1,1.54,1.54V8.91L20.9,7.4a2.42,2.42,0,0,0,.75-.87C21.72,6.39,21.42,6.13,21.18,6Z"></path>
                    <path class="footer-svg" fill="#b6c2c8" d="M7.91,9a.51.51,0,0,1-.51-.51h0A.51.51,0,0,1,7.91,8h6.66a.51.51,0,0,1,.51.51h0a.51.51,0,0,1-.51.51H7.91Z"></path>
                    <path id="email" fill="#b6c2c8" d="M7.91,11.34a.51.51,0,0,1-.51-.51h0a.51.51,0,0,1,.51-.51h4.4a.51.51,0,0,1,.51.51h0a.51.51,0,0,1-.51.51H7.91Z"></path>
                </svg>
            </a>
        </div>
        <div class="clear0"></div>
    </div>
</div> -->
<nav>
    <div class="main">
        <div class="inner">
            <div class="bottom">
                <div class="copy">
                    <a href="http://bluekc.com/consumer/" class="logo" title="Blue KC">
                        <svg xmlns="http://www.w3.org/2000/svg" width="254" viewBox="0 0 468.57 82.36">
                            <defs><style>
                                      .ft-1 {
                                          fill: #4a84c6;
                                      }

                                      .ft-2 {
                                          fill: #fff;
                                      }

                                      .ft-3 {
                                          fill: #dedede;
                                      }
                            </style></defs>
                            <g>
                                <polygon class="ft-1" points="81.07 23.02 58.71 23.02 58.71 0.67 22.36 0.67 22.36 23.02 0 23.02 0 59.38 22.36 59.38 22.36 81.73 58.71 81.73 58.71 59.38 81.07 59.38 81.07 23.02"></polygon>
                                <path class="ft-2" d="M54.74,55,47.18,40.46c-1-2-1-2.94-.85-3.19A1.1,1.1,0,0,1,47,37l12.17-2.49A19.66,19.66,0,0,1,54.74,55M31.86,59,40,46.95l.21-.4A4.08,4.08,0,0,1,41,45.3a4.58,4.58,0,0,1,1.12,1.41l8,11.88A19.68,19.68,0,0,1,31.86,59M20.7,41.2a19.69,19.69,0,0,1,1.18-6.68L34.5,37l.39,0c.08,0,.58.09.68.27,0,0,.42.74-.87,3.23L27.18,55.82A19.76,19.76,0,0,1,20.7,41.2M36.81,21.73l0,0c-1.32,2.37.33,5.52.85,6.4A3.3,3.3,0,0,1,38,29.44a1.79,1.79,0,0,1-.61.09H24.54a19.83,19.83,0,0,1,12.27-7.79m19.71,7.79H44.42a1.69,1.69,0,0,1-.53-.09,3.3,3.3,0,0,1,.35-1.28c.51-.86,2.08-3.87.93-6.22a19.85,19.85,0,0,1,11.35,7.58m-16-10.3a22,22,0,1,0,22,22,22,22,0,0,0-22-22"></path>
                                <path class="ft-1" d="M47.17,34.93l15.67-2.37-.62-1.25H44.66s-4.18.49-2.09-4.11c0,0,3.35-5.43-1.46-5.43s-1.46,5.43-1.46,5.43c2.09,4.6-2.09,4.11-2.09,4.11H20l-.63,1.54L35,34.93s5,0,1.67,6.48L27.11,59.8l1.25,1,9.89-15s1.1-2.49,2.86-2.68c1.77.2,3,2.68,3,2.68l9.75,15,1.25-1L45.5,41.41c-3.34-6.48,1.67-6.48,1.67-6.48"></path>
                                <path class="ft-1" d="M154,0s-7.94,6.27-28.41,6.27v0C105.32,6.24,97.45,0,97.45,0c-21.17,54.79,27.75,82,28.4,82.31h0C126.52,82,175.17,54.79,154,0"></path>
                                <polygon class="ft-3" points="213.53 58.06 218.75 58.06 218.75 59.12 201.83 59.12 201.83 58.06 206.37 58.06 196.67 40.25 192.77 40.25 192.77 58.06 197.87 58.06 197.87 59.12 181.92 59.12 181.92 58.06 186.85 58.06 186.85 24.57 181.92 24.57 181.92 23.51 197.87 23.51 197.87 24.57 192.77 24.57 192.77 38.96 196.44 38.96 205.73 24.57 200.8 24.57 200.8 23.51 212.33 23.51 212.33 24.57 207.63 24.57 200.62 35.16 213.53 58.06"></polygon>
                                <path class="ft-3" d="M245.7,58c-.64.05-1,.05-1.33.05-2.63,0-3-.8-3-6V42.62c0-3.36-.29-4.59-1.32-5.82-1.37-1.65-4.23-2.55-8-2.55-6.26,0-9.92,2.12-9.92,5.76,0,1.39.74,1.93,2.53,1.93s2.58-.64,2.7-2c.11-2.51.11-2.51.63-3.2a4.53,4.53,0,0,1,3.74-1.39c2.17,0,3.55.75,4,2.14.28.91.4,2.3.46,5.77a56.35,56.35,0,0,1-5.45,1.44c-6,1.18-6,1.18-7.57,2-2,1-3,3-3,5.82,0,4.55,2.46,7,7.12,7,4,0,6.65-1.22,8.6-4,.34,2.34,2.12,3.66,4.92,3.66h2.24a24.87,24.87,0,0,0,2.76-.05Zm-9.57-10.23c0,3-.28,5-1,6.4a6.5,6.5,0,0,1-5.51,3.73c-2.58,0-3.73-1.66-3.73-5.44,0-2.24.46-3.79,1.55-4.8s2-1.44,5.5-2.3c1.26-.32,2-.53,3.15-.91Z"></path>
                                <path class="ft-3" d="M258.57,39.4A8.14,8.14,0,0,1,261.72,36a12.27,12.27,0,0,1,6.42-1.75c3.1,0,5.4,1.16,6.31,3.33.7,1.44.7,1.44.7,5.39v15.1h4.25v1.05h-14V58.06h4.37V43c0-5.23-1-7-3.86-7A7.41,7.41,0,0,0,259.52,40c-1,2.08-1.26,3.36-1.26,8.27v9.76h4.5v1.05H248V58.06h4.82V35.87h-4.76V34.81h2.7c2.07,0,6.33-.21,7.82-.37Z"></path>
                                <path class="ft-3" d="M299.8,42.12h-1.44c-.46-4.11-2.86-6.52-6.48-6.52-2.75,0-4.71,1.49-4.71,3.63s1.27,2.94,6.2,4.49c6.14,1.87,8.5,4.06,8.5,7.91,0,4.6-4.19,7.9-9.92,7.9-2.76,0-4.7-.32-9.35-1.47v-8h1.55c.24,5.5,2.75,8.22,7.74,8.22,3.5,0,5.92-1.7,5.92-4.27,0-2.2-1.49-3.53-5.28-4.76s-5.63-2-6.83-3a6,6,0,0,1-2.23-4.86c0-4.06,3.67-7.1,8.54-7.1,2.46,0,4.13.37,7.8,1.63Z"></path>
                                <path class="ft-3" d="M331.52,58c-.63.05-1,.05-1.32.05-2.64,0-3-.8-3-6V42.62c0-3.36-.29-4.59-1.32-5.82-1.36-1.65-4.23-2.55-8-2.55-6.25,0-9.92,2.12-9.92,5.76,0,1.39.74,1.93,2.52,1.93s2.59-.64,2.7-2c.11-2.51.11-2.51.64-3.2a4.51,4.51,0,0,1,3.72-1.39c2.18,0,3.56.75,4,2.14.29.91.4,2.3.46,5.77-2.29.7-4.08,1.18-5.45,1.44-6,1.18-6,1.18-7.58,2-2,1-3,3-3,5.82,0,4.55,2.47,7,7.12,7,4,0,6.66-1.22,8.6-4,.35,2.34,2.12,3.66,4.92,3.66h2.23a24.93,24.93,0,0,0,2.76-.05ZM322,47.77c0,3-.28,5-1,6.4a6.5,6.5,0,0,1-5.51,3.73c-2.58,0-3.73-1.66-3.73-5.44,0-2.24.46-3.79,1.55-4.8s2-1.44,5.51-2.3c1.26-.32,2-.53,3.15-.91Z"></path>
                                <path class="ft-3" d="M351.54,42.12h-1.43c-.46-4.11-2.87-6.52-6.48-6.52-2.76,0-4.7,1.49-4.7,3.63s1.26,2.94,6.2,4.49c6.13,1.87,8.48,4.06,8.48,7.91,0,4.6-4.19,7.9-9.92,7.9-2.76,0-4.71-.32-9.35-1.47v-8h1.54c.23,5.5,2.76,8.22,7.75,8.22,3.5,0,5.91-1.7,5.91-4.27,0-2.2-1.49-3.53-5.28-4.76s-5.62-2-6.82-3a6,6,0,0,1-2.24-4.86c0-4.06,3.67-7.1,8.54-7.1,2.47,0,4.14.37,7.8,1.63Z"></path>
                                <path class="ft-3" d="M403.52,35.08h-1.67c-.11-3.75-.86-5.67-3-7.76a10.8,10.8,0,0,0-7.8-3c-4,0-7.46,1.61-9.42,4.39-1.71,2.57-2.52,6.37-2.52,12.31,0,7,.87,11,2.93,13.6a10.37,10.37,0,0,0,8.32,3.69c6.54,0,10.85-4.49,11.48-12h1.67v10c-5.11,2.46-9.06,3.47-13.48,3.47-10.9,0-17.89-7.05-17.89-18.07,0-11.4,7.35-18.67,18.82-18.67,4,0,7.45.74,12.56,2.72Z"></path>
                                <path class="ft-3" d="M413.39,35.87h-4.65V34.81h2.12c2.07,0,6.19-.21,7.8-.37V58.06h4.42v1.06H408.56V58.06h4.82Zm5.76-9a3.17,3.17,0,0,1-6.33-.06,3.18,3.18,0,0,1,6.33.06"></path>
                                <path class="ft-3" d="M432.9,28.11v6.46h5.86v1.55H432.9V51.36c0,3,.06,4,.4,4.81a2.81,2.81,0,0,0,2.46,1.66c1.72,0,3-1,3.85-2.94l1.15.43c-1.38,2.94-3.44,4.21-7,4.21q-4.55,0-5.66-2.56c-.52-1.07-.57-1.92-.57-6.47V36.12h-3.9V34.57h3.9V28.11Z"></path>
                                <path class="ft-3" d="M462.9,35.87H458.3V34.81h10.27v1.06h-4.13L455.5,62.29c-2.07,6-4.07,8-8,8-3.1,0-5.17-1.64-5.17-4.1a2.4,2.4,0,0,1,2.53-2.61c1.61,0,2.3.85,2.3,2.88.05,1.61.58,2.24,1.89,2.24,2.17,0,3.73-2.08,5.39-7.31l.75-2.29L444.25,35.87h-3.9V34.81H454.8v1.06H450l7.34,16.44Z"></path>
                                <path class="ft-1" d="M66.26,77.93V76.44h1c.55,0,1.08.14,1.08.74s-.68.75-1.37.75Zm0,.46h.95l1.28,1.91h.66l-1.36-1.91a1.19,1.19,0,0,0,1.15-1.21c0-.77-.46-1.2-1.49-1.2H65.7V80.3h.56Zm.87-4a3.73,3.73,0,1,0,3.95,3.71,3.77,3.77,0,0,0-3.95-3.71m0,.53a3.19,3.19,0,1,1-3.33,3.18A3.2,3.2,0,0,1,67.13,75"></path>
                                <path class="ft-1" d="M143,77.93V76.44h1c.55,0,1.08.14,1.08.74s-.68.75-1.37.75Zm0,.46H144l1.29,1.91h.66l-1.36-1.91a1.19,1.19,0,0,0,1.15-1.21c0-.77-.46-1.2-1.49-1.2h-1.75V80.3H143Zm.87-4a3.73,3.73,0,1,0,3.95,3.71,3.77,3.77,0,0,0-3.95-3.71m0,.53a3.19,3.19,0,1,1-3.33,3.18A3.2,3.2,0,0,1,143.92,75"></path>
                                <path class="ft-2" d="M103,12.05c-1.48,5.58-7.72,35.9,23.21,60C157.12,48,150.34,17.82,148.71,12.12c-4.34,1.52-22,6.68-45.73-.07m23.21,62.48c-36.64-27.52-24.94-63.65-24.81-64l.3-.9.91.27c26.66,7.89,46.18.11,46.38,0l.95-.39.35,1c.13.36,12.64,36.45-24,64h0Z"></path>
                                <path class="ft-2" d="M122.09,21.14s-4.74-2-7.24,1.95-1.25,10.31,8.22,11.42,6.27,3.34,6.27,3.34l-.42,4s5.85.42,5.85-6c0-4.74-6.69-5.43-6.69-5.43s-10.59.28-9.89-4c0,0-.28-2,3.76-.14,0,0,3.9.56,1.67-1,0,0-3.62-1.26.14-1.26,0,0,.56.87,2.23-.68a4.36,4.36,0,0,0-2.79-2s.84,2-1.11,1.12c0,0-1.95-1,0-1.39"></path>
                                <path class="ft-2" d="M128.92,52.48s5.43-1.11,4-5.15-7-3.74-7-3.74-3.48.26-2.64-1.55c0,0-.42-2.79-1.53-2.92,0,0-3.62,2.23-1.67,5.15s4,2.82,5.85,3.08,5.3,1.08,2.65,2.77c0,0-.56,1.53.28,2.37"></path>
                                <path class="ft-2" d="M124.46,52.48V50.81s-.14-1.53-1.53-.56-3.48,3.9.84,6.13,5.71,3.07,4.46,4l.28,1.39s3.2.42,2.79-3.35-5.3-4.3-5.3-4.3-2.09-.44-1.53-1.69"></path>
                                <path class="ft-2" d="M124.6,62s-3.48,1.81-1.25,4.18c0,0,.56.83,1-1.11a3,3,0,0,1,.56-1.39Z"></path>
                                <path class="ft-2" d="M125.57,58.47v7.94s.14,1.67,1.11,1.67,1.11-2,1.11-2V59.72a3.63,3.63,0,0,0-2.23-1.25"></path>
                                <path class="ft-2" d="M125,48.16v4.6s.42.84,3.06,1.11V48.58Z"></path>
                                <path class="ft-2" d="M124.74,42.59l3.34.28.84-5.57s0-1.39-2.09-1.39l-3.06-.56a2.53,2.53,0,0,0-1,3.06,24.64,24.64,0,0,0,2,4.18"></path>
                                <path class="ft-2" d="M123.76,27.13v1.81a19.6,19.6,0,0,0,5,.84l.42-.84s4.6-4,5.57-5-.28-2.93-2.09-2.09a34.77,34.77,0,0,1-3.48,1.95l-.56-3.34s-4.87-2.23-5-.42c0,0-.42,0,2,1.53,0,0,2.09,2.21,1.25,2.65a4.46,4.46,0,0,1-2.09.56c-.56,0,1.81,2-1,2.37"></path>
                            </g>
                        </svg>
                    </a>
                    <p>
                        An independent licensee of the Blue Cross and Blue Shield Association<br>
                        © 2020 Blue Cross and Blue Shield of Kansas City. All rights reserved.
                    </p>
                </div>
                <div class="legal">
                    <div class="col1">
                        <a href="http://bluekc.com/consumer/terms-conditions.html" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
                        <a href="http://bluekc.com/consumer/anti-fraud.html" title="Anti-Fraud">Anti-Fraud</a>
                    </div>
                    <div class="col2">
                        <a href="http://bluekc.com/consumer/coverage-terms-and-processes.html" title="Coverage Terms &amp; Processes">Coverage Terms &amp; Processes</a>
                        <a href="http://bluekc.com/consumer/privacy-security.html" title="Privacy &amp; Security">Privacy &amp; Security</a>
                        <a href="http://bluekc.com/consumer/non-discrimination-information.html" title="Non-Descrimination Notice and Information in other Languages">Non-Discrimination Notice &amp; Information in other Languages</a>
                    </div>
                    <div class="clear0"></div>
                </div>
                <div class="clear0"></div>
            </div>
        </div>
    </div>
</nav>
<div class="spacer20 clearbox"></div>
</footer>



  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><\/script>')</script>

  <script src="js/vendor/matchHeight.js"></script>
  <script src="js/vendor/swiper.jquery.js"></script>
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-17139505-20"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-17139505-20');
</script>
</body>

</html>
