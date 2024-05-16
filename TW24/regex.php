<!DOCTYPE html>
<html>
<head>
    <title>REGULAR EXPRESSION</title> 
    <!-- For CSS Use Bootstrap / File name : regex.php -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="content=type" content="text/html"; charset=utf-8"/>
</head>
<body>
<div class="container-md">
    <h1>USING REGEX</h1>
    <p>PHP script shows how to use Functions</p>
    <hr>
    <?php
    //Team List: Mara, Cariza, Veronica, Kim, Allysandra, Somi
    $teamMembers = array();
    $teamMembers[0] = 'Mara';
    $teamMembers[1] = 'Cariza';
    $teamMembers[2] = 'Veronica';
    $teamMembers[3] = 'Kim';
    $teamMembers[4] = 'Allysandra';
    $teamMembers[5] = 'Somi';
    
    $find_name = $_POST['find_name'];
    if(!empty($find_name)){
        echo "<h4>Searching for Team Member names that BEGINS WITH: $find_name</h4>";
        foreach($teamMembers as $member){
            $pattern = '/^'.$find_name.'/i'; //matched beginning of String
            $num_of_matches = preg_match($pattern, $member);
            if($num_of_matches > 0){
                echo "<br/>$num_of_matches Team Members Found: ".$member;
            }
        }
        echo "<h4>Searching for Team Member names that ENDS WITH: $find_name</h4>";
        foreach($teamMembers as $member){
            $pattern = '/'.$find_name.'$/i'; //matched ending String
            $num_of_matches = preg_match($pattern, $member);
            if($num_of_matches > 0){
                echo "<br/>$num_of_matches Team Member Found: ".$member;
            }
        }
    }
    ?>
	<div class="btn1">
        <button class="custom-button" onclick="window.location.href= 'regex.html?data=value'">Home</button>
    </div>



</body>
</html>
