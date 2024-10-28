<?php
    include("..\DataSource\database.php")
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
username:<br>
<input type="text" name="username"><br>
password:<br>
<input type="text" name="password"><br>
<input type="submit" name="login" value="login">
</form>
<?php
    if(isset($_POST["login"])){



        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);
    }
?>