<?php echo '
<form action="reset.php" method="POST">
E-mail: <input type="text" name="email" size="20" /><br />
Nova Senha: <input type="password" name="password" size="20" /><br />
Confirmar Senha: <input type="password" name="confirmpassword" size="20" /><br />
<input type="hidden" name="q" value="';
if (isset($_GET["q"])) {
    echo $_GET["q"];
}
    echo '" /><input type="submit" name="ResetPasswordForm" value=" Resetar Senhar " />
</form>';
?>
