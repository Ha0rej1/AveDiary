<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/Ave Diary.png">
    <?php require_once "locales/RU-ru.php";?>
</head>
    <body>
        <article class="animated faster" id="login">
            <p id="project-name">Ave Diary</p>
            <form id="login-block" action="">
                <input class="text-input" placeholder="Логин" type="text"> 
                <br>
                <div class="input-container">
                    <input class="text-input" placeholder="Пароль" type="password">
                    <a class="additional-text hover-link" href="">Я не помню пароль</a>
                </div>
                <p class="additional-text">Используя проект вы соглашаетесь с <a class="hover-link" href="">политикой конфиденциальности</a></p>
                <a class="hide" href="index.php"><input class="button-input" type="button" value="Войти"></a>
                <a href="reg.php"><input class="button-input" type="button" value="Регистрация"></a>
                <br>
                <a class="additional-text hover-link" href="">Как пользоваться Ave Diary?</a>
                <br>
                <a class="additional-text hover-link" href="">Ave Diary Lite</a>
            </form>
        <img id="ave-logo" src="img/Ave Team.png" alt="">
        </article>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

$(function () {
    var flag = new Boolean(true); // Защитит от частого нажатия на кнопку

    // Клик
    $('.hide').click(function (e) {
        openUrl($(this));
        e.preventDefault();
    })

    /**
     * Открывает ссылку с задержкой
     * 
     * @param {object} a - Нажатая кнопка
     * @return {boolean}
     */
    function openUrl(a) {
        var delay = 350, // Задержка 0.25 секунд
            uri = a.attr('href'); // URL

        // Проверяем не начата ли загрузка какой-либо ссылки
        if (flag == true) {
            flag = false;

            // Добавляем анимации
            $(".animated").addClass("fadeOutUp");

            // С задержкой открываем URL, возвращая штатный текст кнопке, разрешаем открывать новые ссылки
            setTimeout(function () {
                flag = true;

                // Проверяем открыть ссылку в новом окне или в текущем

                window.location = uri;
                return;

            }, delay);
        }

        return;
    }

});

});
    </script>
</html>