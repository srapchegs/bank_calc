<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>World Bank</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script src="jquery.ui.touch-punch.min.js"></script>
    <script src="script.js" ></script>
</head>
<body>
    <header>
        <div class="info">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="info-phone">
                    <div>
                    </div>
                    <div>
                        <a href="+78001005005">8-800-100-5005</a><span>&nbsp&nbsp&nbsp&nbsp&nbsp</span></br>
                        <a href="+73452522000">+7 (3452) 522-000</a>
                    </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="top-menu-list">
                <li>Кредитные карты</li>
                <li class="selected">Вклады</li>
                <li>Дебетовая карта</li>
                <li>Страхование</li>
                <li>Друзья</li>
                <li>Интернет-банк</li>
            </div>
        </div>
        <div class="breadcrumbs">
            <li>Главная</li>
            <span>–</span>
            <li>Вклады</li>
            <span>–</span>
            <li>Калькулятор</li>
        </div>
    </header>
    <main>
        <div class="calculator">
            <h1>Калькулятор</h1>
            <div>
                <form method="POST" id="ajax_form" action="">
                    <div class="form-calculator">
                        <div class="labels">
                            <label>Дата оформления вклада</label>
                            <label>Сумма вклада</label>
                            <label>Срок вклада</label> 
                            <label>Пополнения вклада</label>
                            <label>Сумма пополнения вклада</label>
                        </div>
                        <div class="inputs">
                            <input name="date" id="datepicker" class="input-block error1" type="text">
                            <input id="first_input" name="first_text" class="input-block error2" type="number" placeholder="100000" value="">
                            <select name="list">
                                <option>1 год</option>
                                <option>2 года</option>
                                <option>3 года</option>
                                <option>4 года</option>
                                <option>5 лет</option>
                            </select>
                            <input id="radio1" name="radio" checked type="radio" value="No"/>&nbspНет<input id="radio2" class="input-inline" value="Yes" name="radio" type="radio"/>&nbspДа
                            <span class="input-span"></span>
                            <input id="second_input" name="second_text" class="input-block error3" type="number" min="1000" max="3000000" type="text" placeholder="100000" readonly="true">
                        </div>
                        <div class="sliders">
                            <div id="slider1"></div>
                            <div class="slider_label"><span>1 тыс. руб.</span></div><div class="slider_label2"><span>3 000 000</span></div>
                            <div class="slider2class">
                                <div id="slider2" class="slider2class"></div>
                                <div class="slider_label"><span>1 тыс. руб</span></div><div class="slider_label2"><span>3 000 000</span></div>
                            </div>
                        </div>
                    </div>
                    <input id="submit" class="submit-button" type="button" value="Рассчитать"><span><span>Результат:</span> <input id="result_form" type="text"></span>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <div class="bottom-menu">
                <li>Кредитные карты</li>
                <li>Вклады</li>
                <li>Дебетовая карта</li>
                <li>Страхование</li>
                <li>Друзья</li>
                <li>Интернет банк</li>
            </div>
        </div>
    </footer>
</body>
</html>