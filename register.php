<html>
    <head>
        <style>
            table{
                margin-top:30px;
                border: 1px solid bleck;    
            }
        </style>

    </head>
    <body>
    <center>
        <table>
            <form action="insert.php" method="POST">
                <tr>
                    <td><h2>Registre Form</h2></td>
                </tr>
                <tr>
                    <td>Enter your firstName</td>
                    <td><input type="text" name="firstname" ></td>
                </tr>
                <tr>
                    <td>Enter your lastName</td>
                    <td><input type="text" name="lastname" ></td>
                </tr>
                <tr>
                    <td>Enter your email</td>
                    <td><input type="email" name="email" ></td>
                </tr>
                <tr>
                    <td>Enter your password</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td>Enter your phone</td>
                    <td><input type="phone" name="phone" ></td>
                </tr>
               
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="register">
                    <input type="reset" value="clear"><a href="login.php">Login Here</a>
                </td>
                </tr>
            </form>
        </table>
    </center>
    </body>
</html>