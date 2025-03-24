<?php

if(isset($_POST['pin_broj'])) {
  $pin = $_POST["pin_broj"];
}
$duzinaPina = strlen($pin);
if(empty($pin)) {
  die("Niste uneli pin");
}
if($duzinaPina < 4 || $duzinaPina > 6) {
  die("Pin mora biti minimum 4 cifara a maksimum 6.");
}

echo "Uspesno ste uneli pin";
?>