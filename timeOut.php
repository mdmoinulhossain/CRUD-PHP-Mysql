<!DOCTYPE html>
<html>
<body>

<?php
// die();
date_default_timezone_set('Asia/Dhaka');
echo date('Y-m-d:::h:i:s'). "<br/><br/><br/>";

//sleep for 3 seconds / code execute after 3 seconds
// sleep(3);
$fixedDate = '11:40:00';
$currDate = date('H:i:s');
echo $fixedDate.' and '.$currDate.'<br/>';

if($fixedDate > $currDate){
echo "hellow Bangladesh";
} elseif($fixedDate < $currDate) {
	// die();
    echo "Goodbye Bangladesh";
}

?>

</body>
</html>