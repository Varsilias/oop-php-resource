<?php
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $obj = new Test();
        // $obj->getUsers();
        $obj->setUsersStmt('Jane', 'Doe', '2000-10-24', '2021-01-17');
    ?>

</body>
</html>