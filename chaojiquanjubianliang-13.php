
<?php
$x=150;
$y=50;
function addition()
{
	$GLOBALS['Z']=$GLOBALS['X']+$GLOBALS['y'];
}
addition();
echo $z;
?>

<?php
echo$_SERVER['PHP_SELF'];
echo"<br>";
echo$_SERVER['SEVER_NAME'];
echo"<br>";
echo$_SERVER['HTTP_HOST'];
echo"<br>";
echo$_SERVER['HTTP_REFERER'];
echo"<br>";
echo$_SERVER['HTTP_USER_AGENT'];
echo"<br>";
echo$_SERVER['SCRIPT_NAME'];
?>

html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
 
<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>
 
</body>
</html>

