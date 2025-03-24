<?php

if(isset($_POST['ime'])) {
  $ime = trim($_POST['ime']);
  $duzinaImena = strlen($ime);
}

if(empty($ime)) {
  die ("Ime nije uneto");
} else if ($duzinaImena < 3) {
  die ("Ime ne sme biti manje od 3 karaktera");
}

$imena = ["Toma", "Petar", "Marko"];
$imena = array_map('strtolower', $imena); 
$ime = strtolower($ime);

if(in_array($ime, $imena)) {
  echo "Uspesno smo pronasli korisnika";
} else {
  echo "Korisnik nije pronadjen";
}

?>