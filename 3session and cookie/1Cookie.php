<?php
// setcookie(name,value,expire,path,domain,security);

echo "<h1> Cookie </h1>";

// set cookie
setcookie("students","rajib",time()+4*24*60*60);

//destroy cookie
setcookie("students","",time()-10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

    <fieldset style="width:200rem">
        <legend>Cookie value here</legend>
        <?php
        // show cookie value here
            echo "<h4> student name : ".$_COOKIE['students']."</h4>";
        ?>
    </fieldset>
    
</body>
</html>

