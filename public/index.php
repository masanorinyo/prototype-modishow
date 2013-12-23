<?php require_once("../app/config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>
		
<div id="stickynavi_wrapper" class="boxShadow fullWidth">
	<div id="stickynavi">
		<ul class="stickynavi-left">
			<li id="signupBox">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">
							<a class="jumpToSignup" >
								+ Sign Up
							</a>
						</li>	
					</ul>
				</div>
			</li>
			<li id="stickynavi_category">
				<div class="stickynavi_list_wrapper">
					<ul>
						<li class="stickynavi_list">
							Featured
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
								<!--<img src="images/category_style.png" style="position:absolute; bottom:0px; right:5px; height:70%;"/>-->
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
								<!--<img src="images/occassion.png" style="position:absolute; bottom:20px; right:25px; width:55%;"/>-->
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
								<!--<img src="images/season.png" style="position:absolute; bottom:0px; right:0px;width:100%;"/>-->
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
								<!--<img src="images/weather.png" style="position:absolute; bottom:0px; right:25px;width:50%"/>-->
							</div>
						</li>
					</div>
				</ul>
			</li>
			<li id="stickynavi_order">
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
								<option value="Afganistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bonaire">Bonaire</option>
								<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canary Islands">Canary Islands</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Channel Islands">Channel Islands</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos Island">Cocos Island</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote DIvoire">Cote D'Ivoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Curaco">Curacao</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands">Falkland Islands</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Ter">French Southern Ter</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Great Britain">Great Britain</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of Man">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea North">Korea North</option>
								<option value="Korea Sout">Korea South</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Malawi">Malawi</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Midway Islands">Midway Islands</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Nambia">Nambia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherland Antilles">Netherland Antilles</option>
								<option value="Netherlands">Netherlands (Holland, Europe)</option>
								<option value="Nevis">Nevis</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau Island">Palau Island</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Phillipines">Philippines</option>
								<option value="Pitcairn Island">Pitcairn Island</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Republic of Montenegro">Republic of Montenegro</option>
								<option value="Republic of Serbia">Republic of Serbia</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russia</option>
								<option value="Rwanda">Rwanda</option>
								<option value="St Barthelemy">St Barthelemy</option>
								<option value="St Eustatius">St Eustatius</option>
								<option value="St Helena">St Helena</option>
								<option value="St Kitts-Nevis">St Kitts-Nevis</option>
								<option value="St Lucia">St Lucia</option>
								<option value="St Maarten">St Maarten</option>
								<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
								<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
								<option value="Saipan">Saipan</option>
								<option value="Samoa">Samoa</option>
								<option value="Samoa American">Samoa American</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Tahiti">Tahiti</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Erimates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States of America">United States of America</option>
								<option value="Uraguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State">Vatican City State</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
								<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
								<option value="Wake Island">Wake Island</option>
								<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
								<option value="Yemen">Yemen</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
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
			</li>
		</ul>
		<ul class="stickynavi-right">		
			<li>
				<div class="stickynavi_list_wrapper">
					<div id="button_flipAll" class="round_strong pointer">
						<span class="icon_flip_grey"></span>		
					</div>
				</div>
			</li>
			<li>
				<div class="stickynavi_list_wrapper">
					<form id="stickynavi_searchBox">
						<input class="round_weak" type="text" name="search_name" placeholder="search..."/>
					</form>
				</div>
			</li>
		</ul>
	</div>
</div>	

<div id="content">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	<!--Marquee slideshow-->
	<div id="main_slideshow" class="fullWidth">
		<div class="marquee_container">
			<div class="marquee_photos"></div>
			<div class="marquee_caption">
				<div class="marquee_caption_content"></div>
			</div>
			<div class="marquee_nav"></div>
		</div>
		<div class="marquee_panels">
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="images/photos/london.jpg" alt="London" width="100" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
					<h2>Checkout Different Styles!</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. 
					</p>
					<p>
						<span class="jumpToSignup" onClick="openRegistrationForm()">Sign up now</span>
					</p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="images/photos/milan.jpg" alt="Milan" width="100" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
					<h2>Try On Styles!</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
					</p>
					<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="images/photos/staugustine.jpg" alt="St. Augustine" width="100" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
					<h2>Make Your Own Fashion Magazine!</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
					</p>
					<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="images/photos/montreal.jpg" alt="Montreal" width="100" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
					<h2>Share With Friends</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
					</p>
					<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="content_wrapper">
		<div class="content_stream clear">
			<ul>
				<li class="content_small firstChild">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_large firstChild">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_large">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_small firstChild">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_large firstChild">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_large">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_small firstChild">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_large firstChild">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_large">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_small firstChild">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_small">
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
			<ul>
				<li class="content_large firstChild">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
				<li class="content_large">	
					<?php include(LAYOUT_PATH.DS."contents/outfit.php");?>
				</li>
			</ul>
		</div>	
	</div>
</div>


<?php include(LAYOUT_PATH.DS."structure/outfit_modal.php");?>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>
