<?php
/*
 * This is the settings file for the comprehensive webcomic template
 * 
 * This is where global settings will go that will change things site-wide
 */

//What you want the title of the website to be
$title = 'something';

//Google analytics
$googleAnalytics['enabled'] = false;
$googleAnalytics['id'] = 'f';

//A short description of the website
$description = 'story about stuff';

//Enter your preferred license for the comic
$license = '© 2019 all rights reserved.';


//If you have SSL encryption (https) then set this to 'true'
$https = false;

//Various social media links, set the URL to '' to disable it and include the full URL (http://whatever.com/...)
//Notice: you will have to source your own icons in the SVG format unless you go into the code and change the type manually
$socialMedia['twitter'] = ['url'=>'https://twitter.com/whatever', 'title'=>'This is an example title for when you mouse over the icon'];


//Warnings for various things
$warning['epilepsy'] = false;


$domain = ($https ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'];
?>
