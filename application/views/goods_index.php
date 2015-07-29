<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <h3>Список товаров</h3>

    <a class="btn btn-default" type="button" href="#">Добавить товар</a>

    <table class="table">

        <thead>
            <tr>
                <td>Код</td>
                <td>Категория</td>
                <td>Артикул</td>
                <td>Наименование</td>
                <td>Описание</td>
                <td>Цена</td>
                <td>Действия</td>
            </tr>
        </thead>

        <tbody>

            <? foreach($rows as $row): ?>

                <tr>

                    <td><?=$row['id']?></td>
                    <td><?=$row['category_name']?></td>
                    <td><?=$row['art']?></td>
                    <td><?=$row['title']?></td>
                    <td><?=$row['description']?></td>
                    <td><?=$row['price']?></td>

                </tr>

            <? endforeach ?>

        </tbody>

    </table>

</div>

</body>

</html>
