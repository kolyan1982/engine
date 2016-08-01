<?php
//Обработка формы регистрации
if($_POST['submit']){
    echo "Запрос логин...";
}




?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Вход в систему</legend>
        <label>Login:<input type="text" name="login" placeholder="login" required><br></label>
        <label>Password:<input type="password" name="password"><br></label>
        <label><input type="submit" name="submit" value="Войти"></label>
    </fieldset>
</form>


</body>
</html>

