<?php
  echo "<div class='s_content'>";
    echo "<div class='s_container'>";
      echo "<div class='i_wrapper'>
        <div class='i_container'>
          <div class='i_search'>
            <div class='i_text'>
              <form>
                <p>Hello, my search is<input type='text' class='search_in' name='search_input' placeholder='your search' maxlength='30' autocapitalize='off' autocorrect='off' spellcheck='false' autocomplete='off'>.</p>
                <select name='price_input'>
                  <option>Price From</option>
                  <option>50.000 SEK</option>
                  <option>100.000 SEK</option>
                  <option>250.000 SEK</option>
                  <option>350.000 SEK</option>
                  <option>500.000 SEK</option>
                  <option>650.000 SEK</option>
                </select>
                <select name='price-to_input'>
                  <option>Price To</option>
                  <option>50.000 SEK</option>
                  <option>100.000 SEK</option>
                  <option>250.000 SEK</option>
                  <option>350.000 SEK</option>
                  <option>500.000 SEK</option>
                  <option>650.000 SEK</option>
                  <option>650.000+ SEK</option>
                </select>
                <select name='mileage_input'>
                  <option>Mileage From</option>
                  <option>500 MIL</option>
                  <option>1000 MIL</option>
                  <option>2000 MIL</option>
                  <option>3500 MIL</option>
                  <option>5000 MIL</option>
                  <option>7500 MIL</option>
                  <option>10.000 MIL</option>
                </select>
                <select name='mileage-to_input'>
                  <option>Mileage To</option>
                  <option>500 MIL</option>
                  <option>1000 MIL</option>
                  <option>2000 MIL</option>
                  <option>3500 MIL</option>
                  <option>5000 MIL</option>
                  <option>7500 MIL</option>
                  <option>10.000 MIL</option>
                  <option>10.000+ MIL</option>
                </select>
                <select name='fuel-type_input'>
                  <option>Fuel Type</option>
                  <option>Petrol</option>
                  <option>Diesel</option>
                  <option>Hybrid</option>
                  <option>Electric</option>
                </select>
                <select name='transmission_input'>
                  <option>Transmission</option>
                  <option>Manual</option>
                  <option>Semi-Automatic</option>
                  <option>Automatic</option>
                </select>
                <div class='o_div'>
                  <button type='button' name='input_options'>Search Filter</button>
                </div>
                ".//<button type='button' name='input_button'>Search</button>.
                "
              </form>
            </div>
          </div>
          <div class='i_items'>
            <div class='o_container owl-carousel owl-loaded'>";

              include_once ("cockpit/bootstrap.php");
              include_once ("system/functions.php");

              $cars = get_collection('Collection');
              //print_r($cars[0]['Title']);

              //Sorting algorithm
              $temp;
              for ($j = sizeof($cars)-1; $j >= 0; $j--) {
                for($k=0; $k < $j; $k++) {
                  $m1 = substr($cars[$k]['Model'], 0, 1);
                  $m2 = substr($cars[$k+1]['Model'], 0, 1);
                  if(ord($m1) > ord($m2)) {
                    $temp = $cars[$k];
                    $cars[$k] = $cars[$k+1];
                    $cars[$k+1] = $temp;
                  }
                }
              }

              if(!empty($cars)) {
                for ($i=0; $i < sizeof($cars); $i++) {
                  $cars_img = $cars[$i]['Images'][0]['path'];
                  $cars_title = $cars[$i]['Title'];
                  $cars_desc = $cars[$i]['Description'];
                  $cars_price = $cars[$i]['Price'];
                  $cars_price_m = $cars[$i]['Price_Per_Month'];

                  echo "<div class='item' data-car='c_id".$i."'>
                    <div class='image_placeholder'>";
                      thumbnail($cars_img);
                    echo "</div>";
                    if(strlen($cars_title) > 0) {
                      echo "<h1>$cars_title</h1>";
                    } if(strlen($cars_desc) > 0) {
                      echo "<p class='i_desc'>$cars_desc</p>";
                    } if(strlen($cars_price) > 0) {
                      echo "<div class='p-con'><p class='i_price' data-price='$cars_price'>$cars_price</p></div>";
                    } if(strlen($cars_price_m) > 0) {
                      echo "<div class='p-con'><p class='i_m_price'>$cars_price_m</p></div>";
                    }
                  echo "</div>";
                }
              } else {
                echo "Sorry, currently there is no cars in stock!";
              }

            echo "</div>
          </div>
        </div>
      </div>";
      echo "<div class='i_splash'>
      <p style='color: white; margin-top: 25%; margin-left: 48%;'>Splashscreen<br>loading...</p>
      </div>";
    echo "</div>";
  echo "</div>";
?>
<script type="text/javascript">
  $(function() {
    //Variables
    var $select = $('select'),
        in_search = $('.search_in'),
        in_price = $('[name="price_input"]'),
        to_price = $('[name="price-to_input"]'),
        in_milage = $('[name="mileage_input"]'),
        to_milage = $('[name="mileage-to_input"]');

    in_search.keydown(function(e){
      if(e.which == 13){
        e.preventDefault();
      }
    });

    //Actionlistener select -> click
    $select.on("click", function (e) {
      var e = parseInt(in_price.val().substring(0,7).trim()),
          f = parseInt(to_price.val().substring(0,7).trim()),
          g = parseInt(in_milage.val().substring(0,7).trim()),
          h = parseInt(to_milage.val().substring(0,7).trim());

      if(g == 10 && h == 10) {
        g*=1000;
        h*=1000;
      } else if(h == 10) {
        h*=1000;
      } else if(g == 10) {
        g*=1000;
      }

      if(e > f) {
        in_price.val(to_price.val());
      } if(g > h) {
        in_milage.val(to_milage.val());
      }



    });

    // -----------------------------------------------------------------------------
    // Items Container
    // -----------------------------------------------------------------------------

    var $o_cont = $('.o_container'),
        $o_item = $('.item'),
        $o_i_items = $('.i_items');

    //Variabler
    var $cont_w,
        $cont_h,
        $item_w,
        $item_h,
        $o_items_w,
        $i_items_h;

    //Functions - Size
    function containerSize() {
      $cont_w = $o_cont.width();
      $cont_h = $o_cont.height();
    }

    function itemSize() {
      $item_w = $o_item.width();
      $item_h = $o_item.height();
    }

    function oItemsSize() {
      $o_items_w = $o_i_items.width();
      $o_items_h = $o_i_items.height();
    }

    //Functions - Position Items
    function positionItem() {
      var $size,
          $padding = 0;

      $size = $o_cont.children().size();

      for (var $i = 0; $i <= $size; $i++) {
        if($i !== 0) {
          $padding = (Math.random()*400);
        }
        $o_cont.children().eq($i).css({'margin-left': (($item_w * $i) + $padding) + 'px', 'margin-top': Math.random()*($cont_h - $item_h) + 'px'});
      }
    }


    //Events
    var $window = $(window);

    $window.on('resize', function() {
      containerSize();
      itemSize();
      oItemsSize();
    });

    //Initiering
    containerSize();
    itemSize();
    oItemsSize();

  });
</script>
