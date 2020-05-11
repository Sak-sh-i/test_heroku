<?php

echo "I am here!";
if (isset($_POST['submit'])) {

    //Data
    
    $Fname = $_POST('Fname');
    $Lname = $_POST('Lname');
    
    echo "Hello, ".$Fname." ".$Lname.".<br />";

    header('Location:index.html');
}