<?php
  //Include Cockpit CMS
  include_once ('./cockpit/bootstrap.php');

  //Function | Get collection from name -> return array
  function get_collection($col_name) {
    $items = cockpit('collections')->collection($col_name)->find()->toArray();
    return $items;
  }

  //Function | Get Labels from collection -> return array
  function get_collection_labels($col_name, $nr) {
    $items = get_collection($col_name);
    $items_arr = [$items[$nr]['Top_Label'], $items[$nr]['Mid_Label'], $items[$nr]['Bot_Label']];
    return $items_arr;
  }

  //Function | Get images from collection -> return array
  function get_collection_images($col_name, $nr) {
    $items = get_collection($col_name);
    $items_img = [];
    for($i = 0; $i < sizeof($items[$nr]['Images']); $i++) {
      array_push($items_img, $items[$nr]['Images'][$i]);
    }
    return $items_img;
  }

  //Function | Get current page from collection -> return text
  function get_collection_page($col_name, $nr) {
    $items = get_collection($col_name);
    return $items[$nr]['Current_Page'];
  }

  //Function | Get sub info from collection -> return text
  function get_collection_sub_info($col_name, $nr) {
    $items = get_collection($col_name);
    return $items[$nr]['Sub_Info'];
  }

  //Function | Get media url from collection -> return array
  function get_collection_video($col_name, $nr) {
    $items = get_collection($col_name);
    $items_video = [];

    if(get_collection_video_enable($col_name, $nr)) {
      for($i = 0; $i < sizeof($items[$nr]['Video']); $i++) {
        array_push($items_video, $items[$nr]['Video']);
      }
    }
    return $items_video;
  }

  //Function | Get title of the page -> return text
  function get_collection_title($col_name, $nr) {
    $items = get_collection($col_name);
    $str = "";
    if($items[$nr]['Title'] !== "not-loaded") {
      $str = $items[$nr]['Title'];
    }
    return $str;
  }

  //Function | Get head title of the page -> return text
  function get_collection_head_title($col_name, $nr) {
    $items = get_collection($col_name);
    $str = "";
    if($items[$nr]['Head_Title'] !== "not-loaded") {
      $str = $items[$nr]['Head_Title'];
    }
    return $str;
  }

  //Function | Get the setting for logo -> return boolean
  function get_collection_logo_enable($col_name, $nr) {
    $items = get_collection($col_name);
    return $items[$nr]['Logo_Enable'];
  }

  //Function | Get the setting for video -> return boolean
  function get_collection_video_enable($col_name, $nr) {
    $items = get_collection($col_name);
    return $items[$nr]['Video_Enable'];
  }

?>
