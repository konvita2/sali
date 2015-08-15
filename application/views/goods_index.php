<!DOCTYPE html>
<html lang="ru">

<?php
    $data['tit'] = 'Товары';
    $this->load->view('main_head', $data);
?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <?php
    $ar = array('class' => 'btn btn-primary');
    echo anchor('admin/index', 'Админка', $ar);
    ?>
    
    <h3>Список товаров</h3> 

    <?php
    $ar = array('class' => 'btn btn-default');
    echo anchor('goods/add', 'Добавить товар', $ar);
    ?>

    <table class="table">

        <thead>
            <tr>
                <th>Код</th>
                <th>Категория</th>
                <th>Артикул</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Действия</th>
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

                    <? $id = $row['id']; ?>

                    <td>
                        <? $href = base_url('index.php/goods/edit/' . $id); ?>
                        <a class="btn btn-default" href="<?=$href?>" title="Редактировать">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        <? $href = base_url('index.php/goods/del/' . $id); ?>
                        <a class="btn btn-default" type="button" href="<?=$href?>" title="Удалить">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>

                </tr>

            <? endforeach ?>

        </tbody>

    </table>

</div>

</body>

</html>
