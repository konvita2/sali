<!DOCTYPE html>
<html lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript" src='/js/jquery-2.1.4.js'></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="#">Сали</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Товары</a></li>
                <li><a href="#">Оплата и доставка</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <h3>Список категорий</h3>

    <ul>


    <? foreach($cat_array as $cat0): ?>
        <li>
            <?
                $cat0_id = $cat0['id'];
            ?>
            <a href="categ/edit/<?=$cat0_id?>"><?=$cat0['nam']?></a>
            <a class="btn btn-default btn-xs" type="button">
                <span class="glyphicon glyphicon-plus"></span>
            </a>

            <? if(!empty($cat0['child'])): ?>
            <ul>
                <? foreach($cat0['child'] as $chld): ?>

                    <? $cat2_id = $chld['id']; ?>

                    <a href="categ/edit/<?=$chld['id']?>"><li><?=$chld['nam']?></li></a>
                <? endforeach ?>
            </ul>
            <? endif ?>
        </li>
    <? endforeach ?>
    </ul>

</div>


</body>
</html>
 