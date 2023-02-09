<input type="checkbox" name="led" value="led_value">
<label for="led">LED</label>

<?php

$ison = filter_input(INPUT_POST, 'led', FILTER_SANITIZE_STRING);
if ($ison) {
	echo 'LED is ON';
} else {
	echo 'LED is off';
}
?>
