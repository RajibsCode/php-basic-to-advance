<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES</title>
</head>
<body>

    <!-- enctype attribute must use in <form> tag for file submit -->
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset style="width:200rem">
            <legend>$_FILES</legend>
            <label for="file">File Upload: </label>
            <input type="file" name="file" id="">
            <input type="submit" value="submit">

            <hr>

            <?php
            // for print data which file submitted
                echo "<pre>";
                print_r($_FILES);
            ?>

        </fieldset>
    </form>
    
</body>
</html>