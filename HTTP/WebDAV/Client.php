<?php
require_once "HTTP/WebDAV/Client/Stream.php";
require_once 'HTTP/WebDAV/Client/Exception.php';

if (!HTTP_WebDAV_Client_Stream::register()) {
    throw new HTTP_WebDAV_Client_Exception("couldn't register WebDAV stream wrappers");
}