<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>Candidates Application</h1>
    </header>
    <form action="" method="POST">
    <label>Your name: </label>
    <input type="text" name="name" value="" placeholder="Enter your name" required>
    <label>Do you have experience in PHP?</label>
    <select name="experience">
        <option value="0">I don't have experience in php</option>
        <option value="1">I have experience in php</option>
    </select>
        <input type="submit" value="submit">
    </form>
        <?php
                require_once "bootstrap.php";
                use Models\Employer;
                $newName = $argv[1];
                $name = new Employer();
                $experience = new Employer();
                $name->setName($name);
                $experience->setexperience($experience);

                $entityManager->persist($name, $experience);
                $entityManager->flush();

                echo "Pavyko";
        ?>

</body>
</html>