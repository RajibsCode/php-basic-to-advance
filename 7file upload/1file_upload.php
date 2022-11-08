<?php
// set condition
if(isset($_POST['file_submit'])){

    $path = 'uploads/';
    $path = $path . basename($_FILES['file_upload']['name']);
    
    // set filename and destination into move_uploaded_file() fdunction
    move_uploaded_file($_FILES['file_upload']['tmp_name'],$path);

echo "<pre>";
// print submitted files data
print_r($_FILES['file_upload']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <!-- declare enctype for file upload -->
    <form action="" method="post" enctype="multipart/form-data">
        <h3>upload your file now.......</h3>
        <label for="file_upload">file upload : </label>
        <input type="file" name="file_upload" id="">
        <input name="file_submit" type="submit" value="Submit">
    </form>
</body>
</html>