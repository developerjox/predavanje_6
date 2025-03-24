<?php

if (isset($_POST["ime"]) && isset($_POST["lozinka"])) {
  $ime = trim($_POST["ime"]);
  $lozinka = trim($_POST["lozinka"]);
}

if(empty($ime)) {
  die ("Ime ti je prazno");
} else if(empty($lozinka)) {
  die("Lozinka ti je prazna");
}


?>
