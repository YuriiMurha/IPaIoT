<input name="led" type="checkbox" value="1"
<?php
if(!empty($_POST['led'])){
 echo "LED ON"
} else {
 echo "LED OFF"
}
$button = $_GET["button"];
echo "button " . $button; ?>>
