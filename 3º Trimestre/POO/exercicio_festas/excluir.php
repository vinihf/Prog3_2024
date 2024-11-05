<?php
require_once __DIR__."/vendor/autoload.php";
$festa = Festa::find($_GET['idFesta']);
$festa->delete();
header("location:index.php");