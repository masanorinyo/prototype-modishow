<?php
	if(isset($_SESSION['user_id'])){
		$user = User::find_by_id($_SESSION['user_id']);
		$username = $user->username;
		$thumb_file = $user->thumbnail;
		$thumb_location = RESOURCE_PATH.DS."users".DS;
		$thumbnail = $thumb_location.$thumb_file;	
	}else{
		redirect_to(ROOT_PATH.DS."public/index.php");
	}
	
;?>
<a class="<?php echo user_page; ?>" href="<?php echo ROOT_PATH.'app/class/view/userPage';?>">
	<img class="round_circle" src="<?php echo $thumbnail;?>" />
	<h2><?php echo $username;?></h2>		
	<span class="downArrow opaque_strong"></span>
</a>
<ul class="userProfile_list submenu background_dark round_bottom">
	<li><a href="<?php echo ROOT_PATH."app/class/view/userPage.php";?>">Profile</a></li>
	<!-- 
		<li><a href="<?php //echo ROOT_PATH."app/class/view/userPage.php";?>">Creations</a></li>
		<li><a href="<?php //echo ROOT_PATH."app/class/view/userPage.php";?>">Likes</a></li>
		<li><a href="<?php //echo ROOT_PATH."app/class/view/userPage.php";?>">Followings</a></li>
		<li><a href="<?php //echo ROOT_PATH."app/class/view/userPage.php";?>">Followers</a></li>
		<li class="underscore"><a href="<?php //echo ROOT_PATH."app/class/view/userPage.php";?>">Message</a></li> 
	-->
	<li><a href="<?php echo ROOT_PATH."app/class/view/setting.php";?>">Setting</a></li>
	<li><a href="<?php echo ROOT_PATH."app/class/controller/logout.php";?>">Logout</a></li>
</ul>