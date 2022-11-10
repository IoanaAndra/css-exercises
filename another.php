//Using POST Method

<?php

if(isset($_POST["name"]) || isset($_POST["age"]) || isset($_POST["location"]))

{
    if(preg_match("/[^A-Za-z'-]/", $_POST['name']))
    {
        die("Invalid name. Name should contain letters only.");
    }
    echo "Hello ". $_POST['name']. "<br/>";
    echo "Age: ".$_POST['age']." years.<br/>";
    echo "Location: ".$_POST['location'];
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
      <div><form action = "<?php $_PHP_SELF ?>" method = "POST"></div>
      Name: <input type="text" name = "name" />
      Age: <input type="text" name = "age" />
      Location: <input type="text" name = "location" />
      <input type="submit" />
    </form>
    </div>
  </body>
</html>