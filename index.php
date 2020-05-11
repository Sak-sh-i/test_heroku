<?php
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
?>
<html>
<head>
<title>Personal INFO</title>
</head>
<body>
<form method="post" action="<?php echo $PHP_SELF;?>">
First Name:<input type="text" size="12" maxlength="12" name="Fname"><br />
Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br /></form>
<input type="submit" name="submit" id="submit" value="Submit">
<?
if (isset($_POST['submit'])) {
    
    echo "Hello, ".$Fname." ".$Lname.".<br />";

    header('Location:index.html');
}
?>
