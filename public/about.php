<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>About - ModiShow </title>
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
	<body id="about">	
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
							<a href="shop.php"><h2>SHOP</h2></a>
							<ul class="submenu background_dark round_bottom">
								<li>
									<a href="#">New Items</a>
								</li>
								<li class="underscore">
									<a href="#">On Sale</a>
								</li>
								<li class="submenu_list clothing">
									<a class="submenu_second_parent" href="#">Clothing</a>
									<div class="submenu_second">
										<ul>
											<li>
												<a href="#">Dresses</a>
											</li>
											<li>
												<a href="#">Skirts</a>
											</li>
											<li>
												<a href="#">Tops</a>
											</li>
											<li>
												<a href="#">Outwear</a>
											</li>
											<li>
												<a href="#">Jeans</a>
											</li>
											<li>
												<a href="#">Pants</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="#">Shorts</a>
											</li>
											<li>
												<a href="#">Jumpsuits &amp; Rompers</a>
											</li>
											<li>
												<a href="#">Intimates</a>
											</li>
											<li>
												<a href="#">Swimwear</a>
											</li>
											<li>
												<a href="#">Activewear</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_shoes">
									<a class="submenu_second_parent" href="#">Shoes</a>
									<div class="submenu_second">
										<ul>
											<li><a href="#">Boots</a></li>
											<li><a href="#">Clogs</a></li>
											<li><a href="#">Flats</a></li>
											<li><a href="#">Oxford</a></li>
											<li><a href="#">Pumps</a></li>
											<li><a href="#">Sandles</a></li>
										</ul>
										<ul>
											<li><a href="#">Sneakers</a></li>
											<li><a href="#">Moccasines</a></li>
											<li><a href="#">Loafers &amp; Moccasins</a></li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_accessories">
									<a class="submenu_second_parent" href="#">Accessories</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="#">Jewelry</a>
											</li>
											<li>
												<a href="#">Bags</a>
											</li>
											<li>
												<a href="#">Cases covers</a>
											</li>
											<li>
												<a href="#">Belts</a>
											</li>
											<li>
												<a href="#">Hats</a>
											</li>
											<li>
												<a href="#">Sunglasses</a>
											</li>
										</ul>
										<ul>	
											<li>
												<a href="#">Hair &amp; Beauty</a>
											</li>
											<li>
												<a href="#">Scarves Ponchos</a>
											</li>
											<li>
												<a href="#">Socks &amp; Legwear</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_beauty">
									<a class="submenu_second_parent" href="#">Beauty</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="#">Makeup</a>
											</li>
											<li>
												<a href="#">Skincare</a>
											</li>
											<li>
												<a href="#">Fragance</a>
											</li>
																		
											<li>
												<a href="#">Hair</a>
											</li>
											<li>
												<a href="#">Nails</a>
											</li>
											<li>
												<a href="#">Accessories</a>
											</li>	
										</ul>
										<ul>
											<li>
												<a href="#">Bath &amp; Body</a>
											</li>	
											<li>
												<a href="#">Sets &amp;Kits</a>
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
							<a class="jumpToSignup pointer">
								Sign up / Log in
							</a>
						</li>
					</ul>					
					<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
							0
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="content_wrapper">
				<div class="content_stream clear">
					<h5> Currently Under Construction</h5>
				</div>	
			</div>
		</div>
		<div id="registration_modalBox">
			<div id="transparentBackground">
			</div>
			<div id="signup_modalBox">
				<a class="closeBox modalbox-fixPosition round_weak background_gradientGrey">
					<span class="icon_close">&#10006;</span>
				</a>
				<div id="signup" class="setting">
					<form>
						<div class="setting-wrapper">
							<div class="sub-header">
								<span>Account Information</span>
							</div>
							<ul>
								<li>
									<span>Name: </span>
									<input id="name" type="text" name="name"/>
								</li>
								<li>
									<span>E-mail Address: </span>
									<input id="email" type="text" value="" placeholder="ex) modishow@gmail.com"/>
								</li>
								<li>
									<span>Password:</span>
									<input id="newPassword" type="password" placeholder="Enter your new password"/>
								</li>
								<li>
									<input id="verifiedPassword" type="password" placeholder="Re-type your new password"/>
								</li>
								<li>
									<span>Country:</span>
									<select id="country">
										<option value="0">Please select your country</option>
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
								<li class="lastChild">
									<span class="legalStatement">
										By creating an account, I accept ModiShow's <a href="terms.php">Terms of Service</a> and <a href="privacy.php">Privacy Policy</a>.
									</span>
								</li>
							</ul>
						</div>
						<div class="confirmation">
							<div class="login round_weak">
								<span>Log In</span>
							</div>
							<div class="cancel round_weak"/>
								<span>Cancel</span>
							</div>
							<div id="confirm" class="round_weak">
								<span>Confirm</span>
							</div>
						</div>
						<div class="popup-box moreInformatin">
							<div class="popup-box-header">
								<span class="firstChild">
									Could you tell us a little bit  about you?
								</span>
							</br>
								<span class="secondChild">
									You will be able to search for a specific outfit </br>
									 ex - "A cute outfit created by the people with my body size"
								</span>
							</div>
							<input id="moveToMoreInfo" type="submit" name="yes" value="Sure"/>
							<input id="backToThePage" type="submit" name="no" value="Maybe later"/>
						</div>
					</form>
				</div>
				<div id="login" class="setting">
					<form>
						<div class="setting-wrapper">
							<div class="sub-header ">
								<span>Log in</span>
							</div>
							<ul>
								<li>
									<span>E-mail Address: </span>
									<input id="loginEmail" type="text" value="" placeholder="ex) modishow@gmail.com"/>
								</li>
								<li class="lastChild">
									<span>Password:</span>
									<input id="loginPassword" type="password" placeholder="Enter your new password"/>
								</li>
								<div class="round_weak forgotPassword">
									<span class="pointer">Forgot your password?</a>
								</div>
							</ul>
						</div>
						<div class="confirmation">
							<div class="round_weak firstList">
								<span>Signup</span>
							</div>
							<div class="cancel round_weak">
								<span>Cancel</span>
							</div>
							<input id="loginConfirm" class="round_weak" type="submit" name="Login" value="Login"/>
						</div>
					</form>
				</div>
			</div>	
		</div>

<?php include("../includes/layouts/footer.php");?>