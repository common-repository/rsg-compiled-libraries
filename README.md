=== RSG Compiled Libraries ===
Contributors: rynergalaus
Tags: Lightweight plugin, Lity, Font Awesome, Bootstrap , Slick, Tablesorter, RSG, Libraries, Stylesheet Perks, CSS, Login, Logout, Back to Top, Popup Menu, All for one, One for all, Ryner, String Generator, Preloader, Button Designs, Compiled Libraries for Developers
Author: https://profiles.wordpress.org/rynergalaus
Requires at least: 4.6
Tested up to: 5.2
Stable tag: 0.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Includes common libraries used for development. It also comes with simple functions that are widely used on a website.
Libraries can be activated / deactivated. Activate what you need without worrying about unnecessary enqueued scripts and styles.


* LIBRARIES INCLUDED
	1. <a href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" target="_blank">Bootstrap v4.3.1 </a>
	2. <a href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use" target="_blank">Font Awesome v5.7.1</a>
	3. <a href="https://sorgalla.com/lity/" target="_blank">Lity v2.3.1	</a>
	4. <a href="http://kenwheeler.github.io/slick/" target="_blank">Slick v1.8.1</a>
	5. <a href="https://mottie.github.io/tablesorter/docs/" target="_blank">Tablesorter v2.31.1</a>
	6. <a href="https://github.com/wp-bootstrap/wp-bootstrap-navwalker">Bootstrap Navwalker v2.0.4</a>

* Additional Functions
	1. WP Login Function 
		- Add the classname 'rsg-wp_login_toggle' to your link or to the container of your link. 
		- It will automatically toggle a login modal upon click.
		- You can change the template by copying the file rsg-login.php from the templates folder to yourtheme/rsg/templates/
	2. Logout
		- Add the classname 'rsg_wp_logout_link' to your link.
		- It will automatically logout the user on click.
	3. Popup Menu Function
		- Add the classname 'rsg-wp_menupopup_toggle' to your link or to the container of your link. 
		- It will automatically toggle a popup menu on click.
		- You can change the template by copying the file rsg-popup_menu.php from the templates folder to yourtheme/rsg/templates/ 
	4. Get Menu Function
		- Uses the Bootstrap Navwalker to get and display the menu created at the dashboard.
		- Function parameters are rsg_get_menu(String Menu slug, String Menu Name, 'Menu Classname/s separated by space')
		- Sample Code: echo rsg_get_menu('primary-menu', 'Main Menu Online', 'menu-class rsg-vertical-menu-popup');
	5. Random String Generator
		- Can be used to generate random strings or characters.
		- Contents generated are lowercase or uppercase letters (A-Z | a-z), numbers (0-9), and special characters (dash, underscore, asterisk, and number sign).
	6. Back To Top Function
		- Adds a back to top button. Can be activated or deactivated

* RSG Stylesheet Perks
	Designs can be overridden at your theme's style.css.

	- Button Class Names
		1. rsg-button_main (ex. < span class="rsg-button_main"> Submit < /span > )
		2. rsg-button_main and rsg-btn_white (ex. < button class="rsg-button_main rsg-btn_white"> Submit < /button > )
		3. rsg-button_main and rsg-btn_gray (ex. < a href="#" class="rsg-button_main rsg-btn_gray"> Submit < /a > )
		4. rsg-button_1 (ex. < div class="rsg-button_1"> Submit < /div > )
		5. rsg-button_2
		6. rsg-button_3
		Notes: 
			Classnames can be used in any tags/elements(span, a, button, div, etc.).
			Copying the code from the examples given will not work. Remove the spaces between the tagnames and the < >.

	- Display Class Names
		1. rsg-hide: 		style="display:none;"
		2. rsg-block: 		style="display:block; width:100%; position:relative;"
		3. rsg-iblock: 	style="display:inline-block; position:relative;"
		4. rsg-itable: 	style="display:inline-table; position:relative;"
		5. rsg-tcenter: 	style="text-align: center;"
		6. rsg-tleft: 		style="text-align: left;"
		7. rsg-tright: 	style="text-align: right;"

	- Preloaders
		1. Code: < div class="rsg-loading-container_white">< div class="rsg-loading">< div class="rsg-loading-in">< div>< div>< div> 
		2. Code: < div class="rsg-loading-container_black">< div class="rsg-loading">< div class="rsg-loading-in">< div>< div>< div> 
		3. Activate a preloader from your dashboard. This is a preloader that shows while your website is loading. Once activated, this will appear automatically unlike the two above.
		Note: Decide on how these loaders will appear. 

* Incoming Features
	1. Fixed Top Navigation and different templates
	2. Mobile Navigation
	3. Login Modal Templates
	4. Popup Menu Templates
	5. Back to top button designs
	6. Array of different countries with flag carousel shortcode
	7. Preloader designs

* Requirements
	- PHP 5.4 or higher
	- WordPress 4.8 or higher



== Installation ==

1. Search and install from your wordpress dashboard -> plugins page or manually download and extract folder to your plugins directory(wp-content/plugins/)
2. Activate plugin from wordpress dashboard -> plugins
3. Go to your wordpress dashboard -> RSG Addons -> Libraries

== Screenshots ==

1. Plugin display on dashboard.
2. Button Class Names
3. Preloaders
4. Login Modals
5. Popup Menu Modal
