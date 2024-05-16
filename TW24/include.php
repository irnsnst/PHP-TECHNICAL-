<!DOCTYPE html>
<html>
<head>
    <title>FUNCTION USING INCLUDE</title> 
    <!-- For CSS Use Bootstrap / File name : include.php -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="content=type" content="text/html"; charset=utf-8"/>
</head>
<body>
<div class="container-md">
    <h1>USING INCLUDE</h1>
    <p>PHP script shows how to use Functions</p>
    <hr>
    <?php
    include "commonFunctin.php";
    //pulls the PHP function from another file
    
    $in_firstname = $_POST['firstname'];
    $in_hourslept = $_POST['hourslept'];
    $in_birthyear = $_POST['birthyear'];
    $rtnmsg = doValidation($in_firstname, $in_hourslept, $in_birthyear);
    if($rtnmsg == '') {
        displayPage($in_firstname, $in_hourslept, $in_birthyear);
    } else {
        echo $rtnmsg;
        echo "<br>Go Back and Try Again!";
    }
    ?>
	<div class="btn1">
        <button class="custom-button" onclick="window.location.href= 'include.html?data=value'">Home</button>
    </div>
</div>
</body>
</html>
