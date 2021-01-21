<?php require_once "bootstrap.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\main.css">
</head>
<body>
    <header>
    <h1>Candidates Application</h1>
    </header>
    <div class="box">
    <form action="" method="POST" class="main_form">
    <label>Your name: </label>
    <input type="text" name="name" value="" placeholder="Enter your name" required>
    <label>Do you have experience in PHP?</label>
    <select name="experience">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
        <input type="submit" value="Submit" name="create" class="bnt">
    </form>
    </div>
    <?php
        if ($newExperience == 0 ){
            $file = 'nepazenge\webdictionary.txt';
            $current = file_get_contents($file);
            $current .= ($_POST['name']);
            file_put_contents($file, $current);
        };

?>
</body>
</html>