<?php
  $button = $_GET["button"];
  echo "button " . $button;
?>
<input name="led" type="checkbox" value="1" 
<?php if ($row['led'] == 1) { echo "checked='checked'"; } ?>>
