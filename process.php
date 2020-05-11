<?php
if (isset($_POST['submit'])) {

    //Data
    $admin_email="dwivedi.sakshi809@gmail.com";
    $fname = $_POST('fname');
    $lname = $_POST('lname');
    $add = $_POST('add');
    $city = $_POST('city');

    //Send email
    mail($admin_email,"New form submission",$fname.'-'.$add,"From:".$city);

    header('Location:index.html');
}