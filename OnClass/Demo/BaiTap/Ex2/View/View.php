<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter a Number</h1>
    <form method="post">
         Number:
         <input type="text" name="number"><br>
         <input type="submit" value="Generate List">
    </form>
    <?php 
     if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST["number"]) && $_POST["number"]!=''){
             $number = $_POST["number"];
             if($number > 0){
                echo("<h2>List of numbers from 1 to $number</h2>");
                for($i = 1; $i <= $number; $i++){
                    echo("<h2>$i</h2>");
                }
             } else {
                echo("<h2>Please enter a positive number.</h2>");
             }
        }
     }
    ?>
</body>
</html>
