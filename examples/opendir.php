<?php
	// HTTP_WebDAV_Client registers the "webdav:" userland stream
	require_once "HTTP/WebDAV/Client.php";

  // public webdav server as announced on 
	// http://developer.novell.com/extend/director/1194.html
	// WARNING: you should change this to your private server
	//          as the test service seems to be broken right now
	$name = "webdav://devcenter:rocks@webdav.silverstream.com/Director/WebDAVService/main";

  $dh = opendir($name);
	if (!$dh) die("WebDAV connect failed");

	while (false != ($file = readdir($dh))) {
	  echo "$file\n";
	}

	closedir($name);
?>