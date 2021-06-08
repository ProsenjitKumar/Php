<?php

$val = shell_exec("wmic computersystem get username");

$user= shell_exec("echo %username%");
echo "\r\nuser : $user";
echo "<br>";
echo $val;
echo "<br>";

//
//if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
//    echo 'This is a server using Windows!';
//} else {
//    echo 'This is a server not using Windows!';
//}
//
//echo "<br>";
//if (DIRECTORY_SEPARATOR === '/') {
//    // unix, linux, mac
//    echo 'unix, linux, mac Directory!';
//}
//
//if (DIRECTORY_SEPARATOR === '\\') {
//    // windows
//    echo 'Windows Directory!';
//}
//echo "<br>";
//<script>
////function username()
////{
////    var wshshell=new ActiveXObject("wscript.shell");
////    var username=wshshell.ExpandEnvironmentStrings("%username%");
////    return username;
////}
//</script>
echo "******************************";
echo "<br>";
$path_parts = pathinfo('C:\Users\Administrator\AppData\Local\Google\Chrome\User Data\Default');
echo "<br>";
echo "******************************";
echo $path_parts['dirname'], "\n";
echo "<br>";
echo $path_parts['basename'], "\n";
echo "<br>";
echo $path_parts['extension'], "\n";
echo "<br>";
echo $path_parts['filename'], "\n";
echo "<br>";
echo "******************************";
// current directory
echo getcwd() . "\n";

chdir('cvs');

// current directory
echo getcwd() . "\n";
echo "<br>";