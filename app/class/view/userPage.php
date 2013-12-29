<?php 
	require_once("../../config/initialize.php");
	// if(1 == 1){
	// 	redirect_to(ROOT_PATH."public/index.php");
	// }
	include(LAYOUT_PATH.DS."structure/header.php");
?>

<div class="content round_weak">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	<div class="top">
		<div class="leftSide round_medium">
			<div class="userProfile">
				<div>
					<img class="round_circle" src="images/user/userPhoto.gif"/>
					<div class="round_weak">
						<span>Change Picture</span>
					</div>
				</div>
			</div>
			<div class="rightSide">
				<div class="userInformation">
					<ul>
						<li class="userName">
							Masanori Sen
						</li>
						<li class="location">
							<span class="location_icon">
								
							</span>
							U.S.
						</li>
						<li class="joinDate">
							- Joined 10 days ago
						</li>
					</ul>
					<span id="editProfileInfo" class="editIcon opaque_strong pointer"></span>
				</div>
				
				<div class="introduction clear">
					<p class="expandable">
						“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 
						“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 
						“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 

					</p>
					<span class="moreText pointer">Show More</span>
				</div>
				<div class="right-bottom">
					<ul>
						<li class="twitter">
							<a href="#">
								<img src="images/twitter.png" style="width:20px"/>
							</a>
						</li>
						<li class="facebook">
							<a href="#">
								<img src="images/facebook.png" style="width:20px; margin:0 5px;" />
							</a>
						</li>
						<li class="url"><a href-"#">- modishow.com</a></li>
					</ul>
				</div>
				<div class="lastChild">
					<ul class="leftSide">
						<li class="follow round_medium">Follow</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="rightSide round_medium">
			<ul class="award">
				<li>
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>							
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
				<li class="hidden">
					<span class="award_icon"></span>
					<span class="middle"> Most viewed in this week </span>
				</li>
			</ul>
			<span class="moreAward pointer">Show More</span>
			<ul class="dashboard">
				<li>
					<div>
						<span class="view_icon"></span> 
						<span class="dashboard-number">1300
						</span>
						<span class="lastChild"> View
						</span>
					</div>
				</li>
				<li>
					<div>
						<span class="heart_empty "></span> 
						<span class="dashboard-number">2000</span>
						<span class="lastChild" > Likes </span>
					</div>
				</li>
				<li>
					<div>
						<span class="comment_icon"></span>
						<span class="dashboard-number">9</span>
						<span class="lastChild"> Discuss
						</span>
					</div>
				</li>
				<li>
					<div>
						<span class="follow_icon"></span>
						<span class="dashboard-number">9</span>
						<span class="lastChild"> Followings
						</span>
					</div>
				</li>
				<li>
					<div>
						<span class="follow_icon"></span>
						<span class="dashboard-number">9</span>
						<span class="lastChild">
							Followers
						</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="bottom round_medium">
		<div class="subHeader">
			<ul>
				<li id="all">	
					<span class="blue-color">All</span>
				</li>
				<li id="creation">
					<span class="number">11111 </span>
					<span>Creations</span>
				</li>
				<li id="likes">
					<span class="number">11111 </span>
					<span>My Likes</span>
				</li>
				<li id="following">
					<span class="number">11111</span>
					<span>followings</span>
				</li>
				<li id="follower">
					<span class="number">11111 </span>
					<span>followers</span>
				</li>
				<li id="comment">
					<span>Message</span>
				</li>
			</ul>
		</div>
		<div class="inside">
			<span class="hidden">No Items</span>
			<div class="overall">
				<div id="feed_content">
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
					</div>
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/smalls_mediums.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/larges_smalls.php");?>
					</div>
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/allMediums.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/allSmalls.php");?>
					</div>
				</div>
			</div>
			<?php include(LAYOUT_PATH.DS."structure/creations.php");?>
			<div class="likes">
				<div id="feed_content">
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
					</div>
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/smalls_mediums.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/larges_smalls.php");?>
					</div>
					<div class="clear left">
						<?php include(LAYOUT_PATH.DS."presentation/allMediums.php");?>
					</div>
					<div class="clear right">
						<?php include(LAYOUT_PATH.DS."presentation/allSmalls.php");?>
					</div>
				</div>
			</div>
			<div class="follower follow">
				<?php include(LAYOUT_PATH.DS."structure/followers.php");?>
			</div>
			<div class="following follow">
				<?php include(LAYOUT_PATH.DS."structure/followers.php");?>
			</div>
			<div class="comment">
				<div class="round_weak">
					<?php include(LAYOUT_PATH.DS."structure/comments.php");?>
				</div>
			</div>
		</div>
	</div>	
	<div id="subFooter" class="clear"><span>Loading...</span></div>
</div>
<div id="changePic">
	<div id="transparentBackground">
	</div>
	<div id="modalbox-changePic">
		<div class="popup-box changePic">
			<span class="icon_close opaque_strong"></span>
			<div class="popup-box-header">
				<span>Change your picture</span>
			</div>
			<div class="inside">
				<form action="upload_file.php" method="post" enctype="multipart/form-data" class="round_medium">
					<input type="file" name="file" id="profile_picture" class="upload-button">
				</form>
			</div>
		</div>
	</div>
</div>	
<div id="editProfile">
	<div id="transparentBackground">
	</div>
	<div id="modalbox-editProfile">
		<div class="popup-box changeProfile">
			<span class="icon_close opaque_strong"></span>
			<div class="popup-box-header">
				<span>Edit Profile</span>
			</div>
			<div>
				<div class="profile">
					<form>
						<div>
							<ul>
								<li>
									<span>Name: </span>
									<input id="name" type="text" value="Masanori Sen"/>
								</li>
								<li class="clear">
									<span>About:</span>
									<textarea  value="Please introduce yourself">test</textarea>
								</li>
							</ul>
						</div>
						<div class="confirmation clear">
							<div>To change Account Settings, click <a href="setting.php">Setting</a></div> 
							<button id="confirm" class="round_weak" type="submit" name="confirm">
								Confirm
							</button>
							<button id="cancel" class="round_weak" type="submit" name="cancel">
								Cancel
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php include(LAYOUT_PATH.DS."structure/quickview_modal.php");?>		
<?php include(LAYOUT_PATH.DS."structure/outfit_modal.php");?>	

<?php include(LAYOUT_PATH.DS."structure/footer.php");?>