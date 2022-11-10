<?php

if(isset($_GET["name"]) || isset($_GET["age"]))

{

    echo "Hello ". $_GET['name']. "<br/>"
}
//print_r($_GET);