<html>
    <head>
        <title>Formulario de registro</title>
    </head>

    <body>
        <h1>Formulario de registro</h1>
        <form method="POST" action="" />
            <table>
                <tr>
                    <td>
                        Nombre y apellidos:
                    </td>
                    <td>
                        <input type="name" name="realname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre de usuario:
                    </td>
                    <td>
                        <input type="name" name="nick" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Repetir password:
                    </td>
                    <td>
                        <input type="password" name="rpass" />
                    </td>
                </tr>
            </table>

            <input type="submit" name="submit" value="Registrarme" /> <input type="reset"/>
        </form>  
       <?php
            if (isset($_POST['submit'])){
                require("registro.php");
            }

       ?>
    </body>
</html>