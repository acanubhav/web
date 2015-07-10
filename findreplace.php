<form action="p1.php" method="POST">
<textarea rows="10" name="text1" cols="30" id="txt1" placeholder="hello world"></textarea><br><br><br><br><br>
<input type="text" name="find_string" id="f1" placeholder="find string" style="width:260px;"><br><br><br><br><br>

<input type="text" name="repace_string" id="r1" placeholder="repalce string" style="width:260px;"><br><br><br><br><br>
	<input type="submit" id="r11" value="find and replace">

	</form>





<?php
if (isset($_POST['text1'])&&isset($_POST['find_string'])&&isset($_POST['repace_string']))
{
	 $text2=$_POST['text1'];
	 $find1=$_POST['find_string'];
	 $replace1=$_POST['repace_string'];

	if ($text2=='')
	{
		echo "<script>alert('text daal bey')</script>";
		exit();
	}

	if ($find1=='')
	{
		echo "<script>alert('finding daal bey')</script>";
		exit();
	}

	if ($replace1=='')
	{
		echo "<script>alert('replacing text daal bey')</script>";
		exit();
	}

}

$offset=0;
$slength=strlen($find1);

while ($strpos=stripos($text2,$find1,$offset))
{
	
	$offset=$strpos+$slength;
	$text2=substr_replace($text2,$replace1,$strpos,$slength);
}



echo "<script>

		var x='$text2' 	;
		document.getElementById('txt1').value=x;
</script>";


?>

