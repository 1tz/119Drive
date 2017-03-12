
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
链接：<input type="text" name="fname">
<input type="submit">
</form>
<?php 
echo "<p>";
echo date("l");
echo "好呀肥猫";
echo "</p>";
system("cd .. && cat readme.rtf",$output);
echo $output;
$name = $_REQUEST['fname']; 
echo $name; 
?>

</body>
</html>