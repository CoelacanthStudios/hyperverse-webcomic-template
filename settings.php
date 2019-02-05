<?php
/*
 * This is the settings file for the comprehensive webcomic template
 * This is where global settings will go that will change things site-wide
 */

// What you want the title of the website to be
$title = 'something';

// What you want the page get request to be, for example setting it to 'story' would make the URL for the first page look like:
// your.domain.com/?story=1
$pageName = 'story';

// What you want the page get request to be, for example setting it to 'story' would make the URL for the first page look like:
// your.domain.com/?story=1
$pageFolder = 'pages';

// Google Analytics, leave blank to disable, enter in your ID to enable
$googleAnalytics = '';

// A short description of the website
$description = 'story about stuff';

// Enter your preferred license for the comic
$license = '© 2019 all rights reserved.';

// What the first panel will be called in every single one of your page folders, for example panel1.png or 1.jpg
// This is required for metadata tags to get the correct image so it displays properly on social media
$firstPanel = 'panel1.jpg';

// What the universal image width will be on desktop sized devices
// Important to note: you are required to use CSS units because it is inserted directly into a dynamic CSS file
$imageWidth['desktop'] = '1024px';

// If you have SSL encryption (https) then set this to 'true'
$https = false;

// Various social media links, set the URL to '' to disable it and include the full URL (http://whatever.com/...)
// Notice: you will have to source your own icons in the SVG format unless you go into the code and change the type manually
// For example, for a Twitter icon download a suitable SVG file and place it in the /icns/ folder and name it 'twitter-icon.svg'
// The PHP code will take care of everything, you just have to set the link and the title text (if you want hover text) just make sure the icon has the same name as the link type
$socialMedia['twitter'] = ['url'=>'https://twitter.com/whatever', 'title'=>'This is an example title for when you mouse over the icon'];

// Warnings for various things
$warning['epilepsy'] = false; //Toggles the epilepsy warning on the main page

// No need to change anything beyond this point but you can if you want
$domain = ($https ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'];
?>
