<?php
require_once "bootstrap.php";
use Models\Employer;
$oh = isset($_POST["experience"])&&$_POST["experience"]=="1"?1:0;
$newName = $argv[1];
$newExperience = $argv[1];
$employees = new Employer();
$employees->setName($newName);
$employees->setExperience($newExperience);
$entityManager->persist($employees);
$entityManager->flush();

echo "Pavyko";

?>