<?php require_once("../../config/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { echo "false"; } ?>
<?php
  //must have an ID
  if(empty($_SESSION['user_id'])) {
    $session->message("No comment ID was provided.");
    echo "false";
  }

  $user = User::find_by_id($_SESSION['user_id']);

  if($user->delete()) {
    echo $username=$user->username;

    $default_img=$username."_default.jpg";
    $thumbnail=$username."_thumb.gif";

    $target_path=SITE_ROOT.DS."resources/users/";

    unlink($target_path.$default_img);
    unlink($target_path.$thumbnail);

    $session->message("Your account was deactivated.");
    $session->logout($user);

    


  } else {
    $session->message("Your account could not be deleted.");

  }
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
