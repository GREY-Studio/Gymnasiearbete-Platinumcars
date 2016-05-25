


      //IIFE - Immediately Invoked Function Expression
      /*(function(code) {

        //The global JQuery object is passed as a parameter
        code(window.jQuery, window, document);

      }(function($, window, document) {

      //The $ is now locally scoped

      //Listen for the jQuery ready event on the document
      $(function() {
        //The DOM is ready

        //Variables
        var curr_page = "<?php echo $page; ?>";
        var last_page;
        var link = $('a');
        var data = [];
        var b_top = 0;
        var b_left = 0;
        var h_body = $('body');

        //Set a new url without refreshing the page
        function set_url(title, url) {
          $("." + curr_page + "_wrapper").removeClass('view').addClass('old'); //Empty
          curr_page = url;
          $("." + curr_page + "_wrapper").removeClass('old');
          window.history.pushState('',title, "<?php echo $url . '/'; ?>" + url);
        }

        //Go back without refresh
        /*var count = 0; // needed for safari
        window.onload = function () {
            if (typeof history.pushState === "function") {
                history.pushState("back", null, null);
                window.onpopstate = function () {
                    history.pushState('back', null, null);
                    if(count == 1){window.history.pushState('','', "<?php echo $url . '/'; ?>" + 'home')}
                    console.log(last_page);
                 };
             }
         }
        setTimeout(function(){count = 1;},200);


        //Load a new page from the current url
        function load_page() {
          //Ajax server request
          $.ajax({
            url: curr_page + ".php",
            dataType: "html",
            success: function(data) {
                //set_url(curr_page, curr_page);
                $("." + curr_page + "_wrapper").html(data);
            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log("Status: " + xhr.status);
                console.log("Message: " + thrownError);
            }
          });
        }

        //Animate the loaded page
        function animate() {
            $(".s_content").animate({'opacity' : '1'}, 200, "easeInOutCubic");
        }

        //Enable new page url/load/animation
        function set_page(tiurl) {
          set_url(tiurl, tiurl);
          load_page();
          call_feature();
          p_content(tiurl);
          set_menu(tiurl);
          update_number(tiurl);
          setTimeout(function() {
            $("." + tiurl + "_wrapper").removeClass('x');
            setTimeout(function() {
              $("." + tiurl + "_wrapper").addClass('view');
              $('.old').empty();
            }, 800);
          }, 200);
        }

        //Enable links without refreshing the page
        link.click(function() {
          var location = $(this).text();
          //set_page(curr_page);
        });

        //Set class old to loaded object
        function get_data() {
          $.ajax({
            url: 'system/conf_feature.php',
            type: "POST",
            data: ({page: curr_page}),
            dataType: 'json',
            success: function(d) {
              data = d;
            }, error: function() {
              console.log("Error! Can't get data - Line 291");
            }
          });
        }

        //Call feature parallax effects
        function call_feature() {
          var options = {
            effectWeight: 1,
            outerBuffer: 1.05,
            elementDepth: 200,
            perspectiveMulti: 1.5,
            enableSmoothing: true
          };

          setTimeout(function() {
            $('.s_main').logosDistort(options);

            var ld_trans_img = $('.ld-transform-target img');
            ld_trans_img.addClass('s_image');
            $('img[alt="site:images/dirty.png"]').addClass('dirty');
          }, 100);
        }

        //Toggle some feature classes
        function toggle_class(param) {
          $("." + data['title'] + "_wrapper").addClass('x');
          if(param === 1){
            $("." + data['l_slide'] + "_wrapper").addClass('y');
            $("." + data['title'] + "_wrapper").removeClass('y');
          }
        }

        //Toggle feature classes for right slides
        function r_n_slide() {
          set_page(data['r_slide']);
          $("." + data['title'] + "_wrapper").addClass('y');
          toggle_class();
        }

        function slide_switch_l() {
          switch (data['title']) {
            case 'home':
              //Nothing
              break;
            case 'collection':
              //Load left slide + animate
              set_page(data['l_slide']);
              toggle_class(1);
              break;
            case 'service':
              set_page(data['l_slide']);
              toggle_class(1);
              break;
            case 'buying':
              set_page(data['l_slide']);
              toggle_class(1);
              break;
            case 'about':
              set_page(data['l_slide']);
              toggle_class(1);
              break;
            case 'contact':
              set_page(data['l_slide']);
              toggle_class(1);
              break;
            default:
          }
        }

        function slide_switch_r() {
          switch (data['title']) {
            case 'home':
              set_page(data['r_slide']);
              toggle_class();
              break;
            case 'collection':
              //Load left slide + animate
              r_n_slide();
              break;
            case 'service':
              r_n_slide();
              break;
            case 'buying':
              r_n_slide();
              break;
            case 'about':
              r_n_slide();
              break;
            case 'contact':
              //Nothing
              break;
            default:
          }
        }

        //Make active dot white
        function update_bullets() {
          $('.b_dot').removeClass('curr');
          setTimeout(function() {
            $('[data-id="' + data['id'] + '"]').parent().addClass('curr');
            get_data();
          }, 120);
        }

        //Update page number
        function update_number(lab) {
          var temp = 1;
          switch (lab) {
            case 'home':
              temp = 1;
              break;
            case 'collection':
              temp = 2;
              break;
            case 'service':
              temp = 3;
              break;
            case 'buying':
              temp = 4;
              break;
            case 'about':
              temp = 5;
              break;
            case 'contact':
              temp = 6;
              break;
            default:
          }
          $('.big_counter').text("0" + temp);
        }

        //Get feature slide from database
        get_data();

        //Initiate a standard page
        set_page(curr_page);

        //Initiate bullets
        update_bullets();

        //Initiate parallax
        call_feature();

        //Set 'y' class for object's left slider
        setTimeout(function() {
          if(data['l_slide'] != 'none'){
            $("." + data['l_slide'] + "_wrapper").addClass('y');
          } else {
            $("." + curr_page + "_wrapper").addClass('y');
          }
        }, 200);

        //Scroll event for the slider
        $('.m_container').on('mousewheel DOMMouseScroll', function(e) {
          e.preventDefault();

          if($("." + curr_page + "_wrapper").hasClass('view')) {

            if($('.home').is(':animated')) {
              return false;
            }

            //Mousewheel module
            if(e.type == 'mousewheel') {
              if(e.originalEvent.wheelDelta > 0) {
                call_feature();
                slide_switch_l();
                update_bullets();
              } else {
                slide_switch_r();
                update_bullets();
              }
            } else if(e.type == 'DOMMouseScroll') {
              if(e.originalEvent.detail > 0) {
                call_feature();
                slide_switch_l();
                update_bullets();
              } else {
                slide_switch_r();
                update_bullets();
              }
            }

            //Ajax post current page / get info
            get_data();
          }
        });

        //Set menu items
        function set_menu(m_uri) {
          if(m_uri == 'view-items'){
            m_uri = 'collection';
          }
          $('.o_menu li').removeClass('is--hovered');
          $('.' + m_uri).addClass('is--hovered');
          setTimeout(function() {
            o_cursor('.' + m_uri);
            nav_graphics(m_uri);
          }, 200);
        }

        //Menu burger animations
        $('.h-burger').click(function() {
          //$('.o_nav__graphics').children().removeClass('on');
          if(h_body.hasClass('h-menu-active')){
            animate_graphics();
            setTimeout(function() {
              h_body.toggleClass('h-menu-active');
            }, 500);
          } else {
            setTimeout(function() {
              $('.f_inner_content').addClass('loading');
            }), 2200;
            h_body.toggleClass('h-menu-active');
            setTimeout(function() {
              animate_graphics();
            }, 500);

          }
          setTimeout(function() {
            h_body.toggleClass('is-animated');
          }, 500);
        });

        //On click left -> load left slider
        $('.m_left').click(function() {
          if($("." + curr_page + "_wrapper").hasClass('view')) {
            slide_switch_l();
            call_feature();
            get_data();
            update_bullets();
          }
        });

        //On click right -> load right slider
        $('.m_right').click(function() {
          if($("." + curr_page + "_wrapper").hasClass('view')) {
            slide_switch_r();
            call_feature();
            get_data();
            update_bullets();
          }
        });

        //Check collection inner pages
        function call_loaded() {
          if(curr_page == "view-items") {
            h_body.addClass("items-loaded");
            setTimeout(function() {
              $('.i_splash').addClass('finished');
              h_body.addClass("items-done");
              $('.i_wrapper').niceScroll({
                cursorcolor: "#fff",
                cursoropacitymin: "0.35",
                cursoropacitymax: "0.9",
                cursorborderradius: "0px",
                zindex: "300",
                cursorwidth: "3px"
              });
              $('#ascrail2000-hr').remove();
            }, 2000);
          }
        }

        //On collection items button click
        $('.p_btn').click(function() {
          set_page('view-items');
          call_loaded();
        });

        //Get scrollrails
        call_loaded();

        //Load clickable content for pages
        function p_content(vari) {
          var b_btn = $('.p_content .box_btn');
          if(vari == "collection") {
            b_btn.css({'opacity': '0.35', 'pointer-events': 'auto'});
          } else {
            b_btn.css({'opacity': '0', 'pointer-events': 'none'});
          }
        }

        //Animate text by removing anim
        function text_anim() {
          setTimeout(function() {
            $('.s_t_container').removeClass('anim');
          }, 500);
        }

        //Set the position of bullets
        function set_pos() {
          var w_width = $(window).width();
          var w_height = $(window).height();
          b_top = w_height - 38;
          b_left = (w_width/2) - 52;

          s_bot = w_height/2;

          $('.b_pagination').css({'top' : b_top + 'px', 'left' : b_left + 'px'});
          $('.f_content').css('bottom', s_bot + 'px');
        }

        //Animate dots on hover
        $('.b_dot').hover(function() {
          $(this).addClass('b_hover');
        }, function() {
          $(this).removeClass('b_hover');
        });

        $('.b_dot').click(function() {
          var curr_dot = $(this).children().attr('data-url');
          set_page(curr_dot);
        });

        //Animate footer items on hover
        $('.f_button').hover(function() {
          $(this).toggleClass('f_active');
        });

        $('.f_t_button').hover(function() {
          $(this).toggleClass('f_t_active');
        });

        $('.p_content .box_btn').hover(function() {
          $(this).css('opacity', '1');
        }, function(){
          $(this).css('opacity', '0.35');
        });

        //Initiate bullets
        set_pos();

        //Update positions on resize
        $(window).resize(function() {
          set_pos();
        });

        function o_cursor(spec) {
          var o_width = $(spec).width();
          var o_left = $(spec).offset().left - $('.o_nav').offset().left;

          $('.o_cursor').css({'width': o_width + 'px', 'left': o_left + 'px'});
        }

        //Menu hover effects
        var o_menu = $('.o_menu li');
        o_menu.hover(function() {
          o_menu.removeClass('is--hovered');
          $(this).addClass('is--hovered');
          o_cursor($(this));
          nav_graphics($(this).find('.o_text').text());
        });

        //Set is--initiated on the items connected to menu titles
        function nav_graphics(n_gra) {
          var n_item = $('.item');
          var pos = null;

          n_item.removeClass('is--initiated');
          var n_g = n_gra.trim().toLowerCase();

          switch (n_g) {
            case 'home':
              pos = 0;
              break;
            case 'collection':
              pos = 1;
              break;
            case 'service':
              pos = 2;
              break;
            case 'buying':
              pos = 3;
              break;
            case 'about':
              pos = 4;
              break;
            case 'contact':
              pos = 5;
              break;
            default:

          }

          $('.o_nav__graphics').children().eq(pos).addClass('is--initiated');
          move_graphics(pos);
        }

        //Animate graphics
        function animate_graphics() {
          $('.o_nav__graphics .item').each(function(i) {
            var item = $(this);
              setTimeout(function() {
                item.toggleClass('on');
              }, 100*i);
          });
        }

        //Moving the graphics on menu-screen
        function move_graphics(mg_pos) {
          var mg_item = $('.item');
          var mg_graph = $('.o_nav__graphics');
          var mg_st = "(0px, 0px, 0px)";

          //Arrays with positions
          var home_arr = [mg_st, "(828px, 0px, 0px)", "(0px, 800px, 0px)", "(-200px, 918px, 0px)", mg_st, "(0px, 563px, 0px)", "(1050px, -129px, 0px)", mg_st];
          var coll_arr = [mg_st, mg_st, "(-170px, 0px, 0px)", "(-200px, 0px, 0px)", mg_st, "(-290px, 15px, 0px)", mg_st, mg_st];
          var serv_arr = [mg_st, "(0px, -22px, 0px)", mg_st, "(-30px, 0px, 0px)", mg_st, "(1600px, 0px, 0px)", mg_st, mg_st];
          var buyi_arr = [mg_st, "(682px, 0px, 0px)", "(-1311px, 1146px, 0px)", mg_st, mg_st, "(250px, 537px, 0px)", mg_st, mg_st];
          var abou_arr = ["(1088px, 0px, 0px)", "(416px, 300px, 0px)", "(50px, 505px, 0px)", "(-1104px, 917px, 0px)", mg_st, "(30px, 360px, 0px)", "(20px, -132px, 0px)", mg_st];
          var cont_arr = [mg_st, mg_st, "(0px, -15px, 0px)", mg_st, mg_st, mg_st, mg_st, mg_st];

          //Array with image links
          var ext = "images/";
          var mg_images = [ext + "pcc3.png"];

          for(var i = 0; i < 8; i++) {
              var mg_g_children = mg_graph.children().eq(i);

              mg_g_children.css({'margin-left': mg_g_children.data("mxout") + 'px', 'margin-top': mg_g_children.data("myout") + 'px', 'transform': 'scale(' + mg_g_children.data('scale') + ', ' + mg_g_children.data('scale') +')'});
              mg_g_children.children().eq(1).css('background-image', 'url(' + mg_images[i] + ')');

              if(mg_graph.children().eq(i).hasClass('is--initiated')) {
                mg_g_children.css({'transform': 'translate3d(0px, 0px, 0px) scale(1,1)'});
              } else {

                function update_css(arr) {
                  mg_g_children.css({'transform': 'scale(' + mg_g_children.data('scale') + ', ' + mg_g_children.data('scale') +') translate3d' + arr});
                }

                switch (mg_pos) {
                  case 0:
                    update_css(home_arr[i]);
                    break;
                  case 1:
                    update_css(coll_arr[i]);
                    break;
                  case 2:
                    update_css(serv_arr[i]);
                    break;
                  case 3:
                    update_css(buyi_arr[i]);
                    break;
                  case 4:
                    update_css(abou_arr[i]);
                    break;
                  case 5:
                    update_css(cont_arr[i]);
                    break;
                  default:
                }


              }
          }
        }

        //Items - Search
        $('.search_in').click(function() {
          var $self = $(this);
          alert($self);
        });

      });
    }));*/
