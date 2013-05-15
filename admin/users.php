<?php require_once 'includes/config.php';?>
<?php require_once 'includes/database.php';?>
<?php require_once 'includes/users.php';?>
<html>
    <head>
        <title>Said John | Users</title>
    </head>
    <body>
        <div id='add_user_form'>
            <form name='add_user_form' method='post' action='includes/add_user_process.php'>
                <table> 
                    <caption> Add a New User</caption>
                    <tr>
                        <th>Username</th>
                        <td><input type='text' name='username' value='' /></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type='text' name='password' value='' /></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><input type='text' name='first_name' value='' /></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type='text' name='last_name' value='' /></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type='submit'>Add User</button></td>
                    </tr>
                </table>
            </form>
        </div><!-- add_user_form -->
        <div id='user_list'>
            <table border='1px'>
                <tr>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                </tr>
            </table>
        </div><!-- user_list -->
    </body>
</html>