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
                <? foreach($arcat as $top): ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#menu<?=$top['id']?>" data-toggle="collapse"><?=$top['nam']?></a>
                        </div>

                        <div class="panel-body panel-collapse collapse" id="menu<?=$top['id']?>">
                            <ul class="nav nav-pills nav-stacked">
                                <? foreach($top['child'] as $sub): ?>
                                    <li><a href="#<?=$sub['id']?>"><?=$sub['nam']?></a></li>
                                <? endforeach ?>
                            </ul>
                        </div>

                    </div>

                <? endforeach ?>
            </aside>

            <article class="col-sm-9">

                <div class="col-sm-10 small text-justify">
                    <p>Атласная ткань очень прочная, сохраняет натуральный блеск много лет.
                        Атласная ткань является гипоаллергенным материалом, в нем не заводятся насекомые,
                        например, клещи.
                    </p>

                    <p class="text-muted">Атлас - довольно легкая ткань, отличается высокой упругостью,
                        обладает красивым внешним видом.
                        Ткань обладает значительной растяжимостью, скольжением и сыпучестью. Атлас мягкая и тонкая
                        ткань, которая требует бережного обращения и особого ухода. В состав атласа входит Вискоза,
                        Хлопок и Полиэстер. Вискоза - натуральная ткань, обладающая главными преимуществами натурального
                        шёлка (хорошей гладкостью, блеском, малой сминаемостью). Хлопок - мягкая, теплая, натуральная
                        ткань, которая является идеальной составляющей качественного постельного белья.
                        Полиэстер - минимальное добавление полиэстера необходимо, чтобы эксплуатационные свойства
                        ткани были на высоком потребительском уровне; чтобы ткань не линяла при стирке, не выгорала
                        на солнце, была более износостойкая в использовании.
                    </p>
                </div>

                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-bronza_mini.jpg" class="img-responsive eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Бронзовый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                                <tr>
                                    <td>Полуторный комплект</td>
                                    <td>330 грн</td>
                                </tr>

                                <tr>
                                    <td>Двуспальный комплект</td>
                                    <td>410 грн</td>
                                </tr>

                                <tr>
                                    <td>Еврокомплект</td>
                                    <td>480 грн</td>
                                </tr>

                                <tr>
                                    <td>Семейный комплект</td>
                                    <td>540 грн</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>


                </div>


                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-lilova.jpg" class="eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Лиловый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                            <tr>
                                <td>Полуторный комплект</td>
                                <td>330 грн</td>
                            </tr>

                            <tr>
                                <td>Двуспальный комплект</td>
                                <td>410 грн</td>
                            </tr>

                            <tr>
                                <td>Еврокомплект</td>
                                <td>480 грн</td>
                            </tr>

                            <tr>
                                <td>Семейный комплект</td>
                                <td>540 грн</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-lilova.jpg" class="eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Лиловый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                            <tr>
                                <td>Полуторный комплект</td>
                                <td>330 грн</td>
                            </tr>

                            <tr>
                                <td>Двуспальный комплект</td>
                                <td>410 грн</td>
                            </tr>

                            <tr>
                                <td>Семейный комплект</td>
                                <td>540 грн</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-lilova.jpg" class="eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Лиловый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                            <tr>
                                <td>Полуторный комплект</td>
                                <td>330 грн</td>
                            </tr>

                            <tr>
                                <td>Двуспальный комплект</td>
                                <td>410 грн</td>
                            </tr>

                            <tr>
                                <td>Еврокомплект</td>
                                <td>480 грн</td>
                            </tr>

                            <tr>
                                <td>Семейный комплект</td>
                                <td>540 грн</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-lilova.jpg" class="eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Лиловый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                            <tr>
                                <td>Полуторный комплект</td>
                                <td>330 грн</td>
                            </tr>

                            <tr>
                                <td>Двуспальный комплект</td>
                                <td>410 грн</td>
                            </tr>

                            <tr>
                                <td>Еврокомплект</td>
                                <td>480 грн</td>
                            </tr>

                            <tr>
                                <td>Семейный комплект</td>
                                <td>540 грн</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-5 goods-title">
                    <div class="col-sm-6">
                        <img src="img/atlas-lilova.jpg" class="eskiz"/>
                    </div>
                    <div class="col-sm-6">
                        <h6>Атлас "Лиловый"</h6>
                    </div>

                    <div class="col-sm-12">
                        <table class="table price-table">
                            <thead></thead>

                            <tbody>
                            <tr>
                                <td>Полуторный комплект</td>
                                <td>330 грн</td>
                            </tr>

                            <tr>
                                <td>Двуспальный комплект</td>
                                <td>410 грн</td>
                            </tr>

                            <tr>
                                <td>Еврокомплект</td>
                                <td>480 грн</td>
                            </tr>

                            <tr>
                                <td>Семейный комплект</td>
                                <td>540 грн</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>


            </article>

        </div>

    </div>

</body>
</html>