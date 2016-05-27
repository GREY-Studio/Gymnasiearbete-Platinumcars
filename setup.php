<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <title>Platinum Cars</title>
    <meta charset="utf-8">
    <meta name="author" content="Emil Olsson">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="main.css"  title="Admin CSS" charset="utf-8">
    <link rel="stylesheet" href="perspectiveRules.css"  title="Parallax CSS" charset="utf-8">
    <link rel="stylesheet" href="owl.carousel.css"  title="Parallax CSS" charset="utf-8">
    <link rel="stylesheet" href="assets/animate.css">
    <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui.min.css">-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta property="og:title" content="Forum">
    <meta property="og:site_name" content="Forum">
    <meta property="og:description" content="Forum">
    <meta name="og:type" content="website">
    <meta name="og:url" content="">
    <meta name="og:image" content="http://.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!--<script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-ui.min.js"></script>-->
  </head>
  <body>
    <?php
      //Initiate CMS
      require_once("cockpit/bootstrap.php");

      //Base Url
      $url = new simpleUrl('/feature/');

      //The pages
      $pages = array('home', 'collection', 'service', 'buying', 'about', 'contact', 'view-items', 'admin');

      if(!$url->segment(1)) //Default -> Home - If there is no extension
        $page = 'home';
      else
        $page = $url->segment(1); //Get URI-Extension
        if(!in_array($page, $pages)){ //If the page doesn't exist in the array -> Error: 404
          $page = 'home';
          //include "404.php";
        }
    ?>
    <div class="app">
      <div class="layout">
        <div class="wrapper">
          <div class="content">
            <div class="main">
              <header onmousedown="return false;">
                <div class="h-container">
                  <a class="h-logo" href="<?php echo $url . '/home';?>">
                    <span>Platinum</span>
                    <span>Cars</span>
                    <span></span>
                  </a>
                  <nav class="h-nav">
                    <div class="h-sound">

                    </div>
                    <div class="h-burger">
                      <span></span>
                    </div>
                  </nav>
                </div>
              </header>
              <!--<div class="grid_wrapper">
                <div class="l1"></div>
                <div class="l2"></div>
                <div class="l3"></div>
                <div class="l4"></div>
                <div class="l5"></div>
                <div class="l6"></div>
                <div class="l7"></div>
              </div>-->
              <div class="home_wrapper x"></div>
              <div class="collection_wrapper x"></div>
              <div class="service_wrapper x"></div>
              <div class="buying_wrapper x"></div>
              <div class="about_wrapper x"></div>
              <div class="contact_wrapper x"></div>
              <div class="view-items_wrapper"></div>
              <div class="admin_wrapper"></div>
              <!--<div class="counter">
                <div class="small_counter">6</div>
                <div class="big_counter">01</div>
              </div>-->
              <div class="m_container" onmousedown="return false;">
                <!--<div class="m_left"></div>
                <div class="m_right"></div>-->
                <div class="c_left circle"></div>
                <div class="c_cursor"></div>
                <div class="c_right circle"></div>
                <div class="m_darken"></div>
                <div class="global-noise"></div>
              </div>
              <div class="bullets" onmousedown="return false;">
                <ul class="b_pagination">
                  <li class="b_dot">
                    <div class="b_icon" data-id="1" data-url="home"></div>
                  </li>
                  <li class="b_dot">
                    <div class="b_icon" data-id="2" data-url="collection"></div>
                  </li>
                  <li class="b_dot">
                    <div class="b_icon" data-id="3" data-url="service"></div>
                  </li>
                  <li class="b_dot">
                    <div class="b_icon" data-id="4" data-url="buying"></div>
                  </li>
                  <li class="b_dot">
                    <div class="b_icon" data-id="5" data-url="about"></div>
                  </li>
                  <li class="b_dot">
                    <div class="b_icon" data-id="6" data-url="contact"></div>
                  </li>
                </ul>
              </div>
              <!--<div class="f_menu">
                <div class="f_inner_content">
                  <div class="f_item_1"></div>
                  <div class="f_item_2"></div>
                  <div class="f_item_3"></div>
                  <div class="f_item_4"></div>
                  <div class="f_item_5"></div>
                  <div class="f_item_6"></div>
                  <div class="f_item_7"></div>
                  <div class="f_item_8"></div>
                </div>
              </div>-->
              <div class="p_content" onmousedown="return false;">
                <div class="box_btn p_btn">
                  <p class="box_btn_text">View the collection</p>
                </div>
              </div>
              <div class="overlay" onmousedown="return false;">
                <nav class="o_nav">
                  <p class="o_title">Discover the</p>
                  <menu class="o_menu">
                    <li class="home">
                      <a href="#" class="context">
                        <p class="o_text">Home</p>
                        <p class="o_total">1</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                    <li class="collection">
                      <a href="#" class="context">
                        <p class="o_text">Collection</p>
                        <p class="o_total">2</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                    <li class="service">
                      <a href="#" class="context">
                        <p class="o_text">Service</p>
                        <p class="o_total">3</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                    <li class="buying">
                      <a href="#" class="context">
                        <p class="o_text">Buying</p>
                        <p class="o_total">4</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                    <li class="about">
                      <a href="#" class="context">
                        <p class="o_text">About</p>
                        <p class="o_total">5</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                    <li class="contact">
                      <a href="#" class="context">
                        <p class="o_text">Contact</p>
                        <p class="o_total">6</p>
                        <p class="o_bar"></p>
                      </a>
                    </li>
                  </menu>
                  <div class="o_cursor"></div>
                </nav>
                <div class="o_nav__graphics">
                  <div class="item" data-scale="0.4" data-mxout="-169" data-myout="-255">
                    <div class="cache"></div>
                    <div class="gra__bg"></div>
                  </div>
                  <div class="item" data-scale="0.45" data-mxout="80" data-myout="-145">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item" data-scale="0.24" data-mxout="-70" data-myout="5">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item" data-scale="0.25" data-mxout="-235" data-myout="-102">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item" data-scale="0.3" data-mxout="-355" data-myout="-255">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item" data-scale="0.35" data-mxout="-35" data-myout="92">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item" data-scale="0.32" data-mxout="80" data-myout="-335">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                  <div class="item is--behind" data-scale="0.31" data-mxout="-260" data-myout="-369">
                    <div class="cache"></div>
                    <div class="gra__bg"></div></div>
                </div>
              </div>
            </div>
            <footer onmousedown="return false;">
              <div class="f_content">
                <div class="box_btn f_t_button">
                  <p class="box_btn_text">The Collection</p>
                </div>
                <ul class="f_buttons">
                  <li class="f_audio f_button">
                  <li class="f_legal f_button">Legal</li>
                  <li class="f_share f_button"><p class="f_text">Share</p></li>
                  <li class="f_follow f_button"><p class="f_text">Follow</p></li>
                  <li class="f_audio f_button">
                    <div class="svg-audio f_audio_icon">
                      <!-- Toggle audio -->
                    </div>
                  </li>
                </ul>
              </div>
              <!--<div class="f_copyright">
                <p>©<?php echo date('Y'); ?></p>
              </div>-->
              <div class="f_tag">
                <p>Sigge Bilajbegovic</p>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/3.0.11/pixi.js" type="text/javascript"></script>
    <script src="assets/jquery.fittext.js" type="text/javascript"></script>
    <script src="assets/jquery.lettering.js" type="text/javascript"></script>
    <script src="jquery.textillate.js" type="text/javascript"></script>
    <script src="jquery.nicescroll.min.js" type="text/javascript"></script>
    <!--<script src="owl.carousel.min.js" type="text/javascript"></script>-->
    <script type="text/javascript">

    // -----------------------------------------------------------------------------
    // Page component
    // Taking care of updating the uri to the new page-extension and load in the
    // necessary elements of the page's belongings, also update current graphics.
    // -----------------------------------------------------------------------------

    //IIFE - Immediately Invoked Function Expression

    (function($) {

      "use strict"

      //The global JQuery object is passed as a parameter
      //The $ is now locally scoped
      var $currPage,
          $currPageElement,
          data,
          $url,
          $pagePositions = [
            "home",
            "collection",
            "service",
            "buying",
            "about",
            "contact"
          ],
          $settings = {
            removeXDuration: 200,
            viewDuration: 800,
            parallaxDuration: 100,
            menuDuration: 200,
            bulletDuration: 200,
            menuDuration: 500,
            longMenuDuration: 2000,
            callItemsDuration: 2000,
            extension: 'feature/'
          };

      //----------------------------------------------------
      // Function setUrl
      // # Updates the url & the feature element's classes
      // @since 1.0
      //----------------------------------------------------

      function setUrl() {
        $currPageElement.removeClass('view').addClass('old'); //Set old
        $currPage = $url; //Update current page
        $currPageElement = $('.' + $currPage + "_wrapper");
        $currPageElement.removeClass('old'); //Remove old on initiated page
        window.history.pushState('','', $url); //Update uri
      }

      //----------------------------------------------------
      // Function loadPage
      // # Ajax request to load current feature element
      // @since 1.0
      //----------------------------------------------------

      function loadPage() {
        $.ajax({
          url: $currPage + ".php",
          dataType: "html",
          success: function(data) {
              $currPageElement.html(data);
          }, error: function (xhr, ajaxOptions, thrownError) {
              console.log("Status: " + xhr.status);
              console.log("Message: " + thrownError);
          }
        });
      }

      //----------------------------------------------------
      // Function getData
      // # Ajax request to get current element's attributes
      // @since 1.0
      //----------------------------------------------------

      function getData() {
        $.ajax({
          url: 'system/conf_feature.php',
          type: "POST",
          data: ({page: $currPage}),
          dataType: 'json',
          success: function(d) {
            data = d;
          }, error: function() {
            console.log("Error! Can't get data - Line 306");
          }
        });
      }

      //----------------------------------------------------
      // Function callParallax
      // # Call the parallax plug-in & add it to s_main
      // @since 1.0
      //----------------------------------------------------

      function callParallax() {
        var options = {
              effectWeight: 1,
              outerBuffer: 1.05,
              elementDepth: 200,
              perspectiveMulti: 1.5,
              enableSmoothing: true
            };

        setTimeout(function() {
          $('.s_main img').addClass('s_image');
        },50);

        setTimeout(function() {
          $('.s_main').logosDistort(options); //Note: Only works with element directly (not as variable).
          //$('.ld-transform-target img').addClass('s_image'); //Note: Only works with element directly (not as variable).
          $('img[alt="site:images/dirty.png"]').addClass('dirty'); //Note: Only works with element directly (not as variable).
        }, $settings.parallaxDuration);
      }

      function pContent() {
        var $bBtn = $('.p_content .box_btn');
        if($currPage == "collection") {
          $bBtn.css({'opacity': '0.35', 'pointer-events': 'auto'});
        } else {
          $bBtn.css({'opacity': '0', 'pointer-events': 'none'});
        }
      }

      function oCursor() {
        var $oNav = $('.o_nav'),
            $element = $('.' + $currPage),
            $oCursor = $('.o_cursor'),
            $oWidth,
            $oLeft;

        $oWidth = $element.width();
        $oLeft = $element.offset().left - $oNav.offset().left;

        $oCursor.css({'width': $oWidth + 'px', 'left': $oLeft + 'px'});
      }

      function o_cursor(spec) {
        var $oNav = $('.o_nav'),
            $o_cursor = $('.o_cursor'),
            o_width = $(spec).width(),
            o_left = $(spec).offset().left - $oNav.offset().left;

        $o_cursor.css({'width': o_width + 'px', 'left': o_left + 'px'});
      }

      function navGraphics(hoveredMenuElement) {
        var $item = $('.item'),
            $oNavGraphics = $('.o_nav__graphics'),
            $transformedItem,
            $itemPosition;

        $item.removeClass('is--initiated');
        $transformedItem = hoveredMenuElement.trim().toLowerCase();
        $itemPosition = $.inArray($transformedItem, $pagePositions);

        $oNavGraphics.children().eq($itemPosition).addClass('is--initiated');
        moveGraphics($itemPosition);
      }

      function setMenu() {
        var $oMenu = $('.o_menu li'),
            $menuUri = $currPage;

        if($menuUri == 'view-items'){$menuUri = 'collection'};
        $oMenu.removeClass('is--hovered');
        $('.' + $menuUri).addClass('is--hovered');

        setTimeout(function () {
          oCursor();
          navGraphics($menuUri);
        }, $settings.menuDuration);
      }

      function updateNumber() {
        var $pagePosition,
            $bigCounter = $('.big_counter');

        $pagePosition = $.inArray($currPage, $pagePositions) + 1;
        $bigCounter.text("0" + $pagePosition);
      }

      function toggleClass(param) {
        var $currentWrapper = $("." + data['title'] + "_wrapper"),
            $leftWrapper = $("." + data['l_slide'] + "_wrapper");

        $currentWrapper.addClass('x');
        if(param === 1){
          $leftWrapper.addClass('y');
          $currentWrapper.removeClass('y');
        } else {
          $currentWrapper.addClass('y');
        }
      }

      function slideLeft() {
        var $title = data['title'],
            $leftSlide = data['l_slide'];

        if($title == 'home'){
          //Nothing
        } else {
          $url = $leftSlide;
          setPage();
          toggleClass(1);
        }
      }

      function slideRight() {
        var $title = data['title'],
            $rightSlide = data['r_slide'];

        if($title == 'contact'){
          //Nothing
        } else {
          $url = $rightSlide;
          setPage();
          toggleClass();
        }
      }

      function updateBullets() {
        var $bDot = $('.b_dot'),
            $currNum = -1;

        $bDot.removeClass('curr');
        setTimeout(function() {
          $currNum = $.inArray($currPage, $pagePositions);
          $('[data-id="' + ($currNum + 1) + '"]').parent().addClass('curr');
        }, $settings.bulletDuration);
      }

      function animateGraphics() {
        var $graphicsItem = $('.o_nav__graphics .item');

        $graphicsItem.each(function(i) {
          var $this = $(this);
            setTimeout(function() {
              $this.toggleClass('on');
            }, 100*i);
        });
      }

      function callLoaded() {
        var $body = $('body'),
            $ascrail = $('#ascrail2000-hr');

        if($currPage == 'view-items') {
          $body.addClass("items-loaded");
          setTimeout(function() {
            //$('.owl-carousel').owlCarousel();
            $('.i_splash').addClass('finished'); //Note: i_splash can't be variable
            $body.addClass("items-done");
            $('.i_wrapper').niceScroll({ //Note: i_wrapper can't be variable
              cursorcolor: "#fff",
              cursoropacitymin: "0.35",
              cursoropacitymax: "0.9",
              cursorborderradius: "0px",
              zindex: "300",
              cursorwidth: "3px"
            });
            //$ascrail.remove();
          }, $settings.callItemsDuration);
        }
      }

      //Moving the graphics on menu-screen
      function moveGraphics(mg_pos) {
        var $mg_item = $('.item'),
            $mg_graph = $('.o_nav__graphics'),
            mg_st = "(0px, 0px, 0px)",
            $ext = "images/",
            $mg_images = [$ext + "f.gif"];

        //Arrays with positions
        var $home_arr = [mg_st, "(828px, 0px, 0px)", "(0px, 800px, 0px)", "(-200px, 918px, 0px)", mg_st, "(0px, 563px, 0px)", "(1050px, -129px, 0px)", mg_st],
            $coll_arr = [mg_st, mg_st, "(-170px, 0px, 0px)", "(-200px, 0px, 0px)", mg_st, "(-290px, 15px, 0px)", mg_st, mg_st],
            $serv_arr = [mg_st, "(0px, -22px, 0px)", mg_st, "(-30px, 0px, 0px)", mg_st, "(1600px, 0px, 0px)", mg_st, mg_st],
            $buyi_arr = [mg_st, "(682px, 0px, 0px)", "(-1311px, 1146px, 0px)", mg_st, mg_st, "(250px, 537px, 0px)", mg_st, mg_st],
            $abou_arr = ["(1088px, 0px, 0px)", "(416px, 300px, 0px)", "(50px, 505px, 0px)", "(-1104px, 917px, 0px)", mg_st, "(30px, 360px, 0px)", "(20px, -132px, 0px)", mg_st],
            $cont_arr = [mg_st, mg_st, "(0px, -15px, 0px)", mg_st, mg_st, mg_st, mg_st, mg_st];

        for(var i = 0; i < 8; i++) {
            var $mg_g_children = $mg_graph.children().eq(i);

            $mg_g_children.css({'margin-left': $mg_g_children.data("mxout") + 'px', 'margin-top': $mg_g_children.data("myout") + 'px', 'transform': 'scale(' + $mg_g_children.data('scale') + ', ' + $mg_g_children.data('scale') +')'});
            $mg_g_children.children().eq(1).css('background-image', 'url(' + $mg_images[i] + ')');

            if($mg_graph.children().eq(i).hasClass('is--initiated')) {
              $mg_g_children.css({'transform': 'translate3d(0px, 0px, 0px) scale(1,1)'});
            } else {
              function update_css(arr) {
                $mg_g_children.css({'transform': 'scale(' + $mg_g_children.data('scale') + ', ' + $mg_g_children.data('scale') +') translate3d' + arr});
              }

              switch (mg_pos) {
                case 0:
                  update_css($home_arr[i]);
                  break;
                case 1:
                  update_css($coll_arr[i]);
                  break;
                case 2:
                  update_css($serv_arr[i]);
                  break;
                case 3:
                  update_css($buyi_arr[i]);
                  break;
                case 4:
                  update_css($abou_arr[i]);
                  break;
                case 5:
                  update_css($cont_arr[i]);
                  break;
                default:
              }
            }
        }
      }

      function setPage() {
        var $old = $('.old');

        setUrl();
        loadPage();
        callParallax();
        playVideo();
        pContent();
        setMenu();
        updateNumber();
        updateBullets();
        setTimeout(function() {
          $currPageElement.removeClass('x');
          setTimeout(function() {
            $currPageElement.addClass('view');
            animate_text();
            $('.old').empty();
          }, $settings.viewDuration);
        }, $settings.removeXDuration);
      }

      function playVideo() {
        setTimeout(function () {
          if($('.ld-transform-target').children().hasClass('display_video')) {
            var $video = $('.display_video');
            $video[0].play();
          }
        }, 1000);
      }

      function animate_text() {

            setTimeout(function () {
              var $s_title = $('.s_title'),
                  $s_head_title = $('.s_head_title');

              $s_title.textillate({

                initialDelay: 500,
                inEffects: [],
                in: {
                  effect: 'fadeInDown',
                  delay: 50,
                  sync: false,
                  shuffle: false,
                  reverse: false,
                  callback: function () {}
                },
                callback: function () {}

              });

              $s_head_title.textillate({

                initialDelay: 800,
                inEffects: [],
                in: {
                  effect: 'fadeInUp',
                  delay: 20,
                  sync: false,
                  shuffle: true,
                  reverse: false,
                  callback: function () {}
                },
                callback: function () {}

              });
            }, 100);
      }

      function animate_menu_text() {

        var $a_o_text = $('.o_text');

        $a_o_text.textillate({

          initialDelay: 300,
          inEffects: [],
          in: {
            effect: 'fadeInUp',
            delay: 50,
            sync: false,
            shuffle: true,
            reverse: false,
            callback: function () {}
          },
          out: {
            effect: 'fadeInDown',
            delay: 50,
            sync: false,
            shuffle: true,
            reverse: false,
            callback: function () {}
          },
          callback: function () {}

        });
      }

      // -----------------------------------------------------------------------------
      // Action Events Department
      // -----------------------------------------------------------------------------

      function onScroll(e) {
        e.preventDefault();

        if($("." + $currPage + "_wrapper").hasClass('view')) {

          if($('.home').is(':animated')) {
            return false;
          }

          //Mousewheel module
          if(e.type == 'mousewheel') {
            if(e.originalEvent.wheelDelta > 0) {
              slideLeft();
            } else {
              slideRight();
            }
          } else if(e.type == 'DOMMouseScroll') {
            if(e.originalEvent.detail > 0) {
              slideLeft();
            } else {
              slideRight();
            }
          }

          //Ajax post current page / get info
          getData();
        }
      }

      function onContainerClick(e) {
        var $this = $(this),
            $currWrapper = $("." + $currPage + "_wrapper");

        if($this.hasClass('m_left') && $currWrapper.hasClass('view')){
          slideLeft();
        } else if($this.hasClass('m_right') && $currWrapper.hasClass('view')) {
          slideRight();
        }
        callParallax();
        getData();
        updateBullets();
      }

      function onBurgerClick(e) {
        var $body = $('body'),
            $fInnerContent = $('.f_inner_content');

        //$('.o_nav__graphics').children().removeClass('on');

        if($body.hasClass('h-menu-active')) {
          animateGraphics();
          setTimeout(function() {
            $body.toggleClass('h-menu-active');
          }, $settings.menuDuration);
        } else {
          setTimeout(function() {
            $fInnerContent.addClass('loading');
          }), $settings.longMenuDuration;
          $body.toggleClass('h-menu-active');
          setTimeout(function() {
            animateGraphics();
            //animate_menu_text();
          }, $settings.menuDuration);
        }

        setTimeout(function() {
          $body.toggleClass('is-animated');
        }, $settings.menuDuration);

      }

      function onPButtonClick(e) {
        $url = 'view-items';
        setPage();
        callLoaded();
      }

      var $start;

      function onZoom(e) {
        var $cX,
            $cY,
            $cXOld,
            $cYOld,
            $offset,
            $this = $(this),
            $c_cursor = $('.c_cursor'),
            $c_left = $('.c_left'),
            $c_right = $('.c_right'),
            $m_cont = $('.m_container'),
            $ld_container = $('.ld-smart-container');

        $ld_container.addClass('holding');

        $offset = $this.offset();
        $cX = (e.pageX - $offset.left - $c_cursor.width() / 2);
        $cY = (e.pageY - $offset.top - $c_cursor.height() / 2);

        $cXOld = $cX; $cYOld = $cY; //Debug: Center dot at cursor origo

        /*if($currPage == 'home'){
          $c_left.css('display', 'none');
        } else {
          $c_left.css('display', 'block');
        }*/

        $start = $cX;

        $c_cursor.css({'margin-top': $cY, 'margin-left': $cX});
        $c_left.css({'margin-top': $cY+6, 'margin-left': $cX-(200 - 15)});
        $c_right.css({'margin-top': $cY+6, 'margin-left': $cX+200});

        $m_cont.addClass('c_hold');
      }

      function onMove(e) {
        var $cX,
            $cY,
            $offset,
            $this = $(this),
            $c_cursor = $('.c_cursor'),
            $c_left = $('.c_left'),
            $c_right = $('.c_right'),
            $ld_container = $('.ld-smart-container');

        if($ld_container.hasClass('holding')){
          $offset = $this.offset();
          $cX = (e.pageX - $offset.left - $c_cursor.width() / 2);

          if($start - (200 - 15) >= $c_cursor.offset().left){

          } else if($start + 200 <= $c_cursor.offset().left) {

          } else {
            $c_cursor.css('margin-left', $cX-13);
          }

            /*$('.m_container').off('mousemove');

            setTimeout(function () {
              bindings();
            }, 1000);

            callParallax();
            getData();
            updateBullets();*/

        }
      }

      function onReturn() {
        var $c_left = $('.c_left'),
            $c_right = $('.c_right'),
            $m_cont = $('.m_container'),
            $ld_container = $('.ld-smart-container');

        $ld_container.removeClass('holding');
        $m_cont.removeClass('c_hold');
      }

      function hoverOMenu() {
        var $oMenu = $('.o_menu li');

        $oMenu.hover(function() {
          var $this = $(this);

          $oMenu.removeClass('is--hovered');
          $this.addClass('is--hovered');
          o_cursor($this);
          navGraphics($this.find('.o_text').text());
        });
      }

      function bindings() {
        $('.m_left').on('click', onContainerClick);
        $('.m_right').on('click', onContainerClick);
        $('.m_container').on('mousewheel DOMMouseScroll', onScroll);
        $('.m_container').on('mousedown', onZoom).bind('mouseup mouseleave', onReturn).bind('mousemove', onMove);
        $('.h-burger').on('click', onBurgerClick);
        $('.p_btn').on('click', onPButtonClick);
        hoverOMenu();
      }

      //Listen for the jQuery ready event on the document
      $(function() {
        //The DOM is ready
        $currPage = "<?php echo $page; ?>";
        $url = $currPage;
        $currPageElement = $("." + $currPage + "_wrapper");

        setPage();
        getData();
        updateBullets();
        callLoaded();
        playVideo();
        bindings();
      });

    })(jQuery);

    // -----------------------------------------------------------------------------
    // Update Position Component
    // -----------------------------------------------------------------------------

    (function($) {

      var $bPagination,
          $fContent,
          $window;

      function setPos() {
        var $w_width = $(window).width(),
            $w_height = $(window).height(),
            $bTop = $w_height - 38,
            $bLeft = ($w_width/2) - 52,
            $sBot= $w_height/2;

        $bPagination.css({'top' : $bTop + 'px', 'left' : $bLeft + 'px'});
        //$fContent.css('bottom', $sBot + 'px');
      }

      $(function() {
        $bPagination = $('.b_pagination');
        $fContent = $('.f_content');
        $window = $(window);

        setPos();
        $window.on('resize', setPos);
      });
    })(jQuery);

    // -----------------------------------------------------------------------------
    // Manipulating DOM Component
    // -----------------------------------------------------------------------------

    (function($) {

      function hoverBoxBtn() {
        var $boxBtn = $('.p_content .box_btn');

        $boxBtn.hover(function() {
          $(this).css('opacity', '1');
        }, function(){
          $(this).css('opacity', '0.35');
        });
      }

      function hoverFTButton() {
        var $FTButton = $('.f_t_button');

        $FTButton.hover(function() {
          $(this).toggleClass('f_t_active');
        });
      }

      function hoverFButton() {
        var $FButton = $('.f_button');

        $FButton.hover(function(e) {
          $(this).toggleClass('f_active');
        });
      }

      function hoverBDot() {
        var $bDot = $('.b_dot');

        $bDot.hover(function(e) {
          $(this).addClass('b_hover');
        }, function(e) {
          $(this).removeClass('b_hover');
        });
      }

      function bindings() {
        hoverBoxBtn();
        hoverBDot();
        hoverFButton();
        hoverFTButton();
      }

      $(function() {
        bindings();
      });
    })(jQuery);

    // -----------------------------------------------------------------------------
    // NoiseFilter Canvas Component
    // -----------------------------------------------------------------------------

    (function($) {

      function NoiseFilter() {
        var vertexShader = null;
        var fragmentShader = [
          'precision highp float;',
      	'',
      	'varying vec2 vTextureCoord;',
      	'varying vec4 vColor;',
      	'',
      	'uniform float multiplier;',
      	'uniform sampler2D uSampler;',
      	'',
      	'float rand(vec2 co)',
      	'{',
      	'    return fract(sin(dot(co.xy, vec2(30, 50))) * (5000.0+(10000.0*multiplier)));',
      	'}',
      	'',
      	'void main()',
      	'{',
      	'    vec4 color = texture2D(uSampler, vTextureCoord);',
      	'',
      	'    float diff = (rand(vTextureCoord) - 0.85 ) ;',
      	'',
      	'    color.r += diff;',
      	'    color.g += diff;',
      	'    color.b += diff;',
      	'',
      	'    gl_FragColor = color;',
      	'}'
        ].join('\n');
        var uniforms = {
        	multiplier: { type: '1f', value: 0.5 },
        };

        PIXI.AbstractFilter.call(this,
          vertexShader,
          fragmentShader,
          uniforms
        );
      }

      NoiseFilter.prototype = Object.create(PIXI.AbstractFilter.prototype);
      NoiseFilter.prototype.constructor = NoiseFilter;

      Object.defineProperties(NoiseFilter.prototype, {
          multiplier: {
              get: function ()
              {
                  return this.uniforms.multiplier.value;
              },
              set: function (value)
              {
                  this.uniforms.multiplier.value = value;
              }
          }
      });

      var bgRenderer,
          bgStage,
          bgBackground,
          bgFilter;

      function bgCanvasInit() {
    		// Selectors
    		var container = $('.global-noise');
    		$('body').addClass('no-background');

        setTimeout(function () {
        	$('body').addClass('initiated');
        }, 300);

    		// Create renderer
    		bgRenderer = PIXI.autoDetectRenderer(container.width(), container.height(), {transparent: true});
    		bgRenderer.clearBeforeRender = true;

    		//Add the canvas to the HTML document
    		container.append(bgRenderer.view);

    		// Create a container object called the `stage`
    		bgStage = new PIXI.Container();

    		// Create background
    		bgBackground = new PIXI.Graphics();
    		bgBackground.beginFill(0x070707, 0);
    		bgBackground.drawRect(0, 0, container.width(), container.height());
    		bgBackground.endFill();
    		bgStage.addChild(bgBackground);

    		// Noise filter
    		bgFilter = new NoiseFilter();
    		bgStage.filters = [bgFilter];

    		// Move noise
    		setInterval(function() {
    			bgFilter.multiplier = Math.random();
    		}, 50);

    		// Render
    		bgCanvasRender();
      }

      function bgCanvasRender() {
    		bgRenderer.render(bgStage);

    		// rAF
    		requestAnimationFrame(function() {
    			bgCanvasRender()
    		});
      }

      $(function() {
        bgCanvasInit();
        console.log("Hello, welcome to an amazing webpage!");
      });
    })(jQuery);

    </script>
    <script src="jquery.logosDistort.min.js"></script>
  </body>
</html>
