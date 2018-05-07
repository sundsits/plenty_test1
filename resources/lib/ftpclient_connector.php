<?
$host = "labwerkstatt.de";
$login = "ftptest";
$password = "hvWd48_8";

$ftp = new \FtpClient\FtpClient();
$ftp->connect($host);
$ftp->login($login, $password);

// count in the current directory
$total = $ftp->count();

// scan the current directory and returns the details of each item
$items = $ftp->scanDir();

return $items;

// scan the current directory (recursive) and returns the details of each item
//return ($ftp->scanDir('.', true));