<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_POST_REQUEST</title>
</head>
<body>

    <form action="" method="post">
        <label for="name">Enter Your Name</label>
        <input type="text" name="name" id="">
        <hr>
        <label for="email">Enter Your Email</label>
        <input type="email" name="email" id="">
        <hr>
        <label for="birth_date">Enter Your Date Of Birth</label>
        <input type="date" name="birth_date" id="">
        <hr>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <div style="display:flex">

    <!-- show GET methods output here -->
        <div style="width:200rem">
            <table>
                <th>GET-Output Show</th>
                <tr>
                    <td>Your Name: </td>
                    <td><?php echo $_GET['name']; ?></td>
                </tr>
                <tr>
                    <td>Your Email: </td>
                    <td><?php echo $_GET['email']; ?></td>
                </tr>
                <tr>
                    <td>Your Birth Date: </td>
                    <td><?php echo $_GET['birth_date']; ?></td>
                </tr>
            </table>
        </div>

    <!-- show POST methods output here -->
        <div style="width:200rem">
            <table>
                <th>POST-Output Show</th>
                <tr>
                    <td>Your Name: </td>
                    <td><?php echo $_POST['name']; ?></td>
                </tr>
                <tr>
                    <td>Your Email: </td>
                    <td><?php echo $_POST['email']; ?></td>
                </tr>
                <tr>
                    <td>Your Birth Date: </td>
                    <td><?php echo $_POST['birth_date']; ?></td>
                </tr>
            </table>
        </div>

    <!-- show REQUEST methods output here -->
        <div style="width:200rem">
            <table>
                <th>REQUEST-Output Show</th>
                <tr>
                    <td>Your Name: </td>
                    <td><?php echo $_REQUEST['name']; ?></td>
                </tr>
                <tr>
                    <td>Your Email: </td>
                    <td><?php echo $_REQUEST['email']; ?></td>
                </tr>
                <tr>
                    <td>Your Birth Date: </td>
                    <td><?php echo $_REQUEST['birth_date']; ?></td>
                </tr>
            </table>
        </div>

    </div>
    
</body>
</html>