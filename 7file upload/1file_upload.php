<?php
// set condition
if(isset($_POST['file_submit'])){
    // set path where file upload
    $path = 'uploads/';
    $path = $path . basename($_FILES['file_upload']['name']);

    // set which file extensions are allowed
    $allowed_extensions = [
        'jpg',
        'png'
    ];

    // get file extension path info which file will upload
    $file_extension = pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION);

    // check file exist or not then upload
    if (!file_exists($_FILES['file_upload']['tmp_name'])) {
        $alert = [
            'type' => 'danger',
            'msg' => 'file does not exist. please upload your file!'
        ];

     // check file extension are match or not which file upload  
    }elseif (!in_array($file_extension, $allowed_extensions)) {
        $alert = [
            'type' => 'danger',
            'msg' => 'Upload valid image only. png & jpg allowed'
        ]; 
    
    // file size validation
    }elseif ($_FILES['file_upload']['size'] > 2000000) {
        $alert = [
            'type' => 'danger',
            'msg' => 'file size is too large! need smaller than 2 mb'
        ]; 
    
    }
    else{

        // set filename and destination into move_uploaded_file() fdunction
        if(move_uploaded_file($_FILES['file_upload']['tmp_name'],$path)){
            $alert = [
                'type' => 'success',
                'msg' => 'File uploaded succesfully'
            ];
        }else{
            $alert= [
                'type' => 'danger',
                'msg' => 'image not uploaded check code!'
            ];
            
        }
    }
    

    // show the dynamic alert
    if (!empty($alert)) {
        echo '<div class="alert alert-'.$alert['type'].'" role="alert">'
        .$alert['msg'].
        '</div>';
    }

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
    <!-- bootstrap link css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- declare enctype for file upload -->
    <form action="" method="post" enctype="multipart/form-data">
        <h3>upload your file now.......</h3>
        <label for="file_upload">file upload : </label>
        <input type="file" name="file_upload" id="">
        <input name="file_submit" type="submit" value="Submit">
    </form>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>