<?php
/*
 * This is the settings file for the comprehensive webcomic template
 * This is where global settings will go that will change things site-wide
 */

// What you want the title of the website to be
$title = 'something';

// What you want the title of the website to be
$startText = 'start';

// What you want the page get request to be, for example setting it to 'story' would make the URL for the first page look like:
// your.domain.com/?story=1
$pageName = 'story';

// This is the name of the folder that the comic pages are stored in
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

// Your Twitter account, unrelated to the links at the bottom, it's for the Twitter metadata
$twitterAccount = '@hyprverse';

// Various social media links, set the URL to '' to disable it and include the full URL (http://whatever.com/...)
// Notice: you will have to source your own icons in the SVG format unless you go into the code and change the type manually
// For example, for a Twitter icon download a suitable SVG file and place it in the /icns/ folder and name it 'twitter-icon.svg'
// The PHP code will take care of everything, you just have to set the link and the title text (if you want hover text) just make sure the icon has the same name as the link type
$socialMedia['twitter'] = ['url'=>'https://twitter.com/hyprverse', 'title'=>'This is an example title for when you mouse over the icon'];

// Warnings for various things
$warning['epilepsy'] = false; //Toggles the epilepsy warning on the main page


/*
 * Here are all of the color management settings
 * All of these properties are applied directly to a dynamic CSS file so all values need to be CSS compliant
 * Don't change | these properties unless you change them in /dynamic/css/style.php
 *              V
 */

$color['background'] = '#1f2038'; // The background behind everything
$color['text-color'] = 'lightgray'; // The color of the caption text mainly
$color['link-color'] = '#bb51b6'; // General link color
$color['link-hover-color'] = '#a3479f'; // General link color when mouse is over them
$color['selection-color'] = '#00000033'; // Color of selected text
$color['header-background'] = '#4f4f79'; // Background color of the header
$color['header-link-color'] = '#9292d4'; // Color of the header links
$color['header-link-hover-color'] = '#a3479f'; // Color of the header links when the mouse is over them
$color['container-background'] = '#38395a'; // Background of the panel container
$color['caption-background'] = '#2e2f49'; // Background color of the caption text
$color['footer-color'] = '#4e4e86'; // Text color of the footer text (license)
$color['logo-color-main'] = '#141525'; // Main color of the logo on the landing page
$color['logo-color-back'] = '#2b2c4d'; // Secondary color of the logo on the landing page

?>
