<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="post">
        Name <input type="text" name="name"><br>
        Age <input type="text" name="age"><br>
        <input type="submit" Value="submit">
     </form>
     <?php
           if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST["name"]) && isset($_POST["age"])) {
            $name = $_POST["name"];

            $age=$_POST["age"];
            if($age>0){
                echo("<h2>Hello, my name is {$name}, and I'm {$age} years old</h2>");
            }else{
                echo("please input positive age");
            }

           }
        }
?>
</body>
</html>