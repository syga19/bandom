<?php
include_once  "bootstrap.php";
if (isset($_POST['create'])) {

    $save = new Employer();
               $save->setName($name);
               $save->setExperience($experience);
               $entityManager->persist($save);
               $entityManager->flush();
   } 

 
?>