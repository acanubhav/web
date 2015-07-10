<form method="post" action="p2.php">

<input type="text" name="ani">
<input type="submit" value="kar submit">

</form>


<?php

if (isset($_POST['ani']))
{
	echo $_POST['ani'];
}


?>