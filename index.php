<?php

if(isset($_GET["name"]) || isset($_GET["age"]) || isset($_GET["location"]))

{
    echo "Hello ". $_GET['name']. "<br/>";
    echo "Age: ".$_GET['age']." years.<br/>";
    echo "Location: ".$_GET['location'];
}
//print_r($_GET);


?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
  </head>
  <body>
      <div><form input="text"></div>
      </form>
    </div>
  </body>
</html>