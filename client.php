<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello PHP</title>
</head>
<body>
  <?php
    $personName = "Dio Brando";
    $personAge = 122;
    echo "<h1>Hello World</h1>";
    echo "<p>My name is $personName</p></br>";
    echo "<p>I am $personAge years old</p></br>";
    echo substr($personName, 4, 6)
  ?>
</body>
</html>