<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View2</title>
</head>
<body>
   
    <?php
    if(isset($_POST["item"])) {
        $item = htmlspecialchars($_POST["item"]);
        echo "<p>Submitted Item: $item</p>";
        ?>
        <form method="post" action="View3.php">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            Enter Brand: <input type="text" name="brand"><br>
            <input type="submit" value="Submit Brand">
        </form>
        <?php
    } 
    ?>
</body>
</html>
