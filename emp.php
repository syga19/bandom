<?php
require_once "bootstrap.php";

use Models\Employer;

if ($newExperience !== 0 ){
    $newName = $argv[1];
    $newExperience = $argv[2];
    $employees = new Employer();
    $employees->setName($newName);
    $employees->setExperience($newExperience);
    $entityManager->persist($employees);
    $entityManager->flush();
    echo "Pavyko";
} else {
    $file = 'nepazenge\webdictionary.txt';
    $current = file_get_contents($file);
    $current .= ($_POST['name']);
    file_put_contents($file, $current);
};

?>