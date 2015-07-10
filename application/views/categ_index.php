<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <h3>Список категорий</h3>

    <ul>

    <a class="btn btn-default btn-xs" type="button">
        <span class="glyphicon glyphicon-plus"></span>
    </a>

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
 