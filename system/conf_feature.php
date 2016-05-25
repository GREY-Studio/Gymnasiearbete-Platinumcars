<?php
  include_once "dbconfig.php";

  $input = $_POST['page'];
  $stmt = $DB_con->prepare("SELECT * FROM features WHERE f_title = '" .$input. "' LIMIT 1");
  $stmt->execute();
  $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount() > 0){
    $get_vars = array(
      'id' => $userRow['f_id'],
      'image' => $userRow['f_img'],
      'l_slide' => $userRow['f_l_slide'],
      'r_slide' => $userRow['f_r_slide'],
      'title' => $userRow['f_title'],
      'button' => $userRow['f_button'],
      'desc' => $userRow['f_description']
    );
  }

  echo json_encode($get_vars);
  exit();
?>
