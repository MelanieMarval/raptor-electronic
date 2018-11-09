<div class="--bg-login">
    <form method="POST" class="login-container shadow-lg">
        <img src="views/images/login.svg" class="svg-login">
        <input type="text" class="form-field" name="username" placeholder="Usuario">
        <input type="password" class="form-field" name="password" placeholder="Contraseña">
        <input type="submit" class="btn btn-primary --btn-dark-green" value="Aceptar">
    </form>
</div>

<?php
    $login = new LoginController();
    $login -> login();
?>