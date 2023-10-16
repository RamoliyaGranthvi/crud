<html>
    <head>
        <style>

        </style>
    </head>
    <body>
     <center>
        <form action="log.php" method="POST"> 
        <table>
            <tr>
                <td colspan="2"><h2>Login Form</h2>
                </td>
            </tr>
            <tr>
                <td>Enter your Name</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Enter your password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                
                <td colspan="2" style="text-align:center; height:50px"><input type="submit" value="login" name="submit">
                <input type="reset" value="clear"></td>
            </tr>
            <tr>
                <td>Don't have an account? <a href="register.php">Sginup Now</a></td>
            </tr>
        </table>
        </form>
     </center>
    </body>
</html>