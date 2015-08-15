<!DOCTYPE html>
<html lang="ru">
<head>
    <title>SALI!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript" src='/js/jquery-2.1.4.js'></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
</head>
<body>

    <? $this->load->view('main_navbar'); ?>

    <div class="container">

        <div class="row">

            <aside class="col-sm-3 sidebar leftmenu">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-ukr" data-toggle="collapse">Постельное белье ТМ "Драйв" (Украина)</a>
                    </div>
                    <div class="panel-body panel-collapse collapse" id="menu-ukr">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Атлас</a></li>
                            <li><a href="#">Бязь</a></li>
                            <li><a href="#">Бязь-люкс</a></li>
                            <li><a href="#">Сатин</a></li>
                            <li><a href="#">Лен</a></li>
                            <li><a href="#">Детское</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-ind" data-toggle="collapse">Постельное белье ТМ "TerryLux" (Индия)</a>
                    </div>
                    <div class="panel-body panel-collapse collapse" id="menu-ind">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Сатин-жакард</a></li>
                            <li><a href="#">Сатин-страйп</a></li>
                            <li><a href="#">Сатин-люкс</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-pod">Подушки</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-od">Одеяла. Пледы. Покрывала.</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-polot" data-toggle="collapse">Полотенца</a>
                    </div>
                    <div class="panel-body panel-collapse collapse" id="menu-polot">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Банные однотонные</a></li>
                            <li><a href="#">Банные жаккардовые</a></li>
                            <li><a href="#">Кухонные</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-salf">Салфетки. Скатерти.</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#menu-toys">Игрушки "hand-made".</a>
                    </div>
                </div>





            </aside>

            <article class="col-sm-9">
                article
            </article>

        </div>

    </div>

</body>
</html>