
<?php
  //Function | Template for feature pages
  function set_feature($col_name, $nr) {
    include_once ("cockpit/bootstrap.php");
    include_once ("system/functions.php");

    //Get the collection from cms named 'Feature' -> to Array (in system/functions.php)
    $items_arr = get_collection_labels($col_name, $nr);
    $items_img = get_collection_images($col_name, $nr);
    $items_page = get_collection_page($col_name, $nr);
    $items_sub = get_collection_sub_info($col_name, $nr);
    $items_video = get_collection_video($col_name, $nr);
    $items_title = get_collection_title($col_name, $nr);
    $items_head_title = get_collection_head_title($col_name, $nr);
    $items_logo = get_collection_logo_enable($col_name, $nr);

    //print_r(get_collection('Feature'));
    //print_r($items_video);

    echo "<div class='s_content'>";
      echo "<div class='s_main'>";
        foreach ($items_img as $image) {
          thumbnail($image['path']);
        }
        foreach ($items_video as $video) {
            echo "<video class='display_video' autoplay loop muted>
              <source src='".substr($video, 5)."' type='video/mp4'>
            </video>";
        }
        if($items_arr[0] !== '') { echo "<div class='s_text'>
          <div class='s_t_container anim'>";
            for($i = 0; $i < sizeof($items_arr); $i++) {
              echo "<p>$items_arr[$i]</p>";
            }
        echo "</div>
        </div>";
        }
      echo "</div>";
      echo "<div class='s_container'>";
        echo "<div class='s_info'>";
          echo "<p class='s_page'>$items_page</p>";
          if(strcmp($items_sub, 'null') !== 0) {
            echo "<p class='s_sub'>$items_sub</p>";
          }
        echo "</div>";
      echo "</div>";
      if($items_title !== "not-loaded") {
        echo "<div class='s_inner'>
          <h1 class='s_title_content'>";
            if($items_logo){
              echo "<span class='words s_logo_container'>
                EST.
                <img class='s_logo' src='images/platinumcarslogo.png'>
                2004
              </span>";
            }
            echo "
            <span class='words'>
              <span class='s_title'>" .$items_title. "</span>
            </span>
            <span class='words'>
              <span class='s_head_title' "; if($nr === 0) { echo "id='main_screen'"; } echo ">" .$items_head_title. "</span>
            </span>
          </h1>
        </div>";
      }
      echo "<div class='noise'></div>";
      echo "<div class='s_overlay'></div>";
    echo "</div>";
  }

?>
