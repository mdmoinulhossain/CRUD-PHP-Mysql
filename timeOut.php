<!DOCTYPE html>
<html>
<body>

<?php
// die();
date_default_timezone_set('Asia/Dhaka');
echo date('h:i:s'). "<br/>";

//sleep for 3 seconds / code execute after 3 seconds
// sleep(3);

if(date('11:40:00') > date('h:i:s')){
//start again
echo "hellow Bangladesh";
} elseif (date('11:40:00') < date('h:i:s')) {
	// die();
    echo "Goodbye Bangladesh";
}

?>

</body>
</html>