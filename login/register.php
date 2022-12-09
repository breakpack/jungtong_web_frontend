<?php
session_start();
$id = $_SESSION['user_id'];
if(isset($id)) {
	echo '<script>alert("Arleady login"); window.close();</script>';
}
else{ 
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="./css/login.css"/>
    </head>
    <body>
        <form action="regiinput.php" method="POST">
			<fieldset>
				<legend align="center"><font>게시판 회원가입</font></legend>
                <table>
                    <tr>
                        <td><font>-id</font></td>
                        <td><input type="text" id="id" name="id" size="20" autocomplete="on" required></td>
                    </tr>
                    <tr>
                        <td><font>-pw</font></td>
                        <td><input type="password" id="pw" name="pw" size="20" autocomplete="on" required></td>
                    </tr>
                    <tr>
                        <td><font>-pw check</font></td>
                        <td><input type="password" id="pwc" name="pwc" size="20" autocomplete="on" required></td>
                    </tr>
                    <tr>
                        <td><font>-name</font></td>
                        <td><input type="text" id="name" name="name" size="20" autocomplete="on" required></td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><button type="submit" id="lo">LOGIN</button></td>
                    </tr>
			    </table>
			</fieldset>
		</form>
    </body>
</html> 
<?php } ?>