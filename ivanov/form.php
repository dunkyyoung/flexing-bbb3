<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма с капчей</title>
</head>
<body>

    <p>Пожалуйста, введите код, указанный ниже.</p>

    <img src="img/sample.png" alt="CAPTCHA" width="200">

    <p>Это простая форма с изображением-заглушкой капчи. Введите что угодно в поле ниже.</p>

    <form method="post">
        <input type="text" name="captcha" placeholder="Введите код" required>
        <br><br>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>
