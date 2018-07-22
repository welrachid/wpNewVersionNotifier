<?php
include_once("config.php");

$html = file_get_contents($wordpress_download_page);
if($html === false){exit("Could not check");}
preg_match($pattern,$html, $test);
$newest_version = $test[1];
if(file_exists(".current_version.txt")){
	$current_version = file_get_contents(".current_version.txt");
} else {
	$current_version = "";
}
if($current_version != $newest_version){
	foreach($receivers as $receiver){
		mail($receiver,"New Wordpress Version: ".$current_version." -> ".$newest_version, "Remember to update sites ASAP.
Go to ".$wordpress_download_page." to learn more", "From: ".$sender_mail);
	}
	file_put_contents(".current_version.txt",$newest_version);
	print "Mail sent";
} else {
	print "Version not changed";
}