<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Setting - ModiShow</title>
		<meta charset="UTF-8">
		<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="javascript/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.ui.rotatable.min.js"></script>
		<script type="text/javascript" src="javascript/external.js"></script>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

			<link rel="stylesheet" type="text/css" href="includes/stylesheet_ie.css" />
		<![endif]-->

	</head>
	<body id="setting">	
		<div id="header" class="background_themeColor">
			<div class="inner background_themeColor center">
				<div class="inner-inside center" >
					<div id="logo">
						<a href="index.php">
							<h1 id="logo_modi">Modi</h1>
							<h1 id="logo_show">Show</h1>
						</a>
					</div>
					<ul id="header_leftOptions">
						<li class="firstChild">
							<a href="feed.php"><h2>FEED</h2></a>
						</li>
						<li>
							<a href="index.php"><h2>EXPLORE</h2> </a>
						</li>					
						<li>
							<a href="shopOverall.php"><h2>SHOP</h2></a>
							<ul class="submenu background_dark round_bottom">
								<li>
									<a href="shop.php">New Items</a>
								</li>
								<li class="underscore">
									<a href="shop.php">On Sale</a>
								</li>
								<li class="submenu_list list_clothing">
									<a class="submenu_second_parent" href="shop.php">
										Clothing
									</a>
									<div class="submenu_second">
										<ul>
											<li>
												<a href="shop.php">
													Dresses
												</a>
											</li>
											<li>
												<a href="shop.php">
													Skirts
												</a>
											</li>
											<li>
												<a href="shop.php">
													Tops
												</a>
											</li>
											<li>
												<a href="shop.php">
													Outwear
												</a>
											</li>
											<li>
												<a href="shop.php">
													Jeans
												</a>
											</li>
											<li>
												<a href="shop.php">
													Pants
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="shop.php">
													Shorts
												</a>
											</li>
											<li>
												<a href="shop.php">
													Jumpsuits &amp; Rompers
												</a>
											</li>
											<li>
												<a href="shop.php">
													Intimates
												</a>
											</li>
											<li>
												<a href="shop.php">
													Swimwear
												</a>
											</li>
											<li>
												<a href="shop.php">
													Activewear
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_shoes">
									<a class="submenu_second_parent" href="shop.php">
										Shoes
									</a>
									<div class="submenu_second">
										<ul>
											<li>
												<a href="shop.php">
													Boots
												</a>
											</li>
											<li>
												<a href="shop.php">
													Clogs
												</a>
											</li>
											<li>
												<a href="shop.php">
													Flats
												</a>
											</li>
											<li>
												<a href="shop.php">
													Oxford
												</a>
											</li>
											<li>
												<a href="shop.php">
													Pumps
												</a>
											</li>
											<li>
												<a href="shop.php">
													Sandles
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="shop.php">
													Sneakers
												</a>
											</li>
											<li>
												<a href="shop.php">
													Moccasines
												</a>
											</li>
											<li>
												<a href="shop.php">
													Loafers &amp; Moccasins
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_accessories">
									<a class="submenu_second_parent" href="shop.php">Accessories</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="shop.php">
													Jewelry
												</a>
											</li>
											<li>
												<a href="shop.php">
													Bags
												</a>
											</li>
											<li>
												<a href="shop.php">
													Cases covers
												</a>
											</li>
											<li>
												<a href="shop.php">
													Belts
												</a>
											</li>
											<li>
												<a href="shop.php">
													Hats
												</a>
											</li>
											<li>
												<a href="shop.php">
													Sunglasses
												</a>
											</li>
										</ul>
										<ul>	
											<li>
												<a href="shop.php">
													Hair &amp; Beauty
												</a>
											</li>
											<li>
												<a href="shop.php">
													Scarves Ponchos
												</a>
											</li>
											<li>
												<a href="shop.php">
													Socks &amp; Legwear
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_beauty">
									<a class="submenu_second_parent" href="shop.php">
										Beauty
									</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="shop.php">
													Makeup
												</a>
											</li>
											<li>
												<a href="shop.php">
													Skincare
												</a>
											</li>
											<li>
												<a href="shop.php">
													Fragance
												</a>
											</li>
											<li>
												<a href="shop.php">
													Hair
												</a>
											</li>
											<li>
												<a href="shop.php">
													Nails
												</a>
											</li>
											<li>
												<a href="shop.php">
													Accessories
												</a>
											</li>	
										</ul>
										<ul>
											<li>
												<a href="shop.php">
													Bath &amp; Body
												</a>
											</li>	
											<li>
												<a href="shop.php">
													Sets &amp;Kits
												</a>
											</li>
										</ul>
									</div>							
								</li>
							</ul>
						</li>
						<li>
							<a class="tryon" href="tryon.php">
								<ul>
									<li class="icon_clothes"></li>
									<li><h2>TRY-ON</h2></li>
								</ul>
							</a>
						</li>
					</ul>
					<form id="searchBox">
						<input class="round_weak background_grey color_lightWhite" type="text" name="search_name" placeholder="Search..."/>
					</form>
					<ul id="header_rightOptions">
						<li class="lastChild">
							<a class="currentPage" href="userPage.php">
								<img class="round_circle" src="images/user/userPhoto.gif" />
								<h2>masanorinyo1243</h2>		
								<span class="downArrow opaque_strong"></span>
							</a>
							<ul class="userProfile_list submenu background_dark round_bottom">
								<li><a href="userPage.php">Profile</a></li>
								<li><a href="userPage.php">Creations</a></li>
								<li><a href="userPage.php">Likes</a></li>
								<li><a href="userPage.php">Followings</a></li>
								<li><a href="userPage.php">Followers</a></li>
								<li class="underscore"><a href="userPage.php">Message</a></li>
								<li><a href="setting.php">Setting</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>					
					<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
							0
					</div>
				</div>
			</div>
		</div>
		<div class="setting">
			<form>
				<div class="setting-wrapper">
					<div class="sub-header accountInfo">
						<span>Account Information</span>
					</div>
					<ul>
						<li>
							<span>E-mail Address: </span>
							<input id="email" type="text" value="" placeholder="ex) modishow@gmail.com"/>
						</li>
						<li>
							<span>Password:</span>
							<input id="password" type="password" placeholder="Enter your current password"/>
						</li>
						<li>
							<input id="newPassword" type="password" placeholder="Enter your new password"/>
						</li>
						<li>
							<input id="verifiedPassword" type="password" placeholder="Re-type your new password"/>
						</li>
						<li>
							<span>Language:</span>
							<select id="language">
								<option>English</option>
								<option>Japanese</option>
							</select>
						</li>
						<li>
							<span>Country:</span>
							<select id="country">
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
							<input id="cityName" type="text" placeholder="Please type your city" maxlength="20"/>
						<li class="lastChild">
							<span>Gender:</span>
							<label>
								<input type="radio" name="sex" value="Unspecified"> Unspecified
							</label>
							<label>
								<input type="radio" name="sex" value="female"/> Female
							</label>
							<label>
								<input type="radio" name="sex" value="male"  checked="checked"/> Male
							</label>
						</li>
					</ul>
				</div>
				<div class="setting-wrapper personal">
					<div class="sub-header">
						<span>Personal Information</span>
					</div>
					<ul>
						<li>
							<span>Age group</span>
							<select id="ageGroup">
								<option value="0">
									Please select your age
								</option>
								<option>
									~17
								</option>
								<option>
									18 ~ 21
								</option>
								<option>
									22 ~ 25
								</option>
								<option>
									26 ~ 30
								</option>
								<option>
									31 ~ 40
								</option>
								<option>
									40 ~ 
								</option>
							</select>	
						</li>
						<li>
							<span>Height</span>
							<select id="heightGroup">
								<option value="0">
									Please select your height
								</option>
								<option>
									~ 4'11' ( 150cm )
								</option>
								<option>
									4'11.4' ( 151cm ) ~ 5'3' ( 160cm )
								</option>
								<option>
									5'3.4' ( 161cm ) ~ 5'6.9' ( 170cm )
								</option>
								<option>
									5'7.3' ( 171cm ) ~ 5'10.9' ( 180cm )
								</option>
								<option>
									5'11.3' ( 181cm ) ~ 6'2.8' ( 190cm )
								</option>
								<option>
									6'3.2' ( 191cm ) ~ 
								</option>
							</select>	
						</li>
						<li>
							<span>Skin color</span>
							<select id="skinGroup">
								<option value="0">
									Please select your skin color
								</option>
								<option>
									Pallo-African
								</option>
								<option>
									Midtone-African
								</option>
								<option>
									Tanned-African
								</option>
								<option>
									Pallor-Asian
								</option>
								<option>
									Midtone-Asian
								</option>
								<option>
									Tanned-Asian
								</option>
								<option>
									Pallor-Caucasian
								</option>
								<option>
									Midtone-Caucasian
								</option>
								<option>
									Tanned-Caucasian
								</option>
							</select>	
						</li>
						<li>
							<span>Size</span>
							<select id="sizeGroup">
								<option value="0">
									Please select your size
								</option>
								<option>
									~ 3 (XS)
								</option>
								<option>
									4 ~ 6 (S)
								</option>
								<option>
									7 ~ 9 (M)
								</option>
								<option>
									10 ~ 12 (L)
								</option>
								<option>
									13 ~  (XL)
								</option>
							</select>	
						</li>
						<li class="lastChild">
							<span>Body</span>
							<select id="bodyTypeGroup">
								<option value="0">
									Please select your body type
								</option>
								<option>
									Triangle
								</option>
								<option>
									Invertied Triangle
								</option>
								<option>
									Hourglass
								</option>
								<option>
									Rectangle
								</option>
								<option>
									Diamond
								</option>
								<option>
									Rounded
								</option>
							</select>	
						</li>
					</ul>
				</div>
				<div class="confirmation">
					<div id="deactivate" class="openModal round_weak" name="deactivate" value="deactivate">
						Deactivate
					</div>
					<input id="cancel" class="round_weak" type="submit" name="cancel" value="Cancel">
					<input id="confirm" class="round_weak" type="submit" value="Confirm" name="confirm">
				</div>
			</form>
		</div>
		<div id="popup_overlay">
			<div id="transparentBackground">
			</div>
			<div id="modalbox">
				<div class="popup-box">
					<span class="icon_close opaque_strong"></span>
					<div class="popup-box-header">
						<span>Deactivate!? Are you sure?</span>
					</div>
					<div class="button_large background-strong firstList round_weak"><a href="index.php">YES</a></div><!--Write PHP code to destroy the user's account-->
					<div class="button_large background-weak secondList closeBox round_weak"><span>No</span></div>			
				</div>			
			</div>
		</div>			

<?php include("../includes/layouts/footer.php");?>