<?php
include_once  "bootstrap.php";
use Models\Employer;
if (isset($_POST['create'])) {

    $save = new Employer();
               $save->setName($name);
               $save->setExperience($experience);
               $entityManager->persist($save);
               $entityManager->flush();
   } 
?>