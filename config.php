<?php
// List of receivers
$receivers = array();
$receivers[] = "your-email@example.com";
// $receivers[] = "your-email@example.com";
// $receivers[] = "your-email@example.com";

// The sender email adress. Make sure its one that is trusted by your server. Typically you would use your own or a no-reply@ email.
$sender_mail = "wpNewVersionNotifier <wpNewVersionNotifier@example.com>";


// Settings - should not be altered
$pattern = '/Download WordPress ([0-9\.]*?)[\s]/i';
$wordpress_download_page = "https://wordpress.org/download/";