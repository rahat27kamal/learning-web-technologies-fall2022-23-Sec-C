<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<div  style="background-color:#87CEFA;">
        <form action="pass_change.php" method="post">
            <fieldset>
                <legend>Change Password</legend>
                <table>
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="oldpassword" value=""></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password"name="newpassword" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password"name="confirpassword" value=""></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <a href="admin_page.php">  Go back to home page </a> 
</body>
</html>