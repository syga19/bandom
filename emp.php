<?php
require_once "bootstrap.php";
use Models\Employer;

if ((isset($_POST["experience"])&&$_POST["experience"]=="1"?1:0)){
    $newName = $argv[1];
    $newExperience = $argv[2];
    $employees = new Employer();
    $employees->setName($newName);
    $employees->setExperience($newExperience);
    // $person->setExperience(true); // this saves 1 in the table
    // $person->setExperience(false); // this saves 0 in the table
    $entityManager->persist($employees);
    $entityManager->flush();
    echo "Pavyko";
};


?>