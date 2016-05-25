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
            <div class='container owl-carousel owl-loaded'>
              <div class='item'></div>
              <div class='item'></div>
              <div class='item'></div>
              <div class='item'></div>
              <div class='item'></div>
              <div class='item'></div>
            </div>
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
        in_price = $('[name="price_input"]'),
        to_price = $('[name="price-to_input"]'),
        in_milage = $('[name="mileage_input"]'),
        to_milage = $('[name="mileage-to_input"]');

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
  });
</script>
