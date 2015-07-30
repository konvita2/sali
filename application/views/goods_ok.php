<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Успешно выполнено</h3>
        </div>
        <div class="panel-body">
            <p><?=$textinfo?></p>
        </div>
    </div>

    <?

    $ar = array(
        'class' => 'btn btn-primary',
    );
    echo anchor('goods','К списку товаров',$ar);

    ?>

</div>

</body>
</html>
