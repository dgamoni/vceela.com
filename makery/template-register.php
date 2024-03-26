<?php
/*
Template Name: Registration
*/
?>
<?php get_header(); ?>
<?php if(get_option('users_can_register')) { ?>
<?php
$regcountry =  array(
	'AF' => __( 'Afghanistan', 'woocommerce' ),
	'AX' => __( '&#197;land Islands', 'woocommerce' ),
	'AL' => __( 'Albania', 'woocommerce' ),
	'DZ' => __( 'Algeria', 'woocommerce' ),
	'AS' => __( 'American Samoa', 'woocommerce' ),
	'AD' => __( 'Andorra', 'woocommerce' ),
	'AO' => __( 'Angola', 'woocommerce' ),
	'AI' => __( 'Anguilla', 'woocommerce' ),
	'AQ' => __( 'Antarctica', 'woocommerce' ),
	'AG' => __( 'Antigua and Barbuda', 'woocommerce' ),
	'AR' => __( 'Argentina', 'woocommerce' ),
	'AM' => __( 'Armenia', 'woocommerce' ),
	'AW' => __( 'Aruba', 'woocommerce' ),
	'AU' => __( 'Australia', 'woocommerce' ),
	'AT' => __( 'Austria', 'woocommerce' ),
	'AZ' => __( 'Azerbaijan', 'woocommerce' ),
	'BS' => __( 'Bahamas', 'woocommerce' ),
	'BH' => __( 'Bahrain', 'woocommerce' ),
	'BD' => __( 'Bangladesh', 'woocommerce' ),
	'BB' => __( 'Barbados', 'woocommerce' ),
	'BY' => __( 'Belarus', 'woocommerce' ),
	'BE' => __( 'Belgium', 'woocommerce' ),
	'PW' => __( 'Belau', 'woocommerce' ),
	'BZ' => __( 'Belize', 'woocommerce' ),
	'BJ' => __( 'Benin', 'woocommerce' ),
	'BM' => __( 'Bermuda', 'woocommerce' ),
	'BT' => __( 'Bhutan', 'woocommerce' ),
	'BO' => __( 'Bolivia', 'woocommerce' ),
	'BQ' => __( 'Bonaire, Saint Eustatius and Saba', 'woocommerce' ),
	'BA' => __( 'Bosnia and Herzegovina', 'woocommerce' ),
	'BW' => __( 'Botswana', 'woocommerce' ),
	'BV' => __( 'Bouvet Island', 'woocommerce' ),
	'BR' => __( 'Brazil', 'woocommerce' ),
	'IO' => __( 'British Indian Ocean Territory', 'woocommerce' ),
	'VG' => __( 'British Virgin Islands', 'woocommerce' ),
	'BN' => __( 'Brunei', 'woocommerce' ),
	'BG' => __( 'Bulgaria', 'woocommerce' ),
	'BF' => __( 'Burkina Faso', 'woocommerce' ),
	'BI' => __( 'Burundi', 'woocommerce' ),
	'KH' => __( 'Cambodia', 'woocommerce' ),
	'CM' => __( 'Cameroon', 'woocommerce' ),
	'CA' => __( 'Canada', 'woocommerce' ),
	'CV' => __( 'Cape Verde', 'woocommerce' ),
	'KY' => __( 'Cayman Islands', 'woocommerce' ),
	'CF' => __( 'Central African Republic', 'woocommerce' ),
	'TD' => __( 'Chad', 'woocommerce' ),
	'CL' => __( 'Chile', 'woocommerce' ),
	'CN' => __( 'China', 'woocommerce' ),
	'CX' => __( 'Christmas Island', 'woocommerce' ),
	'CC' => __( 'Cocos (Keeling) Islands', 'woocommerce' ),
	'CO' => __( 'Colombia', 'woocommerce' ),
	'KM' => __( 'Comoros', 'woocommerce' ),
	'CG' => __( 'Congo (Brazzaville)', 'woocommerce' ),
	'CD' => __( 'Congo (Kinshasa)', 'woocommerce' ),
	'CK' => __( 'Cook Islands', 'woocommerce' ),
	'CR' => __( 'Costa Rica', 'woocommerce' ),
	'HR' => __( 'Croatia', 'woocommerce' ),
	'CU' => __( 'Cuba', 'woocommerce' ),
	'CW' => __( 'Cura&ccedil;ao', 'woocommerce' ),
	'CY' => __( 'Cyprus', 'woocommerce' ),
	'CZ' => __( 'Czech Republic', 'woocommerce' ),
	'DK' => __( 'Denmark', 'woocommerce' ),
	'DJ' => __( 'Djibouti', 'woocommerce' ),
	'DM' => __( 'Dominica', 'woocommerce' ),
	'DO' => __( 'Dominican Republic', 'woocommerce' ),
	'EC' => __( 'Ecuador', 'woocommerce' ),
	'EG' => __( 'Egypt', 'woocommerce' ),
	'SV' => __( 'El Salvador', 'woocommerce' ),
	'GQ' => __( 'Equatorial Guinea', 'woocommerce' ),
	'ER' => __( 'Eritrea', 'woocommerce' ),
	'EE' => __( 'Estonia', 'woocommerce' ),
	'ET' => __( 'Ethiopia', 'woocommerce' ),
	'FK' => __( 'Falkland Islands', 'woocommerce' ),
	'FO' => __( 'Faroe Islands', 'woocommerce' ),
	'FJ' => __( 'Fiji', 'woocommerce' ),
	'FI' => __( 'Finland', 'woocommerce' ),
	'FR' => __( 'France', 'woocommerce' ),
	'GF' => __( 'French Guiana', 'woocommerce' ),
	'PF' => __( 'French Polynesia', 'woocommerce' ),
	'TF' => __( 'French Southern Territories', 'woocommerce' ),
	'GA' => __( 'Gabon', 'woocommerce' ),
	'GM' => __( 'Gambia', 'woocommerce' ),
	'GE' => __( 'Georgia', 'woocommerce' ),
	'DE' => __( 'Germany', 'woocommerce' ),
	'GH' => __( 'Ghana', 'woocommerce' ),
	'GI' => __( 'Gibraltar', 'woocommerce' ),
	'GR' => __( 'Greece', 'woocommerce' ),
	'GL' => __( 'Greenland', 'woocommerce' ),
	'GD' => __( 'Grenada', 'woocommerce' ),
	'GP' => __( 'Guadeloupe', 'woocommerce' ),
	'GU' => __( 'Guam', 'woocommerce' ),
	'GT' => __( 'Guatemala', 'woocommerce' ),
	'GG' => __( 'Guernsey', 'woocommerce' ),
	'GN' => __( 'Guinea', 'woocommerce' ),
	'GW' => __( 'Guinea-Bissau', 'woocommerce' ),
	'GY' => __( 'Guyana', 'woocommerce' ),
	'HT' => __( 'Haiti', 'woocommerce' ),
	'HM' => __( 'Heard Island and McDonald Islands', 'woocommerce' ),
	'HN' => __( 'Honduras', 'woocommerce' ),
	'HK' => __( 'Hong Kong', 'woocommerce' ),
	'HU' => __( 'Hungary', 'woocommerce' ),
	'IS' => __( 'Iceland', 'woocommerce' ),
	'IN' => __( 'India', 'woocommerce' ),
	'ID' => __( 'Indonesia', 'woocommerce' ),
	'IR' => __( 'Iran', 'woocommerce' ),
	'IQ' => __( 'Iraq', 'woocommerce' ),
	'IE' => __( 'Ireland', 'woocommerce' ),
	'IM' => __( 'Isle of Man', 'woocommerce' ),
	'IL' => __( 'Israel', 'woocommerce' ),
	'IT' => __( 'Italy', 'woocommerce' ),
	'CI' => __( 'Ivory Coast', 'woocommerce' ),
	'JM' => __( 'Jamaica', 'woocommerce' ),
	'JP' => __( 'Japan', 'woocommerce' ),
	'JE' => __( 'Jersey', 'woocommerce' ),
	'JO' => __( 'Jordan', 'woocommerce' ),
	'KZ' => __( 'Kazakhstan', 'woocommerce' ),
	'KE' => __( 'Kenya', 'woocommerce' ),
	'KI' => __( 'Kiribati', 'woocommerce' ),
	'KW' => __( 'Kuwait', 'woocommerce' ),
	'KG' => __( 'Kyrgyzstan', 'woocommerce' ),
	'LA' => __( 'Laos', 'woocommerce' ),
	'LV' => __( 'Latvia', 'woocommerce' ),
	'LB' => __( 'Lebanon', 'woocommerce' ),
	'LS' => __( 'Lesotho', 'woocommerce' ),
	'LR' => __( 'Liberia', 'woocommerce' ),
	'LY' => __( 'Libya', 'woocommerce' ),
	'LI' => __( 'Liechtenstein', 'woocommerce' ),
	'LT' => __( 'Lithuania', 'woocommerce' ),
	'LU' => __( 'Luxembourg', 'woocommerce' ),
	'MO' => __( 'Macao S.A.R., China', 'woocommerce' ),
	'MK' => __( 'Macedonia', 'woocommerce' ),
	'MG' => __( 'Madagascar', 'woocommerce' ),
	'MW' => __( 'Malawi', 'woocommerce' ),
	'MY' => __( 'Malaysia', 'woocommerce' ),
	'MV' => __( 'Maldives', 'woocommerce' ),
	'ML' => __( 'Mali', 'woocommerce' ),
	'MT' => __( 'Malta', 'woocommerce' ),
	'MH' => __( 'Marshall Islands', 'woocommerce' ),
	'MQ' => __( 'Martinique', 'woocommerce' ),
	'MR' => __( 'Mauritania', 'woocommerce' ),
	'MU' => __( 'Mauritius', 'woocommerce' ),
	'YT' => __( 'Mayotte', 'woocommerce' ),
	'MX' => __( 'Mexico', 'woocommerce' ),
	'FM' => __( 'Micronesia', 'woocommerce' ),
	'MD' => __( 'Moldova', 'woocommerce' ),
	'MC' => __( 'Monaco', 'woocommerce' ),
	'MN' => __( 'Mongolia', 'woocommerce' ),
	'ME' => __( 'Montenegro', 'woocommerce' ),
	'MS' => __( 'Montserrat', 'woocommerce' ),
	'MA' => __( 'Morocco', 'woocommerce' ),
	'MZ' => __( 'Mozambique', 'woocommerce' ),
	'MM' => __( 'Myanmar', 'woocommerce' ),
	'NA' => __( 'Namibia', 'woocommerce' ),
	'NR' => __( 'Nauru', 'woocommerce' ),
	'NP' => __( 'Nepal', 'woocommerce' ),
	'NL' => __( 'Netherlands', 'woocommerce' ),
	'NC' => __( 'New Caledonia', 'woocommerce' ),
	'NZ' => __( 'New Zealand', 'woocommerce' ),
	'NI' => __( 'Nicaragua', 'woocommerce' ),
	'NE' => __( 'Niger', 'woocommerce' ),
	'NG' => __( 'Nigeria', 'woocommerce' ),
	'NU' => __( 'Niue', 'woocommerce' ),
	'NF' => __( 'Norfolk Island', 'woocommerce' ),
	'MP' => __( 'Northern Mariana Islands', 'woocommerce' ),
	'KP' => __( 'North Korea', 'woocommerce' ),
	'NO' => __( 'Norway', 'woocommerce' ),
	'OM' => __( 'Oman', 'woocommerce' ),
	'PK' => __( 'Pakistan', 'woocommerce' ),
	'PS' => __( 'Palestinian Territory', 'woocommerce' ),
	'PA' => __( 'Panama', 'woocommerce' ),
	'PG' => __( 'Papua New Guinea', 'woocommerce' ),
	'PY' => __( 'Paraguay', 'woocommerce' ),
	'PE' => __( 'Peru', 'woocommerce' ),
	'PH' => __( 'Philippines', 'woocommerce' ),
	'PN' => __( 'Pitcairn', 'woocommerce' ),
	'PL' => __( 'Poland', 'woocommerce' ),
	'PT' => __( 'Portugal', 'woocommerce' ),
	'PR' => __( 'Puerto Rico', 'woocommerce' ),
	'QA' => __( 'Qatar', 'woocommerce' ),
	'RE' => __( 'Reunion', 'woocommerce' ),
	'RO' => __( 'Romania', 'woocommerce' ),
	'RU' => __( 'Russia', 'woocommerce' ),
	'RW' => __( 'Rwanda', 'woocommerce' ),
	'BL' => __( 'Saint Barth&eacute;lemy', 'woocommerce' ),
	'SH' => __( 'Saint Helena', 'woocommerce' ),
	'KN' => __( 'Saint Kitts and Nevis', 'woocommerce' ),
	'LC' => __( 'Saint Lucia', 'woocommerce' ),
	'MF' => __( 'Saint Martin (French part)', 'woocommerce' ),
	'SX' => __( 'Saint Martin (Dutch part)', 'woocommerce' ),
	'PM' => __( 'Saint Pierre and Miquelon', 'woocommerce' ),
	'VC' => __( 'Saint Vincent and the Grenadines', 'woocommerce' ),
	'SM' => __( 'San Marino', 'woocommerce' ),
	'ST' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'woocommerce' ),
	'SA' => __( 'Saudi Arabia', 'woocommerce' ),
	'SN' => __( 'Senegal', 'woocommerce' ),
	'RS' => __( 'Serbia', 'woocommerce' ),
	'SC' => __( 'Seychelles', 'woocommerce' ),
	'SL' => __( 'Sierra Leone', 'woocommerce' ),
	'SG' => __( 'Singapore', 'woocommerce' ),
	'SK' => __( 'Slovakia', 'woocommerce' ),
	'SI' => __( 'Slovenia', 'woocommerce' ),
	'SB' => __( 'Solomon Islands', 'woocommerce' ),
	'SO' => __( 'Somalia', 'woocommerce' ),
	'ZA' => __( 'South Africa', 'woocommerce' ),
	'GS' => __( 'South Georgia/Sandwich Islands', 'woocommerce' ),
	'KR' => __( 'South Korea', 'woocommerce' ),
	'SS' => __( 'South Sudan', 'woocommerce' ),
	'ES' => __( 'Spain', 'woocommerce' ),
	'LK' => __( 'Sri Lanka', 'woocommerce' ),
	'SD' => __( 'Sudan', 'woocommerce' ),
	'SR' => __( 'Suriname', 'woocommerce' ),
	'SJ' => __( 'Svalbard and Jan Mayen', 'woocommerce' ),
	'SZ' => __( 'Swaziland', 'woocommerce' ),
	'SE' => __( 'Sweden', 'woocommerce' ),
	'CH' => __( 'Switzerland', 'woocommerce' ),
	'SY' => __( 'Syria', 'woocommerce' ),
	'TW' => __( 'Taiwan', 'woocommerce' ),
	'TJ' => __( 'Tajikistan', 'woocommerce' ),
	'TZ' => __( 'Tanzania', 'woocommerce' ),
	'TH' => __( 'Thailand', 'woocommerce' ),
	'TL' => __( 'Timor-Leste', 'woocommerce' ),
	'TG' => __( 'Togo', 'woocommerce' ),
	'TK' => __( 'Tokelau', 'woocommerce' ),
	'TO' => __( 'Tonga', 'woocommerce' ),
	'TT' => __( 'Trinidad and Tobago', 'woocommerce' ),
	'TN' => __( 'Tunisia', 'woocommerce' ),
	'TR' => __( 'Turkey', 'woocommerce' ),
	'TM' => __( 'Turkmenistan', 'woocommerce' ),
	'TC' => __( 'Turks and Caicos Islands', 'woocommerce' ),
	'TV' => __( 'Tuvalu', 'woocommerce' ),
	'UG' => __( 'Uganda', 'woocommerce' ),
	'UA' => __( 'Ukraine', 'woocommerce' ),
	'AE' => __( 'United Arab Emirates', 'woocommerce' ),
	'GB' => __( 'United Kingdom (UK)', 'woocommerce' ),
	'US' => __( 'United States (US)', 'woocommerce' ),
	'UM' => __( 'United States (US) Minor Outlying Islands', 'woocommerce' ),
	'VI' => __( 'United States (US) Virgin Islands', 'woocommerce' ),
	'UY' => __( 'Uruguay', 'woocommerce' ),
	'UZ' => __( 'Uzbekistan', 'woocommerce' ),
	'VU' => __( 'Vanuatu', 'woocommerce' ),
	'VA' => __( 'Vatican', 'woocommerce' ),
	'VE' => __( 'Venezuela', 'woocommerce' ),
	'VN' => __( 'Vietnam', 'woocommerce' ),
	'WF' => __( 'Wallis and Futuna', 'woocommerce' ),
	'EH' => __( 'Western Sahara', 'woocommerce' ),
	'WS' => __( 'Samoa', 'woocommerce' ),
	'YE' => __( 'Yemen', 'woocommerce' ),
	'ZM' => __( 'Zambia', 'woocommerce' ),
	'ZW' => __( 'Zimbabwe', 'woocommerce' ),
);

?>
<div class="container userregister">
	
	<div class="column sixcol">
		<div class="element-title">
			<h1 id="reg_seller" class=""><?php _e('Register', 'makery'); ?> <?php _e('Sellers', 'makery'); ?></h1><h1 id="reg_buyers" style="display: none;"><?php _e('Register', 'makery'); ?> <?php _e('Buyers', 'makery'); ?></h1>
		</div>

		<form id="form_seller" class="site-form element-form" method="POST" action="<?php echo AJAX_URL; ?>">
			<div class="column twelvecol">
				<div class="field-wrap">
					<input type="text" name="user_login" placeholder="<?php _e('Username', 'makery'); ?>">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap validate-required">
					<abbr class="required" title="required">*</abbr>
					<input type="text" name="user_email" placeholder="<?php _e('Email', 'makery'); ?>" required="">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap validate-required">
					<abbr class="required" title="required">*</abbr>
					<!-- <input type="text" name="user_phone1" placeholder="<?php _e('Phone 1', 'makery'); ?>" required=""> -->
					<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="<?php _e('Phone 1', 'makery'); ?>" value="" autocomplete="tel">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<input type="text" name="user_phone2" placeholder="<?php _e('Phone 2', 'makery'); ?>">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<input type="text" class="input-text " value="" placeholder="<?php _e('City', 'makery'); ?>" name="billing_city" id="billing_city" autocomplete="address-level1">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<input type="text" class="input-text " value="" placeholder="<?php _e('Province/State', 'makery'); ?>" name="billing_state" id="billing_state" autocomplete="address-level1">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<select name="billing_country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
						<option value="">Select a country…</option>
						<?php foreach ($regcountry as $key => $value) {
							echo '<option value="'.$key.'">'.$value.'</option>';
						} ?>
					</select>
				</div>
			</div>
			<?php //var_dump($regcountry);


			 ?>


			<div class="clear"></div>
			<div class="column twelvecol">
				<div class="field-wrap">
					<input type="password" name="user_password" placeholder="<?php _e('Password', 'makery'); ?>">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<input type="password" name="user_password_repeat" placeholder="<?php _e('Repeat Password', 'makery'); ?>">
				</div>
			</div>

			<div class="clear"></div>

			<?php if(ThemexCore::checkOption('user_captcha')) { ?>
			<div class="element-captcha">
				<img src="<?php echo THEMEX_URI; ?>assets/images/captcha/captcha.php" alt="" />
				<input type="text" name="captcha" id="captcha" size="6" value="" />
			</div>
			<div class="clear"></div>
			<?php } ?>

			<a href="#" class="element-button element-submit primary"><?php _e('Register', 'makery'); ?></a>
			<input type="hidden" name="user_roles" value="seller" />
			<input type="hidden" name="user_action" value="register_user" />
			<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
			<input type="submit" class="hidden" value="" />
		</form>

		<form id="form_buyers" class="site-form element-form" method="POST" action="<?php echo AJAX_URL; ?>">
			<div class="column twelvecol">
				<div class="field-wrap">
					<input type="text" name="user_login" placeholder="<?php _e('Username', 'makery'); ?>">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap validate-required">
					<abbr class="required" title="required">*</abbr>
					<input type="text" name="user_email" placeholder="<?php _e('Email', 'makery'); ?>" required="">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap validate-required">
					<abbr class="required" title="required">*</abbr>
					<!-- <input type="text" name="user_phone1" placeholder="<?php _e('Phone 1', 'makery'); ?>" required=""> -->
					<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="<?php _e('Phone 1', 'makery'); ?>" value="" autocomplete="tel">
				</div>
			</div>



			<?php //var_dump($regcountry);


			 ?>


			<div class="clear"></div>
			<div class="column twelvecol">
				<div class="field-wrap">
					<input type="password" name="user_password" placeholder="<?php _e('Password', 'makery'); ?>">
				</div>
			</div>
			<div class="column twelvecol last">
				<div class="field-wrap">
					<input type="password" name="user_password_repeat" placeholder="<?php _e('Repeat Password', 'makery'); ?>">
				</div>
			</div>

			<div class="clear"></div>

			<?php if(ThemexCore::checkOption('user_captcha')) { ?>
			<div class="element-captcha">
				<img src="<?php echo THEMEX_URI; ?>assets/images/captcha/captcha.php" alt="" />
				<input type="text" name="captcha" id="captcha" size="6" value="" />
			</div>
			<div class="clear"></div>
			<?php } ?>

			<a href="#" class="element-button element-submit primary"><?php _e('Register', 'makery'); ?></a>
			<input type="hidden" name="user_roles" value="buyers" />
			<input type="hidden" name="user_action" value="register_user" />
			<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
			<input type="submit" class="hidden" value="" />
		</form>
	</div>

<?php } ?>

	<div class="column fourcol last">
		<div class="element-title">
			<h1><?php _e('Sign In', 'makery'); ?></h1>
		</div>
		<form class="site-form element-form" method="POST" action="<?php echo AJAX_URL; ?>">
			<div class="field-wrap">
				<input type="text" name="user_login" value="" placeholder="<?php _e('Username', 'makery'); ?>">
			</div>
			<div class="field-wrap">
				<input type="password" name="user_password" value="" placeholder="<?php _e('Password', 'makery'); ?>">
			</div>
			<a href="#" class="element-button element-submit"><?php _e('Sign In', 'makery'); ?></a>
			<?php if(ThemexFacebook::isActive()) { ?>
			<a href="<?php echo home_url('?facebook_login=1'); ?>" class="element-button element-facebook square facebook" title="<?php _e('Sign in with Facebook', 'makery'); ?>"><span class="fa fa-facebook"></span></a>
			<?php } ?>
			<a href="#password_form" class="element-button element-colorbox square" title="<?php _e('Password Recovery', 'makery'); ?>"><span class="fa fa-life-ring"></span></a>
			<input type="hidden" name="user_action" value="login_user" />
			<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
			<input type="submit" class="hidden" value="" />
		</form>
	</div>

	<div class="clear"></div>
</div> <!-- end container -->

<?php ThemexInterface::renderTemplateContent('register'); ?>
<?php get_footer(); ?>

