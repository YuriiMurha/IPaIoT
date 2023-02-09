<?php
  $button = $_GET["button"];
  echo "button " . $button;
?>
<input type="checkbox" name="led" id="led">
<label for="led">LED</label>
if (isset($_GET['check1'])) {
  LED ON
} 
else
{
  LED OFF
}
