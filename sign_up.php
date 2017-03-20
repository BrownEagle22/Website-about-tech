<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./lib/jquery-3.1.1.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css">
	<link rel="shortcut icon" type="image/png" href="./images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("template.php");
        $template = new Template();
    ?>
</head>
<body>
    <?php
        $template->showHeader("sign-up");
    ?>
	
	<div class="container" id="form-container">
		<h1 class="text-center"><strong>Sign up!</strong></h1>
		<p class="text-center">(Vēl nestrādā)</p>
		<div class="row">
			<div class="well col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-2" for="text">
							<span class="required-sign">*</span>Name:
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter name:" required>
						</div>
					</div>

					<div class="form-group">
						<label for="gender" class="control-label col-sm-2">
							Gender:
						</label>
						<div class="col-sm-10">
							<label class="radio-inline"><input type="radio" name="gender">Male</label>
							<label class="radio-inline"><input type="radio" name="gender">Female</label>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="password">
							<span class="required-sign">*</span>Password:
						</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" placeholder="Enter password" required>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="email">
							<span class="required-sign">*</span>Email:
						</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" placeholder="Enter email" required>
						</div>
					</div>

					<div class="form-group">
						<label for="country" class="control-label col-sm-2">
							<span class="required-sign">*</span>Country
						</label>
						<div class="col-sm-10">
							<select class="form-control" required>
								<option>Afghanistan</option>
								<option>Albania</option>
								<option>Algeria</option>
								<option>American Samoa</option>
								<option>Andorra</option>
								<option>Angola</option>
								<option>Anguilla</option>
								<option>Antigua and Barbuda</option>
								<option>Argentina</option>
								<option>Armenia</option>
								<option>Aruba</option>
								<option>Australia</option>
								<option>Austria</option>
								<option>Azerbaijan</option>
								<option>Bahamas</option>
								<option>Bahrain</option>
								<option>Bangladesh</option>
								<option>Barbados</option>
								<option>Belarus</option>
								<option>Belgium</option>
								<option>Belize</option>
								<option>Benin</option>
								<option>Bermuda</option>
								<option>Bhutan</option>
								<option>Bolivia</option>
								<option>Bosnia and Herzegovina</option>
								<option>Botswana</option>
								<option>Brazil</option>
								<option>British Virgin Islands</option>
								<option>Brunei</option>
								<option>Bulgaria</option>
								<option>Burkina Faso</option>
								<option>Burma</option>
								<option>Burundi</option>
								<option>Cambodia</option>
								<option>Cameroon</option>
								<option>Canada</option>
								<option>Cape Verde</option>
								<option>Caribbean Netherlands</option>
								<option>Cayman Islands</option>
								<option>Central African Republic</option>
								<option>Chad</option>
								<option>Chile</option>
								<option>China</option>
								<option>Christmas Island</option>
								<option>Cocos Islands</option>
								<option>Colombia</option>
								<option>Comoros</option>
								<option>Congo</option>
								<option>Cook Islands</option>
								<option>Costa Rica</option>
								<option>Croatia</option>
								<option>Cuba</option>
								<option>Curaçao</option>
								<option>Cyprus</option>
								<option>Czech Republic</option>
								<option>Democratic Republic of the Congo</option>
								<option>Denmark</option>
								<option>Djibouti</option>
								<option>Dominica</option>
								<option>Dominican Republic</option>
								<option>Ecuador</option>
								<option>Egypt</option>
								<option>El Salvador</option>
								<option>Equatorial Guinea</option>
								<option>Eritrea</option>
								<option>Estonia</option>
								<option>Ethiopia</option>
								<option>Falkland Islands</option>
								<option>Faroe Islands</option>
								<option>Federated States of Micronesia</option>
								<option>Fiji</option>
								<option>Finland</option>
								<option>France</option>
								<option>French Guiana</option>
								<option>French Polynesia</option>
								<option>Gabon</option>
								<option>Gambia</option>
								<option>Georgia</option>
								<option>Germany</option>
								<option>Ghana</option>
								<option>Gibraltar</option>
								<option>Greece</option>
								<option>Greenland</option>
								<option>Grenada</option>
								<option>Guadeloupe</option>
								<option>Guam</option>
								<option>Guatemala</option>
								<option>Guernsey</option>
								<option>Guinea</option>
								<option>Guinea-Bissau</option>
								<option>Guyana</option>
								<option>Haiti</option>
								<option>Honduras</option>
								<option>Hong Kong</option>
								<option>Hungary</option>
								<option>Iceland</option>
								<option>India</option>
								<option>Indonesia</option>
								<option>Iran</option>
								<option>Iraq</option>
								<option>Ireland</option>
								<option>Isle of Man</option>
								<option>Israel</option>
								<option>Italy</option>
								<option>Ivory Coast</option>
								<option>Jamaica</option>
								<option>Japan</option>
								<option>Jersey</option>
								<option>Jordan</option>
								<option>Kazakhstan</option>
								<option>Kenya</option>
								<option>Kiribati</option>
								<option>Kosovo</option>
								<option>Kuwait</option>
								<option>Kyrgyzstan</option>
								<option>Laos</option>
								<option>Latvia</option>
								<option>Lebanon</option>
								<option>Lesotho</option>
								<option>Liberia</option>
								<option>Libya</option>
								<option>Liechtenstein</option>
								<option>Lithuania</option>
								<option>Luxembourg</option>
								<option>Macau</option>
								<option>Macedonia</option>
								<option>Madagascar</option>
								<option>Malawi</option>
								<option>Malaysia</option>
								<option>Maldives</option>
								<option>Mali</option>
								<option>Malta</option>
								<option>Marshall Islands</option>
								<option>Martinique</option>
								<option>Mauritania</option>
								<option>Mauritius</option>
								<option>Mayotte</option>
								<option>Mexico</option>
								<option>Moldova</option>
								<option>Monaco</option>
								<option>Mongolia</option>
								<option>Montenegro</option>
								<option>Montserrat</option>
								<option>Morocco</option>
								<option>Mozambique</option>
								<option>Namibia</option>
								<option>Nauru</option>
								<option>Nepal</option>
								<option>Netherlands</option>
								<option>New Caledonia</option>
								<option>New Zealand</option>
								<option>Nicaragua</option>
								<option>Niger</option>
								<option>Nigeria</option>
								<option>Niue</option>
								<option>Norfolk Island</option>
								<option>North Korea</option>
								<option>Northern Mariana Islands</option>
								<option>Norway</option>
								<option>Oman</option>
								<option>Pakistan</option>
								<option>Palau</option>
								<option>Palestine</option>
								<option>Panama</option>
								<option>Papua New Guinea</option>
								<option>Paraguay</option>
								<option>Peru</option>
								<option>Philippines</option>
								<option>Pitcairn Islands</option>
								<option>Poland</option>
								<option>Portugal</option>
								<option>Puerto Rico</option>
								<option>Qatar</option>
								<option>Réunion</option>
								<option>Romania</option>
								<option>Russia</option>
								<option>Rwanda</option>
								<option>Saint Barthélemy</option>
								<option>Saint Kitts and Nevis</option>
								<option>Saint Lucia</option>
								<option>Saint Martin</option>
								<option>Saint Pierre and Miquelon</option>
								<option>Saint Vincent and the Grenadines</option>
								<option>Samoa</option>
								<option>San Marino</option>
								<option>São Tomé and Príncipe</option>
								<option>Saudi Arabia</option>
								<option>Senegal</option>
								<option>Serbia</option>
								<option>Seychelles</option>
								<option>Sierra Leone</option>
								<option>Singapore</option>
								<option>Sint Maarten</option>
								<option>Slovakia</option>
								<option>Slovenia</option>
								<option>Solomon Islands</option>
								<option>Somalia</option>
								<option>South Africa</option>
								<option>South Korea</option>
								<option>South Sudan</option>
								<option>Spain</option>
								<option>Sri Lanka</option>
								<option>Sudan</option>
								<option>Suriname</option>
								<option>Svalbard and Jan Mayen</option>
								<option>Swaziland</option>
								<option>Sweden</option>
								<option>Switzerland</option>
								<option>Syria</option>
								<option>Taiwan</option>
								<option>Tajikistan</option>
								<option>Tanzania</option>
								<option>Thailand</option>
								<option>Timor-Leste</option>
								<option>Togo</option>
								<option>Tokelau</option>
								<option>Tonga</option>
								<option>Trinidad and Tobago</option>
								<option>Tunisia</option>
								<option>Turkey</option>
								<option>Turkmenistan</option>
								<option>Turks and Caicos Islands</option>
								<option>Tuvalu</option>
								<option>Uganda</option>
								<option>Ukraine</option>
								<option>United Arab Emirates</option>
								<option>United Kingdom</option>
								<option>United States</option>
								<option>United States Virgin Islands</option>
								<option>Uruguay</option>
								<option>Uzbekistan</option>
								<option>Vanuatu</option>
								<option>Vatican City</option>
								<option>Venezuela</option>
								<option>Vietnam</option>
								<option>Wallis and Futuna</option>
								<option>Western Sahara</option>
								<option>Yemen</option>
								<option>Zambia</option>
								<option>Zimbabwe</option>
								<option>Åland Islands</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="address">Address:</label>
						<div class="col-sm-5 col-xs-12">
							<input type="address" class="form-control" placeholder="address">
						</div>
						<div class="col-sm-3 col-xs-6" id="city">
							<input type="city" class="form-control" placeholder="city">
						</div>
						<div class="col-sm-2 col-xs-6" id="post">
							<input type="post" class="form-control" placeholder="post">
						</div>
					</div>

					<div class="form-group">
						<label for="info" class="control-label col-sm-2">Info:</label>
						<div class="col-sm-10">
							<textarea cols="30" rows="6" class="form-control" placeholder="additional information"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="terms" class="control-label col-sm-2 sr-only">Terms: </label>
						<div class="col-sm-10">
							<div class="checkbox">
								<label><input type="checkbox" required>I agree to terms and conditions.<span class="required-sign">*</span></label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox">Send news to my email.</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<div class="col-sm-6 text-center">
								<button type="reset" class="form-control btn btn-warning">Reset</button>
							</div>
							<div class="col-sm-6 text-center">
								<button type="submit" class="form-control btn btn-success">Register</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>