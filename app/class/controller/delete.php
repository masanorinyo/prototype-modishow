<?php require_once("../../config/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { echo "false"; } ?>
<?php
  // must have an ID
  if(empty($_SESSION['user_id'])) {
    $session->message("No comment ID was provided.");
    echo "false";
  }

  $user = User::find_by_id($_SESSION['user_id']);
  if($user->delete()) {
    $session->message("Your account was deactivated.");
    $session->logout($user);
    echo "true";
  } else {
    $session->message("Your account could not be deleted.");
    echo "false";
  }
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
