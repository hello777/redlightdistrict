 <?php
require ('sql_connect.php');
//if (isset($_POST['submit']))
{
$username=mysql_escape_string($_GET['uname']);
$password=mysql_escape_string($_GET['pass']);
if (!$_GET['uname'] | !$_GET['pass'])
 {
//echo ("<SCRIPT LANGUAGE='JavaScript'>
       // window.alert('You did not complete all of the required fields')
       // window.location.href='index.html'
       // </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
//echo ("<SCRIPT LANGUAGE='JavaScript'>
       // window.alert('Login Succesfully!.')
       // window.location.href='index.html'
       // </SCRIPT>");
exit();
}
else{
//echo ("<SCRIPT LANGUAGE='JavaScript'>
       // window.alert('Wrong username password combination.Please re-enter.')
       // window.location.href='index.html'
       // </SCRIPT>");
exit();
}
}


?>