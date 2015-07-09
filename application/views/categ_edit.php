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
            
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'):  ?>

            <?php else: ?>

            <h3>Редактирование категории</h3>

            <form class="sl-categ-form sl-form" method="post" action="categ_edit.php">

                <div class="form-group">
                    <label for="">Код:</label>
                    <input type="text" class="form-control" readonly 
                           id='catId' name="catId" value="<?php echo $id; ?>"/>
                </div>

                <div class="form-group">
                    <label for="">Наименование:</label>
                    <input type="text" class="form-control" id='catNam' 
                           name="catNam" value="<?php echo $nam; ?>"/>
                </div>

                <!-- need to add parent group !!! -->

                <button type="submit" class="btn btn-primary">Сохранить</button>
                <button type="button" class="btn btn-primary">Отмена</button>

            </form>

            <?php endif ?>

        </div>
        
    </body>   
</html>