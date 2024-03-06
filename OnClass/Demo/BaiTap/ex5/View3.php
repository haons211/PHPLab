<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View3</title>
</head>
<body>

    <?php
    if(isset($_POST["item"]) && isset($_POST["brand"])) {
        $item = htmlspecialchars($_POST["item"]);
        $brand = htmlspecialchars($_POST["brand"]);
        echo "<p>Item : $item</p>";
        echo "<p>Brand : $brand</p>";
    } 
    ?>
</body>
</html>
