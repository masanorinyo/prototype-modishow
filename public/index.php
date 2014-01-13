<?php 
	require_once("../app/config/initialize.php");

	$found_style = Style::find_all();

	//this deletes the outfitCollage information which did not get stored with collage 
	//this happens when users skip the process of creating collages.
	if(!empty($_SESSION['style_info'])){
		$style_array = $_SESSION['style_info'];
		$outfitOnModel_id = $style_array['outfitOnModel_id'];
		$_SESSION['style_info']="";
		$found_outfitOnModel = Outfit_on_model::find_by_id($outfitOnModel_id);
		$result = $found_outfitOnModel->delete();
	}



?>

<?php include(LAYOUT_PATH.DS."structure/header.php");?>		
<div id="stickynavi_wrapper" class="boxShadow fullWidth">
	<div id="stickynavi">
		<ul class="stickynavi-left">
			<?php
				if(!$session->is_logged_in()){
					echo '<li id="signupBox">
							<div class="stickynavi_list_wrapper">
								<ul>
									<li class="stickynavi_list">
										<a class="jumpToSignup" >
											+ Sign Up
										</a>
									</li>	
								</ul>
							</div>
						</li>';	
				}
			?>
			<!-- <li id="stickynavi_category">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">
							Everything
						</li>
						<li class="downArrow_stickynavi_wrapper">
							<span class="downArrow_stickynavi"></span>
							<span class="downArrow_stickynavi_hover"></span>
						</li>
					</ul>
				</div>
				<ul class="stickynavi_submenu">
					<span class="upwardArrow"></span>
					<li class="titleBox">
						Category
					</li>
					<a href="#">
						<li>
							Featured
						</li>
					</a> 
					<a href="#">
						<li>
							Everything
						</li>
					</a>
					<a href="#">
						<li>
							Random
						</li>
					</a>
					<div>
						<div class="background_white boxShadow stickynavi_submenu_second">
						</div>		
						<li>
							Style
							<span class="rightArrow_standard">
							</span>
							<div class="stickynavi_submenu_second">
								<ul>
									<a href="#">
										<li>
											Active
										</li>
									</a>
									<a href="#">
										<li>
											Basic
										</li>
									</a>
									<a href="#">
										<li>
											Business Casual
										</li>
									</a>
									<a href="#">
										<li>
											Bohemian
										</li>
									</a>
									<a href="#">
										<li>
											Casual
										</li>
									</a>
									<a href="#">
										<li>
											Classic
										</li>
									</a>
									<a href="#">
										<li>
											Comfortable
										</li>
									</a>
									<a href="#">
										<li>
											Celebrity
										</li>	
									</a>
								</ul>
								<ul>
									<a href="#">
										<li>
											Cute
										</li>
									</a>
									<a href="#">
										<li>
											Elegant
										</li>
									</a>
									<a href="#">
										<li>
											Formal
										</li>
									</a>
									<a href="#">
										<li>
											Goth
										</li>
									</a>
									<a href="#">
										<li>
											Preppy
										</li>
									</a>
									<a href="#">
										<li>
											Punk
										</li>
									</a>
									<a href="#">
										<li>
											Runway
										</li>
									</a>
									<a href="#">
										<li>
											Sexy
										</li>
									</a>
								</ul>
								<ul>
									<a href="#">
										<li>
											Swimwear
										</li>
									</a>
									<a href="#">
										<li>
											Vintage
										</li>
									</a>
								</ul>
								<img src="images/category_style.png" style="position:absolute; bottom:0px; right:5px; height:70%;"/>
							</div>
						</li>
						<li>
							Occassion
							<span class="rightArrow_standard ">
							</span>
							<div class="stickynavi_submenu_second ">
								<ul>
									<a href="#">
										<li>
											Casual date
										</li>
									</a>
									<a href="#">
										<li>
											Classy date
										</li>
									</a>
									<a href="#">
										<li>
											Everyday
										</li>
									</a>
									<a href="#">
										<li>
											Formal events
										</li>
									</a>
									<a href="#">
										<li>
											Night out
										</li>
									</a>
									<a href="#">
										<li>
											Outdoor activities
										</li>
									</a>
									<a href="#">
										<li>
											Work
										</li>
									</a>
								</ul> 
								<img src="images/occassion.png" style="position:absolute; bottom:20px; right:25px; width:55%;"/>
							</div>
						</li>
						<li>
							Season
							<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second ">			
								<ul>
									<a href="#">
										<li>
											Spring
										</li>
									</a>
									<a href="#">
										<li>
											Mid-Spring
										</li>
									</a>
									<a href="#">
										<li>
											Summer
										</li>
									</a>
									<a href="#">
										<li>
											Fall
										</li>
									</a>
									<a href="#">
										<li>
											Mid-Fall
										</li>
									</a>
									<a href="#">
										<li>
											Winter
										</li>
									</a>
								</ul>
								<img src="images/season.png" style="position:absolute; bottom:0px; right:0px;width:100%;"/>
							</div>
						</li>
						<li>
							Weather
							<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second ">
								<ul>
									<a href="#">
										<li>
											Warm
										</li>
									</a>
									<a href="#">
										<li>
											Freezing
										</li>
									</a>
									<a href="#">
										<li>
											Cold
										</li>
									</a>
									<a href="#">
										<li>
											Raining
										</li>
									</a>
									<a href="#">
										<li>
											Hot
										</li>
									</a>
									<a href="#">
										<li>
											Snowing
										</li>
									</a>
									<a href="#">
										<li>
											Tropical
										</li>
									</a>
								</ul>
								<img src="images/weather.png" style="position:absolute; bottom:0px; right:25px;width:50%"/>
							</div>
						</li>
					</div>
				</ul>
			</li> -->
			<!-- <li id="stickynavi_order">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">Most Recent </li>
						<li class="downArrow_stickynavi_wrapper">
							<span class="downArrow_stickynavi"></span>
							<span class="downArrow_stickynavi_hover"></span>					
						</li>
					</ul>
				</div>
				<ul class="stickynavi_submenu">
					<span class="upwardArrow"></span>
					<li class="titleBox">Order</li>
					<a href="#">
						<li class="time_submenu_second">
							Most Recent
						</li>
					</a>
					<a href="#">
						<li class="most_discussed">
							Most discussed
						</li>
					</a>
					<div>
						<div class="background_white stickynavi_submenu_second"></div>						
						<li>
							<span>Most Viewed</span>
							<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<ul>
									<a href="#">
										<li>
											All Time
										</li>
									</a>
									<a href="#">
										<li>
											Today
										</li>
									</a>
									<a href="#">
										<li>
											This week
										</li>
									</a>
									<a href="#">
										<li>
											This month
										</li>
									</a>
								</ul>
							</div>
						</li>
						<li>
							<span>Most Popular</span>
							<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<ul>
									<a >
										<li>
											All Time
										</li>
									</a>
									<a href="#">
										<li>
											Today
										</li>
									</a>
									<a href="#">
										<li>
											This week
										</li>
									</a>
									<a href="#">
										<li>
											This month
										</li>
									</a>
								</ul>
							</div>
						</li>
						<li>
							<span>Price</span>
							<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<ul>
									<a href="#">
										<li>
											High to Low
										</li>
									</a>
									<a href="#">
										<li>
											Low to High
										</li>
									</a>
								</ul>
							</div>
						</li>
					</div>
				</ul>
			</li>
			<li id="stickynavi_filter" class="notFeatured">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">Filters</li>
						<li class="downArrow_stickynavi_wrapper">
							<span class="downArrow_stickynavi"></span>
							<span class="downArrow_stickynavi_hover"></span>
						</li>
					</ul>	
				</div>
				<ul class="stickynavi_submenu">
					<span class="upwardArrow"></span>
					<li class="titleBox">Choose Filters</li>
					<div>
						<div class="background_white stickynavi_submenu_second">
						</div>	
						<li class="stickynavi_submenu_color">
							Color<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li class="colorBox background_white color_lightBlack"><input type="checkbox" value="white"/> White</li> </label>
										<label><li class="color_white background_black colorBox"><input type="checkbox" value="black"/> Black</li> </label>
										<label><li class="background_grey colorBox color_white"><input type="checkbox" value="grey"/> Grey</li></label>
										<label><li class="background_brown color_white colorBox"><input type="checkbox" value="brown"/> Brown</li> </label>
										<label><li class="background_beige color_black colorBox"><input type="checkbox" value="beige"/> Beige</li></label>
										<label><li class="background_green color_white colorBox"><input type="checkbox" value="green"/> Green </li></label>
										<label><li class="background_blue color_white colorBox"><input type="checkbox" value="blue"/> Blue</li></label>
										<label><li class="background_purple color_white colorBox"><input type="checkbox" value="purple"/> Purple</li></label>
										<label><li class="background_yellow colorBox color_lightBlack"><input type="checkbox" value="yellow"/> Yellow</li></label>
										<label><li class="background_pink colorBox color_lightBlack"><input type="checkbox" value="pink"/> Pink</li></label>
										<label><li class="background_red color_white colorBox"><input type="checkbox" value="red"/> Red</li></label>
										<label><li class="background_orange color_white colorBox"><input type="checkbox" value="orange"/> Orange</li></label>
										<label><li class="background_silver colorBox color_lightBlack"><input type="checkbox" value="silver"/> Silver </li></label>
										<label><li class="background_gold colorBox color_lightBlack"><input type="checkbox" value="gold"/> Gold</li></label>
										<label><li class="colorBox "><input type="checkbox" value="gold"/> Others</li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Pattern<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li><input type="checkbox" value="plain"/> Plain</li></label>
										<label><li><input type="checkbox" value="stripe"/> Stripe</li></label>
										<label><li><input type="checkbox" value="check"/> Check</li></label>
										<label><li><input type="checkbox" value="border"/> Border</li></label>
										<label><li><input type="checkbox" value="dot"/> Dot</li></label>
										<label><li><input type="checkbox" value="camouflage"/> Camouflage</li></label>
									</ul>
									<ul>
										<label><li><input type="checkbox" value="embroidery"/> Embroidery, lace</li></label>
										<label><li><input type="checkbox" value="animal"/> Animal </li></label>
										<label><li><input type="checkbox" value="floral"/> Floral</li></label>
										<label><li><input type="checkbox" value="patterned"/> Patterned all over print</li></label>
										<label><li><input type="checkbox" value="print"/> Print(logos,etc.)</li></label>
										<label><li><input type="checkbox" value="onePoint"/> One point</li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Material<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li><input type="checkbox" value="chino"/> Chino</li></label>
										<label><li><input type="checkbox" value="cotton"/> Cotton</li></label>
										<label><li><input type="checkbox" value="corduroy"/> Corduroy</li></label>
										<label><li><input type="checkbox" value="wool"/> Wool series</li></label>
										<label><li><input type="checkbox" value="line"/> Line series</li></label>
										<label><li><input type="checkbox" value="nylon"/> Nylon series</li></label>
									</ul>
									<ul>
										<label><li><input type="checkbox" value="sweat"/> Sweat</li></label>
										<label><li><input type="checkbox" value="jersey"/> Jersey</li></label>
										<label><li><input type="checkbox" value="stretch"/> Stretch</li></label>
										<label><li><input type="checkbox" value="leather"/> Leather material</li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Price<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>								
									<ul>
										<label><li><input type="radio"/>
											~ $50									
										</li></label>

										<label><li><input type="radio"/>
											$51~ $100
										</li></label>
										<label><li><input type="radio"/>
											$101 ~ $200
										</li></label>
										<label><li><input type="radio"/>
											$201~ $300
										</li></label>
										<label><li><input type="radio"/>
											$301~ $400
										</li></label>
										<label><li><input type="radio"/>
											$401~ $500
										</li></label>
									</ul>
									<ul>
									
										
										<label><li><input type="radio"/>
											$501~ $750
										</li></label>
										<label><li><input type="radio"/>
											$751~ $1,000
										</li></label>
										<label><li><input type="radio"/>
											$1001 ~
										</li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Brand<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second sideScroll">
								<form>							
									<div class="sideScroll_wrapper">
										<ul>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
										</ul>
									</div>
									<div class="sideScroll_wrapper">
										<ul>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
										</ul>
									</div>
									<div class="sideScroll_wrapper">
										<ul>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
										</ul>
									</div>
									<div class="sideScroll_wrapper">
										<ul>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
										</ul>
									</div>
									<div class="sideScroll_wrapper">
										<ul>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
											<label><li><input type="checkbox" value=""/> ABCD</li></label>
										</ul>
									</div>
								</form>
							</div>
						</li>
					</div>
				</ul>
			</li>
			<li id="stickynavi_creator" class="notFeatured">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">Creaters</li>
						<li class="downArrow_stickynavi_wrapper">
							<span class="downArrow_stickynavi"></span>
							<span class="downArrow_stickynavi_hover"></span>
						</li>
					</ul>	
				</div>
				<ul id="creators" class="stickynavi_submenu">
					<li class="titleBox">Choose Creaters</li>
					<span class="upwardArrow"></span>
					<div>		
						<div class="background_white stickynavi_submenu_second"></div>			
						<li>
							Age<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li><input type="checkbox" value="17"/> Age: ~ 17 </li></label>
										<label><li><input type="checkbox" value="18_21"/> Age:18 ~ 21 </li></label>
										<label><li><input type="checkbox" value="22_25"/> Age:22 ~ 25 </li></label>
										<label><li><input type="checkbox" value="26_30"/> Age:26 ~ 30 </li></label>
										<label><li><input type="checkbox" value="31_40"/> Age:31 ~ 40 </li></label>
										<label><li><input type="checkbox" value="41"/> Age:40 ~  </li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Skin Color<span class="rightArrow_standard  extra_space"></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label>
											<li>
												<input type="checkbox" value="18_21"/> 
												Skin tone: Dark 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="22_25"/> 
												Skin tone: Tanned 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="17"/> 
												Skin tone: Brown 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="26_30"/>
												 Skin tone: White 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="31_40"/>
												 Skin tone: Light 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="31_40"/>
												 Skin tone: Pale 
											</li>
										</label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Size<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li><input type="checkbox" value="3"/> Size: ~ 3 (XS)</li></label>
										<label><li><input type="checkbox" value="4_6"/> Size:4 ~ 6 (S)</li></label>
										<label><li><input type="checkbox" value="7_9"/> Size:7 ~ 9 (M)</li></label>
										<label><li><input type="checkbox" value="10_12"/> Size:10 ~ 12 (L)</li></label>
										<label><li><input type="checkbox" value="13"/> Size:13 ~ (XL)</li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Height<span class="rightArrow_standard "></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label><li><input type="checkbox" value=""/>  ~ 4'11"(150cm)</li></label>
										<label><li><input type="checkbox" value=""/> 4'11.4"151cm)  ~ 5'3"(160cm)</li></label>
										<label><li><input type="checkbox" value=""/> 5'3.4"(161cm)~ 5'6.9"(170cm)</li></label>
										<label><li><input type="checkbox" value=""/> 5'7.3"(171cm)~ 5'10.9"(180cm)</li></label>
										<label><li><input type="checkbox" value=""/> 5'11.3"(181cm)~ 6'2.8"(190cm)</li></label>
										<label><li><input type="checkbox" value=""/> 6'3.2"(191cm)~ </li></label>
									</ul>
								</form>
							</div>
						</li>
						<li>
							Body Type<span class="rightArrow_standard  extra_space"></span>
							<div class="stickynavi_submenu_second">
								<form>
									<ul>
										<label>
											<li>
												<input type="checkbox" value="22_25"/> 
												Body type: Rectangle 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="17"/> 
												Body type: Apple 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="26_30"/>
												 Body type: Hourglass 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="31_40"/>
												 Body type: Pear 
											</li>
										</label>
										<label>
											<li>
												<input type="checkbox" value="31_40"/>
												 Body type: Inverted Triangle 
											</li>
										</label>
									</ul>
								</form>
							</div>
						</li>
					</div>
				</ul>
			</li>
			<li  id="stickynavi_location" class=" notFeatured">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">All Worldwide</li>
						<li class="downArrow_stickynavi_wrapper">
							<span class="downArrow_stickynavi">
							</span>
							<span class="downArrow_stickynavi_hover">
							</span>
						</li>						
					</ul>
				</div>
				<ul class="stickynavi_submenu default">
					<span class="upwardArrow"></span>
					<li class="titleBox">Search Location</li>
					<form>
						<li>
							<span>Country:</span>
							<select class="pointer color_lightWhite background_black"> 
								<option value="worldwide">All Worldwide</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AG">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AG">Antigua &amp; Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AA">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia</option>
								<option value="BL">Bonaire</option>
								<option value="BA">Bosnia &amp; Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BR">Brazil</option>
								<option value="BC">British Indian Ocean Ter</option>
								<option value="BN">Brunei</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="IC">Canary Islands</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CD">Channel Islands</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CI">Christmas Island</option>
								<option value="CS">Cocos Island</option>
								<option value="CO">Colombia</option>
								<option value="CC">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CT">Cote D'Ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CB">Curacao</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="TM">East Timor</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FA">Falkland Islands</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="FS">French Southern Ter</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GB">Great Britain</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GN">Guinea</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HW">Hawaii</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IA">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IR">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="NK">Korea North</option>
								<option value="KS">Korea South</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Laos</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macau</option>
								<option value="MK">Macedonia</option>
								<option value="MG">Madagascar</option>
								<option value="MY">Malaysia</option>
								<option value="MW">Malawi</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="ME">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="MI">Midway Islands</option>
								<option value="MD">Moldova</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Nambia</option>
								<option value="NU">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="AN">Netherland Antilles</option>
								<option value="NL">Netherlands (Holland, Europe)</option>
								<option value="NV">Nevis</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NW">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau Island</option>
								<option value="PS">Palestine</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PO">Pitcairn Island</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="ME">Republic of Montenegro</option>
								<option value="RS">Republic of Serbia</option>
								<option value="RE">Reunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russia</option>
								<option value="RW">Rwanda</option>
								<option value="NT">St Barthelemy</option>
								<option value="EU">St Eustatius</option>
								<option value="HE">St Helena</option>
								<option value="KN">St Kitts-Nevis</option>
								<option value="LC">St Lucia</option>
								<option value="MB">St Maarten</option>
								<option value="PM">St Pierre &amp; Miquelon</option>
								<option value="VC">St Vincent &amp; Grenadines</option>
								<option value="SP">Saipan</option>
								<option value="SO">Samoa</option>
								<option value="AS">Samoa American</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome &amp; Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="OI">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syria</option>
								<option value="TA">Tahiti</option>
								<option value="TW">Taiwan</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania</option>
								<option value="TH">Thailand</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad &amp; Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TU">Turkmenistan</option>
								<option value="TC">Turks &amp; Caicos Is</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States of America</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VS">Vatican City State</option>
								<option value="VE">Venezuela</option>
								<option value="VN">Vietnam</option>
								<option value="VB">Virgin Islands (Brit)</option>
								<option value="VA">Virgin Islands (USA)</option>
								<option value="WK">Wake Island</option>
								<option value="WF">Wallis &amp; Futana Is</option>
								<option value="YE">Yemen</option>
								<option value="ZR">Zaire</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
						</li>
						<li>
							<span>City:</span>
							<input id="cityName" type="text" maxlength="20"/>
						</li>

						<li>
							<input type="submit" class="pointer round_strong color_white" value="Search"/>
						</li>
					</form>
				</ul>
			</li> -->
		</ul>
		<ul class="stickynavi-right">		
			<li>
				<div class="stickynavi_list_wrapper">
					<div id="button_flipAll" class="round_strong pointer">
						<span class="icon_flip_grey"></span>		
					</div>
				</div>
			</li>
			<!-- <li>
				<div class="stickynavi_list_wrapper">
					<form id="stickynavi_searchBox">
						<input class="round_weak" type="text" name="search_name" placeholder="search..."/>
					</form>
				</div>
			</li> -->
		</ul>
	</div>
</div>	

<div id="content">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	
	<?php 
		// Marquee slideshow appears if users are guests
		if(!$session->is_logged_in()){
			include(LAYOUT_PATH.DS."structure/main_slideshow.php");
		}
	?>
	<div id="content_wrapper">
		<div class="content_stream clear">
			<ul>
			<?php 
				$num=1;
				
				$loop_for_large_first=4;
				$loop_for_large_second=5;
				foreach($found_style as $array_name): 
					


					$outfitOnModel_object = Outfit_on_model::find_by_id($array_name->outfitOnModel_id);
					$outfitOnModel_url = $outfitOnModel_object->m_size_filename;

					$collage_object = Collage::find_by_id($array_name->collage_id);
					
					$collage_url = $collage_object->m_size_filename;
					$user_object = User::find_by_id($array_name->user_id);
					$username = $user_object->username;
					
					$category_object = Category::find_by_id($array_name->category_id);
					$category = $category_object->sub_category;
					
					$title=$array_name->title;
			

					if($num==$loop_for_large_first){
						echo "<li class='content_large'>";
						$loop_for_large_first +=5;
					}else if($num==$loop_for_large_second){
						echo "<li class='content_large'>";
						$loop_for_large_second +=5; 
					}else{
						echo "<li class='content_small'>";
					}
					
			?>
				
						<!-- 
							<div class="button_heart">
								<span class="heart_empty">
									<span>40000</span>
								</span>
								<span class="heart_filled">
									<span>40000</span>
								</span>	 		
							</div>
						-->
						<div class="button_flip">
							<span class="icon_flip_grey"></span>	
							<span class="icon_flip_dark"></span>				
						</div>
						<div class="collageBox openModal">
							<a> <!--Use PHP-->
								<div class="collageBox-inside">
									<img src="<?php echo ROOT_PATH."resources/styles/".$collage_url;?>"/>
								</div>
							</a>
						</div>
						<div class="modelBox openModal">
							<a>
								<img src="<?php echo ROOT_PATH."resources/styles/".$outfitOnModel_url;?>"/>
							</a>
						</div>
						<!-- <div class="peopleBox openModal">
							<a href="#">
							</a>
						</div> -->
						<div class="descriptionBox_wrapper">
							<div class="descriptionBox">
								<div class="styleTitle ">
									<span class="openModal"> 	
										<a>
											<?php echo $title;?>
										</a>
									</span>
								</div>
								<div class="styleInfo">
									<a class="artist_name" href="../app/class/view/userPage.php?username=<?php echo urlencode($username);?>">
										By 
										<span>
												<?php echo $username;?>
										</span>
									</a>
									<a class="styleCategory">
										Category
										<span>
										 - <?php echo $category; ?>
										</span>
									</a>
								</div>
							</div>
						</div>
					</li>
				
			<?php 
					$num++;
					if($num==6){break;}
				endforeach;
			?>
				<div id="loader_wrapper" class="clear">
					<span  class="loader"></span>
				</div>
			</ul>
		</div>	
	</div>
</div>


<?php //include(LAYOUT_PATH.DS."structure/outfit_modal.php");?>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>
