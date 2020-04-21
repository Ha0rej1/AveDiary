<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="styles/reg.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/Ave Diary.png">
    <?php require_once "locales/RU-ru.php";?>
</head>
    <body>
        <article id="reg">
            <p id="project-name">Ave Account</p>
            <form id="reg-block" action="">
                <input class="text-input" placeholder="Фамилия (Без пробелов)" type="text"> 
                <input class="text-input" placeholder="Имя (Без пробелов)" type="text"> 
                <input class="text-input" placeholder="Отчество (Без пробелов)" type="text"> 
                <input class="text-input" placeholder="Логин" type="text"> 
                <input class="text-input" placeholder="Логин" type="text"> 
                <div class="birthday-container">
                    <p>Дата рождения:</p>
                    
                    <select id="bdDay" name="day"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                    <select id="bdMonth" name="month"><option value="2">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
                    <select id="bdYear" name="year"><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select>   
                </div> 
                <input class="text-input" placeholder="Пароль" type="password">
                <input class="text-input" placeholder="Повторите пароль" type="password">
                <div class="captcha_wrapper">
                        <div class="g-recaptcha" data-sitekey="6Le8A4YUAAAAACCBSHuRxbmoN0Qa-HazBwXCeFVd"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le8A4YUAAAAACCBSHuRxbmoN0Qa-HazBwXCeFVd&amp;co=aHR0cHM6Ly9hdmVkaWFyeS5vbmxpbmU6NDQz&amp;hl=en&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;size=normal&amp;cb=7rx2ct75yyks" width="304" height="78" role="presentation" name="a-vzmd1nw13b3o" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                    </div>
                <input class="button-input" type="button" value="Зарегистрироваться">
                <p class="additional-text">Регистрируясь вы соглашаетесь с <a class="hover-link" href="">политикой конфиденциальности</a>на обработку указанных выше данных</p>
            </form>
        <img id="ave-logo" src="img/Ave Team.png" alt="">
        </article>
    </body>
</html>