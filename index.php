
<!DOCTYPE html>
<html>
<body>
<h1>施工中</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
链接：<input type="text" name="fname">
<input type="submit">
</form>
<?php 
echo "<p>";
echo date("l");
echo "好呀肥猫";
echo "</p>";
system("cat readme.md",$output);
echo $output;
$name = $_REQUEST['fname']; 
echo $name; 
?>

</body>
</html>