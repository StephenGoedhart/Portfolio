<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- external css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- internal css -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/structure.css">
  <link rel="stylesheet" type="text/css" href="css/mainstyle.css">
  <link rel="stylesheet" type="text/css" href="css/mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="css/tablet-menu.css">

</head>
<body>
  <!-- start of absolute positioned elements -->
  <div id="mobile-menu" class=" hidden-on-tb hidden-on-d">
    <div id="mobile-menu-home" class="bg-blue-normal">
      <span class="fa fa-bars"></span>
      <div id="mobile-menu-item-1" class="mobile-menu-item bg-orange-normal"></div>
      <div id="mobile-menu-item-2" class="mobile-menu-item bg-orange-normal"></div>
      <div id="mobile-menu-item-3" class="mobile-menu-item bg-orange-normal"></div>
    </div>
  </div>

  <div id="tablet-menu" class="menu-inactive bg-black-normal hidden-on-m hidden-on-d">

    <div class="col-tb-5 height-tb-12">
      <div class="col-tb-2 height-tb-8 bg-tb-blue-normal bottom-right-border-radius-m-12 bottom-right-border-radius-tb-5 float-tb-left padding-tb-1">
        <div id="logo-tb"></div>
      </div>
      <div class="col-tb-5 height-tb-12 float-tb-left bg-black-normal">
        <div class="col-tb-4 margin-top-tb-6 float-tb-left">
          <ul>
            <li>HOME</li>
            <li>PORTFOLIO</li>
            <li>ABOUT ME</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="tablet-menu-hamburger-icon" class="text-white bg-black-normal iconInactive hidden-on-m hidden-on-d"><span class="fa fa-bars"></span></div>
  <!-- end of absolute positioned elements -->
  <div class="col-d-12 height-d-6 bg-black-darker"> </div>
    <!-- header -->
    <div id="header" class="col-m-12 height-m-10 col-tb-12 height-tb-11 bg-black-normal text-white">
      <!-- logo -->
      <div class="col-m-6 height-m-9 col-tb-2 height-tb-8 bg-m-orange-normal bg-tb-white-lighter bottom-right-border-radius-m-12 bottom-right-border-radius-tb-5 float-m-left float-tb-left padding-tb-1">
        <div id="logo"></div>
      </div>
      <div class="height-m-4 col-m-5 float-m-right margin-right-m-6 hidden-on-tb hidden-on-d"><h1><b>Stephen Goedhart</b></h1></div>
      <div class="height-m-3 col-m-5 float-m-right margin-right-m-6 margin-top-m-5 hidden-on-tb hidden-on-d text-align-m-right"><h2>Software engineer</h2></div>
      <div class=" height-m-7 col-m-5 float-m-right margin-right-m-6 margin-top-m-5 hidden-on-tb hidden-on-d text-align-m-right"><h2>sdg25@hotmail.com<h2></div>

      <a href="https://www.facebook.com/stephen.goedhart" target="_blank"><div class="sm-icon sm-fb fa fa-facebook"></div>
      <a href="https://www.linkedin.com/in/stephen-goedhart-452a4574/ " target="_blank"><div class="sm-icon sm-in fa fa-linkedin"></div></a>
      <a href="tel:0615960902"><div class="sm-icon sm-te fa fa-phone bg-orange-darker hidden-on-tb hidden-on-d"></div></a>
      <a href="https://github.com/StephenGoedhart" target="_blank"><div class="sm-icon sm-gi fa fa-github  hidden-on-m"></div></a>
      <div class="height-tb-6 col-tb-12 float-tb-middle hidden-on-m hidden-on-d"></div>
      <div class="height-tb-6 col-tb-6 float-tb-middle hidden-on-m hidden-on-d text-align-tb-center"><h2>Writing <b>beautiful code</b> with a passion!<h2></div>
      <!-- seperator -->
      <div id="seperator" class="col-m-12 height-m-4 col-tb-12 height-tb-4">
        <div id="seperator-border" class="height-m-4 height-tb-4 float-m-left float-tb-left bg-white-normal margin-top-m-7 margin-top-tb-7"></div>
      <div id="seperator-bar-1" class="seperator-bar height-m-4 height-tb-4 float-m-right float-tb-right bg-white-normal seperator-margin-top"></div>
      <div id="seperator-bar-2" class="seperator-bar height-m-4 height-tb-4 float-m-right float-tb-right bg-white-normal"></div>
      <div id="seperator-bar-3" class="seperator-bar height-m-4 height-tb-4 float-m-right float-tb-right bg-white-normal seperator-margin-top"></div>
      <div id="seperator-bar-4" class="seperator-bar height-m-4 height-tb-4 float-m-right float-tb-right bg-white-normal"></div>
      </div>
      <!-- end of seperator -->
    </div>

    <!-- content -->
    <div class="col-m-12 col-tb-12 bg-white-normal">
      <div class="col-m-10 col-tb-10 height-m-4 height-tb-4"></div>
      <!-- item 1 -->
      <div class="col-m-10 height-m-12 bg-black-darker float-m-middle"></div>
      <!-- item 2 -->
      <div class="col-m-10 height-m-12 bg-black-darker float-m-middle margin-top-m-6"></div>
      <!-- item 3 -->
      <div class="col-m-10 height-m-12 bg-black-darker float-m-middle margin-top-m-6"></div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/seperator.js"></script>
    <script>
    $("#tablet-menu-hamburger-icon").click(function () {
      $("#tablet-menu-hamburger-icon").toggleClass("iconActive");
      $("#tablet-menu").toggleClass("menu-active");
    });
    </script>
</body>
</html>
